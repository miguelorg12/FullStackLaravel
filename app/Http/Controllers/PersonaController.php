<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    /*public function index()
    {
        $user = User::all();
        return view('forms.index', ['users' => $users]);
    }
    public function showStore()
    {
        return view('forms.store');
    }
    public function showUpdate($id)
    {
        $persona = Persona::find($id);
        if(!$persona){
            return redirect()->back();
        }
        return view('forms.update', ['persona' => $persona]);
    }
    public function store(Request $request){
        session()->flash('success', 'Usuario creado con éxito.');
        $messages = [
            'nombre.required' => 'El campo nombre es requerido.',
            'nombre.max' => 'El campo nombre no debe ser mayor a 255 caracteres.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'nombre.regex' => 'El campo nombre debe contener solo letras.',
            'apellido_paterno.required' => 'El campo apellido paterno es requerido.',
            'apellido_paterno.max' => 'El campo apellido paterno no debe ser mayor a 255 caracteres.',
            'apellido_paterno.string' => 'El campo apellido paterno debe ser una cadena de caracteres.',
            'apellido_paterno.regex' => 'El campo apellido paterno debe contener solo letras.',
            'apellido_materno.required' => 'El campo apellido materno es requerido.',
            'apellido_materno.max' => 'El campo apellido materno no debe ser mayor a 255 caracteres.',
            'apellido_materno.string' => 'El campo apellido materno debe ser una cadena de caracteres.',
            'apellido_materno.regex' => 'El campo apellido materno debe contener solo letras.',
        ];
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
            'apellido_paterno' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
            'apellido_materno' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/persona')
                ->withInput()
                ->withErrors($validator);
        }
        $persona = new Persona;
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        if ($request->has('sexo')) {
            $persona->sexo = $request->sexo;
        }
        $persona->save();
        return redirect('/');
    }

    public function update(Request $request){
        session()->flash('success', 'Usuario actualizado con éxito.');
        $messages = [
            'nombre.required' => 'El campo nombre es requerido.',
            'nombre.max' => 'El campo nombre no debe ser mayor a 255 caracteres.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'nombre.regex' => 'El campo nombre debe contener solo letras.',
            'apellido_paterno.required' => 'El campo apellido paterno es requerido.',
            'apellido_paterno.max' => 'El campo apellido paterno no debe ser mayor a 255 caracteres.',
            'apellido_paterno.string' => 'El campo apellido paterno debe ser una cadena de caracteres.',
            'apellido_paterno.regex' => 'El campo apellido paterno debe contener solo letras.',
            'apellido_materno.required' => 'El campo apellido materno es requerido.',
            'apellido_materno.max' => 'El campo apellido materno no debe ser mayor a 255 caracteres.',
            'apellido_materno.string' => 'El campo apellido materno debe ser una cadena de caracteres.',
            'apellido_materno.regex' => 'El campo apellido materno debe contener solo letras.',
        ];
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
            'apellido_paterno' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
            'apellido_materno' => 'required|max:255|string|regex:/^[\pL\s]+$/u',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $persona = Persona::find($request->id);
        if(!$persona){
            return redirect()->back();
        }
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->sexo = $request->sexo;
        $persona->save();
        return redirect('/');
    }

    public function destroy($id){
        $persona = Persona::find($id);
        if(!$persona){
            return redirect()->back();
        }
        $persona->delete();
        session()->flash('success', 'Usuario eliminado con éxito.');
        return redirect('/');
    }*/
    public function formulario(){
        return view('users.login');
    }
    
    public function guardar(Request $request){
        $validacion = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validacion->fails()) {
            return redirect('/formulario')
                ->withInput()
                ->withErrors($validacion);
        }
        return response()->json([
            "Status" => 403,
            "msg" => "No jala el pto validator:(",
        ], 403);
    }
}
