@extends('layouts.xtreme')

@section('style')
     <!-- This Page CSS -->
    <link href="../../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
@endsection

@section('page-title', 'Matrix Admin :: Cadastros')
@section('title', 'Cadastros')

@section('main')
<!-- ============================================================== -->
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
    
    
    <div class="row el-element-overlay">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/itachiF.png" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-dark btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/kakashiF.jpg" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair2.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-success btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/sakuraF.png" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-dark btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/kakashiF.jpg" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-info btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/sakuraF.png" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-success btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/itachiF.png" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-info btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/kakashiF.jpg" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair2.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-warning btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/itachiF.png" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair.jpg"><i class="icon-magnifier"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <div class="m-l-15">
                            <h4 class="m-b-0">Rounded Chair</h4>
                            <span class="text-muted">globe type chair for rest</span>
                        </div>
                        <div class="ml-auto m-r-15">
                            <button type="button" class="btn btn-secondary btn-circle">$15</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
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
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
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

<!-- This Page JS -->
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
<script src="../../xtreme-admin/assets/libs/toastr/build/toastr.min.js"></script>
<script src="../../xtreme-admin/assets/extra-libs/toastr/toastr-init.js"></script>

@endsection