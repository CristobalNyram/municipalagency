@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Moneybox -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    40
                                </h3>
                                <p>
                                    Cajas
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="" class="small-box-footer"> 
                                Más info..
                                <i href="" class="fas fa-arrow-circle-right"></i>
                            </a>
                </div>
            </div>
            <!-- Incomes -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    40
                                </h3>
                                <p>
                                    Ingresos
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="" class="small-box-footer"> 
                                Más info..
                                <i href="" class="fas fa-arrow-circle-right"></i>
                            </a>
                </div>

            </div>
            <!-- Expenses -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    40
                                </h3>
                                <p>
                                    Egresos
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="" class="small-box-footer"> 
                                Más info..
                                <i href="" class="fas fa-arrow-circle-right"></i>
                            </a>
                </div>

            </div>
            
            
            
            

        </div>
    </div>

</section>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

