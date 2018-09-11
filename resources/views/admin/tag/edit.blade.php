@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
				<h4 class="title">Edit Tag: <b>{{ $tag->name }}</b></h4>
			</div>
			<div class="card-body">
				<form action="{{ route('update.tag', ['id' => $tag->id]) }}" method="post">
          			{{ csrf_field() }}
					<div class="row">
						<div class="col-md-10">
			              <div class="form-group">
			                <label>Name</label>
			                <input type="text" class="form-control" placeholder="Tag Name" name="name" value="{{ $tag->name }}" required>
			              </div>
			              <div class="form-group">
			                <label>Slug</label>
			                <input type="text" class="form-control" placeholder="slug" name="slug" value="{{ $tag->slug }}">
			              </div>
          				</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-fill btn-primary">Update</button>
					</div>
			    </form>	
			</div>
		</div>
	</div>
</div>
@endsection