@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">About Title</th>
          <th scope="col">About Details</th>
          <th scope="col">About Status</th>
          <th scope="col">About Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($abouts as $about)
        <tr>
          <td>{{ $about->about_title }}</td>
          <td>{{ $about->about_details }}</td>
          <td>{{ $about->about_status }}</td>
          <td> <img src="{{ asset('storage/')}}/{{ $about->about_image }}" width="80px" alt="Image not found"> </td>
          <td> <a href="#">Active</a> </td>
        </tr>
        @empty
          <tr>
            <td class="text-center" colspan="5">There is no value</td>
          </tr>
          @endforelse
      </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <h3>Add About Section</h3>
      <form action="{{ url('/admin/about/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="about_title">About Title</label>
          <input type="text" class="form-control {{ $errors->has('about_title') ? ' is-invalid' : '' }}" id="about_title" name="about_title" placeholder="Enter About Title">
          @if ($errors->has('about_title'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('about_title') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="about_details">About Details</label>
          <textarea class="form-control" name="about_details" rows="3" placeholder="Enter your About Details" ></textarea>

        </div>
        <div class="form-group">
          <label for="about_point">About Point</label>
          <input type="text" class="form-control" id="about_point" name="about_point" placeholder="Enter About Point">

        </div>
        <div class="form-group">
          <label for="about_point">About Image</label>
          <input type="file" class="form-control" id="about_image" name="about_image">

        </div>

        <button type="submit" class="btn btn-primary">Add About</button>
        </form>
    </div>
  </div>
</div>

@endsection
