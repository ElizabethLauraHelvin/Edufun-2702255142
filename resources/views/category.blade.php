@extends('layout.master')

@section('konten')

<div class="container py-5">
    <h2 class="fw-bold mb-5">{{ $kategori }}</h2>

    @forelse($materis as $materi)
        <div class="card mb-4 border-0 shadow-sm rounded-4 p-3" style="background-color: #f8fafc;">
            <div class="row g-3 align-items-center">
                {{-- Gambar Materi --}}
                <div class="col-md-4">
                    <img src="{{ asset('img/'. $materi->imgMateri) }}" 
                         alt="{{ $materi->title }}" 
                         class="img-fluid rounded-4" 
                         style="height: 180px; width: 100%; object-fit: cover;">
                </div>

                {{-- Konten Materi --}}
                <div class="col-md-8">
                    <h5 class="fw-bold mb-1">{{ $materi->title }}</h5>
                    <small class="text-muted">
                        {{ \Carbon\Carbon::parse($materi->date)->format('d M Y') }} |
                        By Writer #{{ $materi->writer_id }}
                    </small>
                    <p class="mt-2 text-secondary">
                        {{ Str::limit($materi->deskripsi, 160, '...') }}
                    </p>
                    <a href="{{ route('materi') }}" class="btn btn-dark rounded-pill px-4 py-1">read more...</a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">Belum ada materi dalam kategori ini.</p>
    @endforelse
</div>

@endsection
