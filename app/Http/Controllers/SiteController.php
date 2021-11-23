<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoIntro;

class SiteController extends Controller
{


    public function index()
    {

        $conteudo_inicio = ConteudoIntro::get()->first();

        return view('site.principal', ['conteudo_inicio' => $conteudo_inicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIntro()
    {
        return  view('site.midia.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $conteudo_inicio = new ConteudoIntro();

        $conteudo_inicio->titulo = $request->titulo;
        $conteudo_inicio->descricao = $request->descricao;
        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/introducao'), $imageName);

            $conteudo_inicio->image = $imageName;
        }

       

        
        $conteudo_inicio->save();

        return redirect()->route('site.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('site.midia.intro.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyIntro($id)
    {
        $conteudo_inicio = ConteudoIntro::find($id);

        $conteudo_inicio->delete();
        return redirect()->route('site.dashboard');

    }

    public function dashboard()
    {
        $conteudo_inicio = ConteudoIntro::all();
      //  dd($conteudo_inicio);
        


        return view('site.midia.dashboard', ['conteudo_inicio' => $conteudo_inicio]);
    }
}
