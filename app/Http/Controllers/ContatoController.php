<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        return View('site.contato', ['pagina' => 'Página de ']);

            $contato = new Contato();
            $contato->nome = $request->input('nome');
            $contato->email = $request->input('email');
            $contato->telefone = $request->input('telefone');
            $contato->motivo_contato = $request->input('motivo_contato');
            $contato->mensagem = $request->input('mensagem');
    }
}
