<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use App\Mail\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function main()
    {
        return view('volunteer.intro');
    }
    public function sign()
    {
        return view('volunteer.sign');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'number'=> 'required',
            'message_body'=>'required'
        ]);

        
        $contact = new Contact();

        //$contact->contact_number = uniqid('ContactNumber-');

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->message_body = $request->input('message_body');

        $contact->user_id = auth()->id();
        $contact->save();



        //save to DB
        //$contact = auth()->user()->contact()->create($request->all());

        //send email to admin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new ContactRequest($contact));

        return redirect()->route('home')->withMessage('We have received your request. Kindly wait as we connect you with our team member.');

    }
}
