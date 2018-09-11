@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="title">Appearance Settings</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('update.appearance', ['id' => 1]) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Site Description</label>
                <input type="text" class="form-control" name="keywords" placeholder="Welcome to Blog, a place where words matter. Blog taps into the brains of the world's most insightful writers, thinkers, and storytellers to bring you the..." value="@if($app->description != null) {{ $app->description }} @endif">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Site Keywords</label>
                <input type="text" class="form-control" name="keywords" placeholder="art,history,renaissance,michelangelo" value="@if($app->keywords != null) {{ $app->keywords }} @endif">
                <small class="form-text text-muted">Seperate them with 'comma'.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Footer Text</label>
                <input type="text" class="form-control" name="footer" value="@if($app->footer != null) {{ $app->footer }} @endif">
                <small class="form-text text-muted">You can write HTML tagged footer too.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Weather API Key</label>
                <input type="text" class="form-control" name="api" value="@if($app->api_key != null) {{ $app->api_key }} @endif">
              </div>
            </div>
            <div class="col-md-6">
              <label>Site Icon
                <input type="file" name="file" class="card card-body">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Adwords Name</label>
                <input type="text" class="form-control" name="ad" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Source</label>
                <textarea class="form-control" cols="1" rows="10"></textarea>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Width</label>
                <select class="form-control">
                  <option>180x60</option>
                  <option>160x80</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Height</label>
                <select class="form-control">
                  <option>180x60</option>
                  <option>160x80</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Adwords Name</label>
                <input type="text" class="form-control" name="ad" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Source</label>
                <textarea class="form-control" cols="1" rows="10"></textarea>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Width</label>
                <select class="form-control">
                  <option>180x60</option>
                  <option>160x80</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Height</label>
                <select class="form-control">
                  <option>180x60</option>
                  <option>160x80</option>
                </select>
              </div>
            </div>
          </div>
          <button class="btn btn-primary">Save</button>
      </div> 
    </div>
  </div>
</form>
</div>
@push('scripts')
  <script type="text/javascript" src="http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID={{ $app->api_key }}"></script>
@endpush
@endsection