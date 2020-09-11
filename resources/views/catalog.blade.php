<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>List Catalog | Product</title>
    <style type="text/css">
    	#catalog{
    		margin-top: 60px;
    	}
    	.search{
    		margin-left: -30px;
    	}
    	.img-hover:hover{
    		 box-shadow: 5px 5px 10px #aaaaaa;
    		 border: 3px solid grey;
    		 border-radius: 2px;
    	}
    	ul li{
    		list-style: none;
    		margin: 0;
    		padding: 0;
    	}
    </style>
  </head>
  <body>
    
    <section id="catalog">
	    <div class="container">
	    	<div class="row justify-content-center">
	    		<div class="col-md-10">
	    			<div class="row border-bottom">
		    			<div class="col-md-8">
			    			<p class="lead">List Product / Catalog</p>
			    		</div>
			    		<div class="col-md-4">
                                <form action="/catalog/cari">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <input type="text" name="cari" class="form-control form-control-sm" id="cari" placeholder="Search...">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                    <button type="submit" class="btn btn-primary btn-sm ml-2">Cari!</button>
                                </div>
                            </form>
			    		</div>
		    		</div>

		    		<div class="row">

		    			<!-- card 1 -->
                        @foreach($catalogs as $catalog)
		    			<div class="col-md-3">
		    				<a href="" data-toggle="modal" data-target="#exampleModal" class="text-dark text-decoration-none">
				    			<div class="card mt-5 shadow">
								  <img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="card-img-top img-fluid" alt="...">
								  <div class="card-body d-flex justify-content-between">
								    	<div>
								    		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
											  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
											</svg>
											<span class="font-weight-bold">{{ $catalog->nama }}</span>
								    	</div>
								    	<div class="float-right">
								    		{{ $catalog->suka }}
								    		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
											</svg>
									    </div>
								  </div>
							  	</a>
							</div>
			    		</div>
                        @endforeach
			    		<!-- end card 1 -->

		    		</div>
	    		</div>
	    	</div>
	    </div>
    </section>

    <!-- modal section -->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="row">
		      		<div class="col-md-6">
		      			<img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="img-fluid rounded">
		      			<div class="mt-3 text-center">
		      				<img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="img-fluid img-hover" width="20%" class="border border-secondary pr-4">
		      				<img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="img-fluid img-hover" width="20%" class="border border-secondary pr-4">
		      				<img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="img-fluid img-hover" width="20%" class="border border-secondary pr-4">
		      				<img src="https://static.dribbble.com/users/414899/screenshots/14077525/media/a05533559064557bea714576c52b0256.png" class="img-fluid img-hover" width="20%" class="border border-secondary pr-4">
		      			</div>
		      		</div>
		      		<div class="col-md-6">
		      			<table class="table">
		      				<tr>
		      					<th>Nama</th>
		      					<td>: Ice Cream</td>
		      				</tr>
		      				<tr>
		      					<th>Deskripsi</th>
		      					<td>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				      				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				      				consequat.
		      					</td>
		      				</tr>
		      				<tr>
		      					<th>Stok</th>
		      					<td>: 20</td>
		      				</tr>
		      				<tr>
		      					<th>Harga</th>
		      					<td>: Rp. 120.000</td>
		      				</tr>
		      				<tr>
		      					<th>Toko</th>
		      					<td>: Starbuck</td>
		      				</tr>
		      			</table>
		      		</div>
		      	</div>
		      </div>
		      <div class="modal-footer justify-content-between">
		      	<p class="text-muted">Note : Anda hanya dapat memesan satu produk</p>
		        <button type="button" class="btn btn-primary">Pesan</button>
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
    	var cari = document.getElementById('cari');
    	var search = document.querySelector(".search");

    	cari.addEventListener('focus' , function(){
    		search.style.display='none';	
    	});
    	cari.addEventListener('blur' , function(){
    		search.style.display='block';
    	});
    </script>
  </body>
</html>