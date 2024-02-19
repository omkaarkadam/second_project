<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function company(Request $req)
    {
            $file=$req->file('companyImage');

            $file->move(public_path('uploade'), $file->getClientOriginalName());
            $file= $file->getClientOriginalName();
            
            $company = new Company();
            $company->category=$req->category;
            $company->companyName=$req->companyName;
            $company->companyImage=$file;
            $company->email=$req->email;
            $company->contact=$req->contact;

            $company->price=$req->price;
            $company->location=$req->location;
            $company->duration=$req->duration;
            $company->availability=$req->availability;
            $company->description=$req->description;
            $company->save();
            return redirect()->back()->with('success','Company Add successfully');
    }
    


    public function show($companyName)
    {
        // Fetch company details based on $companyName and pass them to the view
        $company = Company::where('CompanyName', $companyName)->first();
        
        return view('show', compact('company'));
    }

    
}
