@extends('frontend.template')
@section('content')
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="overview-img text-center img-hover_effect">
                    <a href="#">
                        <img class="img-full" src="{{ \Helper::logo_header() }}" alt="{{ \Helper::logo_header() }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                <div class="overview-content">
                    <h2>Chào mừng bạn đến với <span>Store Mobile</span></h2>
                    <p class="short_desc">Mô tả công ty </p>
                    <p class="short_desc">Nội dung: đang phát triển</p>
                    <div class="kenne-about-us_btn-area">
                        <a class="about-us_btn" href="{{ route('home') }}">Xem store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 20px"></div>
@endsection