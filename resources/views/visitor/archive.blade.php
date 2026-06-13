@extends('layouts.visitor')

@section('title', 'Arsip Lengkap Artikel')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb m-0" style="font-size: 13px;">
        <li class="breadcrumb-item">
            <a href="{{ route('visitor.home') }}" class="text-decoration-none fw-bold" style="color: #2e7d32;">Beranda</a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">Semua Artikel</li>
    </ol>
</nav>

<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 12px; background: #ffffff;">
            <h5 class="fw-bold mb-3" style="color: #333333;">Arsip Seluruh Artikel</h5>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                    <thead style="background-color: #fafafa;">
                        <tr class="text-secondary text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">
                            <th style="width: 45%; padding: 12px;">Judul Artikel</th>
                            <th style="padding: 12px;">Kategori</th>
                            <th style="padding: 12px;">Penulis</th>
                            <th class="text-center" style="padding: 12px; width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13.5px;">
                        @foreach($articles as $item)
                        <tr>
                            <td class="fw-bold text-dark" style="padding: 12px;">{{ $item->judul }}</td>
                            <td style="padding: 12px; color: #495057;">{{ $item->kategori->nama_kategori }}</td>
                            <td style="padding: 12px; color: #495057;">{{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }}</td>
                            <td class="text-center" style="padding: 12px;">
                                <a href="{{ route('visitor.article.show', $item->id) }}" class="btn btn-sm rounded-pill text-white px-3" style="background-color: #2e7d32; font-size: 12px;">
                                    Baca Artikel →
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($articles->hasPages())
                <div class="mt-4 d-flex justify-content-center">
                    {!! $articles->links('pagination::bootstrap-5') !!}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection