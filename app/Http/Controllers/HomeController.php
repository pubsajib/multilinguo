<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __construct() {
        $this->middleware('auth')->except('loginregister');
    }
    public function index() {
        return view('home');
    }
    public function loginregister() {
        return view('pages.loginregister');
    }
    public function student() {
        return view('pages.student');
    }
    public function teacher() {
        return view('pages.teacher');
    }
}
