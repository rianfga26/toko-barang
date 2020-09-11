@extends('admin.layouts')

@section('judul', 'Customer Message')
@section('header', 'Customer Message')


@section('konten')
            <h2 class="section-title">September 2018</h2>
            <div class="row">
            <div class="col-7">
                <div class="activities">
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-comment-alt"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">1 detik lalu</span>
                        <span class="bullet"></span>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Balas</a>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-1" data-confirm="Apakah anda yakin akan menghapus permanen pesan ini?" data-confirm-text-yes="Ya, Saya akan Hapus!"><i class="fas fa-trash-alt"></i> Hapus Permanen</a>
                            <div class="dropdown-divider"></div>
                          </div>
                        </div>
                      </div>
                      <p>Maaf Pesanan saya belum datang ,karena saya harus buru buru langsung pergi ke kantor.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
