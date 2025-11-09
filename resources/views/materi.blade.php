@extends('layout.master')

@section('konten')

<div class="container py-5">
    {{-- Kategori --}}
    <h4 class="fw-bold mb-4 text-secondary">{{ $materis->Kategori }}</h4>

    {{-- Gambar Utama --}}
    <div class="card border-0 mb-4 shadow-sm rounded-4 overflow-hidden">
        <img src="{{ asset('images/' . $materis->imgMateri) }}" 
            alt="{{ $materis->title }}" 
            class="img-fluid w-100" 
            style="max-height: 350px; object-fit: cover;">
    </div>

    {{-- Judul Materi --}}
    <h2 class="fw-bold mb-3">{{ $materis->title }}</h2>

    {{-- Info Penulis dan Tanggal --}}
    <p class="text-muted mb-4">
        {{ \Carbon\Carbon::parse($materis->date)->format('d F Y') }} | 
        by {{ $materis->writer->nama ?? 'Unknown' }}
    </p>

    {{-- Deskripsi --}}
    <div class="text-secondary fs-5" style="line-height: 1.8;">
        {!! nl2br(e($materis->deskripsi)) !!}
    </div>

    {{-- Tombol Kembali --}}
    <div class="mt-5">
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
            ← Back to Category
        </a>
    </div>
</div>

@endsection
