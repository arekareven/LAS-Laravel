@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Daftar Nasabah</h5>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true">1</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                role="tab" aria-controls="profile" aria-selected="false">2</a>
                        </li>
                    </ul>
                    <div class="was-validated tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Nama Nasabah" name="name_column" value="{{ $get_customer->name }}" required>
                                        <div class="invalid-feedback">
                                            Isian nama tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="place_of_birth">Tempat Lahir</label>
                                        <input type="text" id="place_of_birth" class="form-control"
                                            placeholder="Kota" name="place_of_birth_column" value="{{ $get_customer->place_of_birth }}" required>
                                        <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="date_of_birth">Tanggal Lahir</label>
                                        <input type="date" id="date_of_birth" class="form-control"
                                            placeholder="City" name="date_of_birth_column" value="{{ $get_customer->date_of_birth }}" required>
                                        <div class="invalid-feedback">Isian tanggal lahir tidak boleh kosong</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="marital_status">Status</label>
                                        <select class="form-select" aria-label="Default select example" id="marital_status" required>
                                            <option  value="{{ $get_customer->marital_status }}">{{ $get_customer->marital_status }}</option>
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
                                            id="gender" value="Laki - laki" {{ $get_customer->gender == 'Laki - laki' ? 'checked' : ''}} required>
                                        <label class="form-check-label" for="gender1">
                                            Laki - laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender_column"
                                            id="gender" value="Perempuan" {{ $get_customer->gender == 'Perempuan' ? 'checked' : ''}} required>
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
                                            name="id_card_number_column" placeholder="NIK" value="{{ $get_customer->id_card_number }}" required>
                                        <div class="invalid-feedback">Isian NIK tidak boleh kosong</div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-group">
                                        <label for="id_card_address">Alamat Sesuai KTP</label>
                                        <textarea id="id_card_address" class="form-control"
                                            name="id_card_address_column" placeholder="Alamat sesuai KTP" required>{{ $get_customer->id_card_address }}</textarea>
                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="phone_number">No Tlp</label>
                                        <input type="number" id="phone_number" class="form-control"
                                            placeholder="Nomor HP" name="phone_number_column" value="{{ $get_customer->phone_number }}" required>
                                        <div class="invalid-feedback">
                                            Isian no tlp tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="profession">Profesi</label>
                                        <input type="text" id="profession" class="form-control"
                                            placeholder="Profesi" name="profession_column" value="{{ $get_customer->profession }}" required>
                                        <div class="invalid-feedback">Isian Profession tidak boleh kosong</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status_of_residence">Status Tempat Tinggal</label>
                                        <select class="form-select" aria-label="Default select example" id="status_of_residence" required>
                                            <option  value="{{ $get_customer->status_of_residence }}">{{ $get_customer->status_of_residence }}</option>
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
                                        <select class="form-select" aria-label="Default select example" id="education" required>
                                            <option value="{{ $get_customer->education }}">{{ $get_customer->education }}</option>
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
                                            name="amenability_column" placeholder="Jumlah tanggungan" value="{{ $get_customer->amenability }}" required>
                                        <div class="invalid-feedback">Isian tanggungan tidak boleh kosong</div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-group">
                                        <label for="residence_address">Alamat Domisili</label>
                                        <textarea id="residence_address" class="form-control"
                                            name="residence_address_column" placeholder="Alamat Domisili" required>{{ $get_customer->residence_address }}</textarea>
                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button"
                                        class="btn btn-primary me-1 mb-1" wire:click="secondStepSubmit" >Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://ahmadsaugi.com">Saugi</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection

@include('assets.js-customer')
