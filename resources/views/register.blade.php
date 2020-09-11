<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >

    <title>Register Page</title>
  </head>
  <body>

  	<div class="container">
  		<div class="row vh-100 align-items-center justify-content-center">
  			<div class="col-5">
  				<div class="shadow rounded p-3">
  					<h3 class="text-muted text-center mb-4">Register</h3>
  					<form method="post" action="{{ route('register') }}">
                      @csrf 
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>            

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="Email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="konfirmasi" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasi" name="password_confirmation">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lihat Password</label>
                        </div>	
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
					</form>
  				</div>
  			</div>
  		</div>
  	</div>

    <!-- footer -->
    <footer style="margin-top: 0px;">
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


    <script type="text/javascript">

      var check = document.getElementById('exampleCheck1');
      var pass = document.getElementById('password');
      var konfirmasi = document.getElementById('konfirmasi');

      check.addEventListener('click', function () {
        if (check.checked == true) {
          pass.setAttribute('type' , 'text');
          konfirmasi.setAttribute('type' , 'text');
        }else{
          pass.setAttribute('type' , 'password');
          konfirmasi.setAttribute('type' , 'password');
        }
      });
      
    </script>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  </body>
</html>