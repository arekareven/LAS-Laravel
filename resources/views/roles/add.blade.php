@extends('layout.master')

{{-- content --}}
@section('content')

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>INPUT DATA NEW ROLE</h5>
                    <a class="btn btn-primary mb-3" href="{{ route('roles.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="data_diri-tab" data-bs-toggle="tab" href="#data_diri"
                                            role="tab" aria-controls="data_diri" aria-selected="true"><h6>Role</h6></a>
                                    </li>
                                </ul>
                                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="data_diri" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="plafond">Nama Role</label>
                                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-check col-md-10">
                                                        <label for="time_period">Permission</label>
                                                        <br/>
                                                        @foreach($permission as $value)
                                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input form-check-success form-check-glow')) }}
                                                            {{ $value->name }}</label>
                                                        <br/>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>

</div>

@endsection

