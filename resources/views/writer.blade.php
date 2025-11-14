@extends('layout.master')

@section(section: 'content')

<div class="container-fluid w-75 pt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="fs-1 fw-bold text-start">Our Writers</h2>
        </div>
    </div>

    <div class="row justify-content-center text-center mt-5">
    @foreach($writers as $w)
       <div class="col-md-4">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/'.$w->ProfilePicture) }}" 
                    alt="{{ $w->Name }}" 
                    class="rounded-circle shadow-sm mb-3"
                    width="180" height="180"
                    style="object-fit: cover;">
                <a class="fs-4 fw-bold text-dark text-decoration-none" href="{{ route('materiWriter', $w->id ) }}">{{ $w->Name }}</a>
                <p class="text-muted fs-5 mb-0">Spesialis {{ $w->Spesialis }}</p>
            </div>
        </div>
    @endforeach

    </div>
</div>

@endsection