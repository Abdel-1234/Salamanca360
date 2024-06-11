<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Gastronomia;
use App\Models\LugaresInteres;
use App\Models\Ocio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class Controlador extends Controller
{

    //Vistas principales
    public function index()
    {
        $actividades = Actividad::take(3)->get();
        $gastronomia= Gastronomia::take(3)->get();
        $lugaresInteres= LugaresInteres::take(3)->get();
        $ocio= Ocio::take(3)->get();
        return View('index',[
            'gastronomia'=> $gastronomia,
            'actividades'=> $actividades,
            'lugaresInteres'=> $lugaresInteres,
            'ocio'=> $ocio
        ]);
    }
    public function actividades()
    {
        $actividades= Actividad::all();
        return View('actividades.actividades',[
            'actividades'=> $actividades
        ]);
    }
    public function gastronomia()
    {
        $gastronomia= Gastronomia::all();
        return View('gastronomia.gastronomia',[
            'gastronomia'=> $gastronomia
        ]);
    }
    public function lugaresInteres()
    {
        $lugaresInteres= LugaresInteres::all();
        return View('lugaresInteres.lugaresInteres',[
            'lugaresInteres'=> $lugaresInteres
        ]);
    }
    public function ocio()
    {
        $ocio= Ocio::all();
        return View('ocioNocturno.ocioNocturno',[
            'ocio'=> $ocio
        ]);
    }
    public function contacto()
    {
        return View('contacto.contacto');
    }

    //Vistas Administrador
    public function adminActividades()
    {
        $actividades= Actividad::all();
        return View('administrador.vistasAdministrador.actividades',[
            'actividades'=> $actividades
        ]);
    }
    public function adminGastronomia()
    {
        $gastronomia= Gastronomia::all();
        return View('administrador.vistasAdministrador.gastronomia',[
            'gastronomia'=> $gastronomia
        ]);
    }
    public function adminLugaresInteres()
    {
        $lugaresInteres= LugaresInteres::all();
        return View('administrador.vistasAdministrador.lugaresInteres',[
            'lugaresInteres'=> $lugaresInteres
        ]);
    }
    public function adminOcio()
    {
        $ocio= Ocio::all();
        return View('administrador.vistasAdministrador.ocioNocturno',[
            'ocio'=> $ocio
        ]);
    }
    
    // cookies
    public function cookies()
    {
        return View('politica');
    }
    // ver mas
    public function mostrarVistaGastronomia($id)
    {
        $VistaGastronomia=Gastronomia::find($id);
        return View('gastronomia.vistaGastronomia',[
            'VistaGastronomia'=> $VistaGastronomia
        ]);
    }
    public function mostrarActividad($id)
    {
        $actividad=Actividad::find($id);
        return View('actividades.actividad',[
            'actividad'=> $actividad
        ]);
    }
    public function mostrarLugarInteres($id)
    {
        $lugarInteres=LugaresInteres::find($id);
        return View('lugaresInteres.LugarInteres',[
            'lugarInteres'=> $lugarInteres
        ]);
    }
    public function mostrarOcio($id)
    {
        $ocio=Ocio::find($id);
        return View('ocioNocturno.ocio',[
            'ocio'=> $ocio
        ]);
    }

    //Formularios
    public function formulario()
    {
        return View('administrador.formulario');
    }
    public function formActividades()
    {
        return View('administrador.formActividades');
    }
    public function formGastronomia()
    {
        return View('administrador.formGastronomia');
    }
    public function formLugaresInteres()
    {
        return View('administrador.formLugaresInteres');
    }
    public function formOcio()
    {
        return View('administrador.formOcio');
    }

     //AÑADIR
    public function GuardarActividades(Request $request)
    {
        $actividad = new Actividad();
        $actividad->nombre = $request->nombre;
        $actividad->ubicacion = $request->ubicacion;
        $actividad->ubicacion_enlace = $request->ubicacion_enlace;
        $actividad->enlace = $request->enlace;
        $actividad->imagen_ruta = $request->imagen_ruta;
        $file = $request->file('imagen');
        $actividad->imagen_ruta = $file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$actividad->imagen_ruta);
        $actividad->decripcionMin = $request->descripcionMin;
        $actividad->decripcionMax = $request->descripcionMax;
        $actividad->telefono = $request->telefono;
        $actividad->precio = $request->precio;
        $actividad->save();
        return Redirect::to('formulario');
    }
    public function GuardarGastronomia(Request $request)
    {
        $gastronomia = new Gastronomia();
        $gastronomia->nombre = $request->nombre;
        $gastronomia->ubicacion = $request->ubicacion;
        $gastronomia->ubicacion_enlace = $request->ubicacion_enlace;
        $gastronomia->enlace = $request->enlace;
        $gastronomia->imagen_ruta = $request->imagen_ruta;
        $file = $request->file('imagen');
        $gastronomia->imagen_ruta = $file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$gastronomia->imagen_ruta);
        $gastronomia->decripcionMin = $request->descripcionMin;
        $gastronomia->decripcionMax = $request->descripcionMax;
        $gastronomia->telefono = $request->telefono;
        $gastronomia->precio = $request->precio;
        $gastronomia->save();
        return Redirect::to('formulario');
    }
    public function GuardarOcio(Request $request)
    {
        $ocio = new Ocio();
        $ocio->nombre = $request->nombre;
        $ocio->ubicacion = $request->ubicacion;
        $ocio->ubicacion_enlace = $request->ubicacion_enlace;
        $ocio->enlace = $request->enlace;
        $ocio->imagen_ruta = $request->imagen_ruta;
        $file = $request->file('imagen');
        $ocio->imagen_ruta = $file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$ocio->imagen_ruta);
        $ocio->decripcionMin = $request->descripcionMin;
        $ocio->decripcionMax = $request->descripcionMax;
        $ocio->telefono = $request->telefono;
        $ocio->precio = $request->precio;
        $ocio->save();
        return Redirect::to('formulario');
    }
    public function GuardarLugaresInteres(Request $request)
    {
        $lugarInteres = new LugaresInteres();
        $lugarInteres->nombre = $request->nombre;
        $lugarInteres->ubicacion = $request->ubicacion;
        $lugarInteres->ubicacion_enlace = $request->ubicacion_enlace;
        $lugarInteres->enlace = $request->enlace;
        $lugarInteres->imagen_ruta = $request->imagen_ruta;
        $file = $request->file('imagen');
        $lugarInteres->imagen_ruta = $file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$lugarInteres->imagen_ruta);
        $lugarInteres->decripcionMin = $request->descripcionMin;
        $lugarInteres->decripcionMax = $request->descripcionMax;
        $lugarInteres->telefono = $request->telefono;
        $lugarInteres->precio = $request->precio;
        $lugarInteres->save();
        return Redirect::to('formulario');
    }

    //EDITAR
    public function editActividad($id)
    {
        $actividad = Actividad::find($id);
        return View('administrador.editar.actividades',[
        'actividad'=>$actividad
        ]);

    }
    public function editGastronomia($id)
    {
        $gastronomia = Gastronomia::find($id);
        return View('administrador.editar.gastronomia',[
        'gastronomia'=>$gastronomia
        ]);

    }
    public function editLugaresInteres($id)
    {
        $lugaresInteres = LugaresInteres::find($id);
        return View('administrador.editar.lugaresInteres',[
        'lugaresInteres'=>$lugaresInteres
        ]);

    }
    public function editOcio($id)
    {
        $ocio = Ocio::find($id);
        return View('administrador.editar.ocio',[
        'ocio'=>$ocio
        ]);

    }
    
    //UPDATE
    public function updateActividades(Request $request, $id)
    {
        $actividad = Actividad::find($id);
        $actividad->nombre =$request->nombre;
        $actividad->ubicacion = $request->ubicacion;
        $actividad->ubicacion_enlace = $request->ubicacion_enlace;
        $actividad->enlace = $request->enlace;
        $file = $request->file('imagen');
        if ($file) {
            File::delete(public_path().'/imagenes/'.$actividad->imagen_ruta);
            $actividad->imagen_ruta = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$actividad->imagen_ruta);
        }
        $actividad->decripcionMin = $request->descripcionMin;
        $actividad->decripcionMax = $request->descripcionMax;
        $actividad->telefono = $request->telefono;
        $actividad->precio = $request->precio;
        $actividad->save();
        return Redirect::to('adminActividades');
    }
    public function updateGastronomia(Request $request, $id)
    {
        $gastronomia = Gastronomia::find($id);
        $gastronomia->nombre =$request->nombre;
        $gastronomia->ubicacion = $request->ubicacion;
        $gastronomia->ubicacion_enlace = $request->ubicacion_enlace;
        $gastronomia->enlace = $request->enlace;
        $file = $request->file('imagen');
        if ($file) {
            File::delete(public_path().'/imagenes/'.$gastronomia->imagen_ruta);
            $gastronomia->imagen_ruta = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$gastronomia->imagen_ruta);
        }
        $gastronomia->decripcionMin = $request->descripcionMin;
        $gastronomia->decripcionMax = $request->descripcionMax;
        $gastronomia->telefono = $request->telefono;
        $gastronomia->precio = $request->precio;
        $gastronomia->save();
        return Redirect::to('adminGastronomia');
    }
    public function updateOcio(Request $request, $id)
    {
        $ocio = Ocio::find($id);
        $ocio->nombre =$request->nombre;
        $ocio->ubicacion = $request->ubicacion;
        $ocio->ubicacion_enlace = $request->ubicacion_enlace;
        $ocio->enlace = $request->enlace;
        $file = $request->file('imagen');
        if ($file) {
            File::delete(public_path().'/imagenes/'.$ocio->imagen_ruta);
            $ocio->imagen_ruta = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$ocio->imagen_ruta);
        }
        $ocio->decripcionMin = $request->descripcionMin;
        $ocio->decripcionMax = $request->descripcionMax;
        $ocio->telefono = $request->telefono;
        $ocio->precio = $request->precio;
        $ocio->save();
        return Redirect::to('adminLugaresInteres');
    }
    public function updateLugaresInteres(Request $request, $id)
    {
        $lugarInteres = LugaresInteres::find($id);
        $lugarInteres->nombre =$request->nombre;
        $lugarInteres->ubicacion = $request->ubicacion;
        $lugarInteres->ubicacion_enlace = $request->ubicacion_enlace;
        $lugarInteres->enlace = $request->enlace;
        $file = $request->file('imagen');
        if ($file) {
            File::delete(public_path().'/imagenes/'.$lugarInteres->imagen_ruta);
            $lugarInteres->imagen_ruta = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$lugarInteres->imagen_ruta);
        }
        $lugarInteres->decripcionMin = $request->descripcionMin;
        $lugarInteres->decripcionMax = $request->descripcionMax;
        $lugarInteres->telefono = $request->telefono;
        $lugarInteres->precio = $request->precio;
        $lugarInteres->save();
        return Redirect::to('adminOcio');
    }
    
    //DESTROYS
    public function destroyActividad($id)
    {
        $actividad=Actividad::find($id);
        $actividad->delete();
        return Redirect::to('adminActividades');
    }
    public function destroyGastronomia($id)
    {
        $gastronomia=Gastronomia::find($id);
        $gastronomia->delete();
        return Redirect::to('adminGastronomia');
    }
    public function destroyLugaresInteres($id)
    {
        $lugaresInteres=lugaresInteres::find($id);
        $lugaresInteres->delete();
        return Redirect::to('adminLugaresInteres');
    }
    public function destroyOcio($id)
    {
        $ocio=ocio::find($id);
        $ocio->delete();
        return Redirect::to('adminOcio');
    }
}
