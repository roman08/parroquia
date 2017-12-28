<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bautizo;
class BautizosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bautizos = Bautizo::paginate(10);

        return view('admin.bautizos.index',compact('bautizos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bautizos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bautizo = new Bautizo();
        $bautizo->no_libro = $request->input('no_libro');
        $bautizo->decanato = $request->input('decanato');
        $bautizo->acta = $request->input('acta');
        $bautizo->fecha_bautizo = $request->input('fecha_bautizo');
        $bautizo->nombre = $request->input('nombre');
        $bautizo->fecha_nacimiento = $request->input('fecha_nacimiento');
        $bautizo->padre = $request->input('padre');
        $bautizo->madre = $request->input('madre');
        $bautizo->padrino = $request->input('padrino');
        $bautizo->madrina = $request->input('madrina');
        $bautizo->parroco = $request->input('parroco');
        $bautizo->lugar_nacimiento = $request->input('lugar_nacimiento');
        $bautizo->parroquia = 'San Francisco de Asís';
        $bautizo->fecha = '2017-12-28';
        $bautizo->folio = $request->input('folio');
        if($bautizo->save())
        {
            return redirect('/registro/bautizo/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bautizo = Bautizo::find($id);
        return view('admin.bautizos.show',compact('bautizo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bautizo = Bautizo::find($id);
        return view('admin.bautizos.update',compact('bautizo'));
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
        $bautizo = Bautizo::find($id);
        $bautizo->no_libro = $request->input('no_libro');
        $bautizo->decanato = $request->input('decanato');
        $bautizo->acta = $request->input('acta');
        $bautizo->fecha_bautizo = $request->input('fecha_bautizo');
        $bautizo->nombre = $request->input('nombre');
        $bautizo->fecha_nacimiento = $request->input('fecha_nacimiento');
        $bautizo->padre = $request->input('padre');
        $bautizo->madre = $request->input('madre');
        $bautizo->padrino = $request->input('padrino');
        $bautizo->madrina = $request->input('madrina');
        $bautizo->parroco = $request->input('parroco');
        $bautizo->lugar_nacimiento = $request->input('lugar_nacimiento');
        $bautizo->parroquia = 'San Francisco de Asís';
        $bautizo->fecha = '2017-12-28';
        $bautizo->folio = $request->input('folio');
        if($bautizo->save())
        {
            return redirect('/registro/bautizo/');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bautizo = Bautizo::find($id);
        $bautizo->delete();

        return back();
    }
}
