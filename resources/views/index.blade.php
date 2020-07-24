@extends('layouts/main')

@section('title', 'Pusat Informasi Artikel')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">welcome back {{ auth()->user()->name }} !</h2>
                    </div>
                </div>
            </div>
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{$user}}</h2>
                                <span class="desc">members</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{$artikel}}</h2>
                                <span class="desc">Total Article</span>
                                <div class="icon">
                                    <i class="fas fa-copy"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{$kategori}}</h2>
                                <span class="desc">total category</span>
                                <div class="icon">
                                    <i class="fas fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p style="margin-top: 280px;">
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