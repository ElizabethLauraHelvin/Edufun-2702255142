@extends('layout.master')

@section('content')


<div class="container border">
    <div class="row">
        <div class="col-12 fw-bold pt-5">
            <h1>{{ $materis->Title }}</h1>
        </div>

        <div class="col-12 ">
            <img src="{{ asset('img/'. $materis->ArticleImage) }}" alt="" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50px;">
        </div>

        <div class="col-12">
            <p class="fs-5 fw-light">Date: {{ $materis->Date }} | By: {{ $materis->writer->Name }}</p>
        </div>

        <div class="col-12 pt-5">
            <p class="fs-4">{{ $materis->BodyText }}</p>
        </div>
    </div>
</div>

@endsection