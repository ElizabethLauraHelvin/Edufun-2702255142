@extends('layout.master')

@section('konten')

<div class="row">
    <div class="col-12">
        <img src="{{ asset('img/homepage1.jpg') }}" alt="">
    </div>
</div>

<div class="container fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @forelse($materis as $materi)
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm rounded-4 p-3" style="background-color: #f8fafc;">
                            <img src="{{ asset('img/' . $materi->imgMateri) }}" 
                                alt="{{ $materi->title }}" 
                                class="img-fluid rounded-4 mb-3" 
                                style="height: 180px; width: 100%; object-fit: cover;">
                            <h5 class="fw-bold mb-1">{{ $materi->title }}</h5>
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($materi->date)->format('d M Y') }} |
                                By Writer #{{ $materi->writer_id }}
                            </small>
                            <p class="mt-2 text-secondary">
                                {{ Str::limit($materi->deskripsi, 120, '...') }}
                            </p>
                            <a href="{{ route('materi.show', $materi->id) }}" class="btn btn-dark rounded-pill px-4 py-1">
                                Read more...
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-muted text-center">Belum ada materi untuk ditampilkan.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

   

@endsection
