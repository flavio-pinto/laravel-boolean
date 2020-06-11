<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller {
    private $students;

    public function __construct() {
        $this->students = config('students');
    }

    //Students page
    public function index() {
        $students = $this->students;
        return view('students.index', compact('students'));
    }
    //Detail student page
    public function show($id) {
        return view('students.show');
    }
}
