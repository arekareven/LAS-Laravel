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
                                    @include('menu.enamc.loan_history')
                                    @include('menu.enamc.character')
                                    @include('menu.enamc.capacity')
                                    @include('menu.enamc.capital')
                                    @include('menu.enamc.cashflow_before')
                                    @include('menu.enamc.cashflow_after')
                                    @include('menu.enamc.other_income')
                                    @include('menu.enamc.debt')
                                    @include('menu.enamc.collateral')
                                    @include('menu.enamc.usulan')
                                    {{-- upload --}}
                                    <div class="tab-pane fade" id="v-pills-upload" role="tabpanel"
                                        aria-labelledby="v-pills-upload-tab">
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                    {{-- cetak --}}
                                    <div class="tab-pane fade" id="v-pills-cetak" role="tabpanel"
                                        aria-labelledby="v-pills-cetak-tab">
                                        <button type="button" class="btn btn-success">Cetak</button>
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

{{-- cashflow before --}}
<script>
    const sizes = ['Pendapatan', 'Pengeluaran'];

    // generate the radio groups
    const cashflowBefore = document.querySelector("#cashflowBefore");
    cashflowBefore.innerHTML = sizes.map((size) => `<div>
            <input class="form-check-input" type="radio" name="size" value="${size}" id="${size}">
            <label for="${size}">${size}</label>
        </div>`).join(' ');

    // add an event listener for the change event
    const radioButtons = document.querySelectorAll('input[name="size"]');
    for(const radioButton of radioButtons){
        radioButton.addEventListener('change', showSelected);
    }

    function showSelected(e) {
        console.log(e);
        if (this.value == 'Pendapatan') {
            document.querySelector('#outputCashflowBefore').innerHTML =
            `{{-- from_income_before --}}
            <div class="form-group col-md-6">
                <label for="from_income_before">Pendapatan Dari</label>
                <select class="form-select" aria-label="Default select example" id="from_income_before" name="from_income_before_column" required>
                    <option value=""></option>
                    @foreach ($approximation as $data)
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
            </div>`;
        } else{
            document.querySelector('#outputCashflowBefore').innerHTML =
            `{{-- from_expenditure_before --}}
            <div class="form-group col-md-6">
                <label for="from_expenditure_before">Menggunakan uang Dari</label>
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
            </div>`;
        }
    }
</script>

{{-- cashflow after --}}
<script>
    const sizes2 = ['Pendapatan', 'Pengeluaran'];

    // generate the radio groups
    const cashflowAfter = document.querySelector("#cashflowAfter");
    cashflowAfter.innerHTML = sizes2.map((size) => `<div>
            <input class="form-check-input" type="radio" name="size" value="${size}" id="${size}">
            <label for="${size}">${size}</label>
        </div>`).join(' ');

    // add an event listener for the change event
    const radioButtons2 = document.querySelectorAll('input[name="size"]');
    for(const radioButton of radioButtons2){
        radioButton.addEventListener('change', showSelected);
    }

    function showSelected(e) {
        console.log(e);
        if (this.value == 'Pendapatan') {
            document.querySelector('#outputCashflowAfter').innerHTML =
            `{{-- from_income_after --}}
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
            </div>`;
        } else{
            document.querySelector('#outputCashflowAfter').innerHTML =
            `{{-- from_expenditure_after --}}
            <div class="form-group col-md-6">
                <label for="from_expenditure_after">Menggunakan Uang Dari</label>
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
            </div>`;
        }
    }
</script>

{{-- other income --}}
<script>
    const sizes3 = ['Pendapatan', 'Pengeluaran'];

    // generate the radio groups
    const otherIncome = document.querySelector("#otherIncome");
    otherIncome.innerHTML = sizes3.map((size) => `<div>
            <input class="form-check-input" type="radio" name="size" value="${size}" id="${size}">
            <label for="${size}">${size}</label>
        </div>`).join(' ');

    // add an event listener for the change event
    const radioButtons3 = document.querySelectorAll('input[name="size"]');
    for(const radioButton of radioButtons3){
        radioButton.addEventListener('change', showSelected);
    }

    function showSelected(e) {
        console.log(e);
        if (this.value == 'Pendapatan') {
            document.querySelector('#outputOtherIncome').innerHTML =
            `{{-- from_income_other --}}
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
            </div>`;
        } else{
            document.querySelector('#outputOtherIncome').innerHTML =
            `{{-- from_expenditure_other --}}
            <div class="form-group col-md-6">
                <label for="from_expenditure_other">Menggunakan uang Dari</label>
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
            </div>`;
        }
    }
</script>
@endsection

