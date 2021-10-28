<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $req)
    {
        $page_size = config('common.default_page_size');
        $keyword =  $req->keyword;
        $sql = Brand::where('name', 'like', "%" . $req->keyword . "%");

        $brands = $sql->orderByDesc('id')->paginate($page_size);
        $brands->appends($req->except('page'));
        $brands->load('planes');

        return view('admin.brand.index', compact('brands', 'keyword'));
    }

    public function add()
    {
        return view('admin.brand.add');
    }

    public function saveAdd(BrandRequest $req)
    {
        $model = new Brand();

        $model->fill($req->all());

        if ($req->hasFile('image')) {
            $newFileName = uniqid() . '-' . $req->image->getClientOriginalName();
            $path = $req->image->storeAs('public/uploads/brands', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }

        $model->save();

        return redirect(route('brand.index'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->back();
        }
        return view('admin.brand.edit', compact('brand'));
    }

    public function saveEdit(BrandRequest $req, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back();
        }
        $brand->fill($req->all());

        if ($req->hasFile('image')) {
            $newFileName = uniqid() . '-' . $req->image->getClientOriginalName();
            $path = $req->image->storeAs('public/uploads/brands', $newFileName);
            $brand->image = str_replace('public/', '', $path);
        }

        $brand->save();

        return redirect(route('brand.index'));
    }

    public function delete($id)
    {
        Brand::destroy($id);
        return redirect()->back();
    }
}
