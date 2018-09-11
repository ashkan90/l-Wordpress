@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
          <div class="col-md-3">
            <h4 class="card-title"> List All Users</h4>
          </div>
          <div class="col-md-4 ml-auto" >
            <button type="button" data-toggle="submit" class="btn btn-fill btn-primary float-right">
              <a href="{{ route('create.user') }}" class="btn-fill btn-link">Create New User</a>
            </button>
          </div>
        
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <th>
                Image
              </th>
              <th class="text-center">
                Username
              </th>
              <th class="text-center">
                Email
              </th>
              <th class="text-center">
                Action [DELETE]
              </th>
              <th class="text-center">
                Action [EDIT]
              </th>
              <th class="text-center">
                Status
              </th>
              <th class="text-center">
                Created At
              </th>
            </thead>
            <tbody>
                @foreach($users as $user)
	                <tr>
	                  <td>
	                    <img class="rounded-circle" style="width: 50px; height: 50px;" src="{{ asset($user->profile->avatar) }}">
	                  </td>
	                  <td class="text-center">
	                  	{{ $user->name }}
	                  </td>
	                  <td class="text-center">
	                  	{{ $user->email }}
	                  </td>
	                  <td class="text-center">
	                    @if($user->id == Auth::id())
          							<a href="{{ route('delete.user', ['id' => $user->id]) }}" class="btn btn-link disabled">
          								<i class="tim-icons icon-trash-simple"></i>
          							</a>
          						@else
          							<a href="{{ route('delete.user', ['id' => $user->id]) }}" class="btn btn-link">
          								<i class="tim-icons icon-trash-simple"></i>
          							</a>
          						@endif
	                  </td>
	                  <td class="text-center">
	                    <a href="{{ route('edit.user', ['id' => $user->id]) }}" class="btn btn-link">
	                      <i class="tim-icons icon-pencil"></i>
	                    </a>
	                  </td>
	                  <td class="text-center">
	                  	@if($user->is_admin)
	                  		Admin
                  		@else
                  			User
	                  	@endif
	                  </td>
	                  <td class="text-center">
	                  	@if($user->created_at !== null)
	                  	{{ $user->created_at->toFormattedDateString() }}
	                  	@else
	                  		---
	                  	@endif
	                  </td>
	                </tr>
				@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection