<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\Penulis;

class VisitorController extends Controller
{
    // 1. Halaman Utama / Beranda (Tampilan 1 + Fitur Filter Widget Kategori)
    public function home(Request $request)
    {
        
        $categories = KategoriArtikel::withCount('artikel')->orderBy('nama_kategori', 'asc')->get();
        $totalArticlesCount = Artikel::count();

        $activeCategory = null;
        $requestCategory = $request->query('category');
        
        if ($requestCategory && $requestCategory !== 'all') {
            $activeCategory = KategoriArtikel::where('nama_kategori', $requestCategory)->first();
        }

        if ($activeCategory) {
            // Jika ada filter kategori, ambil SEMUA artikel dalam kategori tersebut (batasan 5 dilepas sesuai spesifikasi)
            $articles = Artikel::with(['penulis', 'kategori'])
                ->where('id_kategori', $activeCategory->id)
                ->orderBy('id', 'desc')
                ->get();
        } else {
            // Kondisi default Beranda: Hanya ambil 5 artikel terbaru dari semua kategori
            $articles = Artikel::with(['penulis', 'kategori'])
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
        }

        return view('visitor.home', compact('articles', 'categories', 'totalArticlesCount', 'activeCategory'));
    }

    // 2. Halaman Detail Artikel (Tampilan 2)
    public function showArticle($id)
    {
        // Ambil 1 artikel utama yang dipilih
        $article = Artikel::with(['penulis', 'kategori'])->findOrFail($id);

        // Ambil 5 artikel terkait dengan kategori yang sama, kecualikan artikel yang sedang dibaca (Anti-Duplikasi)
        $relatedArticles = Artikel::where('id_kategori', $article->id_kategori)
            ->where('id', '!=', $article->id)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        return view('visitor.detail', compact('article', 'relatedArticles'));
    }

    public function archive()
    {
        // Mengambil semua data artikel dibatasi 10 item per halaman
        $articles = Artikel::with(['penulis', 'kategori'])
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('visitor.archive', compact('articles'));
    }

    public function categories()
    {
        // Mengambil seluruh data kategori dari database
        $categories = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();

        return view('visitor.categories', compact('categories'));
    }

    public function about()
    {
        // Mengambil seluruh data penulis dari database
        $authors = Penulis::orderBy('nama_depan', 'asc')->get();

        return view('visitor.about', compact('authors'));
    }
}