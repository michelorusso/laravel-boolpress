<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // controller privati solo per utenti loggati
    // metodo index che sarà la pagina principale in cui gli utenti atterreranno una volta loggati
    public function index() {


        return view('admin.home');
    }
}
