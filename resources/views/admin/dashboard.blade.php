@extends('admin.layouts')

@section('judul', 'Dashboard')
@section('header', 'Dashboard')


@section('konten')
            <p class="lead font-weight-normal">Selamat Datang Di Dashboard Admin</p>
            <!-- row 1 -->
            <div class="row">
              <!-- card 1 -->
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                  <div class="card-stats">
                    <div class="card-stats-title">Statistik Pesanan -
                      <div class="dropdown d-inline">
                        <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                        <ul class="dropdown-menu dropdown-menu-sm">
                          <li class="dropdown-title">Select Month</li>
                          <li><a href="#" class="dropdown-item">Januari</a></li>
                          <li><a href="#" class="dropdown-item">Februari</a></li>
                          <li><a href="#" class="dropdown-item">Maret</a></li>
                          <li><a href="#" class="dropdown-item">April</a></li>
                          <li><a href="#" class="dropdown-item">Mei</a></li>
                          <li><a href="#" class="dropdown-item">Juni</a></li>
                          <li><a href="#" class="dropdown-item">Juli</a></li>
                          <li><a href="#" class="dropdown-item active">Agustus</a></li>
                          <li><a href="#" class="dropdown-item">September</a></li>
                          <li><a href="#" class="dropdown-item">Oktober</a></li>
                          <li><a href="#" class="dropdown-item">November</a></li>
                          <li><a href="#" class="dropdown-item">Desember</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-stats-items">
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">24</div>
                        <div class="card-stats-item-label">Menunggu</div>
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">12</div>
                        <div class="card-stats-item-label">Pengiriman</div>
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">23</div>
                        <div class="card-stats-item-label">Selesai</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Pesanan</h4>
                    </div>
                    <div class="card-body">
                      59
                    </div>
                  </div>
                </div>
              </div>

              <!-- card 2 -->
              <div class="col-md-4">
                <div class="card card-hero">
                  <div class="card-header">
                    <div class="card-icon">
                      <i class="far fa-question-circle"></i>
                    </div>
                    <h4>14</h4>
                    <div class="card-description">Customer Butuh Bantuan</div>
                  </div>
                  <div class="card-body p-0">
                    <div class="tickets-list">
                      <a href="#" class="ticket-item">
                        <div class="ticket-title">
                          <h4>My order hasn't arrived yet</h4>
                        </div>
                        <div class="ticket-info">
                          <div>Laila Tazkiah</div>
                          <div class="bullet"></div>
                          <div class="text-primary">1 min ago</div>
                        </div>
                      </a>
                      <a href="#" class="ticket-item">
                        <div class="ticket-title">
                          <h4>Please cancel my order</h4>
                        </div>
                        <div class="ticket-info">
                          <div>Rizal Fakhri</div>
                          <div class="bullet"></div>
                          <div>2 hours ago</div>
                        </div>
                      </a>
                      <a href="#" class="ticket-item">
                        <div class="ticket-title">
                          <h4>Do you see my mother?</h4>
                        </div>
                        <div class="ticket-info">
                          <div>Syahdan Ubaidillah</div>
                          <div class="bullet"></div>
                          <div>6 hours ago</div>
                        </div>
                      </a>
                      <a href="features-tickets.html" class="ticket-item ticket-more">
                        Lihat Semua <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>


              <!-- card 3 -->
              <div class="col-lg-4">
                <div class="card gradient-bottom">
                  <div class="card-header">
                    <h4>5 Produk Terbaik</h4>
                    <div class="card-header-action dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Bulan Ini</a>
                      <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <li class="dropdown-title">Pilih Periode</li>
                        <li><a href="#" class="dropdown-item">Hari Ini</a></li>
                        <li><a href="#" class="dropdown-item">Minggu Ini</a></li>
                        <li><a href="#" class="dropdown-item active">Bulan Ini</a></li>
                        <li><a href="#" class="dropdown-item">Tahun Ini</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body" id="top-5-scroll" tabindex="2" style="height: 315px; overflow: hidden; outline: none;">
                    <ul class="list-unstyled list-unstyled-border">
                      <li class="media">
                        <img class="mr-3 rounded" width="55" src="/assets/img/products/product-3-50.png" alt="product">
                        <div class="media-body">
                          <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Terjual</div></div>
                          <div class="media-title">oPhone S9 Limited</div>
                          <div class="mt-1">
                            <div class="budget-price">
                              <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                              <div class="budget-price-label">$68,714</div>
                            </div>
                            <div class="budget-price">
                              <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                              <div class="budget-price-label">$38,700</div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded" width="55" src="/assets/img/products/product-4-50.png" alt="product">
                        <div class="media-body">
                          <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Terjual</div></div>
                          <div class="media-title">iBook Pro 2018</div>
                          <div class="mt-1">
                            <div class="budget-price">
                              <div class="budget-price-square bg-primary" data-width="84%" style="width: 84%;"></div>
                              <div class="budget-price-label">$107,133</div>
                            </div>
                            <div class="budget-price">
                              <div class="budget-price-square bg-danger" data-width="60%" style="width: 60%;"></div>
                              <div class="budget-price-label">$91,455</div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded" width="55" src="/assets/img/products/product-1-50.png" alt="product">
                        <div class="media-body">
                          <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Terjual</div></div>
                          <div class="media-title">Headphone Blitz</div>
                          <div class="mt-1">
                            <div class="budget-price">
                              <div class="budget-price-square bg-primary" data-width="34%" style="width: 34%;"></div>
                              <div class="budget-price-label">$3,717</div>
                            </div>
                            <div class="budget-price">
                              <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                              <div class="budget-price-label">$2,835</div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded" width="55" src="/assets/img/products/product-3-50.png" alt="product">
                        <div class="media-body">
                          <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Terjual</div></div>
                          <div class="media-title">oPhone X Lite</div>
                          <div class="mt-1">
                            <div class="budget-price">
                              <div class="budget-price-square bg-primary" data-width="45%" style="width: 45%;"></div>
                              <div class="budget-price-label">$13,972</div>
                            </div>
                            <div class="budget-price">
                              <div class="budget-price-square bg-danger" data-width="30%" style="width: 30%;"></div>
                              <div class="budget-price-label">$9,660</div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded" width="55" src="/assets/img/products/product-5-50.png" alt="product">
                        <div class="media-body">
                          <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Terjual</div></div>
                          <div class="media-title">Old Camera</div>
                          <div class="mt-1">
                            <div class="budget-price">
                              <div class="budget-price-square bg-primary" data-width="35%" style="width: 35%;"></div>
                              <div class="budget-price-label">$7,391</div>
                            </div>
                            <div class="budget-price">
                              <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                              <div class="budget-price-label">$5,472</div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer pt-3 d-flex justify-content-center">
                    <div class="budget-price justify-content-center">
                      <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
                      <div class="budget-price-label">Selling Price</div>
                    </div>
                    <div class="budget-price justify-content-center">
                      <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
                      <div class="budget-price-label">Budget Price</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- row 2 -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Invoices</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn btn-danger">Aksi <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Invoice ID</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Tgl Pesanan</th>
                            <th>Aksi</th>
                          </tr>
                          <tr>
                            <td><a href="#">INV-87239</a></td>
                            <td class="font-weight-600">Kusnadi</td>
                            <td><div class="badge badge-warning">Menunggu</div></td>
                            <td>July 19, 2018</td>
                            <td>
                              <a href="#" class="btn btn-primary">Detail</a>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="#">INV-48574</a></td>
                            <td class="font-weight-600">Hasan Basri</td>
                            <td><div class="badge badge-success">Terbayar</div></td>
                            <td>July 21, 2018</td>
                            <td>
                              <a href="#" class="btn btn-primary">Detail</a>
                            </td>
                          </tr>    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
