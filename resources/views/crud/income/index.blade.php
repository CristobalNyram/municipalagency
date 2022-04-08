@extends('adminlte::page')

@section('title', 'Ingreso(s)')

@section('content_header')
   <h1>Ingresos</h1>
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
                    <a href="#income_dd-modal" data-target="#income_add-modal" data-toggle="modal"><span>Regitrar ingreso</span></a>
                    <span class="info-box-number">
                    </span>
            </div>
            </div>
            

        </div>

        <!-- END EXPENSE -->

        <!-- SEARCH EXPENSE START -->
        <div class="col-12 col-sm- col-md-6">
            <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-search"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Buscar ingreso</span>
                    <span class="info-box-number">
                    </span>
            </div>
            </div>
            

        </div>

        <!-- SEARCH EXPENSER END -->
        

            
            
            
            

        </div>

        <div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Ultiimos ingresos registrados</h3>
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
            <th>Folio</th>   
            <th>Fecha</th>
            <th>Descripción</th>
            <th>Responsable</th>
            <th>Caja afectada</th>
            <th>Comprobante</th>
            <th>Cantidad</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a  href="{{ route('income.profile') }}">1</a></td>
            <td>04/04/2022</td>
            <td> <a  href="{{ route('income.profile') }}">Dinero de municipio</a> </td>
            
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

        

    </div>

    
    
   

</section>
    

    

</section>





<div class="modal fade" id="income_add-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Regitrar ingreso </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> folio : #</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar registro</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

