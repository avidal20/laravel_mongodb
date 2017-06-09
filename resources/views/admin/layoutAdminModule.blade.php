@include('admin.header')

<div class="right_col" role="main">

	@if(isset($modData['modMenu']))
	  <div class="x_content">
	    @foreach($modData['modMenu'] as $key => $value)
	    <a
	      href="@if(isset($value['href'])){{$value['href']}}@else#@endif"
	      class="btn btn-success @if(isset($value['class'])){{$value['class']}}@endif"
	      @if(isset($value['id']))id="{{ $value['id'] }}"@endif

	      @if(isset($value['atribute']))
	        @foreach($value['atribute'] as $key1 => $value1)
	          {{$key1}}="{{$value1}}"
	        @endforeach
	      @endif

	      >{{ $key }}</a>
	    @endforeach
	  </div>
	@endif

	@if(isset($modData['modTitle']))
		<div class="page-title">
		  <div class="title_left">
		      <h1 class="titlePrincipal">{{ $modData['modTitle'] }}</h1>
		  </div>
		</div>
	@endif

  	@include('helpers.alerts')

    <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12">

			@if(isset($modData['modBreadCrumb']))
				<ol class="breadcrumb">
				    @foreach($modData['modBreadCrumb'] as $key => $value)
				      @if(isset($value['href']))
				        <li><a href="@if(isset($value['href'])){{$value['href']}}@else#@endif">{{ $key }}</a></li>
				      @elseif(isset($value['active']) && $value['active'])
				        <li class="active">{{ $key }}</li>
				      @else
				        <li>{{ $key }}</li>
				      @endif
				    @endforeach
				</ol>
			@endif

           <div class="x_panel">

			@if(isset($modData['modTitleAction']))
				<div class="x_title">
					<h2>{{ $modData['modTitleAction'] }}</h2>
					<div class="clearfix"></div>
				</div>
			@endif
             
	         <div class="x_content">
				@yield('content')
	         </div>

           </div>
        </div>
    </div>
</div>
@include('admin.footer')