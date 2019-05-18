@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header bg-primary text-white text-center">Mail Box</div>

        <div class="card-body">
          <a href="{{route('mail.create')}}" class="btn btn-success">Create New Mail</a><br><br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">E-Mail Address</th>
                <th scope="col">Body</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mails as $mail)
              <tr>
                <td>{{$mail->subject}}</td>
                <td>{{$mail->target_mail}}</td>
                <td>{{ str_limit(($mail->body),50)}}</td>
                <td>
                  <form action="{{ route('mail.destroy', $mail->id)}}" onclick="return confirm('Are you sure?')" method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                    <button class=" btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div><br>
      {{ $mails->links() }}
    </div>
  </div>
</div>
@endsection