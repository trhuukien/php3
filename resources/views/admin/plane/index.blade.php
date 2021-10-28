@extends('admin.layout.layout', ['keyword' => $keyword])
@section('title', 'Máy bay')
@section('route', 'Máy bay')
@section('main-content')

<div class="">
    <center>
        <h3 class="my-3">Danh sách máy bay</h3>
    </center>

    <form class="row">
        <div class="col-4">
            <input @isset($keyword) value="{{$keyword}}" @endisset type="text" name="keyword" id="" class="form-control" placeholder="Tìm kiếm tên máy bay...">
        </div>
        <div class="col-3">
            <select name="brand_id" id="" class="form-control">
                <option value="">Hãng</option>
                @foreach($brands as $b)
                <option @isset($brand_id) @if($brand_id==$b->id) selected @endif @endisset value="{{$b->id}}">{{$b->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3">
            <select name="order_by" id="" class="form-control">
                <option value="">Sắp xếp</option>
                @foreach(config('common.plane_order_by') as $key => $val)
                <option @isset($order_by) @if($order_by==$key) selected @endif @endisset value="{{$key}}">{{$val}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2 text-right">
            <button class="btn btn-success btn-lg" type="submit">Tìm kiếm</button>
        </div>
    </form>
    <br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên máy bay</th>
                <th>Hãng</th>
                <th>Hình ảnh</th>
                <th>Động cơ</th>
                <th>Chỗ ngồi</th>
                <th>Chiều dài</th>
                <th>Sải cánh</th>
                <th>Tốc độ</th>
                <th>
                    Tác vụ
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($planes as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->brand->name}}</td>
                <td>
                    <div style="width: 150px;">
                        <img src="{{asset('storage/' . $p->image)}}" alt="" width="150px">
                    </div>
                </td>
                <td>{{$p->engine}}</td>
                <td>{{$p->slot}}</td>
                <td>{{$p->length}} m</td>
                <td>{{$p->wingspan}} m</td>
                <td>{{$p->cruisespeed}} km/h</td>
                <td>
                    <a href="{{route('plane.edit', ['id' => $p->id])}}">Sửa</a> |
                    <a onclick="return(confirm('Bạn có chắc chắn muốn xóa?'))" href="{{route('plane.delete', ['id' => $p->id])}}">Xóa</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $planes->links() }}

    <br>

</div>

@endsection