@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="text-center">View Contact Message</h1>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Sender Name</th>
            <th scope="col">Sender Email</th>
            <th scope="col">Sender Mesage</th>
            <th scope="col">Send At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($messages as $message)
            @if($message->message_status == 1)
            <tr class="bg-dark">
              <th scope="row">{{ $message->id }}</th>
              <td>{{ $message->sender_name }}</td>
              <td>{{ $message->sender_email }}</td>
              <td>{{ $message->sender_message }}</td>
              <td>{{ $message->created_at->diffForHumans() }}</td>
              <td>
              @if($message->updated_at)
               {{ $message->updated_at->diffForHumans() }}
               @else
               Not updated yet
              @endif
              </td>

              <td>
                <a class="btn btn-outline-primary"  href="{{ url('contact/message/markasread')}}/{{ $message->id}} ">Mark as Read</a> |
                <a class="btn btn-outline-light"  href="{{ url('contact/message/edit')}}/{{ $message->id}} ">Edit</a> |
                <a class="btn btn-outline-danger" href="{{ url('contact/message/delete')}}/{{ $message->id}} ">Delete</a>
              </td>
            </tr>
            @else
            <tr class="bg-primary" >
              <th scope="row">{{ $message->id }}</th>
              <td> <del>{{ $message->sender_name }}</del> </td>
              <td> <del>{{ $message->sender_email }}</del> </td>
              <td> <del>{{ $message->sender_message }}</del> </td>
              <td> <del>{{ $message->created_at->diffForHumans() }}</del> </td>
              <td><del>
              @if($message->updated_at)
               {{ $message->updated_at->diffForHumans() }}
               @else
               Not updated yet
              @endif
              </td> </del>

              <td>
                <a class="btn btn-outline-light" href="{{ url('contact/message/edit')}}/{{ $message->id}} ">Edit</a> |
                <a class="btn btn-outline-danger" href="{{ url('contact/message/delete')}}/{{ $message->id}} ">Delete</a>
              </td>
            </tr>
            @endif
            @empty
            <tr>
              <td class="text-center" colspan="7">There is no value</td>
            </tr>
          @endforelse

        </tbody>
        </table>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="col-4 offset-4">
                {{ $messages->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <h1 class="text-center">View Deleted Message</h1>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Sender Name</th>
            <th scope="col">Sender Email</th>
            <th scope="col">Sender Mesage</th>
            <th scope="col">Send At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($deleted_message as $message)
            <tr class="bg-danger">
              <th scope="row">{{ $message->id }}</th>
              <td>{{ $message->sender_name }}</td>
              <td>{{ $message->sender_email }}</td>
              <td>{{ $message->sender_message }}</td>
              <td>{{ $message->created_at->diffForHumans() }}</td>
              <td>
              @if($message->updated_at)
               {{ $message->updated_at->diffForHumans() }}
               @else
               Not updated yet
              @endif
              </td>
              <td>
                <a class="btn btn-outline-light"  href="{{ url('contact/message/restore')}}/{{ $message->id}} ">Restore</a>
              </td>
            </tr>
            @empty
            <tr>
              <td class="text-center" colspan="7">There is no value</td>
            </tr>
          @endforelse

        </tbody>
        </table>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="col-4 offset-4">
                {{ $messages->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
