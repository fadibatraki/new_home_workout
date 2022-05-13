<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        //
    }




    public function store(Request $request)
    {
        $question=new Question();
        $question->gender=        $request->input('gender');
        $question->age=           $request->input('age');
        $question->weight=        $request->input('weight');
        $question->height=        $request->input('height');
        $question->bodyshape=     $request->input('bodyshape');
        $question->focusgoal=     $request->input('focusgoal');
        $question->targetweight=        $request->input('targetweight');
        $question->workoutdays=        $request->input('workoutdays');
        $question->sensitivecases=        $request->input('sensitivecases');
        $question->save();
    }


    public function show(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
