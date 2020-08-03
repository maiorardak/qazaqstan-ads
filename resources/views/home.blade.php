@extends('layouts.app')
@section('content')
    {{--<div class="gallery" id="gallery">--}}

    {{--@foreach($adverts as $advert)--}}
    {{--<div class="pics animation all 2" style="margin-bottom:3px;">--}}
    {{--<a href="{{$advert->link}}">--}}
    {{--<img class="img-fluid"--}}
    {{--src="{{asset('upload/'.$advert->file_hash)}}"--}}
    {{--alt="{{$advert->title}}">--}}
    {{--</a>--}}

    {{--</div>--}}

    {{--@endforeach--}}

    {{--</div>--}}

    <hr>
    <section id="photos">
        @foreach($adverts as $advert)

            <a href="{{$advert->link}}">
                <img class="img-fluid"
                     style="border:1px solid #fff;"
                     src="{{asset('upload/'.$advert->file_hash)}}"
                     alt="{{$advert->title}}">
            </a>
        @endforeach
    </section>
    @endsection
