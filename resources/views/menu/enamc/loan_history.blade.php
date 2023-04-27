
{{-- riwayat-pinjaman --}}
<div class="tab-pane fade show active" id="v-pills-riwayat-pinjaman" role="tabpanel"
    aria-labelledby="v-pills-riwayat-pinjaman-tab">
    {{-- form --}}
    <div class="row">
        {{-- table --}}
        <p>
            <a class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="collapse" href="#collapseLoanHistory" role="button" aria-expanded="false" aria-controls="collapseLoanHistory">
                Lihat Data
            </a>
        </p>
        <div class="collapse" id="collapseLoanHistory">
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
    <br>
    <form action="{{ route('loan_history.store') }}" method="post">
        @csrf
        <table class="table table-borderless was-validated" id="dynamicAddRemove">
            <tr>
                <th>Plafond</th>
                <th>Status</th>
                <th>Saldo</th>
                <th>Sejarah</th>
                <th>Data</th>
                <th>Action</th>
            </tr>
            <tr>
                <input type="hidden" id="id_application" class="form-control" name="id_application_column" value="{{ $id }}" required>
                <td><input type="number" id="plafond" class="form-control" name="plafond_column[]" required></td>
                <td>
                    <select class="form-select" aria-label="Default select example" id="status" name="status_column[]" required>
                        <option value=""></option>
                        <option value="Lunas">Lunas</option>
                        <option value="Belum Lunas">Belum Lunas</option>
                    </select>
                </td>
                <td><input type="number" id="balance" class="form-control" name="balance_column[]" required></td>
                <td>
                    <select class="form-select" aria-label="Default select example" id="history" name="history_column[]" required>
                        <option value=""></option>
                        <option value="Baik">Baik</option>
                        <option value="Tidak Baik">Tidak Baik</option>
                    </select>
                </td>
                <td>
                    <select class="form-select" aria-label="Default select example" id="document" name="document_column[]" required>
                        <option value=""></option>
                        <option value="Terlampir">Terlampir</option>
                        <option value="Tidak Terlampir">Tidak Terlampir</option>
                    </select>
                </td>
                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary"><i class="fas fa-plus"></i></button></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-success me-md-2">Simpan</button>
    </form>
</div>
