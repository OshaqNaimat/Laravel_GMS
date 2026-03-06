<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function createSurvey(Request $req){
       $formfield = [
       "name" => $req->input('name'),
       "email" =>$req->input('email'),
       "course" =>$req->input('course'),
       "batch" =>$req->input('batch'),
       "instructor" =>$req->input('instructor'),
       "branch" =>$req->input('branch'),
       ];

       Survey::create($formfield);
    }


}
