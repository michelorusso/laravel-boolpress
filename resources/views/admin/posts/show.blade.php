@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $post->title }}</h1>

    <h3>{{ $post->slug }}</h3>

    <p class="card-text">{{ $post->content}}</p>


</div>
@endsection