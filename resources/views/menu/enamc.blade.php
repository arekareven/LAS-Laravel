@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>6C</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Data 6C</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-riwayat-pinjaman-tab" data-bs-toggle="pill"
                                        href="#v-pills-riwayat-pinjaman" role="tab" aria-controls="v-pills-riwayat-pinjaman"
                                        aria-selected="true">Riwayat Pinjaman</a>
                                    <a class="nav-link" id="v-pills-character-tab" data-bs-toggle="pill"
                                        href="#v-pills-character" role="tab" aria-controls="v-pills-character"
                                        aria-selected="true">Character</a>
                                    <a class="nav-link" id="v-pills-capacity-tab" data-bs-toggle="pill"
                                        href="#v-pills-capacity" role="tab" aria-controls="v-pills-capacity"
                                        aria-selected="false">Capacity</a>
                                    <a class="nav-link" id="v-pills-capital-tab" data-bs-toggle="pill"
                                        href="#v-pills-capital" role="tab" aria-controls="v-pills-capital"
                                        aria-selected="false">Capital</a>
                                    <a class="nav-link" id="v-pills-cashflow-tab" data-bs-toggle="pill"
                                        href="#v-pills-cashflow" role="tab" aria-controls="v-pills-cashflow"
                                        aria-selected="false">Cashflow</a>
                                    <a class="nav-link" id="v-pills-collateral-tab" data-bs-toggle="pill"
                                        href="#v-pills-collateral" role="tab" aria-controls="v-pills-collateral"
                                        aria-selected="false">Collateral</a>
                                    <a class="nav-link" id="v-pills-usulan-tab" data-bs-toggle="pill"
                                        href="#v-pills-usulan" role="tab" aria-controls="v-pills-usulan"
                                        aria-selected="false">Usulan</a>
                                    <a class="nav-link" id="v-pills-upload-tab" data-bs-toggle="pill"
                                        href="#v-pills-upload" role="tab" aria-controls="v-pills-upload"
                                        aria-selected="false">Upload Berkas</a>
                                    <a class="nav-link" id="v-pills-cetak-tab" data-bs-toggle="pill"
                                        href="#v-pills-cetak" role="tab" aria-controls="v-pills-cetak"
                                        aria-selected="false">Cetak</a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="was-validated tab-content" id="v-pills-tabContent">
                                    {{-- riwayat-pinjaman --}}
                                    <div class="tab-pane fade show active" id="v-pills-riwayat-pinjaman" role="tabpanel"
                                        aria-labelledby="v-pills-riwayat-pinjaman-tab">
                                        {{-- form --}}
                                        <div class="row">
                                            {{-- plafond --}}
                                            <div class="form-group col-md-3">
                                                <label for="plafond">Plafond</label>
                                                <input type="hidden" id="id_application" class="form-control" name="id_application_column" value="{{ $id }}" required>
                                                <input type="number" id="plafond" class="form-control" name="plafond_column" required>
                                                {{-- <div class="invalid-feedback">Isian plafond tidak boleh kosong</div> --}}
                                            </div>
                                            {{-- status --}}
                                            <div class="form-group col-md-2">
                                                <label for="status">Status</label>
                                                <select class="form-select" aria-label="Default select example" id="status" name="status_column" required>
                                                    <option value=""></option>
                                                    <option value="Lunas">Lunas</option>
                                                    <option value="Belum Lunas">Belum Lunas</option>
                                                </select>
                                            </div>
                                            {{-- saldo --}}
                                            <div class="form-group col-md-3">
                                                <label for="saldo">Saldo</label>
                                                <input type="number" id="balance" class="form-control"
                                                    name="balance_column" required>
                                            </div>
                                            {{-- sejarah --}}
                                            <div class="form-group col-md-2">
                                                <label for="history">Sejarah</label>
                                                <select class="form-select" aria-label="Default select example" id="history" name="history_column" required>
                                                    <option value=""></option>
                                                    <option value="Baik">Baik</option>
                                                    <option value="Tidak Baik">Tidak Baik</option>
                                                </select>
                                            </div>
                                            {{-- data --}}
                                            <div class="form-group col-md-2">
                                                <label for="document">Data</label>
                                                <select class="form-select" aria-label="Default select example" id="document" name="document_column" required>
                                                    <option value=""></option>
                                                    <option value="Terlampir">Terlampir</option>
                                                    <option value="Tidak Terlampir">Tidak Terlampir</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-success me-md-2">
                                                    Simpan
                                                </button>
                                            </div>
                                            <hr>
                                            <br><br><br>
                                            <h6>Data yang telah di input</h6>
                                            <hr>
                                            {{-- table --}}
                                            <div class="col-md-12 col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped data-table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Plafond</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Saldo</th>
                                                                <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(100000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(200000000) }}</a>
                                                                </td>
                                                                <td>Belum Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(75000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(10000000) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br>
                                        <table class="table table-bordered" id="dynamicAddRemove">
                                            <tr>
                                                <th>Plafond</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="addMoreInputFields[0][subject]" class="form-control"/></td>
                                                <td><input type="text" name="addMoreInputFields2[0][subject]" class="form-control"/></td>
                                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-primary">Add</button></td>
                                            </tr>
                                        </table>
                                        <button type="submit" class="btn btn-success btn-block">Save</button>
                                    </div>
                                    {{-- character --}}
                                    <div class="tab-pane fade" id="v-pills-character" role="tabpanel"
                                        aria-labelledby="v-pills-character-tab">
                                        <div class="form-group with-title mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="_column" required></textarea>
                                            <label>Informasi Pribadi</label>
                                        </div>
                                        <div class="form-group with-title mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" required></textarea>
                                            <label>Informasi Perilaku</label>
                                        </div>
                                        <div class="form-group with-title mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" required></textarea>
                                            <label>Informasi Keluarga</label>
                                        </div>
                                        <div class="row">
                                            {{-- saldo --}}
                                            <div class="form-group col-md-4">
                                                <label for="saldo">Saldo</label>
                                                <input type="number" id="balance" class="form-control"
                                                    name="balance_column" placeholder="Saldo" required>
                                            </div>
                                            {{-- saldo --}}
                                            <div class="form-group col-md-4">
                                                <label for="saldo">Saldo</label>
                                                <input type="number" id="balance" class="form-control"
                                                    name="balance_column" placeholder="Saldo" required>
                                            </div>
                                            {{-- saldo --}}
                                            <div class="form-group col-md-4">
                                                <label for="saldo">Saldo</label>
                                                <input type="number" id="balance" class="form-control"
                                                    name="balance_column" placeholder="Saldo" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-success me-md-2">
                                                    Simpan
                                                </button>
                                            </div>
                                            <hr>
                                            <br><br><br>
                                            <h6>Data yang telah di input</h6>
                                            <hr>
                                            {{-- table --}}
                                            <div class="col-md-12 col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped data-table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Plafond</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Saldo</th>
                                                                <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(100000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(200000000) }}</a>
                                                                </td>
                                                                <td>Belum Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(75000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(10000000) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- capacity --}}
                                    <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel"
                                        aria-labelledby="v-pills-capacity-tab">
                                        <div class="row">
                                            {{-- business_name --}}
                                            <div class="form-group col-md-4">
                                                <label for="business_name">Nama Usaha</label>
                                                <input type="text" id="business_name" class="form-control"
                                                    name="business_name_column" required>
                                            </div>
                                            {{-- business_sector --}}
                                            <div class="form-group col-md-4">
                                                <label for="business_sector">Sektor Usaha</label>
                                                <select class="form-select" aria-label="Default select example" id="business_sector" name="business_sector_column" required>
                                                    <option value=""></option>
                                                    <option value="Industri">Industri</option>
                                                    <option value="Jasa">Jasa</option>
                                                    <option value="Kontraktor">Kontraktor</option>
                                                    <option value="Pegawai">Pegawai</option>
                                                    <option value="Perdagangan">Perdagangan</option>
                                                    <option value="Pertanian">Pertanian</option>
                                                    <option value="Konsumtif">Konsumtif</option>
                                                </select>
                                            </div>
                                            {{-- business_status --}}
                                            <div class="form-group col-md-4">
                                                <label for="business_status">Status Tempat Usaha</label>
                                                <select class="form-select" aria-label="Default select example" id="business_status" name="business_status_column" required>
                                                    <option value=""></option>
                                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                                    <option value="Milik Keluarga">Milik Keluarga</option>
                                                    <option value="Instansi">Instansi</option>
                                                    <option value="Kontrak">Kontrak</option>
                                                    <option value="Kredit">Kredit</option>
                                                </select>
                                            </div>
                                            {{-- phone_number --}}
                                            <div class="form-group col-md-4">
                                                <label for="phone_number">No Tlp</label>
                                                <input type="number" id="phone_number" class="form-control"
                                                    name="phone_number_column" required>
                                            </div>
                                            {{-- business_start --}}
                                            <div class="form-group col-md-4">
                                                <label for="business_start">Mulai Usaha</label>
                                                <input type="date" id="business_start" class="form-control"
                                                    name="business_start_column" required>
                                            </div>
                                            {{-- customer_start --}}
                                            <div class="form-group col-md-4">
                                                <label for="customer_start">Jadi Nasabah Sejak</label>
                                                <input type="date" id="customer_start" class="form-control"
                                                    name="customer_start_column" required>
                                            </div>
                                            {{-- deed_number --}}
                                            <div class="form-group col-md-4">
                                                <label for="deed_number">No Akta</label>
                                                <input type="text" id="deed_number" class="form-control"
                                                    name="deed_number_column" required>
                                            </div>
                                            {{-- deed_date --}}
                                            <div class="form-group col-md-4">
                                                <label for="deed_date">Tanggal Akta</label>
                                                <input type="date" id="deed_date" class="form-control"
                                                    name="deed_date_column" required>
                                            </div>
                                            {{-- npwp --}}
                                            <div class="form-group col-md-4">
                                                <label for="npwp">NPWP</label>
                                                <input type="number" id="npwp" class="form-control"
                                                    name="npwp_column" required>
                                            </div>
                                            {{-- npwp_date --}}
                                            <div class="form-group col-md-4">
                                                <label for="npwp_date">Tanggal NPWP</label>
                                                <input type="number" id="npwp_date" class="form-control"
                                                    name="npwp_date_column" required>
                                            </div>
                                            {{-- alamat --}}
                                            <div class="form-group mb-2">
                                                <label>Alamat Usaha</label>
                                                <textarea class="form-control" id="business_address"
                                                    rows="2" name="business_address_column" required></textarea>
                                            </div>
                                            {{-- usaha saat ini --}}
                                            <div class="form-group mb-3">
                                                <label>Rincian Usaha</label>
                                                <textarea name="current_business" id="summernote" cols="30" rows="10"></textarea>
                                            </div>
                                            {{-- usaha setelah realisasi --}}
                                            {{-- <div class="form-group mb-3">
                                                <label>Usaha Setelah Realisasi</label>
                                                <textarea name="business_start" id="default" cols="30" rows="10"></textarea>
                                            </div> --}}
                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-success me-md-2">
                                                    Simpan
                                                </button>
                                            </div>
                                            <hr>
                                            <br><br><br>
                                            <h6>Data yang telah di input</h6>
                                            <hr>
                                            {{-- table --}}
                                            <div class="col-md-12 col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped data-table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Plafond</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Saldo</th>
                                                                <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(100000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(200000000) }}</a>
                                                                </td>
                                                                <td>Belum Lunas</td>
                                                                <td>{{ number_format(0) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#">{{ number_format(75000000) }}</a>
                                                                </td>
                                                                <td>Lunas</td>
                                                                <td>{{ number_format(10000000) }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- capital --}}
                                    <div class="tab-pane fade" id="v-pills-capital" role="tabpanel"
                                        aria-labelledby="v-pills-capital-tab">
                                        Integer pretium dolor at sapien laoreet ultricies. Fusce congue et
                                        lorem id
                                        convallis. Nulla volutpat tellus nec
                                        molestie finibus. In nec odio tincidunt eros finibus ullamcorper. Ut
                                        sodales,
                                        dui nec posuere finibus, nisl sem aliquam
                                        metus, eu accumsan lacus felis at odio.
                                    </div>
                                    {{-- cashflow --}}
                                    <div class="tab-pane fade" id="v-pills-cashflow" role="tabpanel"
                                        aria-labelledby="v-pills-cashflow-tab">
                                        Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                        massa.
                                        Pellentesque et quam vel massa pretium ullamcorper
                                        vitae eu tortor.
                                    </div>
                                    {{-- collateral --}}
                                    <div class="tab-pane fade" id="v-pills-collateral" role="tabpanel"
                                        aria-labelledby="v-pills-collateral-tab">
                                        Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                        massa.
                                        Pellentesque et quam vel massa pretium ullamcorper
                                        vitae eu tortor.
                                    </div>
                                    {{-- usulan --}}
                                    <div class="tab-pane fade" id="v-pills-usulan" role="tabpanel"
                                        aria-labelledby="v-pills-usulan-tab">
                                        Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                        massa.
                                        Pellentesque et quam vel massa pretium ullamcorper
                                        vitae eu tortor.
                                    </div>
                                    {{-- upload --}}
                                    <div class="tab-pane fade" id="v-pills-upload" role="tabpanel"
                                        aria-labelledby="v-pills-upload-tab">
                                        Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                        massa.
                                        Pellentesque et quam vel massa pretium ullamcorper
                                        vitae eu tortor.
                                    </div>
                                    {{-- cetak --}}
                                    <div class="tab-pane fade" id="v-pills-cetak" role="tabpanel"
                                        aria-labelledby="v-pills-cetak-tab">
                                        Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                        massa.
                                        Pellentesque et quam vel massa pretium ullamcorper
                                        vitae eu tortor.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@section('script')
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i + '][subject]" class="form-control" /></td><td><input type="text" name="addMoreInputFields2[' + i + '][subject]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-input-field">Delete</button></td></tr>');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection

