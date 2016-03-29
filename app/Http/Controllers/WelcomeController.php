<?php

namespace CodeCommerce\Http\Controllers;


class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function exemplo()
    {
        return "Olá mundo!!";
    }    
}