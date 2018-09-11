@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header">
				<h5 class="title">Create Tag</h5>
			</div>
			<div class="card-body">
				<form action="{{ route('store.tag') }}" method="post">
          {{ csrf_field() }}
					<div class="row">
						<div class="col-md-10">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Tag Name" name="name" required>
              </div>
              <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" placeholder="slug" name="slug">
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
        <h4 class="card-title"> Created Tags</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          @if($tags->count() > 0)
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
              	Action [D]
              </th>
              <th>
              	Action [E]
              </th>
              <th>All</th>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>
                    {{ $tag->name }}
                  </td>
                  <td>
                  	<a href="{{ route('delete.tag', ['id' => $tag->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-trash-simple"></i>
                    </a>
                  </td>
                  <td>
                  	<a href="{{ route('edit.tag', ['id' => $tag->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-pencil"></i>
                    </a>
                  </td>
                  <td>
                    {{ $tag->posts()->count() }}
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