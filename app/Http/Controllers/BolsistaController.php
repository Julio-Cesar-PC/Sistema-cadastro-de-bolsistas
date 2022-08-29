<?php

namespace App\Http\Controllers;

use App\Models\Bolsista;
use Illuminate\Http\Request;

class BolsistaController extends Controller
{
    public function list()
    {
        $bolsistas = Bolsista::latest()->filter(request(['busca', 'ativo']))->paginate(10);
        return view('bolsista.bolsistas', compact('bolsistas'));
    }

    public function bolsista($cpf)
    {
        $bolsista = Bolsista::where('cpf', $cpf)->first();
        return view('bolsista.bolsista', compact('bolsista'));
    }

    public function cadastro()
    {
        return view('bolsista.cadastro');
    }

    public function create()
    {
        if (request('ativo') == 'falso') {
            $ativo = false;
        } else {
            $ativo = true;
        }

        $attributes = request()->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:bolsistas|numeric|digits:11',
            'email' => 'required|unique:bolsistas',
            'funcao' => 'required',
        ]);

        $attributes['ativo'] = $ativo;

//        dd(request('ativo'), $ativo, $attributes);

        Bolsista::create($attributes);
        return redirect('/bolsistas');
    }

    public function delete($cpf)
    {
        $bolsista = Bolsista::where('cpf', $cpf)->first();
        $bolsista->delete();
        return redirect('/bolsistas');
    }

    public function edit($cpf)
    {
        $bolsista = Bolsista::where('cpf', $cpf)->first();
        return view('bolsista.edit', compact('bolsista'));
    }

    public function update($cpf)
    {
        $bolsista = Bolsista::where('cpf', $cpf)->first();

        if (request('ativo') == 'falso') {
            $ativo = false;
        } else {
            $ativo = true;
        }

        $bolsista->update(request()->validate([
            'nome' => 'required',
            'cpf' => 'required|numeric|digits:11|unique:bolsistas,cpf,' . $bolsista->id,
            'email' => 'required|unique:bolsistas,email,' . $bolsista->id,
            'funcao' => 'required',
        ]));

        $bolsista->update(['ativo' => $ativo]);

        return redirect('/bolsistas');
    }

}
