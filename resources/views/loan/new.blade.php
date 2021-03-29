@extends('template.index')
@section('contenido')

<div class="row">
    <div class="col-md-8">
        <div class="card border-dark">
            <div class="card-header bg-dark">
               INFORMACIÓN DEL CREDITO
            </div>
            <div class="card-body">
                <div class="p-2">
                    <label>INFORMACIÓN DEL CLIENTE</label>
                    <div>
                       <div class="row">
                           <div class="col-sm-5">
                               <input type="text" class="form-control form-control-sm border-primary" placeholder="Ingrese Documento..." id="number_document">
                           </div>
                           <div class="col-sm-3">
                               <div class="input-group mb-2">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text border-primary"><i class="fas fa-address-card"></i></div>
                                   </div>
                                   <input type="text" class="form-control border-primary form-control-sm" id="type_document" placeholder="Doc." disabled>
                               </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="input-group mb-2">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text border-primary"><i class="far fa-address-card"></i></div>
                                   </div>
                                   <input type="text" class="form-control border-primary form-control-sm" id="document_select" placeholder="Número" disabled>
                               </div>
                           </div>
                       </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-primary"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control form-control-sm border-primary" id="name_client" placeholder="Cliente" disabled>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <label>INFORMACIÓN DEL PRESTAMO</label>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Monto del Préstamo</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-primary"><i class="fas fa-hand-holding-usd"></i></div>
                                    </div>
                                    <input type="text" class="form-control border-primary form-control-sm" id="inlineFormInputGroup">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Nro. Cuotas</label>
                                <input type="text" class="form-control border-primary form-control-sm" id="inlineFormInputGroup">
                            </div>
                            <div class="col-sm-4">
                                <label>Interes</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-primary"><i class="fa fa-percent"></i></div>
                                    </div>
                                    <input type="text" class="form-control border-primary form-control-sm" id="inlineFormInputGroup">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-header bg-info">
                VALORES CALCULADOS
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
    <script src="{{asset('app/js/newloan.js')}}"></script>

@endsection
