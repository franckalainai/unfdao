<div class="sidebar__single sidebar__post">
    <h3 class="sidebar__title">Recent News</h3>
    <ul class="sidebar__post-list list-unstyled"> 
        @foreach ($related as $post)
        <li>
            <div class="sidebar__post-image">
                @if ($post->image_url)
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}">   
                @endif
            </div>

            <div class="sidebar__post-content">
                <h3>
                    <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments"></i>2 Comments</a>
                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                </h3>
            </div>
        </li> 
        @endforeach
    </ul>      
</div>