@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Aggiungi post</h1>

    <section>
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Create form --}}
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>

                <input type="submit" class="btn btn-primary" value="Save">
            </form>
            {{-- End create form --}}
        </div>
    </section>

    


</div>
@endsection
