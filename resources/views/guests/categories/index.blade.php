@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Le nostre categorie</h1>

    <div class="row">

        @foreach ($categories as $category)
            
        <div class="col-4">
            <div class="card" style="width: 18rem; text-align: center">
                <div class="card-body">

                  <h5 class="card-title" style=" font-size: 13px" >{{ $category->name }}</h5>

                  <a href="{{ route('category-page', ['slug' => $category->slug]) }}" class="btn btn-primary" style="font-size: 13px">Look Post for Category
                  </a>

                </div>
              </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
