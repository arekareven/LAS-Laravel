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
