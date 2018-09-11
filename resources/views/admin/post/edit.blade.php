@extends('layouts.app')

@section('content')
<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="title">Edit Post</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('update.post', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea rows="6" cols="80" class="form-control" id="summernote" name="content" required>{{ $post->content }}</textarea>
                      </div>
                    </div>
                  </div>
		          <div class="row">
		            <div class="col-md-12">
		              <div class="form-group">
		                <label>Keywords</label>
		                <input type="text" class="form-control" name="keywords" placeholder="Seperate them with comma." value="{{ $post->keywords }}">
		              </div>
		            </div>
		          </div>
		          <div class="row">
		            <div class="col-md-12">
		              <div class="form-group">
		                <label>Single Page Type</label>
		                <select class="form-control" name="type">
		                  <option value="type_1" @if($settings->post_page == 'type_1' or $settings->post_page == 'default') selected @endif >Type 1(With Sidebar)</option>
		                  <option value="type_2" @if($settings->post_page == 'type_2') selected @endif >Type 2(Full Content)</option>
		                </select>
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
	              		<a href="" class="btn btn-fill btn-primary btn-sm">Save as Draft</a>
	              	</div>
	              	<div class="col-md-6">
	              		<a href="" class="btn btn-fill btn-primary btn-sm">Preview</a>
	              	</div>
              	</div>
				<div class="row">
					<div class="col-md-12 card-description">
						<div class="input-group">
							<div class="input-control">
								<i class="tim-icons icon-key-25 pr-2"></i>
								Status: <b>@if($post->post_status == 'publish') Publish @elseif($post->post_status == 'draft') Draft @endif</b>
							</div>
							<div class="input-control">
								<i class="tim-icons icon-bulb-63 pr-2"></i>
								Visibilty: <b>@if($post->status == 'inherit') Only for you @else Open for everyone @endif</b>
							</div>
							<div class="input-control">
								<i class="tim-icons icon-calendar-60 pr-2"></i>
								<b>Publish</b> now
							</div>
						</div>
					</div>
				</div>  
				<div class="card-footer ">
					<button data-toggle="submit" class="btn btn-round btn-secondary float-right">Publish</button>
				</div>  
        	   </div>
    		</div>
    		<div class="card  card-user">
              <div class="card-body ">
              	<h4 class="card-title">Categories</h4>
        	      <div class="form-group">
			        <label for="category">Select Category</label>
			        <select multiple class="form-control" name="category[]" required>
			          @foreach($categories as $category)
			          	<option value="{{ $category->id }}"
			          		@foreach($post->categories()->get() as $pcat)
			          			@if($pcat->id == $category->id)
			          				selected
		          				@endif
	          				@endforeach>{{ $category->name }}</option>
			          @endforeach
			        </select>
			      </div>
                <a href="#" class="card-link">+Add New Category</a>
    			</div>
			</div>
			<div class="card ">
				<div class="card-body ">
				<h4 class="card-title">Tags</h4>
					<div class="row">
						<div class="col-md-7">
						<div class="form-group">
							<input type="text" class="form-control" id="tags" name="tags" 
							value="@foreach($tags as $tag)@foreach($post->tags()->get() as $pt) @if($pt->id == $tag->id){{ $pt->name }}@endif @endforeach @endforeach" >
						</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<button type="submit" class="btn btn-fill btn-fill form-control">Add</button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<h6 class="card-subtitle text-muted"><i>Etiketleri virgül ile ayırın</i></h6>
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
	</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        	'tabsize': 2,
        	'height': 230
        });
    });
</script>
@endsection