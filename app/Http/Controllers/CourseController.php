<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = [
            [
                'title'     => 'Laravel pour les debutants',
                'level'     => 'Debutant',
                'published' => true
            ],
        [
                'title'     => 'A la decouverte de Blade',
                'level'     => 'Debutant',
                'published' => false
            ],
        ];
        $prof = 'Aly Tall Niang';
        return view('courses.index',[
            'teacher' => $prof,
            'courses' => $courses
        ]);
    }
}
