@extends('layouts.xtreme')

@section('page-title', 'Matrix :: Dashboard')
@section('title', 'Dashboard')

@section('style')
    <link href="../../xtreme-admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../xtreme-admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
@endsection

@section('main')
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Sumário de Vendas</h4>
                        </div>
                        <div class="ml-auto d-flex no-block align-items-center">
                            <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Vendas</li>
                                <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Lucro</li>
                            </ul>
                            <div class="dl">
                                <select class="custom-select">
                                    <option value="0" selected>Mensal</option>
                                    <option value="1">Diário</option>
                                    <option value="2">Semanal</option>
                                    <option value="3">Anual</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-4">
                            <h1 class="m-b-0 m-t-30">R$6,890.68</h1>
                            <h6 class="font-light text-muted">Vendas Totais no Ano</h6>
                            <h3 class="m-t-30 m-b-0">R$1,540</h3>
                            <h6 class="font-light text-muted">Vendas Totais no Mês</h6>
                            
                        </div>
                        <!-- column -->
                        <div class="col-lg-8">
                            <div class="campaign ct-charts"></div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Info Box -->
                <!-- ============================================================== -->
                <div class="card-body border-top">
                    <div class="row m-b-0">
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                <div><span>Saldo</span>
                                    <h3 class="font-medium m-b-0">R$3.567,53</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                <div><span>Novo Clientes</span>
                                    <h3 class="font-medium m-b-0">29</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
                                <div><span>Total de Vendas</span>
                                    <h3 class="font-medium m-b-0">89</h3></div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                <div><span>Lucro Total</span>
                                    <h3 class="font-medium m-b-0">R$168,90</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
@endsection

@section('jquery')
cccc
@endsection