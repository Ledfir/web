<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class Auth implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        // return var_dump($_SESSION);
        if(!session()->get('logged_in')){
            return redirect()->to(route_to('admin.login'));
        }
        if(empty($arguments)){
            return;
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
    }
}