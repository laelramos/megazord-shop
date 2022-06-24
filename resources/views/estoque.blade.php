@extends('layouts.xtreme')

@section('style')
    <link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link href="../../xtreme-admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../xtreme-admindist/css/style.min.css" rel="stylesheet">
@endsection

@section('page-title', 'Matrix :: Estoque')
@section('title', 'Estoque')

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
</div>


<div class="row">    
    <div class="col-12"> 
        <div class="card">
            <div class="card-body">    
                    
                <div class="table-responsive">
                    {{-- @if ($message = Session::get('success'))
                    teste<br>
                    {{$message}}
                    @endif --}}
                    
                    <table class="table product-overview" id="zero_config">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Categoria</th>
                                <th>EAN</th>
                                <th>Quantidade</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($product as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->ean}}</td>
                                <td>{{$product->qtd}}</td>
                                <td>
                                       
                                    <button class="text-inverse btn btn-info" title="Delete" data-toggle="tooltip" type="submit">
                                        <i  class="ti-marker-alt"></i>
                                    </button>  
                                    
                                    <form action="{{route('product.destroy', ['product' => $product->id])}}" method="post">
                                        <button class="text-inverse btn btn-danger" title="Delete" data-toggle="tooltip" type="submit">
                                            @csrf
                                            @method('delete')
                                            <i class="ti-trash"></i>
                                        </button>
                                    </form>
                                    
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Column -->
    <!-- =============================================================== -->
    <!-- End PAge Content -->
   
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
                        <form action="{{route('product.store')}}" method="POST" id='frmProduto'>
                            @csrf
                            <div class="card-body">
                                
                                <!-- linha 1 -->
                                <div class="row">
                                    <!-- Campo Descrição -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inputcom" class="control-label col-form-label">Descrição</label>
                                            <input type="text" class="form-control" id="inputcom" placeholder="Descreva o produto" name="name">
                                        </div>
                                    </div>
                                </div>
                                <!-- fim linha 1 -->
                                
                                
                                <!-- linha 2-->
                                <div class="row">
                                    <!-- Campo Categoria -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Categoria</label>
                                            <select class="form-control" name="category">
                                                <option>Selecione...</option>
                                                <option>Funko</option>
                                                <option>Lego</option>
                                                <option>Camiseta</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!-- Campo EAN -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">EAN</label>
                                            <input type="text" class="form-control" id="inputcom" placeholder="00000000000000" name="ean">
                                        </div>
                                    </div>
                                </div>
                                <!-- fim linha 2 -->
                                

                                <!-- linha 3 -->
                                {{-- <div class="row">
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
                                </div> --}}
                                <!-- fim linha 3 -->


                                <!-- linha 4 -->
                                <div class="row">
                                    <!-- Campom Qtd inicial -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Qtd. Inicial</label>
                                            <div class="form-group">
                                                <input id="qtd" type="text" value="" name="qtd">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fim linha 4 -->

                            </div>
                        </form>
                    </div>
                      
                    <div class="modal-footer">
                        <button type="submit" form='frmProduto' class="btn btn-success" id="ts-success" >Cadastrar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
    <!-- /.modal -->
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
    $("input[name='qtd']").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'glyphicon glyphicon-plus',
        verticaldownclass: 'glyphicon glyphicon-minus'
    });
</script>
<script src="../../xtreme-admin/assets/libs/toastr/build/toastr.min.js"></script>
<script src="../../xtreme-admin/assets/extra-libs/toastr/toastr-init.js"></script>

@endsection