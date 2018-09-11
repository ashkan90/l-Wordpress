@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h4 class="title">Edit Profile</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('update.user', ['id' => $user->id]) }}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>User Status</label>
                <input type="text" class="form-control" disabled="" value="@if($user->isAdmin()) Admin @else User @endif">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username" value="{{ $user->name }}" required>
              </div>
            </div>
            <div class="col-md-4">
            	<div class="form-group">
            		<label for="password">Password</label>
            		<input type="text" name="password" class="form-control" value="{{ $user->password }}" required>
            	</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="surname" value="{{ $user->surname }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Hobbies</label>
                <input type="text" class="form-control" name="hobby" value="{{ $user->profile->hobbies }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Site</label>
                <input type="text" class="form-control" name="site" value="{{ $user->contact_site }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Short Biography/About Me</label>
                <textarea rows="4" cols="80" class="form-control" name="about" placeholder="Short Bio">{{ $user->profile->about }}</textarea>
              </div>
            </div>
          </div>  
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card  card-user">
      <div class="card-body ">
        <p class="card-text">
          <div class="author">
            <div class="block block-one"></div>
            <a href="#">
              <img class="avatar" src="@if(isset($user->profile->avatar)){{ asset($user->profile->avatar) }} @endif" alt="{{ str_slug($user->profile->avatar) }}">
              <h5 class="title">{{ $user->name }}</h5>
            </a>
            <p class="description">
              <a href="{{ $user->contact_site }}" class="link">{{ $user->contact_site }}</a>
            </p>
          </div>
        </p>
        <p class="card-description">
          {{ $user->profile->about }}
        </p>
        <p class="card-description">
          <b>{{ ucwords($user->firstname) }} {{ ucwords($user->surname) }}</b>
        </p>
        <p class="card-description">
          <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
        </p>
      </div>
      <div class="card-footer ">
        <div class="button-container">
          <button class="btn  btn-round btn-facebook">
            Update
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
@endsection