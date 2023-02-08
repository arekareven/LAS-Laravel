@extends('layout.master')

{{-- content --}}
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>Daftar Nasabah</h5>
                    {{-- <a href="{{ route('customer.create') }}" class="btn btn-primary mb-2 li-modal"><i>+</i> Tambah Data</a> --}}
                    <a class="btn btn-success mb-2" href="javascript:void(0)" id="createNewCustomer"> Tambah</a>                   
                    {{-- <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p> --}}
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    {{-- <th>Tempat, Tanggal Lahir</th>
                                    <th>No. Hp</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->place_of_birth. ' , ' .date_format(new Datetime($item->date_of_birth),
                                        'd-m-Y') }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
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
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                    value="" maxlength="50" required="">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-12">
                                <textarea id="marital_status" name="marital_status" required="" placeholder="Enter Details"
                                    class="form-control"></textarea>
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

    {{-- <div id="theModal" class="modal fade text-center">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div> --}}

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