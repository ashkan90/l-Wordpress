@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
          <div class="col-md-3">
            <h4 class="card-title"> Created Posts</h4>
          </div>
          <div class="col-md-4 ml-auto" >
            <form action="{{ route('create.post') }}" method="post">
              @csrf
            <button  class="btn btn-fill btn-primary float-right">
              Create New Post
            </button>
          </form>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          @if($posts->count() > 0)
          <table class="table tablesorter " id="tab">
            <thead class=" text-primary">
              <th>
                Image
              </th>
              <th class="text-center">
                Name
              </th>
              <th class="text-center">
                Category
              </th>
              <th class="text-center">
                Action [TRASH]
              </th>
              <th class="text-center">
                Action [EDIT]
              </th>
              <th class="text-center">
                Status
              </th>
              <th class="text-center">
                Published At
              </th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>
                    @if($post->featured)
                    <img class="rounded-circle" style="width: 50px; height: 50px;" src="{{ asset($post->featured) }}">
                    @endif
                  </td>
                  <td class="text-center">
                    <a href="@if($post->post_link != null) {{ $post->post_link }} @endif">{{ str_limit($post->title, 15) }}</a>
                  </td>
                  <td class="text-center">
                    @foreach($post->categories()->get() as $pcategory)
                      {{ str_limit($pcategory->name, 5) }}
                    @endforeach
                  </td>
                  <td class="text-center">
                    <a href="{{ route('delete.post', ['id' => $post->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-trash-simple"></i>
                    </a>
                  </td>
                  <td class="text-center">
                    <a href="{{ route('edit.post', ['id' => $post->id]) }}" class="btn btn-link">
                      <i class="tim-icons icon-pencil"></i>
                    </a>
                  </td>
                  <td class="text-center">
                    {{ ucwords($post->post_status) }}
                  </td>
                  <td class="text-center">
                    @if($post->created_at)
                      {{ $post->created_at->toFormattedDateString() }}
                    @else
                      ---
                    @endif
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          @else 
            <h4 class="text-center">There is no Published|Drafted Post</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Trashed Posts </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          @if($trashed_posts->count() > 0)
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <th>
                Image
              </th>
              <th class="text-center">
                Name
              </th>
              <th class="text-center">
                Category
              </th>
              <th class="text-center">
                Action [DELETE]
              </th>
              <th class="text-center">
                Action [RECOVER]
              </th>
              <th class="text-center">
                Status
              </th>
              <th class="text-center">
                Published At
              </th>
            </thead>
            <tbody>
              @foreach($trashed_posts as $tpost)
              <tr>
                <td>
                  @if($tpost->featured)
                  <img class="rounded-circle" style="width: 50px; height: 50px;" src="{{ asset($tpost->featured) }}">
                  @endif
                </td>
                <td class="text-center">
                  {{ str_limit($tpost->title, 15) }}
                </td>
                <td class="text-center">
                  @foreach($tpost->categories()->get() as $tpcategory)
                    {{ str_limit($tpcategory->name, 5) }}
                  @endforeach
                </td>
                <td class="text-center">
                  <a href="{{ route('kill.post', ['id' => $tpost->id]) }}" class="btn btn-link">
                    <i class="tim-icons icon-trash-simple"></i>
                  </a>
                </td>
                <td class="text-center">
                  <a href="{{ route('restore.post', ['id' => $tpost->id]) }}" class="btn btn-link">
                    <i class="tim-icons icon-refresh-01"></i>
                  </a>
                </td>
                <td class="text-center">
                  {{ ucwords($tpost->post_status) }}
                </td>
                <td class="text-center">
                  @if($tpost->created_at == null)
                    ---
                  @else 
                    {{ $tpost->created_at->toFormattedDateString() }}
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
            <h4 class="text-center">There is no Trashed Post</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection