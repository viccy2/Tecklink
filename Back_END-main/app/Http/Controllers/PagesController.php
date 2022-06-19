<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Companies;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function index(){
        return view('Pages.homepage');
    }
    //company registration
    public function reg_company(Request $request)
    {
        
        $this->validate($request, [
           'company_name' => 'required',
           'company_industry' => 'required',
           'company_email' => 'required',
           'company_phone' => 'required',
           'company_state' => 'required',
           'company_country' => 'required',
           'company_password' => 'required'
           //'companyType' => 'required',
            ]);
            
            $company = new User;
            $company->firstName = $request->input('company_name');           
            $company->companyName = $request->input('company_name');
            $company->industry = $request->input('company_industry');
            $company->email = $request->input('company_email');
            $company->mobilePhoneNumber = $request->input('company_phone');
            $company->state = $request->input('company_state');
            $company->country = $request->input('company_country');
            $company->password = Hash::make($request->input('company_password'));
            $company->save();
            return redirect('login');
            
    }
    //custom company login
    public function log_company(Request $request)
    {

        $request->validate([
            'company_email' => 'required|string|email',
            'company_password' => 'required|string',
        ]);
        $company = Companies::where('companyEmail', $request->input('company_email'))->first();
        $password = Hash::check($request->input('company_password'), $company->companyPassword);
        if(!empty($company) && $password){
            $company->loggedIn = 'Yes';
            $company->save();
            return redirect('dashboardCompany');
        }
        else{
                return redirect('login')->with('error', 'Opps! You have entered invalid credentials');
            }
    }
    ///End of custom login for company
}
