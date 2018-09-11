@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header">
				<h5 class="title">Create Category</h5>
			</div>
			<div class="card-body">
				<form action="{{ route('store.category') }}" method="post">
          {{ csrf_field() }}
					<div class="row">
						<div class="col-md-10">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Category Name" name="name" required>
              </div>
              <div class="form-group">
                <label>Slug</label>
                <input aria-describedby="slug" type="text" class="form-control" placeholder="Slug" name="slug">
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
									@foreach($categories as $category)
									 <option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Description</label>
								<textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="description"></textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-fill btn-primary">Save</button>
					</div>
			    </form>	
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Created Categories</h4>
      </div>
      <div class="card-body">
        <!--form>
          <div class="col-md-4">
            <div class="form-group">
              <label>Single Page Type</label>
              <select class="form-control" name="type">
                <option value="type_1">Type 1(With Sidebar)</option>
                <option value="type_2">Type 2(Full Content)</option>
              </select>
            </div>
        </div>
        </form-->
        <div class="table-responsive">
          @if($categories->count() > 0)
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Description
              </th>
              <th>
              	Action [D]
              </th>
              <th>
              	Action [E]
              </th>
              <th>
                All
              </th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>
                    {{ $category->name }}
                  </td>
                  <td>
                    {{ str_limit($category->description, 25) }}
                  </td>
                  <td>
                  	@if($category->name != 'Uncategorized' or $category->name != 'uncategorized')
                    <a href="{{ route('delete.category', ['id' => $category->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-trash-simple"></i>
                    </a>
                    @endif
                  </td>
                  <td>
                  	<a href="{{ route('edit.category', ['id' => $category->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-pencil"></i>
                    </a>
                  </td>
                  <td>
                    {{ $category->posts()->count() }}
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          @else
          	<h4 class="text-center">There is no Category.</h4>
          	<p>If you want to create a new post, you must first create a Category.</p>
          @endif
        </div>
      </div>
    </div>
	</div>
</div>
@endsection