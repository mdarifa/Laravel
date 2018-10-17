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
      <h3>Add Work</h3>
      <form action="{{ url('/admin/ourwork/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="about_title">Work Name :</label>
          <input type="text" class="form-control {{ $errors->has('work_image_name') ? ' is-invalid' : '' }}" id="work_image_name" name="work_image_name" placeholder="Enter Work Name">
          @if ($errors->has('work_image_name'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('work_image_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="about_title">Work Title :</label>
          <input type="text" class="form-control {{ $errors->has('work_image_title') ? ' is-invalid' : '' }}" id="work_image_title" name="work_image_title" placeholder="Enter Work Image Title>
          @if ($errors->has('work_image_title'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('work_image_title') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="about_point">Work Image</label>
          <input type="file" class="form-control" id="work_image" name="work_image">
        </div>
        <button type="submit" class="btn btn-primary">Add Work</button>
        </form>
    </div>
  </div>
</div>
@endsection
