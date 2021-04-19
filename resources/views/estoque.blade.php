@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: Estoque')
@section('title', 'Estoque')

@section('main')

    <!-- Start Page Content -->
                
                <!-- ============================================================== -->
                
                <div class="row">                
                <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <button type="button" class="btn waves-effect waves-light btn-success">Novo Produto</button> 
                            </ol>
                        </nav>
                    </div>
                
                    <!-- Column -->
                    <div class="col-lg-12">                   
                        <div class="card">
                            <div class="card-body">
                            
                                <div class="table-responsive">
                                    <table class="table product-overview" id="zero_config">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Código</th>
                                                <th>Categoria</th>
                                                <th>Descrição</th>
                                                <th>Quantidade</th>
                                                <th>Custo</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <img src="../../assets/images/gallery/itachiF.png" alt="iMac" width="80"></td>
                                                <td>#85457898</td>
                                                <td> Funko </td>
                                                <td>Funko Pop! Itachi #729</td>
                                                <td>6</td>
                                                <td>90,90</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../../assets/images/gallery/kakashiF.jpg" alt="iMac" width="80"></td>
                                                <td>#298634129</td>
                                                <td> Funko </td>
                                                <td>Funko Pop! Kakashi #182</td>
                                                <td>2</td>
                                                <td>85,90</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../../assets/images/gallery/sakuraF.png" alt="iMac" width="80"></td>
                                                <td>#801923810</td>
                                                <td> Funko </td>
                                                <td>Funko Pop! Sakura #164</td>
                                                <td>4</td>
                                                <td>70,90</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->

    
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../xtreme-admin/assets/libs/jquery/dist/jquery.min.js"></script>



    <!--This page plugins -->
    <script src="../../xtreme-admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    
    <script src="../../xtreme-admin/dist/js/pages/datatable/datatable-basic.init.js"></script>

    

@endsection
