<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function prueba()
    {
        echo 'hola esto es una prueba';
    }
    public function api()
    {
        $usuarios = array(
            "usuario" => "pepe",
            "nombres" => "jose calderon",
            "ciudad" => "portoviejo",
            "direccion" => "los olivos",
            "telefono" => "+593987654321"
        );


        return $this->response->setJSON($usuarios);
    }

    public function login()
    {
        return view('login');
    }

    public function testbd($email, $contrasena)
    {
        $this->db = \Config\Database::connect();
        $query=$this->db->query("SELECT id, nombre, email, contrasena FROM public.usuario");
        $result=$query->getResult();
        return $this->response->setJSON($result);
        //echo "hola";
    }

}