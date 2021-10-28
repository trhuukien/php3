@extends('client.layout.layout')

@section('main-content')

<div class="event-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="details-img">
                    <img src="{{asset('storage/' . $plane->image)}}" alt="Event">
                    <h2>{{$plane->name}}</h2>
                    <p>{{$plane->detail}}</p>
                    <ul>
                        <li>Cam kết 100% uy tín</li>
                        <br>
                        <li>Trao trọn niềm tin</li>
                        <br>
                        <li>Hoàn thành chuyến bay 1 cách an toàn</li>
                        <br>
                        <li>Xem thêm thông tin về các hãng</li>
                        <br>
                        <li>Review máy bay toàn cầu</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="common-details-content">
                    <h3>Thông số</h3>
                    <ul>
                        <li>
                            Hãng sản xuất:
                            <a href="#">{{$plane->brand->name}}</a>
                        </li>
                        <li>
                            Loại động cơ:
                            <a href="#">{{$plane->engine}}</a>
                        </li>
                        <li>
                            Chỗ ngồi:
                            <span>{{$plane->slot}}</span>
                        </li>
                        <li>
                            Chiều dài:
                            <span>{{$plane->length}} m</span>
                        </li>
                        <li>
                            Sải cánh:
                            <span>{{$plane->wingspan}} m</span>
                        </li>
                        <li>
                            Tốc độ hành trình:
                            <span>{{$plane->cruisespeed}} km/h</span>
                        </li>
                        <li>
                            Website:
                            <a href="#">www.kiz.com</a>
                        </li>
                    </ul>
                </div>
                <div class="details-recent">
                    @foreach($planes as $p)
                    <div class="events-inner">
                        <ul class="align-items-center main-wrap">
                            <li>
                                <a href="event-details.html">
                                    <img src="{{asset('storage/' . $p->image)}}" alt="May-bay">
                                </a>
                            </li>
                            <li>
                                <ul class="align-items-center link-wrap">
                                    <li>
                                        <span>PL {{$p->id}}</span>
                                    </li>
                                    <li>
                                        <h3>
                                            <a href="{{route('detail', ['id' => $p->name])}}">{{$p->name}}</a>
                                        </h3>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection