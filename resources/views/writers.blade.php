@extends('layout.master')

@section('konten')

<div class="container my-5">
    <h2 class="fw-bold text-center mb-5">Our Writers</h2>

    <div class="row justify-content-center text-center">
        @foreach($writers->take(2) as $w)
        <div class="col-md-5 mb-5">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/'.$w->imgWriter) }}" 
                     alt="{{ $w->nama }}" 
                     class="rounded-circle shadow-sm mb-3"
                     width="180" height="180"
                     style="object-fit: cover;">
                <h4 class="fw-bold">{{ $w->nama }}</h4>
                <p class="text-muted fs-5 mb-0">Spesialis {{ $w->spesialis }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
