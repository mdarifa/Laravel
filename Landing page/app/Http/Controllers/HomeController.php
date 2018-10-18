<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\About;
use App\Work;
use App\Testimonial;
use Carbon\Carbon;
use App\Contact;
use App\Service;
use App\header;
use Auth;
use Hash;
use App\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function contactmessageview()
    {
        $messages = Message::paginate(5);
        $deleted_message = Message::onlyTrashed()->get();
        return view('admin/message/view', compact('messages','deleted_message'));
    }
    public function contactmessagedelete($message_id)
    {
        Message::find($message_id)->delete();
        return back();
    }
    public function contactmessagemarkasread($message_id)
    {
        Message::find($message_id)->update([
          'message_status' => 2
        ]);
        return back();
    }
    public function contactmessageedit($message_id)
    {
        $old_info = Message::findOrFail($message_id);
        return view('admin/message/edit', compact('old_info'));
    }

    public function contactmessageupdate(Request $request)
    {
      $request->validate([
        'sender_name' => 'required',
        'sender_email' => 'required | email',
        'sender_message' => 'required'
      ]);
      $message_id = $request->message_id;
      $sender_name = $request->sender_name;
      $sender_email = $request->sender_email;
      $sender_message = $request->sender_message;
      Message::where('id','=',$message_id)->update([
        'sender_name' => $sender_name,
        'sender_email' => $sender_email,
        'sender_message' => $sender_message,
      ]);
      return back();
    }


    public function contactmessagerestore($message_id)
    {
        Message::onlyTrashed()->where('id',$message_id)->restore();
        return back();
    }
    public function adminabout()
    {
        $abouts = About::all();
        return view('admin.about.view', compact('abouts'));
    }
    public function adminaboutinsert(Request $request)
    {
      $newinfoid = About::insertGetId([
        "about_title" => $request->about_title,
        "about_details" => $request->about_details,
        "about_point" => $request->about_point,
        "created_at" => Carbon::now()
      ]);
      if($request->hasFile('about_image')){
        $path = $request->file('about_image')->store('front_images');
        About::find($newinfoid)->update([
          'about_image' => $path
        ]);
        return back();
      }
      return back();
    }
    public function adminaboutactive($about_id)
    {
      About::where('about_status',2)->update([
        "about_status" => 1
      ]);

      About::find($about_id)->update([
        "about_status" => 2
      ]);
      return back();
    }


    public function admincontact()
    {
      $old_info = Contact::findOrFail(1);
      return view('admin/contact/edit', compact('old_info'));
    }

    public function admincontactupdate(Request $request)
    {
      $request->validate([
        'address' => 'required',
        'email' => 'required | email',
        'phone' => 'required',
        'google' => 'required',
        'facbok' => 'required',
        'twitter' => 'required',
        'youtube' => 'required',
      ]);
      Contact::find(1)->update([
        'address'  => $request->address,
        'email' => $request->email,
        'phone' => $request->phone,
        'facebok' => $request->facebok,
        'twitter' => $request->twitter,
        'google' => $request->google,
        'youtube' => $request->youtube,
      ]);
      return back();
    }

    public function admintestimonial()
    {
      $testimonials = Testimonial::all();
      return view('admin.testimonial.view', compact('testimonials'));
    }


    public function admintestimonialinsert(Request $request)
    {
      $newinfoid = Testimonial::insertGetId([
        "name" => $request->name,
        "details" => $request->details,
        "created_at" => Carbon::now()
      ]);
      if($request->hasFile('image')){
        $path = $request->file('image')->store('front_images');
        Testimonial::find($newinfoid)->update([
          'image' => $path
        ]);
        return back();
      }
      return back();
    }

    public function adminourwork()
    {
       $ourworks = Work::all();
       return view('admin.our works.view', compact('ourworks'));
    }

    public function adminourworkinsert(Request $request)
    {
      $newinfoid = Work::insertGetId([
        "work_image_name" => $request->work_image_name,
        "work_image_title" => $request->work_image_title,
        "created_at" => Carbon::now(),
      ]);
      if($request->hasFile('work_image')){
        $path = $request->file('work_image')->store('front_images');
        Work::find($newinfoid)->update([
          'work_image' => $path,
        ]);
        return back();
      }
      return back();
    }
    public function adminservice()
    {

       $services = Service::all();
       return view('admin.service.view', compact('services'));
    }

    public function adminserviceinsert(Request $request)
    {
      $newinfoid = Service::insertGetId([
        "service_title" => $request->service_title,
        "service_details" => $request->service_details,
        "created_at" => Carbon::now(),
      ]);
      if($request->hasFile('service_image')){
        $path = $request->file('service_image')->store('front_images');
        Service::find($newinfoid)->update([
          'service_image' => $path,
        ]);
        return back();
      }
      return back();
    }

    public function adminbanner()
    {
       $banners = header::all();
       return view('admin.banner.view', compact('banners'));
    }

    public function adminbannerinsert(Request $request)
    {
      $newinfoid = header::insertGetId([
        "title" => $request->title,
        "description" => $request->details,
        "created_at" => Carbon::now()
      ]);
      if($request->hasFile('image')){
        $path = $request->file('image')->store('front_images');
        header::find($newinfoid)->update([
          'image' => $path
        ]);
        return back();
      }
      return back();
    }

    public function adminbanneractive($banner_id)
    {
      header::where('status',2)->update([
        "status" => 1
      ]);

      header::find($banner_id)->update([
        "status" => 2
      ]);
      return back();
    }
    public function changepassword()
    {
    return view('admin.changepassword.view');
    }
    public function changepasswordupdate(Request $request)
    {
      $request->validate([
        'old_password' => 'required',
        'new_password' => 'required | min:6 | max:15',
        'confirm_password' => 'required | same:new_password'
      ]);
      if(Hash::check($request->old_password, Auth::user()->password)){
        User::find(Auth::user()->id)->update([
          'password' => bcrypt($request->new_password),
        ]);
        return back()->with('status',"Password change successfully!");
      }
      else {
        return back()->withErrors();
      }
    }


}
