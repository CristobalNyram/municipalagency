@extends('adminlte::page')

@section('title', 'Egreso:#')

@section('content_header')
  

   <h1>  <a   href="{{ route('expense') }}" class="btn btn-danger btn-floating btn-lg"><i class="fas fa-arrow-left"></i></a>  Egresos <li class="fas fa-balance-scale-right"></li></h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
   

    <div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Folio de egreso: <strong>1</strong>  </h3>
<div class="card-tools">
<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove"> -->
<button type="button"  data-toggle="modal" data-target="#expense_edit-modal" class="btn btn-tool" data-card-widget="">Editar
<i class="fas fa-edit"></i>

</div>
</div>

<div class="card-body p-0">
            <div class="table-responsive">
            <table class="table m-0">
            <thead>
            <tr>
            <th>Fecha</th>
            <th>Descripción</th>
            <th>Responsable del registro</th>
            <th>Dinero de la caja</th>
            <th>Comprobante</th>
            <th>Cantidad</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>4/04/2022</td>

            <td><a  href="{{ route('expense.profile') }}"> Compra de material tabique </a></td>
                        
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



    
<div class="modal fade" id="expense_edit-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar egreso </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> folio : #</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="moneybox_edit-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar ingreso </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> folio : #</p>
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