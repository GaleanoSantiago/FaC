<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticiaController extends Controller
{
    
    /**
     * Obtiene todas las noticias desde el archivo JSON.
     */
    public function getNoticiasJson()
    {
        $path = resource_path('data/noticias.json');

        if (!File::exists($path)) {
            abort(404, 'El archivo de noticias no existe.');
        }

        $json = File::get($path);
        $noticias = json_decode($json, true);

        if ($noticias === null) {
            abort(500, 'Error al decodificar el archivo de noticias.');
        }

        return $noticias;
    }

    /**
     * Muestra la lista de noticias.
     */
    public function indexJson()
    {
        $noticias = $this->getNoticias();
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Muestra una noticia individual.
     */
    public function showJson($id)
    {
        $noticias = $this->getNoticias();

        $noticia = collect($noticias)->firstWhere('id', (int)$id);

        if (!$noticia) {
            abort(404, 'Noticia no encontrada.');
        }
        // Obtener las últimas 3 noticias (excluyendo la actual)
        $ultimasNoticias = collect($noticias)
            ->where('id', '!=', (int)$id)   // excluye la actual
            ->sortByDesc('created_at')              // ordena por fecha descendente
            ->take(3)                               // solo las 3 más recientes
            ->values();                             // reindexa los elementos
    
        return view('noticias.show', compact('noticia', 'ultimasNoticias'));
    }

    // ============================================================

     /**
     * Muestra todas las noticias desde la BD (tabla posts).
     */
    public function index()
    {
        $noticias = Post::where('tipo', 'noticia')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('noticias.index', compact('noticias'));
    }

    /**
     * Muestra una noticia individual.
     */
    public function show($id)
    {
        $noticia = Post::where('tipo', 'noticia')->findOrFail($id);

        // Últimas 3 noticias distintas de la actual
        $ultimasNoticias = Post::where('tipo', 'noticia')
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('noticias.show', compact('noticia', 'ultimasNoticias'));
    }
}

