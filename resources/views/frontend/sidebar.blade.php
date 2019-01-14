@foreach ($categories as $category)
    @if($category->slug === $category_slug)
        <li class="uk-active">
            <a href="{{route('frontend.category', ['slug' => $category->slug])}}">{{$category->title}}</a>
        </li>
    @else
        <li><a href="{{route('frontend.category', ['slug' => $category->slug])}}">{{$category->title}}</a></li>
    @endif
@endforeach