@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8 mx-auto">
        <div class="card  card-user">
          <div class="card-body ">
        	<form action="{{ route('update.user', ['id' => $user->id]) }}" method="post">
          @csrf
        	<p class="card-text">
              <div class="author">
                <div class="block block-one"></div>
                <div class="block block-two"></div>
                <div class="block block-three"></div>
                <div class="block block-four"></div>
                <a href="#">
                  <img class="avatar" src="{{ $user->profile->avatar }}" alt="{{ str_slug($user->profile->avatar) }}"-->
                  <h5 class="title">
                  	<div class="col-md-8 mx-auto">
                  		<div class="form-group">
                  			<input type="text" name="name" class="form-control" value="{{ $user->name }}">
                  		</div>
                  	</div>
                  </h5>
                </a>
                <p class="description">
                  <div class="col-md-8 mx-auto">
                  	<div class="form-group">
                  		<input type="text" name="contact_site" value="http://eataman.com" class="form-control">
                  	</div>
                  </div>
                </p>
              </div>
            </p>
            <p class="card-description">
              <div class="col-md-8 mx-auto">
              	<div class="form-group">
              		<textarea cols="6" rows="80" placeholder="Short Bio" class="form-control" name="about">{{ $user->profile->about }}</textarea>
              	</div>
              <a href="{{ route('users') }}" class="btn btn-fill float-right" style="color:white">Cancel</a>
              <button class="btn btn-fill float-right">Save</button>
              </div>
            </p>
        	</form>
          </div>
        </div>
      </div>
</div>
@endsection