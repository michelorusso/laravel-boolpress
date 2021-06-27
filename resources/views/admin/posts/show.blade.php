@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $post->title }}</h1>

    @if ($post_category)
        <h4>Categoria: {{ $post_category->name }}</h4>
    @endif

    <div class="mt-3 mb-3">
        <b>Tag:</b>
        @foreach ($post_tags as $tag)
            {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
        @endforeach
    </div>
    


    <h3>{{ $post->slug }}</h3>

    <p class="card-text">{{ $post->content}}</p>

    <a href="{{ route('admin.posts.edit', [
        'post' => $post->id
        ]) }}" class="btn btn-success" style="font-size: 13px">Edit Post
    </a>


</div>
@endsection