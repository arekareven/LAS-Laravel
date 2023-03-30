@extends('layout.master')

{{-- content --}}
@section('content')

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h5>INPUT DATA NEW USER</h5>
                    <a class="btn btn-primary mb-3" href="{{ route('users.index') }}"> Kembali</a>
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
                                    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="data_diri" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="name">Nama User</label>
                                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="email">Email</label>
                                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="area_kerja">Area Kerja</label>
                                                        <select class="form-select" aria-label="Default select example" id="area_kerja" name="area_kerja">
                                                            <option value="{{ $user->area_kerja }}">{{ $user->area_kerja }}</option>
                                                            <option value="KCU">KCU</option>
                                                            <option value="KCMDN">KCMDN</option>
                                                            <option value="KCPNG">KCPNG</option>
                                                            <option value="KCNGJ">KCNGJ</option>
                                                            <option value="KCNGW">KCNGW</option>
                                                            <option value="KCTRG">KCTRG</option>
                                                        </select>
                                                        {{-- {!! Form::select('jabatan[]', $roles,[], array('class' => 'form-select')) !!} --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="password">Password</label>
                                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="confirm-password">Confirm Password</label>
                                                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group col-md-10">
                                                        <label for="roles">Roles</label>
                                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-select')) !!}
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

