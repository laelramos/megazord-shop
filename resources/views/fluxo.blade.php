@extends('layouts.app')

@section('page-title', 'Matrix Admin :: Fluxo')
@section('title', 'Fluxo De Caixa')

@section('main')
<div class ="row">
<div class="col-lg-4">
    <!-- SALDO -->
    <div class="col-md-6 col-lg-8 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="fas fa-dollar-sign"> 34,00</i></h1>
                <h6 class="text-white">Saldo</h6>
            </div>
        </div>
    </div>

    <!-- A RECEBER -->
    <div class="col-md-6 col-lg-8 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="fas fa-dollar-sign"> 344,00</i></h1>
                <h6 class="text-white">à Receber</h6>
            </div>
        </div>
    </div>

    <!-- CREDIARIO -->
    <div class="col-md-6 col-lg-8 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="fas fa-dollar-sign"> 12,00</i></h1>
                <h6 class="text-white">Crediário</h6>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-success text-white"><b> Nova Receita</b></button> 
<button type="button" class="btn btn-danger text-white"><b> Nova Despesa</b></button>
</div>


<div class="col-8">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-0">Static Table</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>

@endsection
