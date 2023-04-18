{{-- usulan --}}
<div class="tab-pane fade" id="v-pills-usulan" role="tabpanel"
    aria-labelledby="v-pills-usulan-tab">
    <div class="row">
        {{-- character --}}
        <div class="form-group col-md-4">
            <label for="character">Character</label>
            <input type="text" id="character" class="form-control"
                name="character_column" required>
        </div>
        {{-- capacity --}}
        <div class="form-group col-md-4">
            <label for="capacity">Capacity</label>
            <input type="text" id="capacity" class="form-control"
                name="capacity_column" required>
        </div>
        {{-- capital --}}
        <div class="form-group col-md-4">
            <label for="capital">Capital</label>
            <input type="text" id="capital" class="form-control"
                name="capital_column" required>
        </div>
        {{-- condition --}}
        <div class="form-group col-md-4">
            <label for="condition">Condition</label>
            <input type="text" id="condition" class="form-control"
                name="condition_column" required>
        </div>
        {{-- collateral --}}
        <div class="form-group col-md-4">
            <label for="collateral">Collateral</label>
            <input type="text" id="collateral" class="form-control"
                name="collateral_column" required>
        </div>
        {{-- realization_date --}}
        <div class="form-group col-md-4">
            <label for="realization_date">Tgl Realisasi</label>
            <input type="date" id="realization_date" class="form-control"
                name="realization_date_column" required>
        </div>
        {{-- plafond_proposal --}}
        <div class="form-group col-md-4">
            <label for="plafond_proposal">Plafond</label>
            <input type="number" id="plafond_proposal" class="form-control"
                name="plafond_proposal_column" required>
        </div>
        {{-- time_period_proposal --}}
        <div class="form-group col-md-4">
            <label for="time_period_proposal">Jangka Waktu</label>
            <input type="number" id="time_period_proposal" class="form-control"
                name="time_period_proposal_column" required>
        </div>
        {{-- interest --}}
        <div class="form-group col-md-4">
            <label for="interest">Bunga (%)</label>
            <input type="number" id="interest" class="form-control"
                name="interest_column" required>
        </div>
        {{-- provision --}}
        <div class="form-group col-md-4">
            <label for="provision">Provisi</label>
            <input type="number" id="provision" class="form-control"
                name="provision_column" required>
        </div>
        {{-- administration --}}
        <div class="form-group col-md-4">
            <label for="administration">Admnistrasi</label>
            <input type="number" id="administration" class="form-control"
                name="administration_column" required>
        </div>
        {{-- insurance --}}
        <div class="form-group col-md-4">
            <label for="insurance">Asuransi</label>
            <input type="number" id="insurance" class="form-control"
                name="insurance_column" required>
        </div>
        {{-- dutystamp --}}
        <div class="form-group col-md-4">
            <label for="dutystamp">Materai</label>
            <input type="number" id="dutystamp" class="form-control"
                name="dutystamp_column" required>
        </div>
        {{-- apht --}}
        <div class="form-group col-md-4">
            <label for="apht">APHT</label>
            <input type="number" id="apht" class="form-control"
                name="apht_column" required>
        </div>
        {{-- skmht --}}
        <div class="form-group col-md-4">
            <label for="skmht">SKMHT</label>
            <input type="number" id="skmht" class="form-control"
                name="skmht_column" required>
        </div>
        {{-- cost_skmht --}}
        <div class="form-group col-md-4">
            <label for="cost_skmht">Biaya SKMHT ke APHT</label>
            <input type="number" id="cost_skmht" class="form-control"
                name="cost_skmht_column" required>
        </div>
        {{-- fiduciare --}}
        <div class="form-group col-md-4">
            <label for="fiduciare">Fiduciare</label>
            <input type="number" id="fiduciare" class="form-control"
                name="fiduciare_column" required>
        </div>
        {{-- legalization --}}
        <div class="form-group col-md-4">
            <label for="legalization">Legalisasi</label>
            <input type="number" id="legalization" class="form-control"
                name="legalization_column" required>
        </div>
        {{-- roya --}}
        <div class="form-group col-md-4">
            <label for="roya">Roya</label>
            <input type="number" id="roya" class="form-control"
                name="roya_column" required>
        </div>
        {{-- lain-lain --}}
        <div class="form-group col-md-4">
            <label for="lain-lain">Lain-lain</label>
            <input type="number" id="lain-lain" class="form-control"
                name="lain-lain_column" required>
        </div>
        {{-- notaris --}}
        <div class="form-group col-md-4">
            <label for="notaris">Notaris</label>
            <input type="text" id="notaris" class="form-control"
                name="notaris_column" required>
        </div>
    </div>
    <table class="table table-borderless" id="dynamicAddRemoveProposal">
        <tr>
            <th>Nama</th>
            <th>Sebagai</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><input type="text" id="on_behalf_of" class="form-control" name="on_behalf_of_column[0][subject]" required></td>
            <td><input type="text" id="as" class="form-control" name="as_column" required></td>
            <td><button type="button" name="add" id="dynamic-ar-proposal" class="btn btn-outline-primary"><i class="fas fa-plus"></i></button></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-success btn-block">Simpan</button>
</div>
