@extends('admin.layouts')

@section('judul', 'Invoices')
@section('header', 'Invoices')


@section('konten')
        <p class="lead font-weight-normal">Managament Pesanan </p> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Semua Invoices</h4>
                    </div>
                    <div class="card-body">
                    <div class="float-left">
                        <select class="form-control selectric">
                        <option>Menunggu Pesanan</option>
                        <option>Pesanan Selesai (belum dibayar)</option>
                        <option>Pesanan Selesai (selesai dibayar) </option>
                        </select>
                    </div>
                    <div class="float-right">
                        <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                        <tbody>
                        <tr align="center">
                            <th class="text-center pt-2">
                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                            </th>
                            <th>Nama Product</th>
                            <th>Jumlah Pesanan</th>
                            <th>Nama Pemesan</th>
                            <th>Tgl Pesanan</th>
                            <th>Status</th>
                        </tr>
                        <tr align="center">
                            <td>
                            <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                            </div>
                            </td>
                            <td>Kopi Starbuck
                            <div class="table-links">
                                <a href="#">View</a>
                                <div class="bullet"></div>
                                <a href="#">Edit</a>
                                <div class="bullet"></div>
                                <a href="#" class="text-danger">Trash</a>
                            </div>
                            </td>
                            <td align="center">
                                2
                            </td>
                            <td>
                            <a href="#">
                                <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                            </td>
                            <td>2018-01-20</td>
                            <td><div class="badge badge-primary">Pesanan Selesai <span class="badge badge-danger">belum dibayar</span></div></td>
                        </tr>
                        </tbody></table>
                    </div>
                    <div class="float-right">
                        <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
