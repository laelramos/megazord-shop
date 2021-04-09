@extends('layouts.app')

@section('page-title', 'Matrix Admin :: Estoque')
@section('title', 'Estoque')

@section('main')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Estoque</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Código</th>
                            <th>Categoria</th>
                            <th>Produto</th>
                            <th>Qtd.</th>
                            <th>Custo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foto 1</td>
                            <td>12121212</td>
                            <td>Funko</td>
                            <td>Kakashi #182</td>
                            <td>2</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <td>Foto 2</td>
                            <td>01010226</td>
                            <td>Figure</td>
                            <td>Gaara 01</td>
                            <td>1</td>
                            <td>R$ 35,00</td>
                        </tr>
                        <tr>
                            <td>Foto 3</td>
                            <td>00112233</td>
                            <td>Camiseta</td>
                            <td>Raglan branca</td>
                            <td>17</td>
                            <td>R$ 11,00</td>
                        </tr>    
                    </tbody>
                </table>
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
