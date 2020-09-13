<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >

    <title>Login Page</title>
  </head>
  <body>

  	<div class="container">
  		<div class="row vh-100 align-items-center justify-content-center">
  			<div class="col-5">
  				<div class="shadow rounded p-3">
  					<h3 class="text-muted text-center mb-4">Login Page</h3>
					  @if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@if(session('status'))
							<div class="alert alert-success">{{ session('status') }}</div>
						@endif
  					<form action="{{ route('postLogin') }}" method="post">
                      @csrf
					  <div class="mb-3">
					    <label for="username" class="form-label">Username</label>
					    <input type="text" class="form-control" id="username" name="username">
					  </div>
					  <div class="mb-3">
					    <label for="password" class="form-label">Password</label>
					    <input type="password" class="form-control" id="password" name="password">
					  </div>
					  <div class="mb-5 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
					    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
					  </div>	
					  <button type="submit" class="btn btn-primary btn-block">Submit</button>
					</form>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- footer -->
    <footer style="margin-top: -40px;">
    	<div class="container-fluid">
    		<div class="row">
	    		<div class="col-md">
	    			<p class="text-dark text-center">
	    				Copyright 2020.
	    				Made With 
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg>
						Rian Firgiawan
					</p>
	    		</div>
	    	</div>
    	</div>
    </footer>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  </body>
</html>