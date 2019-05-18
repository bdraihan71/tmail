@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header bg-primary text-white text-center">Ceate New Mail</div>

        <div class="card-body">



          @if (count($errors) > 0 )
          <ul class="list-unstyled">
            @foreach($errors->all() as $error)
            <li class="alert alert-danger " role="alert"> {{$error}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </li>
            @endforeach
          </ul>
          @endif
          
          <form method="POST" action="{{ route('mail.store') }}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">E-Mail</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="target_mail" value="{{ old('target_mail') }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Subject</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Body</label>
              <div class="col-md-6">
                <textarea class="form-control" rows="5" id="body" name="body" }}>{{ old('body') }}</textarea>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-success">
                  Send
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection