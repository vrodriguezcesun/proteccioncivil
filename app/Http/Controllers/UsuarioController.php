<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{


    public function index()
    {
        $usuarios = User::paginate();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
        $usuario = new User();
        $roles = Role::pluck('name', 'id'); // Obtener todos los roles como un array asociativo de id => nombre
        return view('usuario.create', compact('usuarios', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|min:6'
        ]);

        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Asignar el rol al usuario
        $role = Role::where('name', 'Usuario')->first(); // Cambia 'Admin' al nombre del rol que desees asignar
        $usuario->assignRole($role);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);

        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'password' => 'nullable|min:6'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Actualiza la contraseña solo si se proporciona un nuevo valor
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $usuario->update($data);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        // Buscar el usuario por su ID
        $usuario = User::find($id);
        // Verificar si se encontró el usuario
        if (!$usuario) {
            // Si no se encuentra, redirigir con un mensaje de error
            return redirect()->route('usuario.index')->with('error', 'Usuario no encontrado.');
        }
        
        // Eliminar el usuario de la base de datos
        $usuario->delete();
        // Redirigir a la página de usuarios con un mensaje de éxito
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
    
    
}
