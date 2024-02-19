<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use PDF;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;
use App\Models\Company;
class Usercontroller extends Controller
{
    public function profile(Request $req)
    {
        $email= Session('email');

        $user=Register::where('email','=',$email)->first();
    
        
        return view('profile',compact('user'));
    }






    // Update User Profile logic
    public function changeProfile(Request $req)
    {
        $email= Session('email');

        $user=Register::where('email','=',$email)->first();
        $username=$req->username;
        $email=$req->email;
        $mob=$req->mob_no;
      Register::where('email', $email)->update(['username' => $username,'email'=> $email,'mob_no' => $mob]);
      return redirect('profile');

    }


    public function contact(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);

        contact::create($req->all());


           // Generate PDF
        $pdfPath = $this->generatePdf($validatedData);
        

        // Send email with attached PDF
        Mail::to($validatedData['email'])
            ->send(new ContactMail($validatedData, $pdfPath));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message Send Successfully!');
    }

 private function generatePdf($data)
    {
        // Generate PDF
        $pdf = PDF::loadView('pdf.contact', ['data' => $data]); // Assuming your PDF view is in the 'pdf' folder

        // Save or send the PDF as needed
        $pdfPath = storage_path('app/public/contact.pdf');
        $pdf->save($pdfPath);

        return $pdfPath;
    }
    
    public function home(Request $req)
    {
       $company=company::all();
       return view('home',compact('company'));

    }   

    public function It_compay(Request $req)
    {

        $company=company::where('category', '=','IT')->get();

       return view('category.It_cat',compact('company'));

    }

    public function textile(Request $req)
    {
        $company=company::where('category', '=','textile')->get();
        

       return view('category.textile_cat',compact('company'));
    }

    public function Automobile(Request $req)
    {
        $company=company::where('category', '=','Automobile')->get();


        

       return view('category.Automobile',compact('company'));

    }

     public function media(Request $req)
    {
        $company=company::where('category', '=','Media')->get();
        


        

       return view('category.media',compact('company'));

    }

     public function pepar(Request $req)
    {
        $company=company::where('category', '=','Pepar')->get();
    
        


        

       return view('category.pepar',compact('company'));

    }

    }

