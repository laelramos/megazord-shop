@extends('layouts.xtreme')

@section('page-title', 'Matrix Admin :: PDV')
@section('title', 'PDV')

@section('style')
    <link href="../../xtreme-admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../../xtreme-admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
@endsection

@section('main')
    <div class="row">
        <!-- Column -->
        <div class="col-md-9 col-lg-9">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="m-b-0 text-white">Carrinho (4 itens)</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table product-overview">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Descrição</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th style="text-align:center">Total</th>
                                    <th style="text-align:center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="150"><img src="../../assets/images/gallery/kakashiF.jpg" alt="Kakashi" width="80"></td>
                                    <td width="550">
                                        <h5 class="font-500">Funko Pop! Kakashi #182</h5>
                                    </td>
                                    <td>R$153</td>
                                    <td width="70">
                                        <input id="demo_vertical" type="text" value="1" name="demo_vertical">
                                    </td>
                                    <td width="150" align="center" class="font-500">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/images/gallery/itachiF.png" alt="Itachi" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Funko Pop! Itachi #729</h5>
                                    </td>
                                    <td>R$153</td>
                                    <td>
                                        <input id="demo_vertical" type="text" value="1" name="demo_vertical">
                                    </td>
                                    <td class="font-500" align="center">R$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/images/gallery/sakuraF.png" alt="Sakura" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Funko Pop! Sakura #164</h5>
                                    </td>
                                    <td>R$153</td>
                                    <td>
                                        <input id="demo_vertical" type="text" value="1" name="demo_vertical">
                                    </td>
                                    <td class="font-500" align="center">R$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/images/gallery/itachiF.png" alt="Itachi" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Funko Pop! Itachi #729</h5>
                                    </td>
                                    <td>R$153</td>
                                    <td>
                                    <input id="demo_vertical" type="text" value="1" name="demo_vertical">
                                    </td>
                                    <td class="font-500" align="center">R$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-3 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CART SUMMARY</h5>
                    <hr>
                    <small>Total</small>
                    <h2>$612</h2>
                    <hr>
                    <a href="/checkout"><button class="btn btn-success">Checkout</button></a>
                    <button type="button" class="btn waves-effect waves-light btn-outline-danger">Cancelar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Para Suporte</h5>
                    <hr>
                    <h4><i class="ti-mobile"></i> 9998979695 </h4> <small>Please contact with us if you have any questions. We are avalible 24h.</small>
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


    <script>
    function setup() {
        var els = document.getElementsByClassName("text-inverse");
        for (var i = 0; i < els.length; i++) {
            els[i].addEventListener('click', function (e) {
                e.preventDefault();
                e.target.closest('div.image').remove();
                //e.target.closest('.image').remove();
                
                //this will not work on 2 last images cause parent div will be deleted 
                //leaving an empty <div class="image"></div> for each removed item
                
                //e.target.closest('div').remove();
            });
        }
    }
    setup();
</script>


    <!-- This Page JS -->
    <script src="../../xtreme-admin/assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <script>

    //==================================================//
    //          Vertical button alignment                //
    //==================================================//
    $("input[name='demo_vertical']").TouchSpin({
        verticalbuttons: true
    });


    </script>

@endsection