<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Personal;
use App\Models\Education;
use App\Models\Professional;

function func_alert($message)
{
    echo "<script>alert('$message');
    window.location.href = '/';
    </script>";
}

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $user = Login::where('username', '=', $request['username'])->where('password', '=', md5($request['password']))->first();
        if (!is_null($user)) {
            func_alert('USER already exists');
        }
        $register = new Login;
        $register->username = $request['username'];
        $register->password = md5($request['password']);
        $register->save();
        $personal = new Personal;
        $personal->emp_id = $register->id;
        // $personal->firstname = "";
        // $personal->lastname = "";
        // $personal->emp_code = "0";
        // $personal->department = "";
        // $personal->designation = "";
        // $personal->organisation = "";
        // $personal->phone = "0";
        // $personal->address = "";
        // $personal->state = "";
        // $personal->district = "";
        // $personal->pincode = "0";
        // $personal->email = "";
        // $personal->fax = "0";
        $personal->save();

        $education = new Education;
        $education->emp_id = $register->id;
        // $education->degree = "";
        // $education->subject = "";
        // $education->institute = "";
        // $education->pass_year = "0";
        // $education->duration = "";
        // $education->remark = "";
        $education->save();
        $professional = new Professional;
        $professional->emp_id = $register->id;
        // $professional->post = "";
        // $professional->office = "";
        // $professional->city = "";
        // $professional->start_date = "";
        // $professional->end_date = "";
        // $professional->type_of_charge = "";
        // $professional->work_handled = "";
        // $professional->contri = "";
        // $professional->remark = "";
        $professional->save();

        // Session::put('userid', $register->id);
        session(['userid' => $register->id]);

        return redirect('/employee/personal');
    }


    public function login(Request $request)
    {
        // $login = new Login;
        $user = Login::where('username', '=', $request['username'])->where('password', '=', md5($request['password']))->first();
        if (is_null($user)) {
            // echo '<script>alert("USER DOES NOT EXIST. REGISTER FIRST")</script>';
            func_alert('USER NOT FOUND. Please sign up');
        }

        // if (is_null($user)) {
        //     return redirect('/');
        // } 
        else {
            session(['userid' => $user->id]);
            return redirect('/employee/personal');
        }
    }
}
