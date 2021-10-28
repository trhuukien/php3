@extends('admin.layout.layout')
@section('title', 'Thêm hãng')
@section('route', 'Thêm hãng')

@section('main-content')

<div>
    <center>
        <h3 class="my-3">Thêm hãng máy bay</h3>
    </center>

    <form method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="">Tên hãng</label>
            <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="image" id="" class="form-control">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Địa chỉ</label>
            <input type="text" name="address" id="" class="form-control" value="{{old('address')}}">
            @error('address')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
@endsection