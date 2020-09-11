<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Check Out Page</title>
  </head>
  <body>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 my-5 border rounded">
          <div class="row">
            <div class="col-md-7 p-3">
              <h2 class="mb-5">Pesanan</h2>
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                  <input type="text" name="" class="form-control" placeholder="Example: Rian Firgiawan Gusti Ananda" id="name" required>
                </div>
                <div class="mb-3">
                  <label for="nomor">Nomor Telp / Wa <span class="text-danger">*</span></label>
                  <input type="text" name="" class="form-control" placeholder="Example : 62896721264234" id="nomor" required>
                </div>
                <div class="mb-3">
                  <label for="nomeja">Nomor Meja <span class="text-danger">*</span></label>
                  <input type="text" name="" class="form-control" placeholder="Example : #343" id="nomeja" required=>
                </div>
                <p class="text-danger">Note : Pembayaran Dilakukan Saat Selesai Pemesanan</p>
            </div>

            <div class="col-md-5 p-3"> 
              <h3 class="mb-3">Detail Order</h3>
              <div class="card mt-5">
                <div class="card-header">Checkout</div>
                <div class="card-body"> 
                  <table class="table"> 
                    <thead> 
                        <tr>  
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody> 
                      <tr>  
                          <td>Kopi Hitam <br> <a href="" class="text-muted">lihat product</a></td>
                          <td>
                            <select class="form-select" id="jumlah_pesanan">
                              <option value="1">1x</option>
                              <option value="2">2x</option>
                              <option value="3">3x</option>
                            </select>
                          </td>
                      </tr>
                      <tr>  
                        <th>Total</th>
                        <td><span id="harga" data-price="10000">10000</span></td>
                      </tr>
                      <tr>  
                        <td colspan="2">
                          <button type="submit" class="btn btn-warning btn-sm float-right" onclick="confirm('apakah data dan pesanan anda sudah benar?')">Check Out</button>
                        </td>
                      </tr>
                    </tbody>
                    </form>
                  </table>
                </div>
              </div> 
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="mt-5">
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
    <script>
      var x = document.getElementById('harga');
      document.getElementById('jumlah_pesanan').addEventListener('change', function(e){
          let jumlah = this.value;
          let total = x.dataset.price * jumlah;

          x.innerHTML = total;

      });
    </script>
  </body>
</html>