@extends('layout.master')

{{-- content --}}
@section('content')

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>INPUT DATA NASABAH</h5>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h4 class="card-title">Input Data Nasabah</h4>
                        </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                {{-- <nav class="mb-3">
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-link {{ $currentStep != 1 ? '' : 'active' }}" id="step-1">1</a>
                                        <a class="nav-link {{ $currentStep != 2 ? '' : 'active' }}" id="step-2">2</a>
                                    </div>
                                </nav> --}}
                                <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="data_diri-tab" data-bs-toggle="tab" href="#data_diri"
                                            role="tab" aria-controls="data_diri" aria-selected="true"><h6>Data Diri</h6></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="data_pasangan-tab" data-bs-toggle="tab" href="#data_pasangan"
                                            role="tab" aria-controls="data_pasangan" aria-selected="false"><h6>Data Suami/Istri</h6></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="data_keluarga-tab" data-bs-toggle="tab" href="#data_keluarga"
                                            role="tab" aria-controls="data_keluarga" aria-selected="false"><h6>Data Keluarga</h6></a>
                                    </li>
                                </ul>
                                <form action="{{ route('customer.store') }}" method="post">
                                    @csrf
                                    <div class="was-validated tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="data_diri" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="name">Nama</label>
                                                        <input type="hidden" id="user" class="form-control" name="user_column" value="{{ Auth::user()->email }}" required>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="Nama Nasabah" name="name_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian nama tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="place_of_birth">Tempat Lahir</label>
                                                        <input type="text" id="place_of_birth" class="form-control"
                                                            placeholder="Kota" name="place_of_birth_column" required>
                                                        <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="date_of_birth">Tanggal Lahir</label>
                                                        <input type="date" id="date_of_birth" class="form-control"
                                                            placeholder="City" name="date_of_birth_column" required>
                                                        <div class="invalid-feedback">Isian tanggal lahir tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
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
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="id_card_number">No KTP / NIK</label>
                                                        <input type="number" id="id_card_number" class="form-control"
                                                            name="id_card_number_column" placeholder="NIK" required>
                                                        <div class="invalid-feedback">Isian NIK tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="phone_number">No Tlp</label>
                                                        <input type="number" id="phone_number" class="form-control"
                                                            placeholder="Nomor HP" name="phone_number_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian no tlp tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="profession">Profesi</label>
                                                        <input type="text" id="profession" class="form-control"
                                                            placeholder="Profesi" name="profession_column" required>
                                                        <div class="invalid-feedback">Isian Profession tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
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
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="education">Pendidikan</label>
                                                        <select class="form-select" aria-label="Default select example" id="education" name="education_column" required>
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
                                                    <div class="form-group col-md-10">
                                                        <label for="amenability">Tanggungan</label>
                                                        <input type="number" id="amenability" class="form-control"
                                                            name="amenability_column" placeholder="Jumlah tanggungan" required>
                                                        <div class="invalid-feedback">Isian tanggungan tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="office_number">No. Telp Kantor</label>
                                                        <input type="number" id="office_number" class="form-control"
                                                            name="office_number_column" required>
                                                        <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender_column"
                                                            id="gender" value="Laki - laki" name="gender_column" required>
                                                        <label class="form-check-label" for="gender1">
                                                            Laki - laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender_column"
                                                            id="gender" value="Perempuan" name="gender_column" required>
                                                        <label class="form-check-label" for="gender2">
                                                            Perempuan
                                                        </label>
                                                        <div class="invalid-feedback">Pilih salah satu</div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="form-group">
                                                        <label for="id_card_address">Alamat Sesuai KTP</label>
                                                        <textarea id="id_card_address" class="form-control"
                                                            name="id_card_address_column" placeholder="Alamat sesuai KTP" required></textarea>
                                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="form-group">
                                                        <label for="residence_address">Alamat Domisili</label>
                                                        <textarea id="residence_address" class="form-control"
                                                            name="residence_address_column" placeholder="Alamat Domisili" required></textarea>
                                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="data_pasangan" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="mate_name">Nama</label>
                                                        <input type="text" id="mate_name" class="form-control"
                                                            placeholder="Nama Nasabah" name="mate_name_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian nama tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="mate_place_of_birth">Tempat Lahir</label>
                                                        <input type="text" id="mate_place_of_birth" class="form-control"
                                                            placeholder="Kota" name="mate_place_of_birth_column" required>
                                                        <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="mate_date_of_birth">Tanggal Lahir</label>
                                                        <input type="date" id="mate_date_of_birth" class="form-control"
                                                            placeholder="City" name="mate_date_of_birth_column" required>
                                                        <div class="invalid-feedback">Isian tanggal lahir tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="mate_phone_number">No Tlp</label>
                                                        <input type="number" id="mate_phone_number" class="form-control"
                                                            placeholder="Nomor HP" name="mate_phone_number_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian no tlp tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="mate_profession">Profesi</label>
                                                        <input type="text" id="mate_profession" class="form-control"
                                                            placeholder="Profesi" name="mate_profession_column" required>
                                                        <div class="invalid-feedback">Isian Profession tidak boleh kosong</div></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="form-group">
                                                        <label for="mate_residence_address">Alamat Domisili</label>
                                                        <textarea id="mate_residence_address" class="form-control"
                                                            name="mate_residence_address_column" placeholder="Alamat Domisili" required></textarea>
                                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="form-group">
                                                        <label for="mate_id_card_address">Alamat Sesuai KTP</label>
                                                        <textarea id="mate_id_card_address" class="form-control"
                                                            name="mate_id_card_address_column" placeholder="Alamat sesuai KTP" required></textarea>
                                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="data_keluarga" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="family_name">Nama</label>
                                                        <input type="text" id="family_name" class="form-control"
                                                            placeholder="Nama Nasabah" name="family_name_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian nama tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="family_phone_number">No Tlp</label>
                                                        <input type="number" id="family_phone_number" class="form-control"
                                                            placeholder="Nomor HP" name="family_phone_number_column" required>
                                                        <div class="invalid-feedback">
                                                            Isian no tlp tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="family_relationship">Hubungan Keluarga</label>
                                                        <select class="form-select" aria-label="Default select example" id="family_relationship" name="family_relationship_column" required>
                                                            <option value=""></option>
                                                            <option value="Anak Kandung">Anak Kandung</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Saudara Kandung">Saudara Kandung</option>
                                                            <option value="Saudara Tidak Sekandung">Saudara Tidak Sekandung</option>
                                                            <option value="Tetangga">Tetangga</option>
                                                            <option value="Rekan Kerja">Rekan Kerja</option>
                                                        </select>
                                                        <div class="invalid-feedback">Isian Hubungan Keluarga tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="form-group">
                                                        <label for="family_residence_address">Alamat Domisili</label>
                                                        <textarea id="family_residence_address" class="form-control"
                                                            name="family_residence_address_column" placeholder="Alamat Domisili" required></textarea>
                                                        <div class="invalid-feedback">Isian alamat tidak boleh kosong</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>

</div>

@endsection

@include('assets.js-customer')
