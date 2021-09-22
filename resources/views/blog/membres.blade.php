@extends('layouts.archives')

@section('content')
<div style="height: 20px; background-color: #184158"></div>

<section class="meet-volunteers-one">
    <div class="meet-volunteers-one-bg" style="background-image: url(assets/images/backgrounds/meet-volunteers-one-bg.png)"></div>
    <div class="container">
        <div class="block-title text-center">
            <h4>Nos Membres</h4>
            <!--<h2>Meet Volunteers</h2>-->
        </div>
        <div class="row">
            @foreach ($membres->posts()->take(3)->get() as $post)
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <!--Meet Volunteers One Single-->
                <div class="meet-volunteers-one__single">
                    <div class="meet-volunteers-one__img">
                        <img src="{{ $post->image_url }}" class="img-responsive" alt="">
                    </div>
                    <div class="meet-volunteers-one__content">
                        <div class="meet-volunteers-one__name">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="meet-volunteers-one__social-info">
                                <p style="text-align: center"><a href="{{ route('blog.show', $post->slug) }}">{{ substr($post->excerpt, 0, 40) }}</a></p>
                            <!--
                            <div class="meet-volunteers-one__social-info-box">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection