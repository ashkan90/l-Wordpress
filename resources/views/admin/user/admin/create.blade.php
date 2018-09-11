@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h4 class="title">Create New Profile|User</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('store.user') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Username" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Hobbies</label>
                <input type="text" class="form-control" name="hobbies" placeholder="Karate, Judo, Read Book, Play Chess">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="some@email.com" required>
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
            <div class="block block-two"></div>
            <div class="block block-three"></div>
            <div class="block block-four"></div>
            <a href="#">
              <img class="avatar" src="{{ asset('assets/img/anime6.png') }}" alt="...">
              <h5 class="title"></h5>
            </a>
            <p class="description">
              <div class="form-group">
                <label>Site</label>
                <input type="text" class="form-control" name="contact_site" placeholder="http://www.sitename.com">
              </div>
            </p>
          </div>
        </p>
        <p class="card-description">
          <div class="form-group">
            <label>About Me</label>
            <textarea rows="4" cols="80" name="about" class="form-control" placeholder="Short Bio"></textarea>
          </div>
        </p>
      </div>
      <div class="card-footer ">
        <div class="button-container">
          <button href="#" class="btn btn-facebook">
            Save
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
@endsection