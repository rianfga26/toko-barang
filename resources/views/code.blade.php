<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <style type="text/css">
      body{
        background: #000;
      }
    </style>

    <title>Verifikasi Kode</title>
  </head>
  <body>
      <div class="container">
          <div class="row vh-100 align-items-center justify-content-center">  
            <div class="col-md-7">
              <div class="card shadow">
                  <div class="card-header">
                    Code Verifikasi
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{ route('postCode', 1) }}">
                    @csrf
                      <div class="mb-3">
                        <label for="code"></label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="d4fr88">
                      </div>
                      <button type="submit" class="btn btn-warning float-right">Check</button>
                    </form>
                  </div>
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

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>