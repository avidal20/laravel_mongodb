@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <p>
            <a class="btn btn-success " href="{{route('features')}}">@lang('buttons.back')</a>
        </p>
        <h1>@lang('modules.mod_features_title')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('labels.name')</th>
                                <th>@lang('labels.sizes')</th>
                                <th>@lang('labels.state')</th>
                                <th>@lang('labels.edit')</th>
                                <th>@lang('labels.delete')</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            
        </div>
@endsection