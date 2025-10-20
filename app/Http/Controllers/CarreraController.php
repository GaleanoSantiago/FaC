<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NoticiaController; 
use App\Http\Controllers\EventoController; 
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class CarreraController extends Controller
{
    
    /**
     * Obtiene todas las carreras desde el archivo JSON.noticias
     */
    public function getCarreras()
    {
        $path = resource_path('data/carreras.json');

        if (!File::exists($path)) {
            abort(404, 'El archivo de carreras no existe.');
        }

        $json = File::get($path);
        $carreras = json_decode($json, true);

        if ($carreras === null) {
            abort(500, 'Error al decodificar el archivo de carreras.');
        }

        return $carreras;
    }

    /**
     * Muestra la lista de carreras.
     */
    public function index()
    {
        $carreras = $this->getCarreras();
        return view('carreras.index', compact('carreras'));
    }

    /**
     * Muestra una noticia individual.
     */
    public function show($id)
    {
        $carreras = $this->getCarreras();

        $carrera = collect($carreras)->firstWhere('id_carrera', (int)$id);

        if (!$carrera) {
            abort(404, 'Carrera no encontrada.');
        }
        // Obtener las últimas 3 carreras (excluyendo la actual)
        $ultimasCarreras = collect($carreras)
            ->where('id_carrera', '!=', (int)$id)   // excluye la actual
            ->sortByDesc('created_at')              // ordena por fecha descendente
            ->take(3)                               // solo las 3 más recientes
            ->values();                             // reindexa los elementos
    
        return view('carreras.show', compact('carrera', 'ultimasCarreras'));
    }
}

