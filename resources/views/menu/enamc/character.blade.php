{{-- character --}}
<div class="was-validated tab-pane fade show active" id="v-pills-character" role="tabpanel" aria-labelledby="v-pills-character-tab">
    <div class="row">
        <p>
            <a class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="collapse" href="#collapseCharacter"
                role="button" aria-expanded="false" aria-controls="collapseCharacter">
                Lihat Data
            </a>
        </p>
        <div class="collapse" id="collapseCharacter">
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
    <form action="{{ route('character.store') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $id }}" name="id_application">
        <div class="form-group with-title mb-3">
            <textarea class="form-control" id="personal_information" rows="3" name="personal_information_column" required></textarea>
            <label>Informasi Pribadi</label>
        </div>
        <div class="form-group with-title mb-3">
            <textarea class="form-control" id="behavioral_information" rows="3" name="behavioral_information_column" required></textarea>
            <label>Informasi Perilaku</label>
        </div>
        <div class="form-group with-title mb-3">
            <textarea class="form-control" id="family_information" rows="3" name="family_information_column" required></textarea>
            <label>Informasi Keluarga</label>
        </div>
        <div class="row" id="dynamicAddRemoveCharacter">
            {{-- character_name --}}
            <div class="form-group col-md-6">
                <label for="character_name">Nama</label>
                <input type="text" id="character_name" class="form-control" name="character_name_column[]"
                    placeholder="Nama" required>
            </div>
            {{-- character_number --}}
            <div class="form-group col-md-6">
                <label for="character_number">Nomor HP</label>
                <input type="number" id="character_number" class="form-control" name="character_number_column[]"
                    placeholder="Nomor HP" required>
            </div>
            {{-- alamat --}}
            <div class="form-group col-md-12">
                <label for="saldo">Alamat</label>
                <input type="text" id="alamat" class="form-control" name="alamat_column[]" placeholder="Alamat"
                    required>
            </div>
            <div class="form-group col-md-12">
                <button type="button" name="add_character" id="dynamic-ar-character" class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
            </div>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-success me-md-2">
                Simpan
            </button>
        </div>
    </form>
</div>
