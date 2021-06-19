@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Gestione Post</h1>

    <div class="row">

        @foreach ($posts as $post)
            
        <div class="col-3">
            <div class="card" style="width: 18rem; text-align: center">
                <div class="card-body">

                  <h5 class="card-title" style=" font-size: 13px" >{{ $post->title }}</h5>

                  <a href="#" class="btn btn-primary" style="font-size: 13px">Look Details
                  </a>

                </div>
              </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
