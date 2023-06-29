<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index()
    {
        $userid = session('userid');
        // $userid = '2';
        $personal = Personal::where('emp_id', '=', $userid)->first();
        $url = url('/employee/personal/');
        $data  = compact('personal', 'url');

        return view('personalform')->with($data);
    }

    public function update(Request $request)
    {
        // if ($e_id == null) {
        //     $userid = session('userid');
        // } else {
        //     $userid = $e_id;
        // }
        $userid = session('userid');
        $pers_id = Personal::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        $personal = Personal::find($id);
        $personal->firstname = $request['firstname'];
        $personal->lastname = $request['lastname'];
        $personal->emp_code = $request['emp_code'];
        $personal->department = $request['department'];
        $personal->designation = $request['designation'];
        $personal->organisation = $request['organisation'];
        $personal->phone = $request['phone'];
        $personal->address = $request['address'];
        $personal->state = $request['state'];
        $personal->district = $request['district'];
        $personal->pincode = $request['pincode'];
        $personal->email = $request['email'];
        $personal->fax = $request['fax'];
        $personal->save();

        return redirect('/employee/education');
    }
}
