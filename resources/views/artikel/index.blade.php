@extends('layouts/main')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data informasi artikel</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <form class="form-header" action="" method="GET">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for data article" value="{{ request()->get('search') }}" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="table-data__tool-right">
                            <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/artikel/create">
                                <i class="zmdi zmdi-plus"></i>add item</a>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="20%">judul</th>
                                    <th width="80%">cuplikan</th>
                                    <th>gambar</th>
                                    <th width="18%">Waktu Artikel</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($artikel as $ar => $artik)
                                <tr>
                                    <td>{{ $ar + $artikel->firstitem() }}</td>
                                    <td>{{ $artik->judul }}</td>
                                    <td>{{ $artik->cuplikan }}</td>
                                    <td>
                                        <center>
                                            <img src="{{ asset('asset/images/'.$artik->gambar) }}" id="showgambar" style="max-width:100px;max-height:100px;" />
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            {{ $artik->waktu_artikel }}
                                        </center>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/artikel/edit/{{ $artik->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="/artikel/{{ $artik->id }}" class="item" onclick="return confirm('Delete data?');" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        Jumlah Data Barang =
                        {{ $artikel->total() }}
                        <h6 class="page-title">Page Number</h6>
                        {{ $artikel->links() }}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p style="margin-top: 180px;">
                            Copyright © 2020 RAP
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection