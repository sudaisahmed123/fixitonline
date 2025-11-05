@extends('layouts.headerFooter')
@section('content')
        <section class="services-section-four">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two centered">
                    <h2>Best HelperMan Services</h2>
                    <div class="title"><span class="left-separate"></span> What We Do For You <span class="right-separate"></span></div>
                    <div class="text">Helperman is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home <br> improvement and repair, providing virtually any home repair.</div>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">

@foreach($service as $se)
                    <!-- Services Block Five -->
                    <div class="services-block-five">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ $se->link }}"><img style="width: 100%;height:270px" src="{{ asset('serviceimages/'.$se->image) }}" alt="" /></a>
                                <a href="{{ $se->link }}" class="read-more">Read More</a>
                            </div>
                            <div class="lower-content">
                                <div style="border-radius:10px" class="icon "><img src="assets/icon/tap.webp" alt=""></div>
                                <h3><a href="{{ $se->link }}">{{ $se->name }}</h3>
                                <div class="text">{{ $se->des }}</div>
                            </div>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
        </section>
@endsection