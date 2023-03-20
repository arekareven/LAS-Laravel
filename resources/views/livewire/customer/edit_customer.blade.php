<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    {{-- <h5>Input data Nasabah</h5> --}}
                </div>
            </div>
        </div>
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Nasabah</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <nav class="mb-3">
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="step-1">1</a>
                                        {{-- <a class="nav-link {{ $currentStep != 2 ? '' : 'active' }}" id="step-2">2</a>
                                        <a class="nav-link {{ $currentStep != 3 ? '' : 'active' }}" id="step-3">3</a> --}}
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="was-validated tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="Nama Nasabah" name="name_column" value={{ $customer}} required>
                                                    <div class="invalid-feedback">
                                                        Isian nama tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="place_of_birth">Tempat Lahir</label>
                                                    <input type="text" id="place_of_birth" class="form-control"
                                                        placeholder="Kota" name="place_of_birth_column" wire:model="place_of_birth" required>
                                                    <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="date_of_birth">Tanggal Lahir</label>
                                                    <input type="date" id="date_of_birth" class="form-control"
                                                        placeholder="City" name="date_of_birth_column" wire:model="date_of_birth" required>
                                                    <div class="invalid-feedback">Isian tanggal lahir tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="marital_status">Status</label>
                                                    <select class="form-select" aria-label="Default select example" wire:model="marital_status" id="marital_status" required>
                                                        <option value=""></option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Duda">Duda</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Lajang">Lajang</option>
                                                    </select>
                                                    <div class="invalid-feedback">Isian status tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Jenis Kelamin</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender_column"
                                                        id="gender" value="Laki - laki" wire:model="gender" required>
                                                    <label class="form-check-label" for="gender1">
                                                        Laki - laki
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender_column"
                                                        id="gender" value="Perempuan" wire:model="gender" required>
                                                    <label class="form-check-label" for="gender2">
                                                        Perempuan
                                                    </label>
                                                    <div class="invalid-feedback">Pilih salah satu</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="id_card_number">No KTP / NIK</label>
                                                    <input type="number" id="id_card_number" class="form-control"
                                                        name="id_card_number_column" placeholder="NIK" wire:model="id_card_number" required>
                                                    <div class="invalid-feedback">Isian NIK tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="form-group">
                                                    <label for="id_card_address">Alamat Sesuai KTP</label>
                                                    <textarea id="id_card_address" class="form-control"
                                                        name="id_card_address_column" placeholder="Alamat sesuai KTP" wire:model="id_card_address" required></textarea>
                                                    <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="button"
                                                    class="btn btn-primary me-1 mb-1" wire:click="firstStepSubmit" >Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="was-validated tab-pane fade {{ $currentStep == 2 ? 'show active' : '' }}" id="step-2" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone_number">No Tlp</label>
                                                    <input type="number" id="phone_number" class="form-control"
                                                        placeholder="Nomor HP" name="phone_number_column" wire:model="phone_number" required>
                                                    <div class="invalid-feedback">
                                                        Isian no tlp tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="profession">Profesi</label>
                                                    <input type="text" id="profession" class="form-control"
                                                        placeholder="Profesi" name="profession_column" wire:model="profession" required>
                                                    <div class="invalid-feedback">Isian Profession tidak boleh kosong</div></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="status_of_residence">Status Tempat Tinggal</label>
                                                    <select class="form-select" aria-label="Default select example" wire:model="status_of_residence" id="status_of_residence" required>
                                                        <option value=""></option>
                                                        <option value="Milik Sendiri">Milik Sendiri</option>
                                                        <option value="Milik Keluarga">Milik Keluarga</option>
                                                        <option value="Instansi">Instansi</option>
                                                        <option value="Kontrak">Kontrak</option>
                                                        <option value="Kredit">Kredit</option>
                                                    </select>
                                                    <div class="invalid-feedback">Isian status tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="education">Pendidikan</label>
                                                    <select class="form-select" aria-label="Default select example" wire:model="education" id="education" required>
                                                        <option value=""></option>
                                                        <option value="S3">S3</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S1">S1</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                        <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                        <option value="SD / Sederajat">SD / Sederajat</option>
                                                    </select>
                                                    <div class="invalid-feedback">Isian Pendidikan tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="amenability">Tanggungan</label>
                                                    <input type="number" id="amenability" class="form-control"
                                                        name="amenability_column" placeholder="Jumlah tanggungan" wire:model="amenability" required>
                                                    <div class="invalid-feedback">Isian tanggungan tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="form-group">
                                                    <label for="residence_address">Alamat Domisili</label>
                                                    <textarea id="residence_address" class="form-control"
                                                        name="residence_address_column" placeholder="Alamat Domisili" wire:model="residence_address" required></textarea>
                                                    <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button class="btn btn-danger me-1 mb-1" type="button" wire:click="back(1)">Back</button>
                                                <button type="button"
                                                    class="btn btn-primary me-1 mb-1" wire:click="secondStepSubmit" >Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="was-validated tab-pane fade {{ $currentStep == 3 ? 'show active' : '' }}" id="step-3" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                        <!-- Table with no outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>LABEL</th>
                                                        <th>INPUT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold-500">Nama</td>
                                                        <td>{{ $name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Tempat Lahir</td>
                                                        <td>{{ $place_of_birth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Tanggal Lahir</td>
                                                        <td>{{ $date_of_birth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Jenis Kelamin</td>
                                                        <td>{{ $gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Status</td>
                                                        <td>{{ $marital_status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">No KTP</td>
                                                        <td>{{ $id_card_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Alamat KTP</td>
                                                        <td>{{ $id_card_address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">No. Tlp</td>
                                                        <td>{{ $phone_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Profesi</td>
                                                        <td>{{ $profession }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Status Tempat Tinggal</td>
                                                        <td>{{ $status_of_residence }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Alamat Domisili</td>
                                                        <td>{{ $residence_address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Tanggungan</td>
                                                        <td>{{ $amenability }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Pendidikan</td>
                                                        <td>{{ $education }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-danger me-1 mb-1" type="button" wire:click="back(2)">Back</button>
                                            <button type="button"
                                                class="btn btn-primary me-1 mb-1" wire:click="submitForm" >Submit</button>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>

</div>
