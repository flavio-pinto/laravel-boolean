<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller {
    //Students filtered by gender endpoint 
    public function gender(Request $request) { //Request è una classe che porta utility per accedere ai dati nel body della richiesta
        $students = config('students.students');
        $genders = config('students.genders');

        //Request data
        //$data = $request->all(); //quando chiamiamo l'endpoint con la chiamata POST da JQuery e passiamo nel data di JQuery il genere, questi data vengono ottenuti con il metodo all() e vengono passati all'oggetto $data che diventa un array di chiavi-valori
        $gender = $request->input('filter'); //in questo caso usiamo il metodo input perché ci serve solo un dato, quello del genere. 
        
        $result = [
            'error' => '',
            'response' => []
        ];

        if(in_array($gender, $genders)) { //controlla se il valore $gender si trova nell'array $genders
            if($gender == 'all') {
                $result['response'] = $students;
            }else {
                foreach($students as $student) {
                    if($student['genere'] == $gender) {
                        $result['response'][] = $student;
                    }
                }
            }
        }else {
            $result['error'] = 'Filter not alloweds with this value';
        }

        return response()->json($result); //converto in formato json 
    }
}
