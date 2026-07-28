<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\VisitModel;

class VisitCounter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Obtener la URI actual
        $uri = service('uri')->getPath();

        // Lista de rutas que NO queremos contar (login, admin, assets, etc.)
        $exclude = [
            'login',
            'admin/login',
            'admin/quotes',
            'admin/users',
            'admin/config',
            'admin/logout',
            'admin/auth',
            'admin',          // si tienes panel admin
            'admin/dashboard',
            'logout',
            'favicon.ico',
            'robots.txt',
            'assets/',
            'css/',
            'js/',

            // Agrega aquí rutas de assets si es necesario
        ];

        // Si la URI empieza con alguna de las excluidas, no contar
        foreach ($exclude as $pattern) {
            if (strpos($uri, $pattern) === 0) {
                return;
            }
        }

        // Si es una solicitud AJAX (opcional), podrías no contarla
        if ($request->isAJAX()) {
            return;
        }

        // Incrementar el contador
        $visitModel = new VisitModel();
        $visitModel->incrementToday();
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No hacer nada
    }
}