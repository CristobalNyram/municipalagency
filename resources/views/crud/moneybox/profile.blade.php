@extends('adminlte::page')

@section('title', 'Caja:#')

@section('content_header')
  

   <h1>  <a   href="{{ route('boxmoney') }}" class="btn btn-danger btn-floating btn-lg"><i class="fas fa-arrow-left"></i></a>  Cajas  <li class="fas fa-book"></li></h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
   

    <div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Nombre de caja: <strong>Coperaciones de los residentes</strong>  </h3>
<div class="card-tools">
<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove"> -->
<button type="button" class="btn btn-tool" data-toggle="modal" data-target="#moneybox_edit-modal" data-card-widget="">Editar
<i class="fas fa-edit"></i>
</div>
</div>

<div class="card-body p-0">
            <div class="table-responsive">
            <table class="table m-0">
            <thead>
            <tr>
            <th>Nombre</th>
            <th>Fecha de registro</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Dinero en caja</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a >{{$moneybox->monbox_name}}</a></td>
            <td><a>{{$moneybox->created_at}}</td>

            
            <td>{{$moneybox->monbox_description}}</td>

            @if($moneybox->status==1)
            <td><span class="badge badge-success">Activo</span></td>
            @else
            <td><span class="badge badge-danger">Desactivada</span></td>
            @endif
            
            <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20"></div>
            </td>
            </tr>
          
          
        
            </tbody>
            </table>
            </div>

</div>

        

            
            
            
            

      
        

    </div>

    
    
  

</section>
    

    

</section>




<!-- START MODALS-------------------------------------------------------------------------------------------------------START MODALS -->


<div class="modal fade"  id="moneybox_edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Editar caja</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input type="text" id="form3" value="{{$moneybox->monbox_name}}" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Nombre</label>
        </div>

        <div class="md-form mb-4">
          <input type="email" id="form2" class="form-control validate" value="{{$moneybox->monbox_description}}">
          <label data-error="wrong" data-success="right" for="form2">Descripción</label>
        </div>
       
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Activo</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo bg-success">Actualizar <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- END MODALS-------------------------------------------------------------------------------------------------------END MODALS MODALS -->
@stop

@section('css')