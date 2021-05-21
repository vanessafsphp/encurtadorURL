<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    //Chama Home
    public function index()
    {
        /*$lists = Link::all();

        foreach ($lists as $list) {
            $created = date_format($list->created_at, "Y-m-d");
            $date = date("Y-m-d");
            $str  = date("Y-m-d", strtotime('-7 days'));

            $dt = $date - $str;

            echo $dt;

        }

        dd();*/

        return view('home');
    }

    //Criar/Salvar
    public function store(Request $request)
    {
        //Valida obrigatoriedade da URL
        $request->validate([
            'url' => 'required|url'
        ]);

        //Verifica se é uma URL válida
        $input['url'] = filter_var($request->url, FILTER_VALIDATE_URL);
        $query = Link::where("url", "{$input['url']}")->first(); // Busca no banco se já há algum registro com essa URL

        // Se já existir
        if($query) {
            return view('home', ['code' => $query->code]); //retorna code para view Home
        }
        else { // Se não existir

            // Gera o codigo randomico com limite de 6 caracteres
            $input['code'] = Str::random(6);

            // Registra no banco
            Link::create($input);

            // Retorna resultado final para view Home
            return view('home', ['code' => $input['code']]);
        }
    }

    public function shortLink($code)
    {
        $find = Link::where('code', $code)->first(); //Pesquisa pelo codigo no banco

        return redirect($find->url); // Redireciona para a URL original
    }

    // apenas para debugar código
    public function debug(Request $request)
    {

    }
}
