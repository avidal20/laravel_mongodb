@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('msj-success'))
              <div class="x_content bs-example-popovers">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  {{ Session('msj-success') }}
                </div>
              </div>
            @endif

            @if (Session::has('msj-error'))
              <div class="x_content bs-example-popovers">
               <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{ Session('msj-error') }}
               </div>
              </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Informaci&oacute;n de puntos</div>
                <div class="panel-body">
                  <h2>La cantidad de puntos canjeables son {{ Auth::user()->point }}.</h2>
                  <p>Recuerda que los puedes canjear al momento de realizar tu pago en la caja.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
