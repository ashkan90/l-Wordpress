@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
          <div class="col-md-3">
            <h4 class="card-title"> Created Categories</h4>
          </div>
          <div class="col-md-4 ml-auto" >
            <button type="button"  class="btn btn-fill btn-primary float-right">
              <a href="{{ route('create.category') }}" class="btn-link">Create New Category</a>
            </button>
          </div>
        
        </div>
      </div>
      <div class="card-body">
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
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>
                    {{ $category->name }}
                  </td>
                  <td>
                    {{ str_limit($category->description, 35) }}
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