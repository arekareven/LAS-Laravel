{{-- capacity --}}
<div class="tab-pane fade" id="v-pills-capacity" role="tabpanel"
aria-labelledby="v-pills-capacity-tab">
<div class="row">
{{-- business_name --}}
<div class="form-group col-md-4">
<label for="business_name">Nama Usaha</label>
<input type="text" id="business_name" class="form-control"
name="business_name_column" required>
</div>
{{-- business_sector --}}
<div class="form-group col-md-4">
<label for="business_sector">Sektor Usaha</label>
<select class="form-select" aria-label="Default select example" id="business_sector" name="business_sector_column" required>
<option value=""></option>
<option value="Industri">Industri</option>
<option value="Jasa">Jasa</option>
<option value="Kontraktor">Kontraktor</option>
<option value="Pegawai">Pegawai</option>
<option value="Perdagangan">Perdagangan</option>
<option value="Pertanian">Pertanian</option>
<option value="Konsumtif">Konsumtif</option>
</select>
</div>
{{-- business_status --}}
<div class="form-group col-md-4">
<label for="business_status">Status Tempat Usaha</label>
<select class="form-select" aria-label="Default select example" id="business_status" name="business_status_column" required>
<option value=""></option>
<option value="Milik Sendiri">Milik Sendiri</option>
<option value="Milik Keluarga">Milik Keluarga</option>
<option value="Instansi">Instansi</option>
<option value="Kontrak">Kontrak</option>
<option value="Kredit">Kredit</option>
</select>
</div>
{{-- phone_number --}}
<div class="form-group col-md-4">
<label for="phone_number">No Tlp</label>
<input type="number" id="phone_number" class="form-control"
name="phone_number_column" required>
</div>
{{-- business_start --}}
<div class="form-group col-md-4">
<label for="business_start">Mulai Usaha</label>
<input type="date" id="business_start" class="form-control"
name="business_start_column" required>
</div>
{{-- customer_start --}}
<div class="form-group col-md-4">
<label for="customer_start">Jadi Nasabah Sejak</label>
<input type="date" id="customer_start" class="form-control"
name="customer_start_column" required>
</div>
{{-- deed_number --}}
<div class="form-group col-md-4">
<label for="deed_number">No Akta</label>
<input type="text" id="deed_number" class="form-control"
name="deed_number_column" required>
</div>
{{-- deed_date --}}
<div class="form-group col-md-4">
<label for="deed_date">Tanggal Akta</label>
<input type="date" id="deed_date" class="form-control"
name="deed_date_column" required>
</div>
{{-- npwp --}}
<div class="form-group col-md-4">
<label for="npwp">NPWP</label>
<input type="text" id="npwp" class="form-control"
name="npwp_column" required>
</div>
{{-- npwp_date --}}
<div class="form-group col-md-4">
<label for="npwp_date">Tanggal NPWP</label>
<input type="date" id="npwp_date" class="form-control"
name="npwp_date_column" required>
</div>
{{-- alamat --}}
<div class="form-group mb-2">
<label>Alamat Usaha</label>
<textarea class="form-control" id="business_address"
rows="2" name="business_address_column" required></textarea>
</div>
{{-- usaha saat ini --}}
<label>Rincian Usaha</label>
<div id="full">
{{-- <p>Hello World!</p>
<p>Some initial <strong>bold</strong> text</p> --}}
<br><br><br><br><br>
</div>
<hr>
<div class="form-group col-md-12">
<button type="button" class="btn btn-success me-md-2">
Simpan
</button>
</div>
<hr>
{{-- <hr>
<br><br><br>
<h6>Data yang telah di input</h6>
<hr> --}}
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
