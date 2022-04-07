@extends('adminlte::page')

@section('title', 'Egreso(s)')

@section('content_header')
   <h1>Egresos</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

        <!-- ADD EXPENSE START -->
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-plus"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Regitrar</span>
                    <span class="info-box-number">
                    </span>
            </div>
            </div>
            

        </div>

        <!-- END EXPENSE -->

        <!-- SEARCH EXPENSE START -->
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-search"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Buscar</span>
                    <span class="info-box-number">
                    </span>
            </div>
            </div>
            

        </div>

        <!-- SEARCH EXPENSER END -->

            
            
            
            

        </div>
    </div>
    
    <div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Ultiimos gastos registrados</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">

</div>
</div>

<div class="card-body p-0">
            <div class="table-responsive">
            <table class="table m-0">
            <thead>
            <tr>
            <th>Fecha</th>
            <th>Descripción</th>
            <th>Responsable</th>
            <th>Caja</th>
            <th>Comprobante</th>
            <th>Cantidad</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a href="pages/examples/invoice.html">Coperaciones de los residentes</a></td>
            <td>Es una coperación de los residentes</td>
            
            <td>Gerardo</td>
            <td>Ramo 28</td>
            <td>
                imagen
            </td>
            <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20">$1,000.00</div>
            </td>
            </tr>
          
          
        
            </tbody>
            </table>
            </div>

</div>


</section>
    

    

</section>


</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

