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
                                    <a class="nav-link" id="v-pills-cashflow-before-tab" data-bs-toggle="pill"
                                        href="#v-pills-cashflow-before" role="tab" aria-controls="v-pills-cashflow-before"
                                        aria-selected="false">Cashflow Sebelum</a>
                                    <a class="nav-link" id="v-pills-cashflow-after-tab" data-bs-toggle="pill"
                                        href="#v-pills-cashflow-after" role="tab" aria-controls="v-pills-cashflow-after"
                                        aria-selected="false">Cashflow Setelah</a>
                                    <a class="nav-link" id="v-pills-other-income-tab" data-bs-toggle="pill"
                                        href="#v-pills-other-income" role="tab" aria-controls="v-pills-other-income"
                                        aria-selected="false">Pendapatan Lain</a>
                                    <a class="nav-link" id="v-pills-debt-here-tab" data-bs-toggle="pill"
                                        href="#v-pills-debt-here" role="tab" aria-controls="v-pills-debt-here"
                                        aria-selected="false">Hutang</a>
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
                                <div class="tab-content" id="v-pills-tabContent">
                                    {{-- riwayat-pinjaman --}}
                                    <div class="tab-pane fade show active" id="v-pills-riwayat-pinjaman" role="tabpanel"
                                        aria-labelledby="v-pills-riwayat-pinjaman-tab">
                                        {{-- form --}}
                                        <div class="row">
                                            {{-- table --}}
                                            <p>
                                                <a class="btn btn-outline-success" data-bs-toggle="collapse" href="#collapseLoanHistory" role="button" aria-expanded="false" aria-controls="collapseLoanHistory">
                                                    Lihat Data
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseLoanHistory">
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
                                        <br>
                                        <table class="table table-borderless" id="dynamicAddRemove">
                                            <tr>
                                                <th>Plafond</th>
                                                <th>Status</th>
                                                <th>Saldo</th>
                                                <th>Sejarah</th>
                                                <th>Data</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <input type="hidden" id="id_application" class="form-control" name="id_application_column" value="{{ $id }}" required>
                                                <td><input type="number" id="plafond" class="form-control" name="plafond_column[0][subject]" required></td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example" id="status" name="status_column[0][subject]" required>
                                                        <option value=""></option>
                                                        <option value="Lunas">Lunas</option>
                                                        <option value="Belum Lunas">Belum Lunas</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" id="balance" class="form-control" name="balance_column" required></td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example" id="history" name="history_column[0][subject]" required>
                                                        <option value=""></option>
                                                        <option value="Baik">Baik</option>
                                                        <option value="Tidak Baik">Tidak Baik</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example" id="document" name="document_column[0][subject]" required>
                                                        <option value=""></option>
                                                        <option value="Terlampir">Terlampir</option>
                                                        <option value="Tidak Terlampir">Tidak Terlampir</option>
                                                    </select>
                                                </td>
                                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary"><i class="fas fa-plus"></i></button></td>
                                            </tr>
                                        </table>
                                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
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
                                            {{-- character_name1 --}}
                                            <div class="form-group col-md-6">
                                                <label for="character_name1">Nama</label>
                                                <input type="text" id="character_name1" class="form-control"
                                                    name="character_name1_column" placeholder="Nama" required>
                                            </div>
                                            {{-- character_number1 --}}
                                            <div class="form-group col-md-6">
                                                <label for="character_number1">Nomor HP</label>
                                                <input type="number" id="character_number1" class="form-control"
                                                    name="character_number1_column" placeholder="Nomor HP" required>
                                            </div>
                                            {{-- saldo --}}
                                            <div class="form-group col-md-12">
                                                <label for="saldo">Alamat</label>
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
                                                <input type="text" id="npwp" class="form-control"
                                                    name="npwp_column" required>
                                            </div>
                                            {{-- npwp_date --}}
                                            <div class="form-group col-md-4">
                                                <label for="npwp_date">Tanggal NPWP</label>
                                                <input type="date" id="npwp_date" class="form-control"
                                                    name="npwp_date_column" required>
                                            </div>
                                            {{-- alamat --}}
                                            <div class="form-group mb-2">
                                                <label>Alamat Usaha</label>
                                                <textarea class="form-control" id="business_address"
                                                    rows="2" name="business_address_column" required></textarea>
                                            </div>
                                            {{-- usaha saat ini --}}
                                            <label>Rincian Usaha</label>
                                            <div id="full">
                                                {{-- <p>Hello World!</p>
                                                <p>Some initial <strong>bold</strong> text</p> --}}
                                                <br><br><br><br><br>
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-success me-md-2">
                                                    Simpan
                                                </button>
                                            </div>
                                            <hr>
                                            {{-- <hr>
                                            <br><br><br>
                                            <h6>Data yang telah di input</h6>
                                            <hr> --}}
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
                                        <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="current_assets-tab" data-bs-toggle="tab" href="#current_assets"
                                                    role="tab" aria-controls="current_assets" aria-selected="true"><h6>Aktiva Produktif</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="fixed_assets-tab" data-bs-toggle="tab" href="#fixed_assets"
                                                    role="tab" aria-controls="fixed_assets" aria-selected="false"><h6>Aktiva Lainnya</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="debt-tab" data-bs-toggle="tab" href="#debt"
                                                    role="tab" aria-controls="debt" aria-selected="false"><h6>Hutang</h6></a>
                                            </li>
                                        </ul>
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="current_assets" role="tabpanel">
                                                <div class="row">
                                                    {{-- cash --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="cash">Kas</label>
                                                        <input type="number" id="cash" class="form-control"
                                                            name="cash_column" required>
                                                    </div>
                                                    {{-- savings --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="savings">Tabungan</label>
                                                        <input type="number" id="savings" class="form-control"
                                                            name="savings_column" required>
                                                    </div>
                                                    {{-- deposit --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="deposit">Deposito</label>
                                                        <input type="number" id="deposit" class="form-control"
                                                            name="deposit_column" required>
                                                    </div>
                                                    {{-- receivables --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="receivables">Piutang</label>
                                                        <input type="number" id="receivables" class="form-control"
                                                            name="receivables_column" required>
                                                    </div>
                                                    {{-- equipment --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="equipment">Peralatan</label>
                                                        <input type="number" id="equipment" class="form-control"
                                                            name="equipment_column" required>
                                                    </div>
                                                    {{-- inventory1 --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="inventory1">Persediaan Barang Usaha 1</label>
                                                        <input type="number" id="inventory1" class="form-control"
                                                            name="inventory1_column" required>
                                                    </div>
                                                    {{-- inventory2 --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="inventory2">Persediaan Barang Usaha 2</label>
                                                        <input type="number" id="inventory2" class="form-control"
                                                            name="inventory2_column" required>
                                                    </div>
                                                    {{-- inventory3 --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="inventory3">Persediaan Barang Usaha 3</label>
                                                        <input type="number" id="inventory3" class="form-control"
                                                            name="inventory3_column" required>
                                                    </div>
                                                    {{-- prepaid_lease --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="prepaid_lease">Sewa Dibayar Dimuka</label>
                                                        <input type="number" id="prepaid_lease" class="form-control"
                                                            name="prepaid_lease_column" required>
                                                    </div>
                                                    {{-- tillage --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="tillage">Lahan Garap</label>
                                                        <input type="number" id="tillage" class="form-control"
                                                            name="tillage_column" required>
                                                    </div>
                                                    {{-- building_current_assets --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="building_current_assets">Gedung / Ruko</label>
                                                        <input type="number" id="building_current_assets" class="form-control"
                                                            name="building_current_assets_column" required>
                                                    </div>
                                                    {{-- operational_vehicle --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="operational_vehicle">Kendaraan Operasional</label>
                                                        <input type="number" id="operational_vehicle" class="form-control"
                                                            name="operational_vehicle_column" required>
                                                    </div>
                                                    {{-- other_current_assets --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="other_current_assets">Lain - Lain</label>
                                                        <input type="number" id="other_current_assets" class="form-control"
                                                            name="other_current_assets_column" required>
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="fixed_assets" role="tabpanel">
                                                <div class="row">
                                                    {{-- land --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land">Tanah</label>
                                                        <input type="number" id="land" class="form-control"
                                                            name="land_column" required>
                                                    </div>
                                                    {{-- building_fixed_assets --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="building_fixed_assets">Bangunan</label>
                                                        <input type="number" id="building_fixed_assets" class="form-control"
                                                            name="building_fixed_assets_column" required>
                                                    </div>
                                                    {{-- vehicle --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle">Kendaraan</label>
                                                        <input type="number" id="vehicle" class="form-control"
                                                            name="vehicle_column" required>
                                                    </div>
                                                    {{-- inventory --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="inventory">Inventaris</label>
                                                        <input type="number" id="inventory" class="form-control"
                                                            name="inventory_column" required>
                                                    </div>
                                                    {{-- other_fixed_assets --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="other_fixed_assets">Lain - Lain</label>
                                                        <input type="number" id="other_fixed_assets" class="form-control"
                                                            name="other_fixed_assets_column" required>
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="debt" role="tabpanel">
                                                <div class="row">
                                                    {{-- short_term_debt --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="short_term_debt">Hutang Jangka Pendek</label>
                                                        <input type="number" id="short_term_debt" class="form-control"
                                                            name="short_term_debt_column" required>
                                                    </div>
                                                    {{-- long_term_debt --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="long_term_debt">Hutang Jangka Panjang</label>
                                                        <input type="number" id="long_term_debt" class="form-control"
                                                            name="long_term_debt_column" required>
                                                    </div>
                                                    {{-- other_debts --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="other_debts">Hutang Lain</label>
                                                        <input type="number" id="other_debts" class="form-control"
                                                            name="other_debts_column" required>
                                                    </div>
                                                    {{-- trade_debt --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="trade_debt">Hutang Dagang</label>
                                                        <input type="number" id="trade_debt" class="form-control"
                                                            name="trade_debt_column" required>
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- cashflow before --}}
                                    <div class="tab-pane fade" id="v-pills-cashflow-before" role="tabpanel"
                                        aria-labelledby="v-pills-cashflow-before-tab">
                                        <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="income-before-tab" data-bs-toggle="tab" href="#income-before"
                                                    role="tab" aria-controls="income-before" aria-selected="true"><h6>Pendapatan</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="expenditure-before-tab" data-bs-toggle="tab" href="#expenditure-before"
                                                    role="tab" aria-controls="expenditure-before" aria-selected="false"><h6>Pengeluaran</h6></a>
                                            </li>
                                        </ul>
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="income-before" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_income_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_income_before">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_income_before" name="from_income_before_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '4.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_income_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_income_before">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_income_before" name="to_before_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_income_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_income_before">Keterangan</label>
                                                        <input type="text" id="explanation_income_before" class="form-control"
                                                            name="explanation_income_before_column" required>
                                                    </div>
                                                    {{-- amount_income_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_income_before">Sebesar</label>
                                                        <input type="number" id="amount_income_before" class="form-control"
                                                            name="amount_income_before_column" required>
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
                                            <div class="tab-pane fade" id="expenditure-before" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_expenditure_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_expenditure_before">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_expenditure_before" name="from_expenditure_before_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_expenditure_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_expenditure_before">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_expenditure_before" name="to_expenditure_before_column" required>
                                                            <option value=""></option>
                                                            @foreach ($approximation as $data)
                                                                @if (Str::contains($data->code_approximation, '5.'))
                                                                    <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_expenditure_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_expenditure_before">Keterangan</label>
                                                        <input type="text" id="explanation_expenditure_before" class="form-control"
                                                            name="explanation_expenditure_before_column" required>
                                                    </div>
                                                    {{-- amount_expenditure_before --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_expenditure_before">Sebesar</label>
                                                        <input type="number" id="amount_expenditure_before" class="form-control"
                                                            name="amount_expenditure_before_column" required>
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
                                        </div>
                                    </div>
                                    {{-- cashflow after --}}
                                    <div class="tab-pane fade" id="v-pills-cashflow-after" role="tabpanel"
                                        aria-labelledby="v-pills-cashflow-after-tab">
                                        <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="income-after-tab" data-bs-toggle="tab" href="#income-after"
                                                    role="tab" aria-controls="income-after" aria-selected="true"><h6>Pendapatan</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="expenditure-after-tab" data-bs-toggle="tab" href="#expenditure-after"
                                                    role="tab" aria-controls="expenditure-after" aria-selected="false"><h6>Pengeluaran</h6></a>
                                            </li>
                                        </ul>
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="income-after" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_income_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_income_after">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_income_after" name="from_income_after_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '4.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_income_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_income_after">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_income_after" name="to_after_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_income_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_income_after">Keterangan</label>
                                                        <input type="text" id="explanation_income_after" class="form-control"
                                                            name="explanation_income_after_column" required>
                                                    </div>
                                                    {{-- amount_income_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_income_after">Sebesar</label>
                                                        <input type="number" id="amount_income_after" class="form-control"
                                                            name="amount_income_after_column" required>
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
                                            <div class="tab-pane fade" id="expenditure-after" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_expenditure_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_expenditure_after">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_expenditure_after" name="from_expenditure_after_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_expenditure_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_expenditure_after">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_expenditure_after" name="to_expenditure_after_column" required>
                                                            <option value=""></option>
                                                            @foreach ($approximation as $data)
                                                                @if (Str::contains($data->code_approximation, '5.'))
                                                                    <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_expenditure_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_expenditure_after">Keterangan</label>
                                                        <input type="text" id="explanation_expenditure_after" class="form-control"
                                                            name="explanation_expenditure_after_column" required>
                                                    </div>
                                                    {{-- amount_expenditure_after --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_expenditure_after">Sebesar</label>
                                                        <input type="number" id="amount_expenditure_after" class="form-control"
                                                            name="amount_expenditure_after_column" required>
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
                                        </div>
                                    </div>
                                    {{-- other income --}}
                                    <div class="tab-pane fade" id="v-pills-other-income" role="tabpanel"
                                        aria-labelledby="v-pills-other-income-tab">
                                        <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="income-other-tab" data-bs-toggle="tab" href="#income-other"
                                                    role="tab" aria-controls="income-other" aria-selected="true"><h6>Pendapatan</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="expenditure-other-tab" data-bs-toggle="tab" href="#expenditure-other"
                                                    role="tab" aria-controls="expenditure-other" aria-selected="false"><h6>Pengeluaran</h6></a>
                                            </li>
                                        </ul>
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="income-other" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_income_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_income_other">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_income_other" name="from_income_other_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '4.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_income_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_income_other">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_income_other" name="to_other_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_income_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_income_other">Keterangan</label>
                                                        <input type="text" id="explanation_income_other" class="form-control"
                                                            name="explanation_income_other_column" required>
                                                    </div>
                                                    {{-- amount_income_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_income_other">Sebesar</label>
                                                        <input type="number" id="amount_income_other" class="form-control"
                                                            name="amount_income_other_column" required>
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
                                            <div class="tab-pane fade" id="expenditure-other" role="tabpanel">
                                                <div class="row">
                                                    {{-- from_expenditure_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="from_expenditure_other">Pendapatan Dari</label>
                                                        <select class="form-select" aria-label="Default select example" id="from_expenditure_other" name="from_expenditure_other_column" required>
                                                            <option value=""></option>@foreach ($approximation as $data)
                                                            @if (Str::contains($data->code_approximation, '1.1.'))
                                                                <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- to_expenditure_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="to_expenditure_other">Digunakan Untuk</label>
                                                        <select class="form-select" aria-label="Default select example" id="to_expenditure_other" name="to_expenditure_other_column" required>
                                                            <option value=""></option>
                                                            @foreach ($approximation as $data)
                                                                @if (Str::contains($data->code_approximation, '5.'))
                                                                    <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- explanation_expenditure_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="explanation_expenditure_other">Keterangan</label>
                                                        <input type="text" id="explanation_expenditure_other" class="form-control"
                                                            name="explanation_expenditure_other_column" required>
                                                    </div>
                                                    {{-- amount_expenditure_other --}}
                                                    <div class="form-group col-md-6">
                                                        <label for="amount_expenditure_other">Sebesar</label>
                                                        <input type="number" id="amount_expenditure_other" class="form-control"
                                                            name="amount_expenditure_other_column" required>
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
                                        </div>
                                    </div>
                                    {{-- debt here --}}
                                    <div class="tab-pane fade" id="v-pills-debt-here" role="tabpanel"
                                        aria-labelledby="v-pills-debt-here-tab">
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="row">
                                                {{-- from_debt_here --}}
                                                <div class="form-group col-md-6">
                                                    <label for="from_debt_here">Akun Asal</label>
                                                    <select class="form-select" aria-label="Default select example" id="from_debt_here" name="from_debt_here_column" required>
                                                        <option value=""></option>@foreach ($approximation as $data)
                                                        @if (Str::contains($data->code_approximation, '4.1.'))
                                                            <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                        @endif
                                                    @endforeach
                                                    </select>
                                                </div>
                                                {{-- to_debt_here --}}
                                                <div class="form-group col-md-6">
                                                    <label for="to_debt_here">Akun Untuk</label>
                                                    <select class="form-select" aria-label="Default select example" id="to_debt_here" name="to_after_column" required>
                                                        <option value=""></option>@foreach ($approximation as $data)
                                                        @if (Str::contains($data->code_approximation, '1.1.'))
                                                            <option value="{{ $data->code_approximation }}">{{ $data->name_approximation }}</option>
                                                        @endif
                                                    @endforeach
                                                    </select>
                                                </div>
                                                {{-- explanation_debt_here --}}
                                                <div class="form-group col-md-6">
                                                    <label for="explanation_debt_here">Keterangan</label>
                                                    <input type="text" id="explanation_debt_here" class="form-control"
                                                        name="explanation_debt_here_column" required>
                                                </div>
                                                {{-- amount_debt_here --}}
                                                <div class="form-group col-md-6">
                                                    <label for="amount_debt_here">Sebesar</label>
                                                    <input type="number" id="amount_debt_here" class="form-control"
                                                        name="amount_debt_here_column" required>
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
                                    </div>
                                    {{-- collateral --}}
                                    <div class="tab-pane fade" id="v-pills-collateral" role="tabpanel"
                                        aria-labelledby="v-pills-collateral-tab">
                                        <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="collateral-land-tab" data-bs-toggle="tab" href="#collateral-land"
                                                    role="tab" aria-controls="collateral-land" aria-selected="true"><h6>Tanah</h6></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="collateral-vehicle-tab" data-bs-toggle="tab" href="#collateral-vehicle"
                                                    role="tab" aria-controls="collateral-vehicle" aria-selected="false"><h6>Kendaraan</h6></a>
                                            </li>
                                        </ul>
                                        <div class="was-validated tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="collateral-land" role="tabpanel">
                                                {{-- table --}}
                                                <p>
                                                    <a class="btn btn-outline-success" data-bs-toggle="collapse" href="#collapseLandCollateral" role="button" aria-expanded="false" aria-controls="collapseLandCollateral">
                                                        Lihat Data
                                                    </a>
                                                </p>
                                                <div class="collapse" id="collapseLandCollateral">
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
                                                <hr>
                                                <div class="row">
                                                    {{-- land_type --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_type">Jenis Tanah</label>
                                                        <input type="text" id="land_type" class="form-control"
                                                            name="land_type_column" required>
                                                    </div>
                                                    {{-- land_owner --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_owner">Nama Pemilik</label>
                                                        <input type="text" id="land_owner" class="form-control"
                                                            name="land_owner_column" required>
                                                    </div>
                                                    {{-- land_number --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_number">No. SHM</label>
                                                        <input type="text" id="land_number" class="form-control"
                                                            name="land_number_column" required>
                                                    </div>
                                                    {{-- surface_area --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="surface_area">Luas Tanah</label>
                                                        <input type="number" id="surface_area" class="form-control"
                                                            name="surface_area_column" required>
                                                    </div>
                                                    {{-- building_area --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="building_area">Luas Bangunan</label>
                                                        <input type="number" id="building_area" class="form-control"
                                                            name="building_area_column" required>
                                                    </div>
                                                    {{-- land_market_price --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_market_price">Harga Pasaran Tanah</label>
                                                        <input type="number" id="land_market_price" class="form-control"
                                                            name="land_market_price_column" required>
                                                    </div>
                                                    {{-- building_market_price --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="building_market_price">Harga Pasaran Bangunan</label>
                                                        <input type="number" id="building_market_price" class="form-control"
                                                            name="building_market_price_column" required>
                                                    </div>
                                                    {{-- land_sppt_price --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_sppt_price">Harga SPPT Tanah</label>
                                                        <input type="number" id="land_sppt_price" class="form-control"
                                                            name="land_sppt_price_column" required>
                                                    </div>
                                                    {{-- building_sppt_price --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="building_sppt_price">Harga SPPT Bangunan</label>
                                                        <input type="number" id="building_sppt_price" class="form-control"
                                                            name="building_sppt_price_column" required>
                                                    </div>
                                                    {{-- date_measurement_letter --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="date_measurement_letter">Tgl Surat Ukur</label>
                                                        <input type="date" id="date_measurement_letter" class="form-control"
                                                            name="date_measurement_letter_column" required>
                                                    </div>
                                                    {{-- number_measurement_letter --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="number_measurement_letter">No. Surat Ukur</label>
                                                        <input type="text" id="number_measurement_letter" class="form-control"
                                                            name="number_measurement_letter_column" required>
                                                    </div>
                                                    {{-- land_ownership --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_ownership">Hak Milik</label>
                                                        <input type="text" id="land_ownership" class="form-control"
                                                            name="land_ownership_column" required>
                                                    </div>
                                                    {{-- ht_value --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="ht_value">Nilai HT</label>
                                                        <input type="number" id="ht_value" class="form-control"
                                                            name="ht_value_column" required>
                                                    </div>
                                                    {{-- taksasi --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="taksasi">Taksasi (%)</label>
                                                        <input type="number" id="taksasi" class="form-control"
                                                            name="taksasi_column" required>
                                                    </div>
                                                    {{-- owner_address --}}
                                                    <div class="form-group mb-2">
                                                        <label>Alamat Pemilik</label>
                                                        <textarea class="form-control" id="owner_address"
                                                            rows="2" name="owner_address_column" required></textarea>
                                                    </div>
                                                    {{-- land_address --}}
                                                    <div class="form-group mb-2">
                                                        <label>Lokasi Jaminan</label>
                                                        <textarea class="form-control" id="land_address"
                                                            rows="2" name="land_address_column" required></textarea>
                                                    </div>
                                                    {{-- land_explanation --}}
                                                    <div class="form-group mb-2">
                                                        <label>Keterangan</label>
                                                        <textarea class="form-control" id="land_explanation"
                                                            rows="2" name="land_explanation_column" required></textarea>
                                                    </div>
                                                    {{-- land_proposal --}}
                                                    <div class="form-group mb-2">
                                                        <label>Usulan</label>
                                                        <textarea class="form-control" id="land_proposal"
                                                            rows="2" name="land_proposal_column" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <button type="button" class="btn btn-success me-md-2">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="collateral-vehicle" role="tabpanel">
                                                {{-- table --}}
                                                <p>
                                                    <a class="btn btn-outline-success" data-bs-toggle="collapse" href="#collapseVehicleCollateral" role="button" aria-expanded="false" aria-controls="collapseVehicleCollateral">
                                                        Lihat Data
                                                    </a>
                                                </p>
                                                <div class="collapse" id="collapseVehicleCollateral">
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
                                                <hr>
                                                <div class="row">
                                                    {{-- wheels --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="wheels">Roda</label>
                                                        <select class="form-select" aria-label="Default select example" id="wheels" name="wheels_column" required>
                                                            <option value=""></option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                    {{-- license_plate --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="license_plate">Nomor Polisi</label>
                                                        <input type="text" id="license_plate" class="form-control"
                                                            name="license_plate_column" required>
                                                    </div>
                                                    {{-- land_number --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="land_number">No. SHM</label>
                                                        <input type="text" id="land_number" class="form-control"
                                                            name="land_number_column" required>
                                                    </div>
                                                    {{-- stnk_name --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="stnk_name">Nama di STNK</label>
                                                        <input type="text" id="stnk_name" class="form-control"
                                                            name="stnk_name_column" required>
                                                    </div>
                                                    {{-- vehicle_year --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_year">Tahun</label>
                                                        <input type="text" id="vehicle_year" class="form-control"
                                                            name="vehicle_year_column" required>
                                                    </div>
                                                    {{-- vehicle_cylinder --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_cylinder">Isi Silinder</label>
                                                        <input type="number" id="vehicle_cylinder" class="form-control"
                                                            name="vehicle_cylinder_column" required>
                                                    </div>
                                                    {{-- frame_number --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="frame_number">No. Rangka</label>
                                                        <input type="text" id="frame_number" class="form-control"
                                                            name="frame_number_column" required>
                                                    </div>
                                                    {{-- machine_number --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="machine_number">No. Mesin</label>
                                                        <input type="text" id="machine_number" class="form-control"
                                                            name="machine_number_column" required>
                                                    </div>
                                                    {{-- bpkb_number --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="bpkb_number">No. BPKB</label>
                                                        <input type="text" id="bpkb_number" class="form-control"
                                                            name="bpkb_number_column" required>
                                                    </div>
                                                    {{-- vehicle_brand --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_brand">Merk</label>
                                                        <input type="text" id="vehicle_brand" class="form-control"
                                                            name="vehicle_brand_column" required>
                                                    </div>
                                                    {{-- kind_of_car --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="kind_of_car">Jenis</label>
                                                        <input type="text" id="kind_of_car" class="form-control"
                                                            name="kind_of_car_column" required>
                                                    </div>
                                                    {{-- vehicle_color --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_color">Warna</label>
                                                        <input type="text" id="vehicle_color" class="form-control"
                                                            name="vehicle_color_column" required>
                                                    </div>
                                                    {{-- vehicle_market_price --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_market_price">Harga Pasaran</label>
                                                        <input type="number" id="vehicle_market_price" class="form-control"
                                                            name="vehicle_market_price_column" required>
                                                    </div>
                                                    {{-- nl_value --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="nl_value">Nilai NL</label>
                                                        <input type="number" id="nl_value" class="form-control"
                                                            name="nl_value_column" required>
                                                    </div>
                                                    {{-- vehicle_ownership --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="vehicle_ownership">Hak Milik</label>
                                                        <input type="text" id="vehicle_ownership" class="form-control"
                                                            name="vehicle_ownership_column" required>
                                                    </div>
                                                    {{-- address_owner_vehicle --}}
                                                    <div class="form-group mb-2">
                                                        <label>Alamat Pemilik</label>
                                                        <textarea class="form-control" id="address_owner_vehicle"
                                                            rows="2" name="address_owner_vehicle_column" required></textarea>
                                                    </div>
                                                    {{-- vehicle_proposal --}}
                                                    <div class="form-group mb-2">
                                                        <label>Usulan</label>
                                                        <textarea class="form-control" id="vehicle_proposal"
                                                            rows="2" name="vehicle_proposal_column" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <button type="button" class="btn btn-success me-md-2">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- usulan --}}
                                    <div class="tab-pane fade" id="v-pills-usulan" role="tabpanel"
                                        aria-labelledby="v-pills-usulan-tab">
                                        <div class="row">
                                            {{-- character --}}
                                            <div class="form-group col-md-4">
                                                <label for="character">Character</label>
                                                <input type="text" id="character" class="form-control"
                                                    name="character_column" required>
                                            </div>
                                            {{-- capacity --}}
                                            <div class="form-group col-md-4">
                                                <label for="capacity">Capacity</label>
                                                <input type="text" id="capacity" class="form-control"
                                                    name="capacity_column" required>
                                            </div>
                                            {{-- capital --}}
                                            <div class="form-group col-md-4">
                                                <label for="capital">Capital</label>
                                                <input type="text" id="capital" class="form-control"
                                                    name="capital_column" required>
                                            </div>
                                            {{-- condition --}}
                                            <div class="form-group col-md-4">
                                                <label for="condition">Condition</label>
                                                <input type="text" id="condition" class="form-control"
                                                    name="condition_column" required>
                                            </div>
                                            {{-- collateral --}}
                                            <div class="form-group col-md-4">
                                                <label for="collateral">Collateral</label>
                                                <input type="text" id="collateral" class="form-control"
                                                    name="collateral_column" required>
                                            </div>
                                            {{-- realization_date --}}
                                            <div class="form-group col-md-4">
                                                <label for="realization_date">Tgl Realisasi</label>
                                                <input type="date" id="realization_date" class="form-control"
                                                    name="realization_date_column" required>
                                            </div>
                                            {{-- plafond_proposal --}}
                                            <div class="form-group col-md-4">
                                                <label for="plafond_proposal">Plafond</label>
                                                <input type="number" id="plafond_proposal" class="form-control"
                                                    name="plafond_proposal_column" required>
                                            </div>
                                            {{-- time_period_proposal --}}
                                            <div class="form-group col-md-4">
                                                <label for="time_period_proposal">Jangka Waktu</label>
                                                <input type="number" id="time_period_proposal" class="form-control"
                                                    name="time_period_proposal_column" required>
                                            </div>
                                            {{-- interest --}}
                                            <div class="form-group col-md-4">
                                                <label for="interest">Bunga (%)</label>
                                                <input type="number" id="interest" class="form-control"
                                                    name="interest_column" required>
                                            </div>
                                            {{-- provision --}}
                                            <div class="form-group col-md-4">
                                                <label for="provision">Provisi</label>
                                                <input type="number" id="provision" class="form-control"
                                                    name="provision_column" required>
                                            </div>
                                            {{-- administration --}}
                                            <div class="form-group col-md-4">
                                                <label for="administration">Admnistrasi</label>
                                                <input type="number" id="administration" class="form-control"
                                                    name="administration_column" required>
                                            </div>
                                            {{-- insurance --}}
                                            <div class="form-group col-md-4">
                                                <label for="insurance">Asuransi</label>
                                                <input type="number" id="insurance" class="form-control"
                                                    name="insurance_column" required>
                                            </div>
                                            {{-- dutystamp --}}
                                            <div class="form-group col-md-4">
                                                <label for="dutystamp">Materai</label>
                                                <input type="number" id="dutystamp" class="form-control"
                                                    name="dutystamp_column" required>
                                            </div>
                                            {{-- apht --}}
                                            <div class="form-group col-md-4">
                                                <label for="apht">APHT</label>
                                                <input type="number" id="apht" class="form-control"
                                                    name="apht_column" required>
                                            </div>
                                            {{-- skmht --}}
                                            <div class="form-group col-md-4">
                                                <label for="skmht">SKMHT</label>
                                                <input type="number" id="skmht" class="form-control"
                                                    name="skmht_column" required>
                                            </div>
                                            {{-- cost_skmht --}}
                                            <div class="form-group col-md-4">
                                                <label for="cost_skmht">Biaya SKMHT ke APHT</label>
                                                <input type="number" id="cost_skmht" class="form-control"
                                                    name="cost_skmht_column" required>
                                            </div>
                                            {{-- fiduciare --}}
                                            <div class="form-group col-md-4">
                                                <label for="fiduciare">Fiduciare</label>
                                                <input type="number" id="fiduciare" class="form-control"
                                                    name="fiduciare_column" required>
                                            </div>
                                            {{-- legalization --}}
                                            <div class="form-group col-md-4">
                                                <label for="legalization">Legalisasi</label>
                                                <input type="number" id="legalization" class="form-control"
                                                    name="legalization_column" required>
                                            </div>
                                            {{-- roya --}}
                                            <div class="form-group col-md-4">
                                                <label for="roya">Roya</label>
                                                <input type="number" id="roya" class="form-control"
                                                    name="roya_column" required>
                                            </div>
                                            {{-- lain-lain --}}
                                            <div class="form-group col-md-4">
                                                <label for="lain-lain">Lain-lain</label>
                                                <input type="number" id="lain-lain" class="form-control"
                                                    name="lain-lain_column" required>
                                            </div>
                                            {{-- notaris --}}
                                            <div class="form-group col-md-4">
                                                <label for="notaris">Notaris</label>
                                                <input type="text" id="notaris" class="form-control"
                                                    name="notaris_column" required>
                                            </div>
                                        </div>
                                        <table class="table table-borderless" id="dynamicAddRemoveProposal">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Sebagai</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" id="on_behalf_of" class="form-control" name="on_behalf_of_column[0][subject]" required></td>
                                                <td><input type="text" id="as" class="form-control" name="as_column" required></td>
                                                <td><button type="button" name="add" id="dynamic-ar-proposal" class="btn btn-outline-primary"><i class="fas fa-plus"></i></button></td>
                                            </tr>
                                        </table>
                                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                    </div>
                                    {{-- upload --}}
                                    <div class="tab-pane fade" id="v-pills-upload" role="tabpanel"
                                        aria-labelledby="v-pills-upload-tab">
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
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
{{-- Loan History --}}
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append
            ('<tr>'+
                '<td><input type="number" id="plafond" class="form-control" name="plafond_column['+ i +'][subject]" required></td>'+
                '<td>'+
                    '<select class="form-select" aria-label="Default select example" id="status" name="status_column['+ i +'][subject]" required>'+
                        '<option value=""></option>'+
                        '<option value="Lunas">Lunas</option>'+
                        '<option value="Belum Lunas">Belum Lunas</option>'+
                    '</select>'+
                '</td>'+
                '<td><input type="number" id="balance" class="form-control" name="balance_column['+ i +'][subject]" required></td>'+
                '<td>'+
                    '<select class="form-select" aria-label="Default select example" id="history" name="history_column['+ i +'][subject]" required>'+
                        '<option value=""></option>'+
                        '<option value="Baik">Baik</option>'+
                        '<option value="Tidak Baik">Tidak Baik</option>'+
                    '</select>'+
                '</td>'+
                '<td>'+
                    '<select class="form-select" aria-label="Default select example" id="document" name="document_column['+ i +'][subject]" required>'+
                        '<option value=""></option>'+
                        '<option value="Terlampir">Terlampir</option>'+
                        '<option value="Tidak Terlampir">Tidak Terlampir</option>'+
                    '</select>'+
                '</td>'+
                '<td><button type="button" class="btn btn-danger remove-input-field"><i class="fas fa-minus"></i></button></td>'+
            '</tr>');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>

{{-- proposal --}}
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar-proposal").click(function () {
        ++i;
        $("#dynamicAddRemoveProposal").append
            ('<tr>'+
                '<td><input type="text" id="on_behalf_of" class="form-control" name="on_behalf_of_column['+ i +'][subject]" required></td>'+
                '<td><input type="text" id="as" class="form-control" name="as_column['+ i +'][subject]" required></td>'+
                '<td><button type="button" class="btn btn-danger remove-input-field"><i class="fas fa-minus"></i></button></td>'+
            '</tr>');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection

