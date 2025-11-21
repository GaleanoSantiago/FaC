<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NoticiaController; 
use App\Http\Controllers\EventoController; 
use Illuminate\Support\Collection;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Últimas 3 noticias
        $ultimasNoticias = Post::where('tipo', 'noticia')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Últimos 3 eventos
        $ultimosEventos = Post::where('tipo', 'evento')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('index', compact('ultimasNoticias', 'ultimosEventos'));
    }
    public function institucional()
    {
        return view('institucional');

    }
}