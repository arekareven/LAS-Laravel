<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Daftar Nasabah</h5>
                    {{-- <a href="{{ route('customer.create') }}" class="btn btn-primary mb-2 li-modal"><i>+</i> Tambah Data</a> --}}
                    {{-- <a class="btn btn-success mb-3" href="javascript:void(0)" id="createNewCustomer"> Tambah</a> --}}
                    {{-- <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p> --}}
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <nav class="mb-3">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link {{ $currentStep != 1 ? '' : 'active' }}" id="step-1" type="button">Home</button>
                          <button class="nav-link {{ $currentStep != 2 ? '' : 'active' }}" id="step-2" type="button">Profile</button>
                          <button class="nav-link {{ $currentStep != 3 ? '' : 'active' }}" id="step-3" type="button">Contact</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="was-validated tab-pane fade {{ $currentStep == 1 ? 'show active' : '' }}" id="step-1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2">Nama</label>
                                <div class="col-sm-6">
                                    <input type="text" wire:model="name" class="form-control" id="nama" required>
                                    <div class="invalid-feedback">
                                        Isian nama tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2">Status Menikah</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Default select example" wire:model="marital_status" required>
                                        <option value="">Klik untuk memilih</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Duda">Duda</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                    <div class="invalid-feedback">Isian status tidak boleh kosong</div>
                                </div>
                                {{-- @error('marital_status') <span class="error">{{ $message }}</span> @enderror --}}
                            </div>
                            <div class="row mb-3">
                                <label for="tempat" class="col-sm-2">Tempat Lahir</label>
                                <div class="col-sm-6">
                                    <input type="text" wire:model="place_of_birth" class="form-control" id="place_of_birth" required>
                                    <div class="invalid-feedback">Isian tempat lahir tidak boleh kosong</div>
                                </div>
                                {{-- @error('place_of_birth') <span class="error">{{ $message }}</span> @enderror --}}
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success" wire:click="firstStepSubmit" type="button" >Next</button>
                            </div>
                        </div>

                        <div class="tab-pane fade {{ $currentStep == 2 ? 'show active' : '' }}" id="step-2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <div class="form-group">
                                <label for="description">No KTP</label><br/>
                                <input type="text" wire:model="id_card_number" class="form-control" id="id_card_number"/>
                                @error('id_card_number') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">No Tlp</label>
                                <input type="text" wire:model="phone_number" class="form-control" id="phone_number"/>
                                @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-danger" type="button" wire:click="back(1)">Back</button>
                                <button class="btn btn-success" type="button" wire:click="secondStepSubmit">Next</button>
                            </div>
                        </div>

                        <div class="tab-pane fade {{ $currentStep == 3 ? 'show active' : '' }}" id="step-3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <table class="table">
                                <tr>
                                    <td>Nama:</td>
                                    <td><strong>{{$name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Status Menikah:</td>
                                    <td><strong>{{$marital_status}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir:</td>
                                    <td><strong>{{$place_of_birth}}</strong></td>
                                </tr>
                                <tr>
                                    <td>No KTP:</td>
                                    <td><strong>{{$id_card_number}}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Tlp:</td>
                                    <td><strong>{{$phone_number}}</strong></td>
                                </tr>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-danger" type="button" wire:click="back(2)">Back</button>
                                <button class="btn btn-success" wire:click="submitForm" type="button">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://ahmadsaugi.com">Saugi</a></p>
            </div>
        </div>
    </footer> --}}
</div>
