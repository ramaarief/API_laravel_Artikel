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
                            <strong>Form Edit</strong> Data Artikel
                        </div>
                        <div class="card-body card-block">
                            <form action="/artikel/{{ $artikel->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @method('patch')
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">Judul Artikel</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="judul" class="form-control" value="{{ $artikel->judul }}" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class="form-control-label">Cuplikan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="cuplikan" id="textarea-input" rows="9" class="form-control">{{ $artikel->cuplikan }}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class="form-control-label">Isi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="isi" id="textarea-input" rows="9" class="form-control">{{ $artikel->isi }}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class="form-control-label">Input Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="gambar" class="form-control-file" />
                                        <figcaption class="figure-caption">{{ $artikel->gambar }}</figcaption><br>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">Waktu Pembuatan Artikel</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="text-input" name="waktu" class="form-control" value="{{ $artikel->waktu_artikel }}" />
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