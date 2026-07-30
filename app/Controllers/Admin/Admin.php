<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

// Models
use App\Models\ConfigModel as Configuracion;
use App\Models\QuotesModel as Cotizaciones;
use App\Models\UserModel as Usuarios;

class Admin extends BaseController
{
    protected $configuracion;
    protected $cotizaciones;
    protected $usuarios;
    public function __construct()
    {
        // Cargar el modelo de usuarios
        $this->configuracion = new Configuracion();
        $this->cotizaciones = new Cotizaciones();
        $this->usuarios = new Usuarios();
    }
    public function index(): string{
        return view('admin/dashboard');
    }
    public function quotes(): string{
        return view('admin/quotes', [
            'cotizaciones' => $this->cotizaciones->findAll()
        ]);
    }
    public function users(): string{
        return view('admin/users', [
            'usuarios' => $this->usuarios->findAll()
        ]);
    }
    public function config(): string{
        $data['favicon'] = $this->configuracion->where('key', 'favicon')->first();
        $data['whatsapp'] = $this->configuracion->where('key', 'whatsapp')->first();
        $data['email'] = $this->configuracion->where('key', 'email')->first();
        $data['telefono'] = $this->configuracion->where('key', 'telefono')->first();
        $data['direccion'] = $this->configuracion->where('key', 'direccion')->first();
        $data['message_whatsapp'] = $this->configuracion->where('key', 'message_whatsapp')->first();
        return view('admin/config', [
            'configuracion' => $data
        ]);
    }
}