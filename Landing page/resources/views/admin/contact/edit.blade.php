@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="text-center">Edit Contact Details</h1>
    <div class="row">
      <div class="col-md-8 offset-2">
        <form action="{{ url('/admin/contact/update')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Address:</label>
              <input type="hidden" class="form-control" name="contact_id" value=" {{ $old_info->id }}" >
              <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value=" {{ $old_info->address }}" >
              @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('address') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email:</label>
              <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value=" {{ $old_info->email }}">
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone:</label>
              <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"  value=" {{ $old_info->phone }}">
              @if ($errors->has('phone'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Facebook:</label>
              <input type="text" class="form-control {{ $errors->has('facebok') ? ' is-invalid' : '' }}" name="facebok"  value=" {{ $old_info->facebok }}">
              @if ($errors->has('facebok'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('facebok') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Twitter:</label>
              <input type="text" class="form-control {{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter"  value=" {{ $old_info->twitter }}">
              @if ($errors->has('twitter'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('twitter') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Google +:</label>
              <input type="text" class="form-control {{ $errors->has('google') ? ' is-invalid' : '' }}" name="google"  value=" {{ $old_info->google }}">
              @if ($errors->has('google'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('google') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Youtube:</label>
              <input type="text" class="form-control {{ $errors->has('youtube') ? ' is-invalid' : '' }}" name="youtube"  value=" {{ $old_info->youtube }}">
              @if ($errors->has('youtube'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('youtube') }}</strong>
                  </span>
              @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>

@endsection
