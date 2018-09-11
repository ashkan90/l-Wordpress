@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="title">Site Settings</h3>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Site Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Slogan</label>
                <input type="text" class="form-control" name="slogan">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address(Site Owner)</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lang">Site Language</label>
		        <select class="form-control" id="lang" name="lang">
		          <option>1</option>
		          <option>2</option>
		          <option>3</option>
		          <option>4</option>
		          <option>5</option>
		        </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-md-1">
              <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="City" value="Mike">
              </div>
            </div>
            <div class="col-md-4 px-md-1">
              <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" placeholder="Country" value="Andrew">
              </div>
            </div>
            <div class="col-md-4 pl-md-1">
              <div class="form-group">
                <label>Postal Code</label>
                <input type="number" class="form-control" placeholder="ZIP Code">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>About Me</label>
                <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-fill btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
@endsection
