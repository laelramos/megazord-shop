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
            <h5 class="card-title">Atividade</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-based">
                    <thead>
                            <td>Operação</i></td>
                            <td>Origem</td>
                            <td>Descrição</td>
                            <td>Data</td>
                            <td>Valor</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr>
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr> 
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr> 
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr> 
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr> 
                        <tr>
                            <td><i class="far fa-arrow-alt-circle-right"></i></td>
                            <td>Compra</td>
                            <td>Diversos</td>
                            <td>12/10/2020</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-arrow-alt-circle-left"></i></th>
                            <th>Venda</th>
                            <th>Action Figure Kakashi</th>
                            <th>10/10/2020</th>
                            <th>R$119,90</th>
                        </tr>     
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

@endsection
