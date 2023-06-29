<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        return view('trainings');
    }
    public function insert(Request $request)
    {
        $training = new Training;
        $training->title = $request['title'];
        $training->t_start = $request['t_start'];
        $training->t_end = $request['t_end'];
        $training->circular = $request['circular'];
        $training->department = $request['department2'];
        $training->organiser = $request['organiser'];
        $training->t_desc = $request['t_desc'];
        $training->t_type = $request['t_type'];
        $training->t_place = $request['t_place'];
        $training->speaker = $request['speaker'];
        $training->save();
        return redirect('trainings/view');

    }

    public function view(){
        $trainingdet = Training::paginate(10);
        $data = compact('trainingdet');

        return view('view-trainings')->with($data);
    }

    public function delete($id){
        $training = Training::find($id);
        $training->delete();

        return redirect('trainings/view');
    }
}
