@extends('layouts.auth')

@section('page-title', 'Login')

@section('form-container')
    <div id="loginform">
        <div class="text-center pt-3 pb-3">
            <span class="db"><img src="../../assets/images/logo.png" alt="logo" /></span>
        </div>
        <!-- Form -->
        <form class="form-horizontal mt-3" id="loginform" action="index.html">
            <div class="row pb-4">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class="ti-pencil"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                    </div>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="pt-3">
                            <a href="/recover" class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock me-1"></i>Esqueceu a senha?</a>
                            <button class="btn btn-success float-end text-white" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
