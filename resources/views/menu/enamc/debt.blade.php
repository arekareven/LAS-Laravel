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
