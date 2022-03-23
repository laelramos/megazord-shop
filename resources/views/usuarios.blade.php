@extends('layouts.xtreme')

@section('style')
    <link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link href="../../xtreme-admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../xtreme-admin/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../xtreme-admindist/css/style.min.css" rel="stylesheet">
@endsection


@section('page-title', 'Matrix Admin :: Usuários')
@section('title', 'Usuários')

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
            <i class="mdi mdi-plus"></i> Novo Usuário</button> 
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
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Nível</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->level}}</td>
                                <td>
                                    {{-- <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                                        <i  class="ti-marker-alt"></i>
                                    </a> --}}

                                    <button type="button" class="btn btn-info btn-sm" style="margin:2px;">
                                            <i class="ti-marker-alt"></i>
                                    
                                    <form action="{{route('user.destroy', ['user' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger delete-btn btn-sm" style="margin:2px;" >
                                    <i class="ti-trash" style="padding:auto;"></i>

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
    <!-- ============================================================== -->
    <!-- End PAge Content -->
   
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Novo Usuário</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    
                    <div class="modal-body">
                        <form action="{{route('user.store')}}" method="POST" id='frmUser'>
                            @csrf
                            <div class="card-body">
                                
                                <!-- linha 1 -->
                                <div class="row">
                                    <!-- Campo Descrição -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inputcom" class="control-label col-form-label">Nome *</label>
                                            <input type="text" class="form-control" id="inputcom" placeholder="Nome do usuário" name="name">
                                        </div>
                                    </div>
                                </div>
                                <!-- fim linha 1 -->
                                
                                <!-- linha 2-->
                                <div class="row">
                                    <!-- Campo Nível -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Nível</label>
                                            <select class="form-control" name="level" id="inputcom">
                                                <option>Selecione...</option>
                                                <option>Administrador</option>
                                                <option>Operador</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!-- Campo EAN -->
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">E-mail</label>
                                            <input type="email" class="form-control" id="inputcom" placeholder="usuario@usuario.com" name="email">
                                        </div>
                                    </div>
                                </div>
                                <!-- fim linha 2 -->
                                
                                <!-- linha 3 -->
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Senha *</label>
                                            <input type="password" class="form-control" id="inputcom" placeholder="usuario@usuario.com" name="password">
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Confirmação de Senha *</label>
                                            <input type="email" class="form-control" id="inputcom" placeholder="usuario@usuario.com" name="email">
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- fim linha 3 -->

                            </div>
                        </form>
                    </div>
                      
                    <div class="modal-footer">
                        <button type="submit" form='frmUser' class="btn btn-success" id="ts-success" >Cadastrar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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