@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Gestione Post</h1>

    <div class="row">

        @foreach ($posts as $post)
            
        <div class="col-4">
            <div class="card" style="text-align: center">
                <div class="card-body">

                  <h5 class="card-title" style=" font-size: 13px" >{{ $post->title }} Gestione</h5>

                  <a href="{{ route('admin.posts.show', [
                    'post' => $post->id
                  ]) }}" class="btn btn-primary" style="font-size: 13px">Go to post
                  </a>

                  <a href="#" class="btn btn-secondary" style="font-size: 13px">Edit Post
                  </a>



                </div>
              </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
