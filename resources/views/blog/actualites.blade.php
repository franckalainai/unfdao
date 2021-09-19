@extends('layouts.archives')

@section('content')

<section class="event-page">
    <div class="container">
        <div class="row">
        @foreach($actualites->posts()->orderBy('created_at', 'desc')->take(50)->get() as $post)
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
                            <p><time> {{ $post->date }}</time></p>
                        </div>
                    </div>
                    <div class="event-page__content">
                        <h3 class="event-page__title"><a href="{{ route('blog.show', $post->slug) }}">{{ substr($post->title, 0 , 100)  }}</a></h3>
                        <ul class="event-page__meta-box list-unstyled">
                            <li><i class="far fa-clock"></i>{{ substr($post->excerpt, 0 , 100) }}</li>
                            <!--<li><i class="far fa-map"></i>66 broklyn Street, New York</li>-->
                        </ul>
                        <a href="{{ route('blog.show', $post->slug) }}" class="thm-btn event-page__btn">Lire la suite...</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        
        <div class="text-center more-post__btn">
        {{$posts->links()}}
        </div><!-- /.text-center -->
    </div>
</section>

@endsection