@extends('adminlte::page')

@section('title', 'Caja(s)')

@section('content_header')
   <h1>Cajas <li class="fas fa-book"></li> </h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

        <!-- ADD EXPENSE START -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-plus"></i></span>
                    <div class="info-box-content">
                    <a href="#moneybox_add-modal" data-target="#moneybox_add-modal" data-toggle="modal"><span>Regitrar caja</span></a>
                    <span class="info-box-number">
                    </span>
            </div>
            </div>
            

        </div>

        <!-- END EXPENSE -->
        





            
            
            
            

        </div>

    
<div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Cajas existentes</h3>
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
            <th>Acciones</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Dinero en caja</th>
            </tr>
            </thead>
            <tbody>

            @foreach($moneyboxes as $moneybox)
            <tr>
            <td><a href="{{ route('boxmoney.profile') }}" class="btn btn-info">Ver mas información</a></td>

            <td><a href="{{route('boxmoney.profile')}}">{{$moneybox->monbox_name}}</a></td>
            <td>{{$moneybox->monbox_description}}</td>
            @if($moneybox->status==1)
            <td><span class="badge badge-success">Activado</span></td>
            @else
            <td><span class="badge badge-danger">{{$moneybox->status}}</span></td>
            @endif
            <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20">$1,000.00</div>
            </td>
            </tr>
            @endforeach
          
        
            </tbody>
            </table>
            </div>

</div>




    </div>



</section>

<!-- START MODALS-------------------------------------------------------------------------------------------------------START MODALS -->


<div class="modal fade" id="moneybox_add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Regitrar caja</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input type="text" id="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Nombre</label>
        </div>

        <div class="md-form mb-4">
          <input type="email" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Descripción</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo bg-success">Registrar <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- END MODALS-------------------------------------------------------------------------------------------------------END MODALS MODALS -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

