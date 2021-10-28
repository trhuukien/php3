<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaneRequest;
use App\Models\Brand;
use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function index(Request $request)
    {
        $page_size = config('common.default_page_size');
        $keyword = $request->keyword;
        $brand_id = $request->brand_id;
        $order_by = $request->order_by;
        $sql = Plane::where('name', 'like', "%" . $request->keyword . "%");
        if ($request->has('brand_id') && $request->brand_id > 0) {
            $sql->where('brand_id', $request->brand_id);
        }
        if ($request->has('order_by') && $request->order_by > 0) {
            if ($request->order_by == 1) {
                $sql->orderBy('name');
            } else if ($request->order_by == 2) {
                $sql->orderByDesc('name');
            } else if ($request->order_by == 3) {
                $sql->orderBy('slot');
            } else if ($request->order_by == 4) {
                $sql->orderByDesc('slot');
            } else if ($request->order_by == 5) {
                $sql->orderBy('length');
            } else if ($request->order_by == 6) {
                $sql->orderByDesc('length');
            } else if ($request->order_by == 7) {
                $sql->orderBy('wingspan');
            } else if ($request->order_by == 8) {
                $sql->orderByDesc('wingspan');
            } else if ($request->order_by == 9) {
                $sql->orderBy('cruisespeed');
            } else if ($request->order_by == 10) {
                $sql->orderByDesc('cruisespeed');
            }
        }

        $planes = $sql->orderByDesc('id')->paginate($page_size);
        //appends: thêm phần tử vào $planes->appends(['hi' => 2]);
        //except: chỉ định loại bỏ phần tử nào khi hiển thị

        $planes->appends($request->except('page'));

        $brands = Brand::all();
        $planes->load('brand');

        return view('admin.plane.index', compact('planes', 'page_size', 'brands', 'keyword', 'brand_id', 'order_by'));
    }

    public function add()
    {
        $brands = Brand::all();
        return view('admin.plane.add', compact('brands'));
    }

    public function saveAdd(PlaneRequest $req)
    {
        $model = new Plane();

        $model->fill($req->all());

        if ($req->hasFile('image')) {
            $newFileName = uniqid() . '-' . $req->image->getClientOriginalName();
            $path = $req->image->storeAs('public/uploads/planes', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }

        $model->save();

        return redirect(route('plane.index'));
    }

    public function edit($id)
    {
        $brands = Brand::all();
        $plane = Plane::find($id);
        if (!$plane) {
            return redirect()->back();
        }
        return view('admin.plane.edit', compact('plane', 'brands'));
    }

    public function saveEdit(PlaneRequest $req, $id)
    {
        $plane = Plane::find($id);

        if (!$plane) {
            return redirect()->back();
        }
        $plane->fill($req->all());

        if ($req->hasFile('image')) {
            $newFileName = uniqid() . '-' . $req->image->getClientOriginalName();
            $path = $req->image->storeAs('public/uploads/planes', $newFileName);
            $plane->image = str_replace('public/', '', $path);
        }

        $plane->save();

        return redirect(route('plane.index'));
    }

    public function delete($id)
    {
        Plane::destroy($id);
        return redirect()->back();
    }
}
