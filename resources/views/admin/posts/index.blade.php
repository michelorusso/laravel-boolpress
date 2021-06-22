@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Gestione Post</h1>

    <div class="row">

        @foreach ($posts as $post)
            
        <div class="col-4 mt-1">
            <div class="card" style="text-align: center">
                <div class="card-body">

                  <h5 class="card-title" style=" font-size: 13px" >{{ $post->title }}</h5>

                  <a href="{{ route('admin.posts.show', [
                    'post' => $post->id
                  ]) }}" class="btn btn-primary" style="font-size: 13px">Go to post
                  </a>

                  <a href="{{ route('admin.posts.edit', [
                    'post' => $post->id
                  ]) }}" class="btn btn-secondary" style="font-size: 13px">Edit Post
                  </a>

                  <form style="text-align: center" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" class="btn btn-danger" value="Delete" onClick="return confirm('are you sure you want to delete the post?');">
                </form>

                </div>
              </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
