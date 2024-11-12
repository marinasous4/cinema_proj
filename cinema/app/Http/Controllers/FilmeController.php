<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Filme;
use Illuminate\Http\Request;
use App\Http\Requests\FilmeRequest;

class FilmeController extends Controller
{
    public readonly Filme $filme;

    public function __construct()
    {
        $this->filme = new Filme();
    }

    public function index()
    {
        $produtos = $this->filme->all();
        return view('filmes', ['filmes' => $filme]);  
    }

    public function create()
    {
        return view('filme_create');    
    }

    public function store(Request $request)
    {
        $created = $this->filme->create([
            'nome' => $request->input('nome'),
            'classificacao' => $request->input('classificacao'),
            'ano' => $request->input('ano')             
        ]);
    
        if($created){
            return redirect()->back()->with('message', 'Adicionado com sucesso!');
        }

        return redirect()->back()->with('message', 'Ops! Algo deu errado');
    }

    public function show(string $id)
    {
        // return view('filme', ['filme' => $filme]);
    }

    public function edit(Filme $filme)
    {
        return view('filme_edit', ['filme' => $filme]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->filme->where('id', $id)->update($request->except(['_token', '_method']));
        if($updated){
            return redirect()->back()->with('message', 'Atualizado com sucesso!');
        }

        return redirect()->back()->with('message', 'Ops! Algo deu errado');

    }  

    public function destroy(string $id)
    {
        $this->filme->where('id', $id)->delete();


        return redirect()->route('produtos')->with('message', 'Excluído com sucesso!');
    }
}