@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Testimonial Name</th>
          <th scope="col">Testimonial Details</th>
          <th scope="col">Testimonial Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($testimonials as $testimonial)
        <tr>
          <td>{{ $testimonial->name }}</td>
          <td>{{ $testimonial->details }}</td>
          <td> <img src="{{ asset('storage/')}}/{{ $testimonial->image }}" width="80px" alt="Image not found"> </td>
          <td>
            <a class="btn btn-warning" href="#">Edit</a> | <a class="btn btn-danger" href="#">Delete</a>
          </td>
        </tr>
        @empty
          <tr>
            <td class="text-center" colspan="4">There is no value</td>
          </tr>
          @endforelse
      </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <h3>Add Testimonial</h3>
      <form action="{{ url('/admin/testimonial/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="about_title">Testimonial Name :</label>
          <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Enter Testimonial Name">
          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="about_details">Testimonial Details</label>
          <textarea class="form-control" name="details" rows="3" placeholder="Enter your Testimonial Details" ></textarea>
        </div>
        <div class="form-group">
          <label for="about_point">Testimonial Image</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Add Testimonial</button>
        </form>
    </div>
  </div>
</div>
@endsection
