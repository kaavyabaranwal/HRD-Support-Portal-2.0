<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    public function index()
    {
        $userid = session('userid');
        // $userid = '2';
        $professional = Professional::where('emp_id', '=', $userid)->first();
        $url = url('/employee/professional/');
        $data  = compact('professional', 'url');
        return view('professionalform')->with($data);
    }

    public function update(Request $request)
    {
        $userid = session('userid');
        $pers_id = Professional::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        $professional = Professional::find($id);
        $professional->post = $request['post'];
        $professional->office = $request['office'];
        $professional->city = $request['city'];
        $professional->start_date = $request['start_date'];
        $professional->end_date = $request['end_date'];
        $professional->type_of_charge = $request['type_of_charge'];
        $professional->work_handled = $request['work_handled'];
        $professional->contri = $request['contribution'];
        $professional->remark = $request['remark2'];
        $professional->save();

        return redirect('/users');
    }
}
