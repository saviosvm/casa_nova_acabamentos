<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoInicio;

class SiteController extends Controller
{


    public function index()
    {

        $conteudo_inicio = ConteudoInicio::get()->first();

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


/*
        $intro = new ConteudoInicio();

        $intro->title = $request->title;
        $intro->cidade = $request->cidade;
        $intro->private = $request->private;
        $intro->description = $request->description;
        $intro->items = $request->items; // precisa indicar no model que é um arrau, na view o nome é items[]
        $intro->date = $request->date;


        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;


        $event->save();
*/
        return redirect()->route('site.index');
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
    public function destroy($id)
    {
        //

    }

    public function dashboard()
    {


        return view('site.midia.dashboard');
    }
}
