@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $post->title }}</h1>

    @if ($post_category)
        <h4>Categoria: {{ $post_category->name }}</h4>
    @endif
    

    <p class="card-text">{{ $post->content }}</p>


</div>
@endsection
