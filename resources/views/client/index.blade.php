@extends('client.layout.layout')

@section('main-content')

<div class="page-title-area title-img-one">
    <div class="title-shape">
        <img src="{{asset('theme/client')}}/assets/images/page-title/title-shape.jpg" alt="Title">
        <img src="{{asset('theme/client')}}/assets/images/banner/banner-shape2.png" alt="Title">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Review</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="events-area-three pt-100 pb-70">
    <div class="events-shape">
        <img src="{{asset('theme/client')}}/assets/images/donate-shape2.png" alt="Shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="events-top">
                    <div class="events-heading">
                        <h2>Máy bay</h2>
                    </div>
                    @foreach($planes as $p)
                    <div class="events-item-two">
                        <ul class="main-divide align-items-center">
                            <li>
                                <img src="{{asset('storage/' . $p->image)}}" alt="Events">
                            </li>
                            <li>
                                <h3>
                                    <a href="event-details.html">{{$p->name}}</a>
                                </h3>
                                <ul class="inner-divide">
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        <span>{{$p->created_at}}</span>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a href="#">{{$p->brand->address}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="common-btn default" href="{{route('detail', ['id' => $p->name])}}">
                                    Chi tiết
                                </a>
                                <a class="common-btn" href="{{route('brand', ['id' => $p->brand->name])}}">
                                    {{$p->brand->name}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="events-item">
                    <img src="{{asset('theme/client')}}/assets/images/events/events-main2.jpg" alt="Events">
                    <div class="bottom">
                        <h3>
                            <a href="event-details.html">Become A Proud Volunteer</a>
                        </h3>
                        <a class="common-btn" href="#">
                            Join Now
                            <i class="icofont-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection