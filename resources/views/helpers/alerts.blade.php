@if (count($errors) > 0)
    <div class="x_content bs-example-popovers">
         <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- Mensajes de exito/error al guardar o modificar informacion de la base de datos --}}

@if (Session::has('success'))
    <div class="x_content bs-example-popovers">
         <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            @if(is_array(Session('success')))
                <ul>
                    @foreach (Session('success') as $msg)
                        <li>{{ $msg }}</li>
                    @endforeach
                </ul>
            @else
                 <p>{{ Session('success') }}</p>
            @endif
        </div>
    </div>
@endif

@if (Session::has('error'))
    <div class="x_content bs-example-popovers">
         <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            @if(is_array(Session('error')))
                <ul>
                    @foreach (Session('error') as $msg)
                        <li>{{ $msg }}</li>
                    @endforeach
                </ul>
            @else
                <p>{{ Session('error') }}</p>
            @endif
        </div>
    </div>
@endif
