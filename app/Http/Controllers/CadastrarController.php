<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clube_Futebol;

class CadastrarController extends Controller
{
    //regra de negócio: validar e persistir dados
    public function salvar (Request $request){
        
        if (!$request->filled('titulos')) {
            $request->merge(['titulos' => 'Nenhum']);
        }
        
        if (!$request->filled('patrocinio')) {
            $request->merge(['patrocinio' => 'Nenhum']);
        }

        $request->validate([
            //campos titulos e patrocinio não são requeridos
            "tecnico" => "required",
            "criacao" => "required|date",
            "torcida" => "required|integer|min:0",
            "titulos" => "required",
            "patrocinio" => "required",
        ]
        ,[
            "tecnico.required" => "O campo 'Técnico' deve ser preenchido",
            "criacao.required" => "O campo 'Criação' deve ser preenchido",
            "criacao.date" => "A data deve ser válida",
            "torcida.required" => "O campo 'Torcida' deve ser preenchido",
            "torcida.integer" => "O número de torcedores deve ser inteiro",
            "torcida.min" => "O número de torcedores deve ser positivo",
            "titulos.required" => "O campo 'Títulos' deve ser preenchido",
            "patrocinio.required" => "O campo 'Patrócínio' deve ser preenchido"
        ]    
    
        );

        $clubeFutebol = new Clube_Futebol();
        $clubeFutebol->fill($request->all());
        $clubeFutebol->save();
        
        // dd($request);

        return view('cadastroSalvo');

    }

}
