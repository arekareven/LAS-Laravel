@extends('layout.master')

{{-- conten --}}
@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h5>Daftar Nasabah</h5>
                        {{-- <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p> --}}
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>No. Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                   
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->place_of_birth. ' ,' .$item->date_of_birth }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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

{{-- sidebar active --}}
@section('sidebar_active')   
    <li class="sidebar-item ">
        <a href={{ url("/") }} class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Nasabah</span>
        </a>
        <ul class="submenu active">
            <li class="submenu-item active">
                <a href={{ url('customer') }}>Data Diri Nasabah</a>
            </li>
            <li class="submenu-item ">
                <a href={{ url('mate') }}>Data Suami / Istri</a>
            </li>
            <li class="submenu-item ">
                <a href={{ url('relatives') }}>Data Kontak Darurat</a>
            </li>
            <li class="submenu-item ">
                <a href={{ url('application') }}>Data Pengajuan</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-collection-fill"></i>
            <span>Extra Components</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="extra-component-avatar.html">Avatar</a>
            </li>
            <li class="submenu-item ">
                <a href="extra-component-sweetalert.html">Sweet Alert</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Layouts</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="layout-default.html">Default Layout</a>
            </li>
            <li class="submenu-item ">
                <a href="layout-vertical-1-column.html">1 Column</a>
            </li>
        </ul>
    </li>
@endsection
