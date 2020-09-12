@extends('admin.layouts')

@section('judul', 'Dashboard')
@section('header', 'Dashboard')


@section('konten')
        <h2 class="section-title">{{ auth()->user()->nama }}</h2>
        <p class="section-lead">
              Hi {{ auth()->user()->username }}, anda bisa merubah informasi data profil anda di sini.
        </p>
        <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Product</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Suka</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{ auth()->user()->nama }}
                        
                    </div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Toko</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->nama }}" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->username }}" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ auth()->user()->email }}" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Alamat</label>
                            <input type="text" class="form-control" {{ auth()->user()->alamat === null ? "placeholder=Mohon-lengkapi-alamat" : "value=auth()->user()->alamat" }} >
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Password Saat Ini</label>
                            <input type="email" class="form-control" placeholder="Masukkan password saat ini" required="">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Password Baru</label>
                            <input type="text" class="form-control" placeholder="Masukkan password baru">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>buka</label>
                            <input type="time" class="form-control" required="">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>tutup</label>
                            <input type="time" class="form-control">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Hari Buka - Tutup</label>
                            <input type="text" class="form-control" required="" placeholder="Senin - Jumat">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Methode Pembayaran</label>
                            <input type="text" class="form-control" placeholder='hanya tunai'>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-8">
                            <label>Kode Rahasia Toko</label>
                            <div class="d-flex">
                                <input type="text" class="form-control" required="" placeholder="d4fr88" id="kode">
                                <button type="button" class="btn btn-primary btn-sm ml-3" id="generate">Generate Kode</button>
                                <span class="text-danger ml-3">Max 5 Klik</span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Logo Toko</label>
                            <div class="avatar-item">
                                <img alt="image" src="/assets/img/avatar/avatar-1.png" class="img-fluid" width="30%" data-toggle="tooltip" title="" data-original-title="Jaka Ramadhan">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple">{{ auth()->user()->deskripsi === null ? "Mohon lengkapi deskripsi bio.." : auth()->user()->deskripsi }}.</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <script>
                var klik = 0;
                document.getElementById('generate').addEventListener('click', function(){
                    klik += 1;
                    var text = "";
                    var char_list = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                    for(var i=0; i < 6; i++ )
                    {  
                        text += char_list.charAt(Math.floor(Math.random() * char_list.length));
                    }
                    document.getElementById('kode').value = text;

                    console.log(klik);

                    if( klik === 5){
                        document.getElementById('generate').setAttribute('disabled', '');
                    }
                });

            </script>
@endsection
