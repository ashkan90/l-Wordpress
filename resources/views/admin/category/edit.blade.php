@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
				<h5 class="title">Edit Category <b>{{$category->name}}</b></h5>
			</div>
			<div class="card-body">
				<form action="{{ route('update.category', ['id' => $category->id]) }}" method="post">
          		{{ csrf_field() }}
					<div class="row">
						<div class="col-md-10">
			              <div class="form-group">
			                <label>Name</label>
			                <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{ $category->name }}" required>
			              </div>
			              <div class="form-group">
			                <label>Slug</label>
			                <input aria-describedby="slug" type="text" class="form-control" placeholder="Slug" name="slug" value="{{ $category->slug }}">
			                <small id="slug" class="form-text text-muted">You don't have to fill the slug.</small>
	                	  </div>
      					</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Parent</label>
								<select class="form-control" name="parent_category">
									<option selected>Hiçbiri</option>
									@foreach($categories as $_category)
									 <option value="{{ $_category->id }}">{{ $_category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Description</label>
								<textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="description" >{{ $category->description }}</textarea>
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