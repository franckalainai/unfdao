@extends('layouts.actualites')

@section('content')
<div style="height: 20px; background-color: #184158"></div>
<section class="event-page">
    <div class="container">
        <div class="row">
            @foreach($actualites->posts()->take(100)->get()  as $post)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Event Page Single-->
                
                <div class="event-page__single">
                    <div class="event-page__img-box">
                        @if ($post->image_url)
                                <div class="event-page__img">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                    <img src="{{ $post->image_url }}" alt="">
                                </div>
                            @endif
                        <div class="event-page__date">
                            <p>23 <br> Dec</p>
                        </div>
                    </div>
                    <div class="event-page__content">
                        <h3 class="event-page__title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
                        <ul class="event-page__meta-box list-unstyled">
                            <li><i class="far fa-file"></i>{{ substr($post->excerpt, 0, 100) }}</li>
                        </ul>
                        <a href="{{ route('blog.show', $post->slug) }}" class="thm-btn event-page__btn">Lire la suite...</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        <div class="text-center more-post__btn">
            <a href="#" class="thm-btn">Load More</a>
        </div><!-- /.text-center -->
    </div>
</section>

@endsection