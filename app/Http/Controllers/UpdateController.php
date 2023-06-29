<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Login;
use App\Models\Personal;
use App\Models\Professional;
use Illuminate\Support\Facades\DB;


class UpdateController extends Controller
{
    public function view()
    {
        // $userdet = Personal::paginate(10);
        $userdet = DB::table('personal')->join('education', 'personal.emp_id', '=', 'education.emp_id')->paginate(10);
        // echo "<pre>";
        // print_r($userdet->toJson(JSON_PRETTY_PRINT));
        $data = compact('userdet');
        return view('users')->with($data);

    }

    public function updatepersonal($id)
    {
        $userid = $id;
        $pers_id = Personal::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        // $personal = Personal::find($id);
        $personal = Personal::find($id);
        $url = url('/employee/personal/edit') . "/" . $id;
        $data = compact('personal', 'url');
        return view('personalform')->with($data);
    }
    public function editpersonal($id, Request $request)
    {
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
        // return redirect('/employee/education/update')."/".$id;
        return to_route('update2', ['id' => $personal->emp_id]);
    }
    public function updateeducation($id)
    {
        $userid = $id;
        $pers_id = Education::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        $education = Education::find($id);
        $url = url('/employee/education/edit') . "/" . $id;
        $data = compact('education', 'url');
        return view('educationform')->with($data);
    }
    public function editeducation($id, Request $request)
    {
        $education = Education::find($id);
        $education->degree = $request['degree'];
        $education->subject = $request['subject'];
        $education->institute = $request['institute'];
        $education->pass_year = $request['pass_year'];
        $education->duration = $request['duration'];
        $education->remark = $request['remark1'];
        $education->save();

        return to_route('update3', ['id' => $education->emp_id]);
    }
    public function updateprofessional($id)
    {
        $userid = $id;
        $pers_id = Professional::where('emp_id', '=', $userid)->first();
        $id = $pers_id->id;
        $professional = Professional::find($id);
        $url = url('/employee/professional/edit') . "/" . $id;
        $data = compact('professional', 'url');
        return view('professionalform')->with($data);
    }
    public function editprofessional($id, Request $request)
    {
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

    public function delete($id){
        $employee = Login::find($id);
        $employee->delete();

        return redirect('/users');
    }
}
