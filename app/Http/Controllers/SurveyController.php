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
       return redirect('/services');
    }


      public function getData(){
        $allData =Survey::all();
        // return view('serivces',compact('$allData'));
        return view('services',compact('allData'));
      }



      public function deleteData($id){
          $survey = Survey::find($id);
          $survey->delete();
          return back();
      }

      public function updateData(Request $req , $id){
            $survey = Survey::find($id);

            $survey->update([

       "name" => $req->input('name'),
       "email" =>$req->input('email'),
       "course" =>$req->input('course'),
       "batch" =>$req->input('batch'),
       "instructor" =>$req->input('instructor'),
       "branch" =>$req->input('branch'),

            ]);
            return back();

      }
}
