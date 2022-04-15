<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\announcement;
use App\Models\contact;
class usercontroller extends Controller
{


    function getData(Request $req)
    {
        $req -> validate([
            'full_name' => 'required | min:5 | max:50',

            'Registration_number' => 'required| numeric | unique:members',

           'email' => 'required|email|unique:members',

            'phone' => 'required| numeric|unique:members',

            'branch' => 'required'


        ]);
  
          $member = new member();
          $member->Name = $req->full_name;
          $member->Registration_number = $req->Registration_number;
          $member->Email = $req->email;
          $member->Branch = $req->branch;
          $member->Phone = $req->phone;
 
          $member->save();

         return redirect('students');

        }

    function contactData(Request $req)
    {
        $req -> validate([
             
              'name' => 'required',
              'email' => 'required|email',
              'subject' => 'required | min:5 | max:20',
              'message' => 'required|min:30| max:300'

        ]);

       $name = $req ->name;

      $contact = new contact();
      $contact->subject = $req->subject;
      $contact->name = $req->name;
      $contact->email = $req->email;
      $contact->message = $req->message;

      $contact->save();



        echo "<div style=' position: absolute;
        top:20%;
        left:50%;
        transform: translate(-50%, -50%);
        color:#fff;
        background:#bd7524;
        padding:0 10px;
        border-radius:5px;
        font-family:poppins'>
            <h1>THANK YOU FOR CONTACTING US $name</h1>
            <div style='text-align: center;
            '>
        <a style='font-size:20px;text-decoration: none; color:#bd7524; background:#fff;padding:5px 10px;border-radius:5px;' href='/index'>Home</a></div>
        </div>
        
        ";
    }

    function announceData(Request $req)
    {
        $req -> validate([
             
           
            'subject' => 'required | min:5 | max:20',
            'message' => 'required|min:30| max:300'

      ]);
       
      $subject = $req->subject;

      $announce = new announcement();
      $announce->subject = $req->subject;
      $announce->message = $req->message;

      $announce->save();
      


      echo "<div style=' position: absolute;
      top:20%;
      left:50%;
      transform: translate(-50%, -50%);
      color:#fff;
      background:#bd7524;
      padding:0 10px;
      border-radius:5px;
      font-family:poppins'>
          <div style='text-align:center;margin-top:10px;;'> <span style=' background:#fff;color:#bd7524;padding:5px;font-size:26px;border-radius:5px '>$subject</span></div>
           <br><h1> Anouncement Uploaded Successfully</h1>
          <div style='text-align: center;
          '>
      <a style='font-size:20px;text-decoration: none; color:#bd7524; background:#fff;padding:5px 10px;border-radius:5px;' href='/index'>Home</a></div>
      </div>";


    }

    function assignmentData(Request $req)
    {
        $req -> validate([
            
            'option' => 'required|in:option1,option2,option3,option4,option5,option6,option7,option8,option9',
            'assignment' => 'required'
        ]);

        echo "<div style=' position: absolute;
        top:20%;
        left:50%;
        transform: translate(-50%, -50%);
        color:#fff;
        background:#bd7524;
        padding:0 10px;
        border-radius:5px;
        font-family:poppins'>
            <h1>Assignment Uploaded Successfully</h1>
            <div style='text-align: center;
            '>
        <a style='font-size:20px;text-decoration: none; color:#bd7524; background:#fff;padding:5px 10px;border-radius:5px;' href='/index'>Home</a></div>
        </div>";
    }

    function docData(Request $req)
    {
        $req -> validate([
           
            'fullname' => 'required',
            'contact' => 'required | numeric',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required|numeric',
            'country' => 'required',
            'school' => 'required',
            'certificate' => 'required',
            'school1' => 'required',
            'certificate1' => 'required'

        ]);

        echo "<div style=' position: absolute;
        top:20%;
        left:50%;
        transform: translate(-50%, -50%);
        color:#fff;
        background:#bd7524;
        padding:0 10px;
        border-radius:5px;
        font-family:poppins'>
            <h1>Document Uploaded Successfully</h1>
            <div style='text-align: center;
            '>
        <a style='font-size:20px;text-decoration: none; color:#bd7524; background:#fff;padding:5px 10px;border-radius:5px;' href='/index'>Home</a></div>
        </div>";
    }
}
