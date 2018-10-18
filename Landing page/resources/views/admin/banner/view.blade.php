@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Banner Title</th>
          <th scope="col">Banner Details</th>
          <th scope="col">Banner Status</th>
          <th scope="col">Banner Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($banners as $banner)
        <tr>
          <td>{{ $banner->title }}</td>
          <td>{{ $banner->description }}</td>
          <td>
            @if($banner->status == 1)
              <span class="btn btn-danger">Deactive</span>
              @else
              <span class="btn btn-success">Active</span>
            @endif
          </td>
          <td> <img src="{{ asset('storage/')}}/{{ $banner->image }}" width="80px" alt="Image not found"> </td>
          <td>
            @if($banner->status == 1)
              <a href="{{ url('admin/banner/active')}}/{{ $banner->id}}" class="btn btn-success">Active</a>
              @else
              <a href="#" class="btn btn-danger">Deactive</a>
            @endif
          </td>
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
      <h3>Add Banner Section</h3>
      <form action="{{ url('/admin/banner/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Banner Title</label>
          <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Enter Banner Title">
          @if ($errors->has('title'))
              <span class="invalid-feedback" role="alert">
                  <strong style="font-size:16px;">{{ $errors->first('title') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="details">Banner Details</label>
          <textarea class="form-control" name="details" rows="3" placeholder="Enter your Banner Details" ></textarea>
        </div>
        <div class="form-group">
          <label for="image">Banner Image</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Add About</button>
        </form>
    </div>
  </div>
</div>
@endsection
