@extends('adminlte::page')

@section('title', 'Caja:#')

@section('content_header')
  

   <h1>  <a   href="{{ route('boxmoney') }}" class="btn btn-danger btn-floating btn-lg"><i class="fas fa-arrow-left"></i></a>  Cajas</h1>
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
            <td><a href="{{route('boxmoney.profile')}}">Ramo 28</a></td>
            <td><a>04/04/2022</td>

            
            <td>Dinero que se recibe del gobierno</td>
            <td><span class="badge badge-success">Activa</span></td>
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




<div class="modal fade" id="moneybox_edit-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar caja </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Nombre : #</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')