@extends('layouts.xtreme')

@section('style')
    <link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link href="../../xtreme-admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
@endsection

@section('page-title', 'Matrix Admin :: Estoque')
@section('title', 'Estoque')

@section('main')

    <!-- Start Page Content -->
                
                <!-- ============================================================== -->
                
                <div class="row">                
                <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <button type="button" class="btn waves-effect waves-light btn-success"
                                    data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                            <i class="mdi mdi-plus"></i> Novo Produto</button> 
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Novo Produto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="inputcom" class="control-label col-form-label">Descrição</label>
                                                    <input type="text" class="form-control" id="inputcom" placeholder="Descreva o produto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Categoria</label>
                                                    <select class="form-control">
                                                        <option>Selecione...</option>
                                                        <option>Funko</option>
                                                        <option>Lego</option>
                                                        <option>Camiseta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Código</label>
                                                    <input type="text" class="form-control" id="inputcom" placeholder="#000000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Select File</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Procurar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Qtd. Inicial</label>
                                                    <div class="form-group">
                                                        <input id="demo_vertical2" type="text" value="" name="demo_vertical2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Custo</label>
                                                    <input type="text" class="form-control" id="inputcom" placeholder="00,00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="ts-success" >Cadastrar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                                <!-- /.modal -->
    
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../xtreme-admin/assets/libs/jquery/dist/jquery.min.js"></script>



<!--This page plugins -->
<script src="../../xtreme-admin/assets/extra-libs/DataTables/datatables.min.js"></script>

<script src="../../xtreme-admin/dist/js/pages/datatable/datatable-basic.init.js"></script>



<script src="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <script>
    //==================================================//
    //          Vertical buttons with custom icons      //
    //==================================================//
    $("input[name='demo_vertical2']").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'glyphicon glyphicon-plus',
        verticaldownclass: 'glyphicon glyphicon-minus'
    });
    </script>

    <!--Custom JavaScript -->
    <script src="../../xtreme-admin/dist/js/custom.min.js"></script>
    <script src="../../xtreme-admin/assets/libs/toastr/build/toastr.min.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/toastr/toastr-init.js"></script>

@endsection
