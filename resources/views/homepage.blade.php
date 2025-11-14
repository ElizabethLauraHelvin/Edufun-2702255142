@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('img/freepik-dj-leaderboard-banner-20251112124726pU4f.png') }}" alt="" style="border-radius: 50px; width: 100%; height: 100%">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($materis as $m)
        <div class="col-12 pt-5">
            <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('img/'.$m->ArticleImage) }}" class="img-fluid rounded" width="500" height="1000">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-2">{{ $m->Title }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $m->Date }} | {{ $m->Writer->Name }}</small></p>
                    <p class="card-text fs-4 text-truncate-3">{{ $m->BodyText }}</p>

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-dark w-25 rounded-pill" href="{{ route('materiContent', $m->id) }}">
                            Read More
                        </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection