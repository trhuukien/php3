@extends('admin.layout.layout')
@section('title', 'Sửa hãng')
@section('route', 'Sửa hãng')

@section('main-content')

<div>
    <center>
        <h3 class="my-3">Sửa hãng máy bay</h3>
    </center>
    <form method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="">Tên hãng</label>
            <input type="text" name="name" id="" class="form-control" value="{{old('name', $brand->name)}}">
            @error('name')
            <p>{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="image" id="" class="form-control">
            <br>
            <img src="{{asset('storage/' . $brand->image)}}" alt="" height="80px">
            @error('image')
            <p>{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Địa chỉ</label>
            <input type="text" name="address" id="" class="form-control" value="{{old('address', $brand->address)}}">
            @error('address')
            <p>{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
@endsection