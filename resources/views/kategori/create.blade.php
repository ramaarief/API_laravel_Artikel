@extends('layouts/main')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <strong>Form Tambah</strong> Data Kategori
                        </div>
                        <div class="card-body card-block">
                            <form action="/kategori" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Judul Artikel</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="artikel_id" id="select" class="form-control">
                                            @foreach($artikel as $artik)
                                            <option value="{{$artik->id}}">{{$artik->judul}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">Nama Kategori</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="nama_kategori" placeholder="Isi kategori artikel disini . . ." class="form-control" required />
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                        </form>
                    </div>
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