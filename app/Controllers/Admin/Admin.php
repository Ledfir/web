<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index(): string{
        return view('admin/dashboard');
    }
    public function quotes(): string{
        return view('admin/quotes');
    }
    public function users(): string{
        return view('admin/users');
    }
    public function config(): string{
        return view('admin/config');
    }
}