<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comunion;
class ComunionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuniones = Comunion::paginate(10);
        return view('admin.comuniones.index',compact('comuniones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.comuniones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $comunion = new Comunion();
        $comunion->Apaterno = $request->input('Apaterno');
        $comunion->Amaterno = $request->input('Amaterno');
        $comunion->nombres = $request->input('nombres');
        $comunion->padre = $request->input('padre');
        $comunion->madre = $request->input('madre');
        $comunion->padrino = $request->input('padrino');
        $comunion->madrina = $request->input('madrina');
        $comunion->fecha_bautizo = $request->input('fecha_bautizo');
        $comunion->folio = $request->input('folio');
        
        if($comunion->save())
        {
            return redirect('/registro/comunion');
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
        //
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
}
