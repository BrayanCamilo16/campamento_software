<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // echo "Aqui se van a mostrar todos los bootcamps";
        return response()->json(["success"=>true,
        'data'=>Bootcamp::all()] ,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "Aqui se va a guardar un nuevo bootcamp";
        //verificar los datos del payload;
        return response()->json(["success"=>true,
        'data'=>Bootcamp::create($request->all())] ,201);


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
        //echo "Aqui se van a mostrar el bootcamps cuyo id es $id ";
        return response()->json(["success"=>true,
        'data'=>Bootcamp::find($id)] ,200);
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
        //echo "Aqui se va a actualizar el bootcamp cuyo id es $id";
        //seleccionar el bootcamp a actualizar
        $b = Bootcamp::find($id);
        //actualizar ese bootcamp
        $b->update($request->all());
        //enviar el bootcamp a actualizar
        return response()->json(["success"=>true,
        'data'=>$b] ,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //echo "Aqui se va a eliminar el bootcamp cuyo id es $id";
        $c = Bootcamp::find($id);
        $c->delete();
        return response()->json(["success"=>true,
        'data'=>$c] ,200);
    }
}
