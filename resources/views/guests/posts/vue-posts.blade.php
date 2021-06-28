@extends('layouts.app')

{{-- CDN VUE solo per questa pagina --}}
@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

{{-- Collegamento al js solo per questa pagina --}}
@section('footer-scripts')
    <script src="{{ asset('js/posts.js') }}"></script>
@endsection

@section('content')
    <div class="container">

        <div class="text-right text-info">
            <h2>Vuejs</h2>
        </div>

        <h1>Leggi i tuoi post</h1>
    </div>
@endsection