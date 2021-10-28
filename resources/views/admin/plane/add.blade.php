@extends('admin.layout.layout')
@section('title', 'Thêm mới máy bay')
@section('route', 'Thêm máy bay')
@section('main-content')
<div class="">
    <center>
        <h3 class="my-3">Thêm mới sản phẩm</h3>
    </center>
    <form method="POST" enctype="multipart/form-data" class="container" novalidate>
        @csrf
        <div>
            <label for="">Tên máy bay</label>
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
            <label for="">Hãng</label>
            <select name="brand_id" id="" class="form-control">
                @foreach($brands as $b)
                <option @if($b->id == old('brand_id'))
                    selected
                    @endif value="{{$b->id}}">{{$b->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="">Động cơ máy bay</label>
            <input type="text" name="engine" id="" class="form-control" value="{{old('engine')}}">
            @error('engine')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Chỗ ngồi tối đa</label>
            <input type="number" name="slot" id="" class="form-control" value="{{old('slot')}}">
            @error('slot')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Chiều dài</label>
            <input type="number" name="length" id="" class="form-control" value="{{old('length')}}">
            @error('length')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Sải cánh</label>
            <input type="number" name="wingspan" id="" class="form-control" value="{{old('wingspan')}}">
            @error('wingspan')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Tốc độ</label>
            <input type="number" name="cruisespeed" id="" class="form-control" value="{{old('cruisespeed')}}">
            @error('cruisespeed')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Mô tả ngắn</label>
            <textarea name="detail" id="" class="form-control" rows="5">{{old('detail')}}</textarea>
            @error('detail')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success my-3">Submit</button>
    </form>


</div>
@endsection