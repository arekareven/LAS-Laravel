@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    @if ($message = Session::get('success'))
        <div class="col-12 col-md-6">
            <div class="alert alert-light-success color-success alert-dismissible fade show">
                <i class="bi bi-check-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if($message = Session::get('edit'))
        <div class="col-12 col-md-6">
            <div class="alert alert-light-warning alert-dismissible color-warning">
                <i class="bi bi-exclamation-triangle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <div id="delete">
    </div>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Daftar Nasabah</h5>
                    {{-- <a href="{{ url("add_customer") }}" class="btn btn-primary mb-3">Tambah (Livewire)</a> --}}
                    <a href="{{ route("customer.create") }}" class="btn btn-primary mb-3">Tambah</a>
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
