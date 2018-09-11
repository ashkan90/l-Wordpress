@extends('layouts.app')

@section('content')
<style type="text/css">
	.tab-pane{
		color: rgba(255, 255, 255, 0.7) !important;
	}
	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
		color: rgba(255, 255, 255, 0.7) !important;
	    background-color: transparent !important;
	    border-color: transparent !important;
	}
	.nav-tabs .nav-link {
	    border: 1px solid transparent;
	}
</style>
<div class="row">
	<div class="col-md-8">
		<div class="card card-nav-tabs card-plain">
	    <div class="card-header card-header-danger">
	        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
	        <div class="nav-tabs-navigation">
	            <div class="nav-tabs-wrapper">
	                <ul class="nav nav-tabs" data-tabs="tabs">
	                    <li class="nav-item">
	                        <a class="nav-link active" href="#general" data-toggle="tab">General</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#write" data-toggle="tab">Write</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#read" data-toggle="tab">Read</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#discussion-comment" data-toggle="tab">Discussion-Comment</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#privacy" data-toggle="tab">Privacy</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="card-body ">
	    	<form action="{{ route('update.settings', ['id' => $settings->id]) }}" method="post">
           	@csrf
	        <div class="tab-content">
	            <div class="tab-pane active" id="general">
	               	<div class="row">
		            <div class="col-md-5">
		              <div class="form-group">
		                <label>Site Title</label>
		                <input type="text" id="title" class="form-control" placeholder="Title" name="title" value="{{ $settings->site_title }}" onkeyup="root()" required>
		              </div>
		            </div>
		            <div class="col-md-5">
		              <div class="form-group">
		                <label>Slogan</label>
		                <input type="text" id="slogan" class="form-control" name="slogan" value="{{ $settings->site_slogan }}" onkeyup="root()" >
		              </div>
		            </div>
		           </div>
		           <div class="row">
		            <div class="col-md-5">
		              <div class="form-group">
		                <label for="exampleInputEmail1">Email address(Site Owner)</label>
		                <input type="email" id="mail" class="form-control" name="email" value="{{ $settings->site_email }}" onkeyup="root()">
		              </div>
		            </div>
		            <div class="col-md-5">
		              <div class="form-group">
		                <label for="lang">Site Language</label>
				        <select class="form-control" id="lang" name="lang">
				          <option value="Turkish" @if($settings->site_language == 'Turkish') selected @endif>Turkish</option>
				          <option value="English" @if($settings->site_language == 'English') selected @endif>English</option>
				        </select>
		              </div>
		            </div>
      			   </div>
	            </div>
	            <div class="tab-pane" id="write">
	                
	            </div>
	            <div class="tab-pane" id="read">
	               	<div class="row">
					<p><h4 class="pl-4">Homepage Preview</h4></p>
	               		<div class="col-md-6">
               			    <!--div class="form-check form-check-radio">
						        <label class="form-check-label">
						            <input class="form-check-input" type="radio" name="post_latest" value="1" checked>
						            Latest Posts
						            <span class="form-check-sign"></span>
						        </label>
						    </div>
						    <div class="form-check form-check-radio">
						        <label class="form-check-label">
						            <input class="form-check-input" type="radio" name="page_fixed" value="Aşşağıdaki dropdown un değeri.">
						            Fixed page (select below)
						            <span class="form-check-sign"></span>
						        </label>
						    </div-->
						    <div class="form-check form-check-radio">
						        <label class="form-check-label">
						            <input class="form-check-input" type="radio" name="page[]" name="post_latest" value="1" id="latest_post" checked onchange="attr()">
						            Latest Posts
						            <span class="form-check-sign"></span>
						        </label>
						    </div>
						    <div class="form-check form-check-radio">
						        <label class="form-check-label">
						            <input class="form-check-input" type="radio" id="fixed_page" name="page[]" value="2" onchange="attr()">
						            Fixed page (select below)
						            <span class="form-check-sign"></span>
						        </label>
						    </div>
						  <fieldset id="fset-1" disabled>
						  	<div class="form-group col-md-6 pt-2">
						        <label for="homepage">Home page</label>
						        <select class="form-control disabled" name="homepage">
						          <option>1</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
					      </div>
						  </fieldset>
					      <fieldset id="fset-2" disabled>
					      	<div class="form-group col-md-6">
						        <label for="postpage">Post page</label>
						        <select class="form-control" name="postpage">
						          <option value="1">1</option>
						          <option value="2">2</option>
						          <option value="3">3</option>
						          <option value="4">4</option>
						          <option value="5"</option>
						        </select>
					      </div>
					      </fieldset>
	               		</div>
	               	</div>
	            </div>
	            <div class="tab-pane" id="discussion-comment">
	                
	            </div>
	            <div class="tab-pane" id="privacy">
	            	<p><h4>Gizlilik politikası sayfası</h4></p>
	                <p class="text-muted">

						Bir web sitesi sahibi olarak ulusal veya uluslararası gizlilik yasalarına uymanız gerekebilir. Örneğin, bir gizlilik politikası oluşturup görüntülemeniz gerekebilir.	Gizlilik politikası sayfanız zaten varsa lütfen aşağıdan seçim yapın. Yoksa bir tane oluşturun.<br><br>

						Yeni sayfa, gizlilik politikanız için yardım ve önerileri içerecektir.	Ancak bu kaynakları doğru kullanmak, gizlilik politikanızın gerektirdiği bilgileri sağlamak ve bu bilgileri güncel ve doğru tutmak sizin sorumluluğunuzdadır.<br><br>

						Gizlilik politikası sayfanız ayarlandıktan sonra sayfayı düzenlemenizi öneririz.	Ayrıca zaman zaman, özellikle herhangi bir tema veya eklentiyi yükledikten veya güncelledikten sonra, gizlilik politikanızı gözden geçirmenizi öneririz. Politikanıza eklemeyi düşünmeniz için değişiklikler veya yeni önerilen bilgiler olabilir.
	                </p>
	                <div class="row pt-4">
	                	<div class="col-md-6">
                			<div class="form-group">
                				<h4>Change your privacy policy page</h4>
                			</div>
	                	</div>
	                	<div class="col-md-4">
	                		<input type="submit" name="button" value="Create new privacy" class="btn btn-fill btn-sm">
	                	</div>
	                </div>
	            </div>
	        </div>
	    </div>
	  </div>
	</div>
	<div class="col-md-4">
    <div class="card">
      <div class="card-body ">
        <p class="card-text">
          <div class="author">
            <p class="description">
              <div class="form-group">
              <h4>Site Name: <b id="card-title">{{ $settings->site_title }}</b></h4>                
              </div>
            </p>
          </div>
        </p>
        <p class="card-description">
        	Site Slogan: <i id="card-slogan">{{ $settings->site_slogan }}</i>
        </p>
        <p class="card-description">
        	Site Mail: <i id="card-email">{{ $settings->site_email }}</i>
        </p>
      </div>
      <div class="card-footer ">
        <div class="button-container">
          <input type="submit" name="button" value="Save" href="#" class="btn btn-facebook">
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<script type="text/javascript">
	function attr(){//onChange eventinde çağırılacak.
        
        if(document.getElementById("latest_post").checked)
        {
            document.getElementById("fset-1").disabled = true;
            document.getElementById("fset-2").disabled = true;
        }else {
        	document.getElementById("fset-1").disabled = false;
            document.getElementById("fset-2").disabled = false;
        }
        
    }
    function root()
    {
        var title = document.getElementById("title");
        var t = title.value;
    
        var card_title = document.getElementById("card-title");
        card_title.innerText = t;
        if (t === null) {
        	card_title.innerText = " "; 
        }

        var slogan = document.getElementById('slogan');
        var s = slogan.value;

        var card_slogan = document.getElementById('card-slogan');
        card_slogan.innerText = s;
        if (s === null) {
        	card_slogan.innerText = " ";
        }

        var email = document.getElementById('mail');
        var e = email.value;

        var card_email = document.getElementById('card-email');
        card_email.innerText = e;
        if (e === null) {
        	card_email.innerText = " ";
        }
    }
</script>


@endsection