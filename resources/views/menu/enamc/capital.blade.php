{{-- capital --}}
<div class="tab-pane fade" id="v-pills-capital" role="tabpanel" aria-labelledby="v-pills-capital-tab">
    <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="current_assets-tab" data-bs-toggle="tab" href="#current_assets" role="tab"
                aria-controls="current_assets" aria-selected="true">
                <h6>Aktiva Produktif</h6>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="fixed_assets-tab" data-bs-toggle="tab" href="#fixed_assets" role="tab"
                aria-controls="fixed_assets" aria-selected="false">
                <h6>Aktiva Lainnya</h6>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="debt-tab" data-bs-toggle="tab" href="#debt" role="tab" aria-controls="debt"
                aria-selected="false">
                <h6>Hutang</h6>
            </a>
        </li>
    </ul>
    <div class="was-validated tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="current_assets" role="tabpanel">
            <div class="row">
                {{-- cash --}}
                <div class="form-group col-md-4">
                    <label for="cash">Kas</label>
                    <input type="number" id="cash" class="form-control" name="cash_column" required>
                </div>
                {{-- savings --}}
                <div class="form-group col-md-4">
                    <label for="savings">Tabungan</label>
                    <input type="number" id="savings" class="form-control" name="savings_column" required>
                </div>
                {{-- deposit --}}
                <div class="form-group col-md-4">
                    <label for="deposit">Deposito</label>
                    <input type="number" id="deposit" class="form-control" name="deposit_column" required>
                </div>
                {{-- receivables --}}
                <div class="form-group col-md-4">
                    <label for="receivables">Piutang</label>
                    <input type="number" id="receivables" class="form-control" name="receivables_column" required>
                </div>
                {{-- equipment --}}
                <div class="form-group col-md-4">
                    <label for="equipment">Peralatan</label>
                    <input type="number" id="equipment" class="form-control" name="equipment_column" required>
                </div>
                {{-- inventory1 --}}
                <div class="form-group col-md-4">
                    <label for="inventory1">Persediaan Barang Usaha 1</label>
                    <input type="number" id="inventory1" class="form-control" name="inventory1_column" required>
                </div>
                {{-- inventory2 --}}
                <div class="form-group col-md-4">
                    <label for="inventory2">Persediaan Barang Usaha 2</label>
                    <input type="number" id="inventory2" class="form-control" name="inventory2_column" required>
                </div>
                {{-- inventory3 --}}
                <div class="form-group col-md-4">
                    <label for="inventory3">Persediaan Barang Usaha 3</label>
                    <input type="number" id="inventory3" class="form-control" name="inventory3_column" required>
                </div>
                {{-- prepaid_lease --}}
                <div class="form-group col-md-4">
                    <label for="prepaid_lease">Sewa Dibayar Dimuka</label>
                    <input type="number" id="prepaid_lease" class="form-control" name="prepaid_lease_column" required>
                </div>
                {{-- tillage --}}
                <div class="form-group col-md-4">
                    <label for="tillage">Lahan Garap</label>
                    <input type="number" id="tillage" class="form-control" name="tillage_column" required>
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
                    <input type="number" id="land" class="form-control" name="land_column" required>
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
                    <input type="number" id="vehicle" class="form-control" name="vehicle_column" required>
                </div>
                {{-- inventory --}}
                <div class="form-group col-md-4">
                    <label for="inventory">Inventaris</label>
                    <input type="number" id="inventory" class="form-control" name="inventory_column" required>
                </div>
                {{-- other_fixed_assets --}}
                <div class="form-group col-md-4">
                    <label for="other_fixed_assets">Lain - Lain</label>
                    <input type="number" id="other_fixed_assets" class="form-control"
                        name="other_fixed_assets_column" required>
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
                    <input type="number" id="short_term_debt" class="form-control" name="short_term_debt_column"
                        required>
                </div>
                {{-- long_term_debt --}}
                <div class="form-group col-md-4">
                    <label for="long_term_debt">Hutang Jangka Panjang</label>
                    <input type="number" id="long_term_debt" class="form-control" name="long_term_debt_column"
                        required>
                </div>
                {{-- other_debts --}}
                <div class="form-group col-md-4">
                    <label for="other_debts">Hutang Lain</label>
                    <input type="number" id="other_debts" class="form-control" name="other_debts_column" required>
                </div>
                {{-- trade_debt --}}
                <div class="form-group col-md-4">
                    <label for="trade_debt">Hutang Dagang</label>
                    <input type="number" id="trade_debt" class="form-control" name="trade_debt_column" required>
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
