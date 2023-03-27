@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Edit Data Pengajuan</h5>
                    {{$application->id_customer}}
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="data_diri-tab" data-bs-toggle="tab" href="#data_diri"
                                role="tab" aria-controls="data_diri" aria-selected="true"><h6>Data Pengajuan</h6></a>
                        </li>
                    </ul>
                    <form action="{{ route('application.update',$application->id ) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $application->id_customer }}" name="id_customer">
                        <div class="was-validated tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="data_diri" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="application_date">Tanggal Permohonan</label>
                                            <input type="date" id="application_date" class="form-control"
                                                name="application_date_column" value="{{ $application->application_date }}" required>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="analysis_date">Tanggal Analisa</label>
                                            <input type="date" id="analysis_date" class="form-control"
                                                name="analysis_date_column" value="{{ $application->analysis_date }}" required>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="plafond">Plafond (Tanpa Titik)</label>
                                            <input type="number" id="plafond" class="form-control"
                                                placeholder="Plafond" name="plafond_column" value="{{ $application->plafond }}" required>
                                            <div class="invalid-feedback">
                                                Isian ini tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="time_period">Jangka Waktu (Bulan)</label>
                                            <input type="number" id="time_period" class="form-control"
                                                placeholder="Jangka waktu" name="time_period_column" value="{{ $application->time_period }}" required>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div></div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="credit_type">Sifat Kredit</label>
                                            <select class="form-select" aria-label="Default select example" id="credit_type" name="credit_type_column" required>
                                                <option value="{{ $application->credit_type }}"> {{ $application->credit_type }}</option>
                                                <option value="Pokok Bunga Tiap Bulan">Pokok Bunga Tiap Bulan</option>
                                                <option value="Pokok Tiap 3 Bulan Bunga Tiap Bulan">Pokok Tiap 3 Bulan Bunga Tiap Bulan</option>
                                                <option value="Pokok Tiap 4 Bulan Bunga Tiap Bulan">Pokok Tiap 4 Bulan Bunga Tiap Bulan</option>
                                                <option value="Pokok Tiap 6 Bulan Bunga Tiap Bulan">Pokok Tiap 6 Bulan Bunga Tiap Bulan</option>
                                                <option value="Pokok Tiap 6 Bulan Bunga Tiap Bulan">Pokok Tiap 6 Bulan Bunga Tiap Bulan</option>
                                                <option value="Pokok Tiap 12 Bulan Bunga Tiap Bulan">Pokok Tiap 12 Bulan Bunga Tiap Bulan</option>
                                                <option value="Pokok Terakhir Bunga Tiap Bulan">Pokok Terakhir Bunga Tiap Bulan</option>
                                                <option value="Pokok Bunga Terakhir">Pokok Bunga Terakhir</option>
                                                <option value="Musiman">Musiman</option>
                                                <option value="Anuitas">Anuitas</option>
                                                <option value="Efektif">Efektif</option>
                                            </select>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="application_type">Jenis Permohonan</label>
                                            <select class="form-select" aria-label="Default select example" id="application_type" name="application_type_column" required>
                                                <option value="{{ $application->application_type }}"> {{ $application->application_type }}</option>
                                                <option value="Baru">Baru</option>
                                                <option value="Ulangan">Ulangan</option>
                                                <option value="Top Up / Perpanjangan">Top Up / Perpanjangan</option>
                                                <option value="Restrukturisasi">Restrukturisasi</option>
                                            </select>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group col-md-10">
                                            <label for="purpose">Tujuan Penggunaan</label>
                                            <select class="form-select" aria-label="Default select example" id="purpose" name="purpose_column" required>
                                                <option value="{{ $application->purpose }}"> {{ $application->purpose }}</option>
                                                <option value="Modal Kerja">Modal Kerja</option>
                                                <option value="Investasi">Investasi</option>
                                                <option value="Konsumtif">Konsumtif</option>
                                            </select>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="form-group">
                                            <label for="purpose_description">Keterangan Penggunaan</label>
                                            <textarea id="purpose_description" class="form-control"
                                                name="purpose_description_column" placeholder="Deskripsikan pengunaan" required> {{ $application->purpose_description }} </textarea>
                                            <div class="invalid-feedback">Isian ini tidak boleh kosong</div>
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

