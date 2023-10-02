@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Manajemen Pengunjung</h3>
    <div class="card shadow">
        <div class="card-header py-3" style="text-align: right;"><button class="btn btn-primary" type="button" style="font-size: 12px;"><i class="fas fa-plus fa-2x text-gray-300" style="font-size: 12px;"></i></button></div>
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
            <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>NIM/NIPPK/No.Telp</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar1.jpeg" /></td>
                            <td>Jeni Novitasari</td>
                            <td>3361554018</td>
                            <td>Mahasiswa</td>
                            <td><i class="fas fa-edit fa-2x text-gray-300" style="font-size: 20px;"></i><i class="fas fa-trash fa-2x text-gray-300" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                            <td>2. </td>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar2.jpeg" /></td>
                            <td>Galuh Ayu Oktaviani</td>
                            <td>3361554017</td>
                            <td>Mahasiswa</td>
                            <td><i class="fas fa-edit fa-2x text-gray-300" style="font-size: 20px;"></i><i class="fas fa-trash fa-2x text-gray-300" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar3.jpeg" /></td>
                            <td>Rio Anugrah Putra</td>
                            <td>3361554010</td>
                            <td>Mahasiswa</td>
                            <td><i class="fas fa-edit fa-2x text-gray-300" style="font-size: 20px;"></i><i class="fas fa-trash fa-2x text-gray-300" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="../assets/img/avatars/avatar4.jpeg" /></td>
                            <td>Azza Faiz Hamdani</td>
                            <td>3361554019</td>
                            <td>Dosen</td>
                            <td><i class="fas fa-edit fa-2x text-gray-300" style="font-size: 20px;"></i><i class="fas fa-trash fa-2x text-gray-300" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
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