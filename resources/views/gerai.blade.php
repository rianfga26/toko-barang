<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Gerai</title>
  </head>
  <body>
      
      <div class="container">
        <div class="row mt-5">
          <div class="col-12">
            <p class="lead font-weight-normal border-bottom border-dark">Toko / Gerai</p>
          </div>
          @foreach($gerai as $all)
          <div class="col-md-12 border-bottom mb-3 mt-2 p-3">
            <div class="d-flex">
              <div class="d-flex flex-column">
                <span class="font-weight-bold">{{ $all->nama }}</span>
                <span class="text-muted">{{ $all->alamat }}</span>
                <span class="text-muted">
                    <span class="text-danger">Tutup</span> | Buka pukul {{ $all->buka }}
                </span>
                <span class="text-muted">{{ $all->Pembayaran }}</span>
                <a href="" data-toggle="modal" data-target="#exampleModal">Lihat</a>
              </div>
              <img src="https://cdn-radar.jawapos.com/uploads/radarsurabaya/news/2019/02/06/pemkot-berdayakan-toko-kelontong-di-kampung-dengan-membentuk-koperasi_m_118074.jpg" class="img-thumbnail ml-auto  " width="200" height="200">
            </div>
          </div>
          @endforeach
          <!-- modal gerai -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Toko</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="border-bottom">
                    <h1>Toko Manjur</h1>
                    <span class="text-muted">Minimarket</span>
                  </div>
                  
                  <div class="deskripsi mt-2">
                    <span>Hanya Tunai</span>
                    <p><b>Alamat :</b> Jl. Gunung Anyar Kidul No.11, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</p>
                    <p><b>Jam Buka :</b> <span class="text-danger">Tutup</span> | Buka pukul 06.00</p>
                    <p><b>Telepon :</b> 0878-5317-3176</p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Check Product</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- footer -->
    <footer>
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