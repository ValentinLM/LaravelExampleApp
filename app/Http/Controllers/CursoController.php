<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        //return ('Bienvenido a la página cursos');
        return view('cursos.index', compact('cursos'));
    }

    public function create() {
        //return ('En esta página puedes crear cursos');
        return view('cursos.create');
    }

    public function store(StoreCurso $request) {
        /*Asignacion manual
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        */
        //asignacion masiva
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function show($id) {
        $curso = Curso::find($id);
        //compact('curso'); es igual a ['curso' => $curso]
        return view('cursos.show', compact('curso'));
        //return ("Bienvenido al curso: $curso");
    }

    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso) {
        //Sin form request
        $request->validate([
            'name' => 'required', //o 'required|max:10'
            'descripcion' => 'required', //o 'required|min:10'
            'categoria' => 'required'
        ]);
        /*
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso) {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
