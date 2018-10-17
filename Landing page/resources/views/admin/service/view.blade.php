@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Service Title</th>
          <th scope="col">Service Details</th>
          <th scope="col">Service Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($services as $service)
        <tr>
          <td>{{ $service->service_title }}</td>
          <td>{{ $service->service_details }}</td>
          <td> <img src="{{ asset('storage/')}}/{{ $service->service_image }}" width="80px" alt="Image not found"> </td>
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
      <h3>Add Service</h3>
      <form action="{{ url('/admin/service/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="service_title">Service Title :</label>
          <input type="text" class="form-control {{ $errors->has('service_title') ? ' is-invalid' : '' }}" id="service_title" name="service_title" placeholder="Enter Service Title">
          @if ($errors->has('service_title'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('service_title') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="about_details">Service Details</label>
          <textarea class="form-control" name="service_details" rows="3" placeholder="Enter your Service Details" ></textarea>
        </div>
        <div class="form-group">
          <label for="service_image">Service Image</label>
          <input type="file" class="form-control" id="service_image" name="service_image">
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
        </form>
    </div>
  </div>
</div>
@endsection
