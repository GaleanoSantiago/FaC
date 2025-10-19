<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticiaController extends Controller
{
    
    /**
     * Obtiene todas las noticias desde el archivo JSON.
     */
    public function getNoticias()
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
    public function index()
    {
        $noticias = $this->getNoticias();
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Muestra una noticia individual.
     */
    public function show($id)
    {
        $noticias = $this->getNoticias();

        $noticia = collect($noticias)->firstWhere('id_noticia', (int)$id);

        if (!$noticia) {
            abort(404, 'Noticia no encontrada.');
        }
        // Obtener las últimas 3 noticias (excluyendo la actual)
        $ultimasNoticias = collect($noticias)
            ->where('id_noticia', '!=', (int)$id)   // excluye la actual
            ->sortByDesc('created_at')              // ordena por fecha descendente
            ->take(3)                               // solo las 3 más recientes
            ->values();                             // reindexa los elementos
    
        return view('noticias.show', compact('noticia', 'ultimasNoticias'));
    }
}

