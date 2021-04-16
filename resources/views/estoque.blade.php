@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: Estoque')
@section('title', 'Estoque')

@section('main')
    <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
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
                                                <td> <img src="../../assets/images/gallery/kakashiF.jpg" alt="iMac" width="80"></td>
                                                <td>#85457898</td>
                                                <td> Funko </td>
                                                <td>Funko Pop! Kakashi #182</td>
                                                <td>2</td>
                                                <td>85,90</td>
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
                                                <td> <img src="../../assets/images/gallery/kakashiF.jpg" alt="iMac" width="80"></td>
                                                <td>#801923810</td>
                                                <td> Funko </td>
                                                <td>Funko Pop! Kakashi #182</td>
                                                <td>2</td>
                                                <td>85,90</td>
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
@endsection
