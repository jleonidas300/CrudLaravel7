@extends('layouts.app')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

         <!--Mensaje flash de guardado-->

         @if (session('usuarioGuardado'))
            <div class="alert alert-success">
                {{ session ('usuarioGuardado') }}
            </div>
         @endif

        <!--validando errores-->

            @if ($errors->any())
            
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>

            </div>

            @endif

            <div class="card">
                
            <form action="{{ route('save') }}" method="POST">
                @csrf
                    <DIV class="card-header">Agregar Usuario</DIV>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="">
                        </div>
                           
                        <div class="row form-group">
                            <label for="" class="">Email</label>
                            <input type="text" name="email" class="form-control" id="">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                        </div>
                        
                    
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>