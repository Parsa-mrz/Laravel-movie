<ul class="main-category-menu">
    @foreach($categories as $category)
    <li class="color-1"><a href="{{route('categories.videos.index', $category->slug)}}">{{$category->name}}</a></li>
    @endforeach

</ul>