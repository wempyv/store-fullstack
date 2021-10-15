@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">Welcome Administrator Panel</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">15,209</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revanue</div>
                                <div class="dashboard-card-subtitle">$913,209</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transactions</div>
                                <div class="dashboard-card-subtitle">22,409,399</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 mt-3">
                        <h5 class="mb-3">Recent Transactions</h5>
                        <a href="/dashboard-transactions-details.htmls" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Shirup Marzzan</div>
                                    <div class="col-md-3">Angga Rizky</div>
                                    <div class="col-md-3">12 Januari,2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.htmls" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-2.png" alt="" />
                                    </div>
                                    <div class="col-md-4">LeBrone X</div>
                                    <div class="col-md-3">Masayoshi</div>
                                    <div class="col-md-3">11 Januari,2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.htmls" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-3.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Soffa Lembutte</div>
                                    <div class="col-md-3">Shayna</div>
                                    <div class="col-md-3">11 Januari,2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
