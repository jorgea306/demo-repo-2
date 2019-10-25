<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class PagesController extends Controller
{
    // constructor de seguridad no permite ingresar a ninguna funcio si no esta logeado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        return view('welcome');
    }

    public function descargas()
    {
        return view('noticias_descargas');
    }

    public function noticias()
    {
        $usuarioEmail = auth()->user()->email; //informacion de autentificacion
        $noticias = App\noticias::where('usuario',$usuarioEmail)->paginate(3);
        //$noticias = App\noticias::paginate(6);
        return view('noticias',compact('noticias'));
    }

    public function noticias_gestion()
    {
        $usuarioEmail = auth()->user()->email;
        $noticias = App\noticias::where('usuario',$usuarioEmail)->paginate(5);
        return view('noticias_gestion', compact('noticias'));
    }

    public function usuarios_gestion(Request $request)
    {

        $usuarios = App\User::paginate(2);
        return view('usuarios_gestion', compact('usuarios'));
    }

    public function crear(Request $request)
    {

        $request->validate([ //valida que nombre y descripcion no vengan vacios
            'nombre' => 'required',
            'introduccion' => 'required',
            'descripcion' => 'required',
            'fecha'=>'required'
        ]);

        if ($request->hasFile('fotos')) {
            $file = $request->file('fotos');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/',$name);
        }


        $noticiaNueva = new App\noticias; //creamos una nota
        $noticiaNueva->nombre = $request->nombre; //cargamos el parametro
        $noticiaNueva->introduccion = $request->introduccion;
        $noticiaNueva->descripcion = $request->descripcion;
        $noticiaNueva->fecha = $request->fecha;
        $noticiaNueva->fotos = $name;
        $noticiaNueva->usuario = auth()->user()->email;


        $noticiaNueva->save(); //guardamos lo creado




        return back()->with('mensaje', 'Nota agregada!'); //back no lleva devuelta a nuestro sitio web - with muestra un mensaje de alerta

    }

    public function noticias_crear()
    {
        return view('noticias_crear');
    }

    public function noticias_detalles($id)
    {
        $usuarioEmail = auth()->user()->email;
        $noticias = App\noticias::where('usuario',$usuarioEmail)->findOrFail($id); //si no encuentra el id nos manda a la pagina 404
        return view('noticias_detalles', compact('noticias'));
    }

    public function noticias_editar($id)
    {
        $usuarioEmail = auth()->user()->email;
        $noticias = App\noticias::where('usuario', $usuarioEmail)->findOrFail($id);
        return view('noticias_editar', compact('noticias'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('fotos')) {
            $file = $request->file('fotos');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/img/', $name);
        }

        $noticiasUpdate = App\noticias::findOrFail($id);

        $noticiasUpdate->nombre = $request->nombre; //cargamos el parametro
        $noticiasUpdate->introduccion = $request->introduccion;
        $noticiasUpdate->descripcion = $request->descripcion;
        $noticiasUpdate->fecha = $request->fecha;
        $noticiasUpdate->fotos = $name;
        $noticiasUpdate->usuario = auth()->user()->email;

        $noticiasUpdate->save();

        return back()->with('mensaje', 'Nota actualizada');
    }

    public function usuarios_editar($id)
    {

        $usuarios = App\User::findOrFail($id);
        return view('usuarios_editar', compact('usuarios'));
    }

    public function usuarios_update(Request $request, $id)
    {

        $usuariosUpdate = App\User::findOrFail($id);


        $usuariosUpdate->name = $request->nombre; //cargamos el parametro
        $usuariosUpdate->email = $request->email;
        $usuariosUpdate->password = $request->contraseña;

        $usuariosUpdate->save();

        return back()->with('mensaje', 'Usuario actualizado');
    }

    public function eliminar($id)
    {
        $usuarioEmail = auth()->user()->email;
        $noticiasEliminar = App\noticias::where('usuario', $usuarioEmail)->findOrFail($id);
        $noticiasEliminar->delete();

        return back()->with('mensaje', 'Nota Eliminada');
    }

    public function usuarios_eliminar($id)
    {
        $usuariosEliminar = App\User::findOrFail($id);
        $usuariosEliminar->delete();

        return back()->with('mensaje', 'Usuario Eliminado');
    }
}
