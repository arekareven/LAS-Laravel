{{-- character --}}
<div class="tab-pane fade" id="v-pills-character" role="tabpanel"
aria-labelledby="v-pills-character-tab">
<div class="form-group with-title mb-3">
<textarea class="form-control" id="exampleFormControlTextarea1"
rows="3" name="_column" required></textarea>
<label>Informasi Pribadi</label>
</div>
<div class="form-group with-title mb-3">
<textarea class="form-control" id="exampleFormControlTextarea1"
rows="3" required></textarea>
<label>Informasi Perilaku</label>
</div>
<div class="form-group with-title mb-3">
<textarea class="form-control" id="exampleFormControlTextarea1"
rows="3" required></textarea>
<label>Informasi Keluarga</label>
</div>
<div class="row">
{{-- character_name1 --}}
<div class="form-group col-md-6">
<label for="character_name1">Nama</label>
<input type="text" id="character_name1" class="form-control"
name="character_name1_column" placeholder="Nama" required>
</div>
{{-- character_number1 --}}
<div class="form-group col-md-6">
<label for="character_number1">Nomor HP</label>
<input type="number" id="character_number1" class="form-control"
name="character_number1_column" placeholder="Nomor HP" required>
</div>
{{-- saldo --}}
<div class="form-group col-md-12">
<label for="saldo">Alamat</label>
<input type="number" id="balance" class="form-control"
name="balance_column" placeholder="Saldo" required>
</div>
<div class="form-group col-md-12">
<button type="submit" class="btn btn-success me-md-2">
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
