@extends('admin.layout.layout', ['keyword' => $keyword])
@section('title', 'Hãng')
@section('route', 'Hãng')

@section('main-content')

<div>
    <center>
        <h3 class="my-3">Danh sách hãng máy bay</h3>
    </center>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên hãng</th>
                <th>Hình ảnh</th>
                <th>Số máy bay</th>
                <th>Địa chỉ</th>
                <th>
                    Tác vụ
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($brands as $b)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$b->name}}</td>
                <td>
                    <div style="height: 80px;">
                        <img src="{{asset('storage/' . $b->image)}}" alt="" height="80px">
                    </div>
                </td>
                <td>{{$b->planes->count()}} cái</td>
                <td>{{$b->address}}</td>
                <td>
                    <a href="{{route('brand.edit', ['id' => $b->id])}}">Sửa</a> |
                    <a onclick="return confirm('Bạn có chắc chắn? Toàn bộ máy bay trong hãng sẽ bị xóa theo!')" href="{{route('brand.delete', ['id' => $b->id])}}">Xóa</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $brands->links() }}

    <br>

</div>

@endsection