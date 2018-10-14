@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="text-center">Edit Contact Message</h1>
    <div class="row">
      <div class="col-md-8 offset-2">

        <form action="{{ url('contact/message/update')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Sender Name:</label>
              <input type="hidden" class="form-control" name="message_id" value=" {{ $old_info->id }}" >
              <input type="text" class="form-control {{ $errors->has('sender_name') ? ' is-invalid' : '' }}" name="sender_name" value=" {{ $old_info->sender_name }}" >
              @if ($errors->has('sender_name'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('sender_name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sender Email:</label>
              <input type="text" class="form-control {{ $errors->has('sender_email') ? ' is-invalid' : '' }}" name="sender_email"  value=" {{ $old_info->sender_email }}">
              @if ($errors->has('sender_email'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('sender_email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sender Message:</label>
              <textarea type="text" class="form-control" name="sender_message"  > {{ $old_info->sender_message }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>

@endsection
