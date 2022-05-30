@extends('structure')


@section('content')

<div class="jumbotron">
    <h3 class="display-5 text-center">{{ $article->title}}</h3>
    <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('articles')}}">
            <i class="fas fa-arrow-left"></i>  Retour
        </a>
    </div>
    <h5 class="text-center my-1 pt-1">{{ $article->subtitle}}</h5>
    <div class="d-flex justify-content-center mb-3">
        <span class="badge bg-info">{{ $article->category->label }}</span>
    </div>
</div>
<div class="container">
    <p class="text-center">
        {!! $article->content !!}
    </p>
</div>
    
@endsection