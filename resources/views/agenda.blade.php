@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: Agenda')
@section('title', 'Agenda')

@section('style')
    <link href="../../xtreme-admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../../xtreme-admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 border-right p-r-0">
                            <div class="card-body border-bottom">
                                <h4 class="card-title m-t-10">Arrastar Eventos</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="calendar-events" class="">
                                            <div class="calendar-events m-b-20" data-class="bg-info"><i class="fa fa-circle text-info m-r-10"></i>Evento 1</div>
                                            <div class="calendar-events m-b-20" data-class="bg-success"><i class="fa fa-circle text-success m-r-10"></i> Evento 2</div>
                                            <div class="calendar-events m-b-20" data-class="bg-danger"><i class="fa fa-circle text-danger m-r-10"></i>Evento 3</div>
                                            <div class="calendar-events m-b-20" data-class="bg-warning"><i class="fa fa-circle text-warning m-r-10"></i>Evento 4</div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="drop-remove">
                                            <label class="custom-control-label" for="drop-remove">Remover após arrastar</label>
                                        </div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                <i class="ti-plus"></i> Add Evento
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN MODAL -->
    <div class="modal none-border" id="my-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add Evento</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Criar Evento</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-new-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add</strong> Categoria</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Nome Categoria</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Escolher Cor da Categoria</label>
                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Successo</option>
                                    <option value="danger">Urgência</option>
                                    <option value="info">Info</option>
                                    <option value="primary">Primária</option>
                                    <option value="warning">Alerta</option>
                                    <option value="inverse">Inverso</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

@endsection

@section('jquery')

<div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../xtreme-admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../../xtreme-admin/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
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
    <!--This page JavaScript -->
    <script src="../../xtreme-admin/assets/libs/moment/min/moment.min.js"></script>
    <script src="../../xtreme-admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../../xtreme-admin/dist/js/pages/calendar/cal-init.js"></script>
    <script>
    </script>

@endsection