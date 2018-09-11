@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h4 class="title">Add new Page</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('store.page') }}"  method="post" enctype="multipart/form-data">
        @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required id="name" value="@if($title) {{$title}} @endif">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea rows="6" cols="80" id="summernote" class="form-control editable" name="content" required id="content"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Keywords</label>
                <input type="text" class="form-control" name="keywords" placeholder="Seperate them with comma.">
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
      </div>
    </p>
    <div class="row">
      	<div class="col-md-6">
      		<input type="submit" name="submit" class="btn btn-fill btn-primary btn-sm" value="Save as Draft">
      	</div>
      	<div class="col-md-6">
      		<input type="submit" class="btn btn-fill btn-primary btn-sm preview-post" value="Preview">
      	</div>
  	</div>
	<div class="row">
		<div class="col-md-12 card-description">
			<div class="input-group">
				<div class="input-control">
					<i class="tim-icons icon-key-25 pr-2"></i>
					Status: <b>Draft</b>
				</div>
				<div class="input-control">
					<i class="tim-icons icon-bulb-63 pr-2"></i>
					Visibilty: <b>Open for everyone</b>
				</div>
				<div class="input-control">
					<i class="tim-icons icon-calendar-60 pr-2"></i>
					<b>Publish</b> now
				</div>
			</div>
		</div>
	</div>  
	<div class="card-footer ">
		<input type="submit" name="submit" class="btn btn-round btn-secondary float-right" value="Publish">
	</div>  
   </div>
</div>
<div class="card ">
	<div class="card-body ">
		<input type="file" name="file" class="form-control">
	</div>
</div>
</form>
</div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
        	'tabsize': 2,
        	'height': 230,
        });
    });

    $('.editable').css('color','black');
</script>
</div>

@endsection
