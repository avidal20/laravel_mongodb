@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Panel de administraci&oacute;n</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><a href="#">Categor&iacute;as</a></h3>
              <p>Administrar categor&iacute;as</p>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="ion-android-folder-open"></i>
                </a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <!-- small box -->
          <a href="{{route('features')}}">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>Caracter&iacute;sticas</h3>
                <p>Caracter&iacute;sticas de producto</p>
              </div>
              <div class="icon">
                <i class="ion-ios-gear"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Productos</h3>
              <p>Administrar productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
@endsection
