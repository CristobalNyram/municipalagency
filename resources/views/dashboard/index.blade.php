@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Tablero informativo</h1>
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
                                    7
                                </h3>
                                <p>
                                    Cajas
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="{{route('moneybox.summary')}}" class="small-box-footer"> 
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
                                    $40
                                </h3>
                                <p>
                                    Ingresos
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="{{route('income.summary')}}" class="small-box-footer"> 
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
                                    $40
                                </h3>
                                <p>
                                    Egresos
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <a href="{{route('expense.summary')}}"class="small-box-footer"> 
                                Más info..
                                <i href="" class="fas fa-arrow-circle-right"></i>
                            </a>
                </div>

            </div>


            <!-- Status of money in moneyboex -->

            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    $0
                                </h3>
                                <p>
                                    Dinero que hay en todas las cajas
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>

                            <!-- <a href="{{route('income.summary')}}" class="small-box-footer"> 
                                Más info..
                                <i href="" class="fas fa-arrow-circle-right"></i>
                            </a> -->
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

