<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\NoticiaController; 
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class EventoController extends Controller
{
    /**
     * Obtiene todas las noticias desde el archivo JSON.
     */
    public function getEventos()
    {
        $path = resource_path('data/eventos.json');

        if (!File::exists($path)) {
            abort(404, 'El archivo de eventos no existe.');
        }

        $json = File::get($path);
        $noticias = json_decode($json, true);

        if ($noticias === null) {
            abort(500, 'Error al decodificar el archivo de eventos.');
        }

        return $noticias;
    }

    /**
     * Muestra la lista de noticias.
     */
    public function index()
    {
        $eventos = $this->getEventos();
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Muestra una noticia individual.
     */
    public function show($id)
    {
        $eventos = $this->getEventos();

        $evento = collect($eventos)->firstWhere('id_evento', (int)$id);

        if (!$evento) {
            abort(404, 'Evento no encontrada.');
        }
        // Obtener las últimas 3 noticias (excluyendo la actual)
        $ultimosEventos = collect($eventos)
            ->where('id_evento', '!=', (int)$id)   // excluye la actual
            ->sortByDesc('created_at')              // ordena por fecha descendente
            ->take(3)                               // solo las 3 más recientes
            ->values();                             // reindexa los elementos
    
        return view('eventos.show', compact('evento', 'ultimosEventos'));
    }
}
