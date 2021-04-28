@extends('layouts.xtreme')

@section('page-title', 'Matrix :: Fluxo')
@section('title', 'Fluxo De Caixa')

@section('style')
<link href="../../xtreme-admin/assets/extra-libs/prism/prism.css" rel="stylesheet" type="text/css">
<link href="../../xtreme-admin/dist/css/style.min.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css">
<link href="../../xtreme-admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">

<link href="../../xtreme-admin/assets/libs/morris.js/morris.css" rel="stylesheet">

@endsection

@section('main')

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12 col-xlg-6">                    
                <div class="button-group">
                    <button type="button" class="btn btn-success" id="ts-success">Nova Receita</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Nova Despesa</button>
                </div>                
            </div>   
        </div>


        <div class="row">
                    <!-- Column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Saldo</h4>
                                <h2 class="font-medium">R$500,00</h2>
                            </div>
                            <div class="earningsbox m-t-5" style="height:78px; width:100%;"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="card-title">Movimentações</h4>
                            </div>
                            <div class="card-body">
                                
                                    <!-- col -->
                                    
                                        <div class="tab-pane fade show active" id="test11" role="tabpanel" aria-labelledby="pills-home-tab2">
                                        <div class="table-responsive">
                                            <table class="table v-middle">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Operação</th>
                                                        <th class="border-top-0">Descrição</th>
                                                        <th class="border-top-0">Data</th>
                                                        <th class="border-top-0">Valor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Entrada</td>
                                                        <td><span class="font-medium">Estorno</span></td>
                                                        <td>12/01/2021</td>
                                                        <td><span class="text-success">R$129,89</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saída</td>
                                                        <td><span class="font-medium">Compra 1</span></td>
                                                        <td>23/01/2021</td>
                                                        <td><span class="text-danger">R$35,78</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entrada</td>
                                                        <td><span class="font-medium">Empréstimo</span></td>
                                                        <td>17/03/2021</td>
                                                        <td><span class="text-success">R$67,98</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entrada</td>
                                                        <td><span class="font-medium">Investimento</span></td>
                                                        <td>07/04/2021</td>
                                                        <td><span class="text-success">R$18,89</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saída</td>
                                                        <td><span class="font-medium">Compra 2</span></td>
                                                        <td>12/05/2021</td>
                                                        <td><span class="text-danger">R$23,78</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saída</td>
                                                        <td><span class="font-medium">Compra 3</span></td>
                                                        <td>12/05/2021</td>
                                                        <td><span class="text-danger">R$67,98</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <!-- col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

   

@endsection

@section('jquery')
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../xtreme-admin/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../xtreme-admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../xtreme-admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="../../xtreme-admin/dist/js/app.min.js"></script>
<script src="../../xtreme-admin/dist/js/app.init.dark.js"></script>
<script src="../../xtreme-admin/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../xtreme-admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../../xtreme-admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../xtreme-admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../xtreme-admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../xtreme-admin/dist/js/custom.min.js"></script>





    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../xtreme-admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- this page js -->
    <script src="../../xtreme-admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/prism/prism.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

    <script src="../../xtreme-admin/assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/c3/c3.min.js"></script>
    <script src="../../xtreme-admin/dist/js/pages/dashboards/dashboard5.js"></script>



 <!--Morris JavaScript -->
    <script src="../../assets/libs/raphael/raphael.min.js"></script>
    <script src="../../assets/libs/morris.js/morris.min.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard3.js"></script>
    <script>
    $(function() {
        $('#cc-table').DataTable({});
    });
    </script>
@endsection


        
    



