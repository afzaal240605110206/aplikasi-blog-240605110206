@extends('layouts.visitor')

@section('title', 'Beranda - Blog Kami')

@section('content')
<div class="row">
    <div class="col-lg-8 col-12">
        <h5 class="mb-4 text-secondary fw-normal">
            {{ $activeCategory ? 'Kategori: ' . $activeCategory->nama_kategori : '5 Artikel Terbaru' }}
        </h5>

        @if($articles->isEmpty())
            <div class="card p-5 text-center text-muted border-0 shadow-sm mb-4" style="border-radius: 12px; background: #ffffff;">
                Belum ada artikel dalam kategori ini.
            </div>
        @endif

        @foreach($articles as $item)
            <div class="card mb-4 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden; background: #ffffff;">
                <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="card-img-top w-100" style="height: 260px; object-fit: cover;" alt="Gambar Unggulan">
                
                <div class="card-body p-4">
                    <span class="badge rounded-pill mb-2" style="background-color: #e3f2fd; color: #0d6efd; padding: 6px 12px; font-size: 11px;">
                        {{ $item->kategori->nama_kategori }}
                    </span>
                    
                    <h4 class="fw-bold mb-2">
                        <a href="{{ route('visitor.article.show', $item->id) }}" class="text-decoration-none" style="color: #212529;">{{ $item->judul }}</a>
                    </h4>
                    
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('storage/foto/' . $item->penulis->foto) }}" class="rounded-circle border" style="width: 24px; height: 24px; object-fit: cover;" alt="Penulis">
                        <p class="text-muted m-0" style="font-size: 12px;">
                            Oleh <span class="fw-medium text-dark">{{ $item->penulis->nama_depan }}</span> • {{ $item->hari_tanggal }}
                        </p>
                    </div>
                    
                    <p class="text-secondary mb-4" style="font-size: 13.5px; line-height: 1.6;">
                        {{ Str::limit(strip_tags($item->isi), 180) }}
                    </p>
                    
                    <a href="{{ route('visitor.article.show', $item->id) }}" class="btn btn-success rounded-pill px-4" style="font-size: 13px; font-weight: 500;">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-lg-4 col-12">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff;">
            <h6 class="fw-bold text-uppercase mb-3 pb-2 border-bottom text-dark" style="font-size: 13px; letter-spacing: 0.05em;">
                Kategori Artikel
            </h6>
            
            <div class="d-flex flex-column gap-1">
                <a href="{{ route('visitor.home') }}" class="category-item d-flex justify-content-between align-items-center p-2 text-decoration-none rounded {{ !$activeCategory ? 'active' : '' }}" style="color: #495057;">
                    <span>Semua Artikel</span>
                    @if(!$activeCategory)
                        <span class="badge rounded-circle d-flex align-items-center justify-content-center bg-success text-white" style="width: 24px; height: 24px; font-size: 11px;">{{ $totalArticlesCount }}</span>
                    @else
                        <span class="badge rounded-pill bg-light text-muted border" style="font-size: 11px;">{{ $totalArticlesCount }}</span>
                    @endif
                </a>

                @foreach($categories as $cat)
                    @php $isCatActive = ($activeCategory && $activeCategory->id == $cat->id); @endphp

                    <a href="{{ route('visitor.home', ['category' => $cat->nama_kategori]) }}" 
                    class="category-item d-flex justify-content-between align-items-center p-2 text-decoration-none rounded {{ $isCatActive ? 'bg-light-success text-success-custom fw-bold' : '' }}">
                        <span>{{ $cat->nama_kategori }}</span>
                        
                        @if($isCatActive)
                            <span class="badge rounded-circle d-flex align-items-center justify-content-center text-white" style="background-color: #2e7d32; width: 24px; height: 24px; font-size: 11px;">
                                {{ $cat->artikel_count }}
                            </span>
                        @else
                            <span class="badge rounded-pill bg-light text-muted border" style="font-size: 11px;">
                                {{ $cat->artikel_count }}
                            </span>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection