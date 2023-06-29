<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $userid = session('userid');
        // $userid = '2';
        $education = Education::where('emp_id', '=', $userid)->first();
        $url = url('/employee/education/');
        $data  = compact('education', 'url');
        return view('educationform')->with($data);
    }
    public function update(Request $request)
    {
        $userid = session('userid');
        $pers_id = Education::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        $education = Education::find($id);
        $education->degree = $request['degree'];
        $education->subject = $request['subject'];
        $education->institute = $request['institute'];
        $education->pass_year = $request['pass_year'];
        $education->duration = $request['duration'];
        $education->remark = $request['remark1'];
        $education->save();

        return redirect('/employee/professional');
    }
}
