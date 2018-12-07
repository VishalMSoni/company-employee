<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addEmployee(Request $request)
    {
        return view('/employee');
    }
    
    public function addCompany(Request $request)
    {
        return view('/company');
    }

    public function addEmployeeData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $city = $request->city;
        $state = $request->state;
        $experience = $request->experience;
        $ctc = $request->ctc;
        $cname = $request->cname;

        $data=array('name'=>$name, 
                    "email"=>$email, 
                    "city"=>$city, 
                    "state"=>$state, 
                    "experience"=>$experience, 
                    "ctc"=>$ctc,
                    "company"=>$cname);

        DB::table('employee')->insert($data);
        return redirect()->to('home');    
    }

    public function addCompanyData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $city = $request->city;
        $state = $request->state;

        $data=array('name'=>$name, 
                    "email"=>$email, 
                    "city"=>$city, 
                    "state"=>$state);

        DB::table('company')->insert($data); 
        Mail::to($email)->send(new SendMailable($name,$city,$state));
        return redirect()->to('home');           
    }

    public function showData(Request $request)
    {
        $employeeData = DB::select('select * from employee');
        $companyData = DB::select('select * from company');
        return view('data', compact('employeeData', 'companyData'));    
    }

    public function editEmployeeData(Request $request)
    {
        $email = $request->email;
        $data = DB::table('employee')->where('email', $email)->first();
        return view('edit', compact('data'));    
    }            

    public function updateEmployeeData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $city = $request->city;
        $state = $request->state;
        $experience = $request->experience;
        $ctc = $request->ctc;
        $cname = $request->cname;

        $data=array('name'=>$name, 
                    "email"=>$email, 
                    "city"=>$city, 
                    "state"=>$state, 
                    "experience"=>$experience, 
                    "ctc"=>$ctc,
                    "company"=>$cname);
        
        DB::table('employee')->where('email', $email)->update($data);
        return redirect()->to('home');    
    }
}