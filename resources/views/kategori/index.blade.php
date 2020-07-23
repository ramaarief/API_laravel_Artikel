@extends('layouts/main')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data kategori artikel</h3>
                    <div style="text-align: right;">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/kategori/create">
                            <i class="zmdi zmdi-plus"></i>add item</a>
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
                                    <th width="2%">
                                        #
                                    </th>
                                    <th width="50%">
                                        Judul Artikel
                                    </th>
                                    <th width="20%">
                                        Nama Kategori
                                    </th>
                                    <th style="padding-right: 65px;">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kategori as $kate => $kt )
                                <tr>
                                    <td>
                                        {{ $kate + $kategori->firstitem() }}
                                    </td>
                                    <td>
                                        @foreach($artikel as $ar)
                                        @if($ar->id == $kt->artikel_id)
                                        {{ $ar->judul }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <div style="text-align: left;">
                                            {{ $kt->nama_kategori }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/kategori/edit/{{ $kt->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="/kategori/{{ $kt->id }}" class="item" onclick="return confirm('Delete data?');" data-toggle="tooltip" data-placement="top" title="Delete">
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
                        {{ $kategori->total() }}
                        <h6 class="page-title">Page Number</h6>
                        {{ $kategori->links() }}
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