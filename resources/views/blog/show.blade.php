@extends('layouts.show')

@section('content')
<!--
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>News Details</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>News Details</li>
            </ul>
        </div>
    </div>
</section>
Page Header End-->
<div style="height: 20px; background-color: #184158"></div>
<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        @if ($post->image_url)
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">                        
                        @endif
                        <div class="news-details__date-box">
                            <p><time> {{ $post->date }}</time></p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <ul class="list-unstyled news-details__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="news-details__title">{{ $post->title }}</h3>
                        <p class="news-details__text-one" style="text-align: justify">{!! $post->body_html !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                       <h3 class="sidebar__title clr-white">Search</h3>
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent News</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments"></i>2 Comments</a>
                                        <a href="news-details.html">Help Children Rise out of Poverty</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments"></i>2 Comments</a>
                                        <a href="news-details.html">Help Children Rise out of Poverty</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments"></i>2 Comments</a>
                                        <a href="news-details.html">Help Children Rise out of Poverty</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Archives</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach($archives as $archive)

                            <li><a href="{{ route('blog', ['month' => $archive->month, 'year' => $archive->year]) }}">{{ $archive->post_count }} Article(s) - {{ month_name($archive->month) . " " . $archive->year }} <span class="fa fa-angle-right"></span></a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
