@extends('layout.master')

{{-- content --}}
@section('content')

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>INPUT DATA 5C</h5>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="character-tab" data-bs-toggle="tab" href="#character"
                                            role="tab" aria-controls="character" aria-selected="true"><h6>Character</h6></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="capacity-tab" data-bs-toggle="tab" href="#capacity"
                                            role="tab" aria-controls="capacity" aria-selected="false"><h6>Capacity</h6></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="capital-tab" data-bs-toggle="tab" href="#capital"
                                            role="tab" aria-controls="capital" aria-selected="false"><h6>Capital</h6></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('customer.store') }}" method="post">
                        @csrf
                        <div class="was-validated tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="character" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="Nama Nasabah" name="name_column" required>
                                                    <div class="invalid-feedback">
                                                        Isian nama tidak boleh kosong
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="place_of_birth">Tempat Lahir</label>
                                                    <input type="text" id="place_of_birth" class="form-control"
                                                        placeholder="Kota" name="place_of_birth_column" required>
                                                    <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="place_of_birth">Tempat Lahir</label>
                                                    <input type="text" id="place_of_birth" class="form-control"
                                                        placeholder="Kota" name="place_of_birth_column" required>
                                                    <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="place_of_birth">Tempat Lahir</label>
                                                    <input type="text" id="place_of_birth" class="form-control"
                                                        placeholder="Kota" name="place_of_birth_column" required>
                                                    <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <table>

                                                </table>
                                            </div>
                                        </div>
                                </div>
                            <div class="tab-pane fade" id="capacity" role="tabpanel">
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
                            <div class="tab-pane fade" id="capital" role="tabpanel">
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
        </section>
    </div>

</div>

@endsection

