@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: Fluxo')
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
    <div class="container-fluid">
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
                                <h4 class="card-title">Earnings</h4>
                                <h5 class="card-subtitle">Total Earnings of the Month</h5>
                                <h2 class="font-medium">$43,567.53</h2>
                            </div>
                            <div class="earningsbox m-t-5" style="height:78px; width:100%;"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="card-title">Overview</h4>
                                <h5 class="card-subtitle">Total Earnings of the Month</h5>
                            </div>
                            <div class="card-body">
                                
                                    <!-- col -->
                                    
                                        <div class="tab-pane fade show active" id="test11" role="tabpanel" aria-labelledby="pills-home-tab2">
                                        <div class="table-responsive">
                                            <table class="table v-middle">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Price</th>
                                                        <th class="border-top-0">Amount</th>
                                                        <th class="border-top-0">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="text-success">$12948.89</span></td>
                                                        <td><i class="cc BTC m-r-5"></i> <span class="font-medium">0.123</span></td>
                                                        <td>12:45:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-danger">$23135.78</span></td>
                                                        <td><i class="cc XRP m-r-5"></i> <span class="font-medium">1.123</span></td>
                                                        <td>12:43:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-success">$43567.98</span></td>
                                                        <td><i class="cc ETH m-r-5 blue-text"></i> <span class="font-medium">0.123</span></td>
                                                        <td>12:45:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-success">$12948.89</span></td>
                                                        <td><i class="cc BTC m-r-5"></i> <span class="font-medium">0.123</span></td>
                                                        <td>12:45:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-danger">$23135.78</span></td>
                                                        <td><i class="cc XRP m-r-5"></i> <span class="font-medium">1.123</span></td>
                                                        <td>12:43:09</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-success">$43567.98</span></td>
                                                        <td><i class="cc ETH m-r-5 blue-text"></i> <span class="font-medium">0.123</span></td>
                                                        <td>12:45:09</td>
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
<div class="chat-windows"></div>




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


        
    



