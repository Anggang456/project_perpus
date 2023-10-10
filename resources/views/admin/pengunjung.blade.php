@extends('layouts.admin')

@section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Pengunjung</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Info Pengunjung</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show <select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected>10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></label></div>
                        </div>
                        <div class="col-md-6">
                            <div id="dataTable_filter" class="text-md-end dataTables_filter"><label class="form-label"><input class="form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" /></label></div>
                        </div>
                    </div>
                    <div id="dataTable-1" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Gambar</th>
                                    <th>Lokasi</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>status</th>
                                    <th>Tanggal/Jam</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengguna as $pengguna)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img class="rounded-circle me-2" width="30" height="30" src="{{ $pengguna->image }}" /></td>
                                        <td>{{ $pengguna->location }}</td>
                                        <td>{{ $pengguna->name }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>{{ $pengguna->about_me }}</td>
                                        <td>{{ $pengguna->created_at}}</td>
                                        <td>{{ $pengguna->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection