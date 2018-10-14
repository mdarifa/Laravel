<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

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

}
