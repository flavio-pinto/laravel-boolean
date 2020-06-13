<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller {
    private $students;
    private $genders;

    public function __construct() {
        $this->students = config('students.students'); //nome del file che sta in config e key dell'array che ci serve
        $this->genders = config('students.genders');
    }

    //Students page
    public function index() {
        $infos = [
            'students' => $this->students,
            'genders' => $this->genders
        ];
        
        return view('students.index', $infos);
    }

    //Detail student page
    public function show($slug) {
        $student = $this->searchStudent($slug, $this->students);
        if($student == false) {
            abort(404);
        }

        return view('students.show', compact('student'));
    }

    //Utilities
    //Check if student exist by id
    private function searchStudent($slug, $array) {
        foreach($array as $student) {
            if($student['slug'] == $slug) {
                return $student;
            }
        }
        return false;
    }
}
