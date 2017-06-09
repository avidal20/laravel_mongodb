@extends('layouts.app')

@section('css')
  {!! Html::style('vendors/raty-master/lib/jquery.raty.css') !!}
@endsection

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
                    <form id="form-score" class="form-horizontal" role="form" method="post" action="{{ route('RecordPoints.storeForm') }}">
                      {{ csrf_field() }}
                      <input type="hidden" name="cod" value="{{ $cod }}">
                      <div class="form-group">
                        <label for="cod" class="col-lg-4 control-label">C&oacute;digo de compra*</label>
                        <div class="col-lg-6">
                          <input type="text" name="cod" class="form-control" id="cod"
                                 placeholder="C&oacute;digo de compra" disabled="" value="{{ $cod }}">
                        </div>
                      </div>

                      @foreach($questions as $question)
                        <div class="form-group" id="questionsValidGroup{{ $question->id }}">
                          <label for="cod" class="col-lg-4 control-label">{{ $question->description }}*</label>
                          <div class="col-lg-6">
                            <div id="question{{ $question->id }}" class="score"></div>
                            <div id="questionsValid{{ $question->id }}"></div>
                          </div>
                        </div>
                      @endforeach

                      <div class="form-group">
                        <label for="cod" class="col-lg-4 control-label">Comentarios adicionales</label>
                        <div class="col-lg-6">
                          <textarea class="form-control" rows="3" id="comment" maxlength="500" name="comments"></textarea>
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


@section('javascript')
  {!! Html::script('vendors/raty-master/lib/jquery.raty.js') !!}

  <script type="text/javascript">
    $(document).ready(function(){
      $('.score').raty({
        starType: 'i',
        scoreName: function(){
        return $(this).attr('id');
      }});

      $("#form-score").submit(function(e){

        var valid = false;

        @foreach($questions as $question)

          $("#questionsValid{{ $question->id }}").html("");
          $("#questionsValidGroup{{ $question->id }}").removeClass("has-error");

          if($("[name='question{{ $question->id }}']").val() == ""){

            $("#questionsValidGroup{{ $question->id }}").addClass("has-error");

            $("#questionsValid{{ $question->id }}").html('<div class="help-block error"><ul class="list-unstyled"><li>Debe seleccionar por lo menos una estrella para realizar la calificaci\u00f3n.</li></ul></div>');

            valid = true;
          }
          
        @endforeach

        if(valid){
          e.preventDefault();
          return false;
        }

        if(confirm("Esta seguro de realizar la calificaci\u00f3n?")){
          return true;
        }else{
          return false;
        }

      });

    });
  </script>
@endsection
