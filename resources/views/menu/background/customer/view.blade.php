@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    @if (!empty ($successMessage))
        <div class="alert alert-light-success alert-dismissible color-success"><i
            class="bi bi-check-circle"></i>{{ $successMessage }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
        </div>
    @endif
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Daftar Nasabah</h5>
                    <a href="{{ url("add_customer") }}" class="btn btn-primary mb-2">Tambah</a>
                    {{-- <a class="btn btn-success mb-3" href="javascript:void(0)" id="createNewCustomer"> Tambah</a> --}}
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped data-table" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>No Tlp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="customerForm" name="customerForm" class="form-horizontal">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-12">
                                <input id="marital_status" name="marital_status" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-12">
                                <input id="place_of_birth" name="place_of_birth" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-12">
                                <input type="date" id="date_of_birth" name="date_of_birth" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-12">
                                <input type="number" id="id_card_number" name="id_card_number" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">No Tlp</label>
                            <div class="col-sm-12">
                                <input type="number" id="phone_number" name="phone_number" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status Tempat Tinggal</label>
                            <div class="col-sm-12">
                                <input type="text" id="status_of_residence" name="status_of_residence" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Profesi</label>
                            <div class="col-sm-12">
                                <input type="text" id="profession" name="profession" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat Sesuai KTP</label>
                            <div class="col-sm-12">
                                <textarea id="id_card_address" name="id_card_address" required="" placeholder="Enter Details" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
