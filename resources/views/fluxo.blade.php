@extends('layouts.app')

@section('page-title', 'Matrix Admin :: Fluxo')
@section('title', 'Fluxo De Caixa')

@section('main')

<div class="col-lg-6">
    <!-- SALDO -->
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">Saldo</h6>
            </div>
        </div>
    </div>

    <!-- A RECEBER -->
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">à Receber</h6>
            </div>
        </div>
    </div>

    <!-- CREDIARIO -->
    <div class="col-md-6 col-lg-6 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                <h6 class="text-white">Crediário</h6>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-success text-white"><b> Nova Receita</b></button> 
<button type="button" class="btn btn-danger text-white"><b> Nova Despesa</b></button>
</div>

@endsection
