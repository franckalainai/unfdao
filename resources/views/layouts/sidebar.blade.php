<div class="sidebar__single sidebar__category">
    <h3 class="sidebar__title">Archives</h3>
    <ul class="sidebar__category-list list-unstyled">
        @foreach($archives->take(5) as $archive)
        <li><a href="{{ route('archives', ['month' => $archive->month, 'year' => $archive->year]) }}">{{ $archive->post_count }} Article(s)> {{ month_name($archive->month) . " " . $archive->year }} <span class="fa fa-angle-right"></span></a></li>
        @endforeach
    </ul>
</div>