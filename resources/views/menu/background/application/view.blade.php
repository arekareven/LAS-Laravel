@extends('layout.master')

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
                        <h5>Daftar Pengajuan</h5>
                        <a href="{{ route("application.create") }}" class="btn btn-primary mb-3">Tambah</a>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped data-table-application" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Plafond</th>
                                        <th scope="col">Jangka Waktu</th>
                                        <th scope="col">Tanggal Pengajuan</th>
                                        <th scope="col">Aksi</th>
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

    </div>
@endsection

@section('script')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function() {

            //  Pass Header Token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Render DataTable
            var table = $('.data-table-application').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('application.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'plafond',
                        name: 'plafond'
                    },
                    {
                        data: 'time_period',
                        name: 'time_period'
                    },
                    {
                        data: 'application_date',
                        name: 'application_date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            // Delete Product Code
            $('body').on('click', '.deleteApplication', function() {

                var id = $(this).data("id");
                let text = "Apakah anda yakin ingin menghapus data ini ?";
                if(confirm(text) == true){
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('application.store') }}" + '/' + id,
                        success: function(data) {
                            table.draw();
                            document.getElementById("delete").innerHTML =
                            "<div class='col-12 col-md-6'><div class='alert alert-light-danger alert-dismissible color-danger'><i class='bi bi-exclamation-circle'></i> Data berhasil dihapus ! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div></div>";
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }

            });

        });
    </script>
@endsection
