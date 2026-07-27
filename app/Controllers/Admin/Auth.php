<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel as Usuarios;

class Auth extends BaseController
{
    protected $usuarios;
    public function __construct()
    {
        $this->usuarios = new Usuarios();
    }
    public function index(): string
    {
        return view('admin/login');
    }
    public function attemptLogin()
    {
        // Recibir datos del POST
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validar que no estén vacíos
        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Correo y contraseña son obligatorios.');
        }

        // Buscar el usuario por email
        $user = $this->usuarios->where('correo', $email)->first();

        // Verificar si existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['password'])) {
            // Iniciar sesión (guardar datos del usuario)
            session()->set([
                'user_id'    => $user['id'],
                'user_name'  => $user['name'],
                'user_email' => $user['correo'],
                'logged_in'  => true,
            ]);

            // Redirigir al dashboard o página principal
            return redirect()->to(route_to('admin.dashboard'))->with('success', 'Bienvenido ' . $user['name']);
        } else {
            // Credenciales incorrectas
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('admin.login'))->with('success', 'Sesión cerrada.');
    }
}