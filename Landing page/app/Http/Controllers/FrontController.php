<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\About;
use App\Contact;
use App\Testimonial;
use Carbon\Carbon;
use App\Work;

class FrontController extends Controller
{
    public function forntpage()
    {
      $about_info = About::where('about_status', 2)->firstorFail();
      $testimonials = Testimonial::all();
      $contact_info = Contact::find(1)->firstorFail();

      return view('index',compact('about_info','contact_info','testimonials'));
    }

    public function team()
    {
      return view('team');
    }
    public function contactformsubmit()
    {
      $sender_name = $_POST['sender_name'];
      $sender_email = $_POST['sender_email'];
      $sender_message = $_POST['sender_message'];
      Message::insert([
        "sender_name" => $sender_name,
        "sender_email" => $sender_email,
        "sender_message" => $sender_message,
        "created_at" => Carbon::now()
      ]);
      $msg = "<input type='button' class='rab' value='Raise alert'>";
      return back()->with('status',$msg);

    }
}
