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
                <div class="panel-heading">Registro de puntos</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('RecordPoints.store') }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="cod" class="col-lg-4 control-label">C&oacute;digo de compra*</label>
                        <div class="col-lg-6">
                          <input type="text" name="cod" class="form-control" id="cod"
                                 placeholder="C&oacute;digo de compra" maxlength="6" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-5 col-lg-5">
                          <button type="submit" class="btn btn-primary">Validar c&oacute;digo</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
