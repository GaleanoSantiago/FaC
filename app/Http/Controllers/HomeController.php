<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NoticiaController; 
use App\Http\Controllers\EventoController; 
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index()
    {
        // Instancia del NoticiaController
        $noticiaController = new NoticiaController();

        // Obtenemos todas las noticias
        $noticias = collect($noticiaController->getNoticias());

        // Tomamos las últimas 3 (ordenadas por id descendente)
        $ultimasNoticias = $noticias->sortByDesc('id_noticia')->take(3);

        // Eventos
        $eventoController = new EventoController();

        $eventos = collect($eventoController->getEventos());
        $ultimosEventos = $eventos->sortByDesc('id_evento')->take(3);

        // Pasamos a la vista principal
        return view('index', compact('ultimasNoticias', 'ultimosEventos'));
    }
}