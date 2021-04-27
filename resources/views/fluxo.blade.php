@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: Fluxo')
@section('title', 'Fluxo De Caixa')

@section('style')
<link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/extra-libs/prism/prism.css">
<link href="../../xtreme-admin/dist/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
<link href="../../xtreme-admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">General Buttons</h4>
                        <div class="button-group">
                        <button type="button" class="btn btn-success" id="ts-success">Nova Receita</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Nova Despesa</button>
                        </div>
                        
                    </div>
                </div>
            </div>   
        </div>
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
    




@endsection
