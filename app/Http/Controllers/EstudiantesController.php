<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;
use lllumminate\Support\Facades\Storage;


class EstudiantesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
      //$estudiantes= Estudiante::all();
        //return view('estudiantes.index', ['estudiantes' => $estudiantes]);

        if ($request)
       {
        $query=trim($request->get('search'));
           $estudiantes= Estudiante::where('nombre', 'LIKE', '%' . $query . '%')
          ->orderBy('id','asc')
          ->get();
          return view('estudiantes.index', ['estudiantes' => $estudiantes, 'search' => $query]);
        }

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $estudiantes = Estudiante::create($request->all());

        if ($request->hasfile('imagen')) {
            
            $file= $request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $estudiantes->imagen= $file->getClientOriginalName();
        }
        $estudiantes->save();

        return redirect()->route('estudiantes.index', compact('estudiantes'))
        ->with('info', 'expediente guardada con exito');
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
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
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

        $estudiante=Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index', $estudiante->id)
        ->with('info', 'expediente guardado con exito');
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

       // $estudiante=Estudiante::findOrFail($id);
         Estudiante::destroy($id);
        
        return back()->with('info', 'Eliminado correctamente');
    }
}
