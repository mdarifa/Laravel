@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="text-center">Change Password</h1>
    <div class="row">
      <div class="col-md-6 offset-3">
        <form action="{{ route('changepasswordupdate')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="old_password">Old Password:</label>
              <input type="password" class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" >
              @if ($errors->has('old_password'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('old_password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label for="new_password">New Password:</label>
              <input type="password" class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password" >
              @if ($errors->has('new_password'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('new_password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label for="confirm_password">Confirm Password:</label>
              <input type="password" class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password" >
              @if ($errors->has('confirm_password'))
                  <span class="invalid-feedback" role="alert">
                      <strong style="font-size:16px;">{{ $errors->first('confirm_password') }}</strong>
                  </span>
              @endif
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
          </form>
      </div>
    </div>
  </div>

@endsection
