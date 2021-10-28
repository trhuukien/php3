<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Plane;
use App\Models\User;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $planes = Plane::all();
        $brands = Brand::all();
        $planes->load('brand');
        $brands->load('planes');
        return view('client.index', compact('planes', 'brands'));
    }

    public function brand($slug)
    {
        $brands = Brand::all();
        $brands->load('planes');

        $id = Brand::where('name', 'like', $slug)->first()->id;

        $planes = Plane::where('brand_id', $id)->get();
        $planes->load('brand');

        return view('client.index', compact('planes', 'brands'));
    }

    public function detail($slug)
    {
        $brands = Brand::all();
        $plane = Plane::where('name', 'like', $slug)->first();

        if (!$plane) {
            return redirect()->back();
        };

        $planes = Plane::where('brand_id', $plane->brand_id)->where('id', '!=', $plane->id)->get();
        $plane->load('brand');
        return view('client.detail', compact('plane', 'planes', 'brands'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $req)
    {
        $req->validate(
            [
                'email' => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) {
                        if (!strpos($value, "@gmail.com")) {
                            $fail("$attribute phải có đuôi @gmail.com");
                        }
                    }
                ],
                'password' => "required"
            ],
            [
                'email.required' => 'Hãy nhập email!',
                'email.email' => 'Sai định dạng email!',
                'password.required' => 'Hãy nhập mật khẩu!'
            ]
        );

        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect(route('brand.index'));
        } else {
            return redirect()->back()->with('msg', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function sendMail(Request $req)
    {
        $find = User::where('email', $req->email)->first();
        if (!$find) {
            return redirect()->back()->with('msg', 'Email không tồn tại!');
        }

        if ($req->code == $find->code) {
            $find->password = Hash::make($req->password);
            $random = rand(100000, 999999);
            $find->code = $random;
            $find->save();
            return redirect(route('login'))->with('msg', 'Mật khẩu đã được thay đổi thành: ' . $req->password);
            die;
        }


        if ($req->code && $req->code != $find->code) {
            return redirect()->back()->with('msg', 'Mã xác nhận không chính xác!')->with('email', $req->email);
        }

        $random = rand(100000, 999999);
        $find->code = $random;
        $find->save();

        $data = [
            'name' => $find->name,
            'email' => $find->email,
            'code' => $random
        ];

        Mail::send('mail', $data, function ($message) use ($data) {
            $message->from('kientrantc@gmail.com', 'Admin Cork');
            $message->to($data['email'], 'Member');
            $message->subject('Reset Password');
        });

        return redirect()->back()->with('msg', 'Đã gửi mã xác nhận tới email!')->with('email', $req->email);
    }
}
