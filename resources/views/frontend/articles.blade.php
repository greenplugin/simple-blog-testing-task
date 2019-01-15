@foreach($articles as $article)
    <div class="uk-card uk-card-default uk-margin-bottom">
        <div class="uk-card-header">
            <h3 class="uk-card-title">
                <a href="{{route('frontend.article', ['category_slug' => $article->category->slug, 'article' => $article])}}">{{$article->title}}</a>
            </h3>
        </div>
        <div class="uk-card-body">
            @markdown($article->getTruncatedContent())
        </div>
        <div class="uk-card-footer">
            <a href="{{route('frontend.article', ['category_slug' => $article->category->slug, 'article'=> $article])}}"
               class="uk-button uk-button-default uk-align-right">More</a>
        </div>
    </div>
@endforeach