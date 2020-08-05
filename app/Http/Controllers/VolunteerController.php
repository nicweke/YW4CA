<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VolunteerActivationRequest;

class VolunteerController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'phone_no' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address'=>'required',
            'message_body' => 'required'

        ]);

        //save to DB
        $volunteer = auth()->user()->volunteer()->create($request->all());

        //send email to admin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new VolunteerActivationRequest($volunteer));

        return redirect()->route('home')->withMessage('Create Shop Request Sent');

    }
}
