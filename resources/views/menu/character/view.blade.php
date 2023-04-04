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
                    <h3>5 C</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Data 5C</h4>
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
                                <div class="tab-content" id="v-pills-tabContent">
                                    {{-- riwayat-pinjaman --}}
                                    <div class="tab-pane fade show active" id="v-pills-riwayat-pinjaman" role="tabpanel"
                                        aria-labelledby="v-pills-riwayat-pinjaman-tab">
                                        <div class="row">
                                            {{-- form --}}
                                            <div class="col-md-12 col-12">
                                                {{-- nama --}}
                                                <div class="form-group col-md-10">
                                                    <label for="name">Nama</label>
                                                    <input type="hidden" id="id_cus" class="form-control" name="id_cus_column" value="{{ $id }}" required>
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="Nama Nasabah" name="name_column" required>
                                                    <div class="invalid-feedback">
                                                        Isian nama tidak boleh kosong
                                                    </div>
                                                </div>
                                                {{-- status --}}
                                                <div class="form-group col-md-10">
                                                    <label for="marital_status">Status</label>
                                                    <select class="form-select" aria-label="Default select example" id="marital_status" name="marital_status_column" required>
                                                        <option value=""></option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Duda">Duda</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Lajang">Lajang</option>
                                                    </select>
                                                    <div class="invalid-feedback">Isian status tidak boleh kosong</div>
                                                </div>
                                                {{-- no ktp --}}
                                                <div class="form-group col-md-10">
                                                    <label for="id_card_number">No KTP / NIK</label>
                                                    <input type="number" id="id_card_number" class="form-control"
                                                        name="id_card_number_column" placeholder="NIK" required>
                                                    <div class="invalid-feedback">Isian NIK tidak boleh kosong</div>
                                                </div>
                                                {{-- status residence --}}
                                                <div class="form-group col-md-10">
                                                    <label for="status_of_residence">Status Tempat Tinggal</label>
                                                    <select class="form-select" aria-label="Default select example" id="status_of_residence" name="status_of_residence_column" required>
                                                        <option value=""></option>
                                                        <option value="Milik Sendiri">Milik Sendiri</option>
                                                        <option value="Milik Keluarga">Milik Keluarga</option>
                                                        <option value="Instansi">Instansi</option>
                                                        <option value="Kontrak">Kontrak</option>
                                                        <option value="Kredit">Kredit</option>
                                                    </select>
                                                    <div class="invalid-feedback">Isian status tidak boleh kosong</div>
                                                </div>
                                                <br><br><br>
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
                                    {{-- character --}}
                                    <div class="tab-pane fade" id="v-pills-character" role="tabpanel"
                                        aria-labelledby="v-pills-character-tab">
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
                                    {{-- capacity --}}
                                    <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel"
                                        aria-labelledby="v-pills-capacity-tab">
                                        Integer interdum diam eleifend metus lacinia, quis gravida eros
                                        mollis. Fusce
                                        non sapien sit amet magna dapibus
                                        ultrices. Morbi tincidunt magna ex, eget faucibus sapien bibendum
                                        non. Duis a
                                        mauris ex. Ut finibus risus sed massa
                                        mattis porta. Aliquam sagittis massa et purus efficitur ultricies.
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

