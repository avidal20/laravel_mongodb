@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <p>
            <a class="btn btn-success " href="{{route('home')}}">@lang('buttons.back')</a>
        </p>
        <h1>@lang('modules.mod_features_title')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        @foreach ($features as $feature)
            <div class="col-md-3">
                <a href="{{route('features.'.$feature->route_name)}}">{{$feature->name}}</a>
            </div>
        @endforeach
        </div>
@endsection