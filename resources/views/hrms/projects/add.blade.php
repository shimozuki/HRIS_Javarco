@extends('hrms.layouts.base')

@section('content')
    <!-- START CONTENT -->
    <div class="content">
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="/dashboard">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-active">
                        <a href="/dashboard"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href=""> Proyek </a>
                    </li>
                    <li class="breadcrumb-current-item"> Tambah Proyek</li>
                </ol>
            </div>
        </header>
        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">
            <!-- -------------- Column Center -------------- -->
            <div class="chute-affix" data-spy="affix" data-offset-top="200">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title hidden-xs"> Tambah Proyek </span>
                                </div>

                                <div class="panel-body pn">
                                    <div class="table-responsive">
                                        <div class="panel-body p25 pb10">
                                            @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                    {{Session::get('flash_message')}}
                                                </div>
                                            @endif
                                            {!! Form::open(['class' => 'form-horizontal']) !!}

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Judul Proyek </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="name" id="input002"
                                                           class="select2-single form-control" placeholder="Name"
                                                           required>
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"> Detail Proyek </label>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="description"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nomor Proyek </label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="code" id="input002"
                                                               class="select2-single form-control" placeholder="Proyek Code"
                                                               required>
                                                    </div>
                                                </div>

                                            <!-- <div class="form-group">
                                                <label class="col-md-3 control-label"> Agen </label>
                                                <div class="col-md-6">
                                                    <select class="selectpicker form-control" data-done-button="true"
                                                            name="client_id" required>
                                                        <option value="" selected>Select One</option>
                                                        @foreach($model->clients as $client)
                                                            <option value="{{$client->id}}">{{$client->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-2">

                                                    <input type="submit" class="btn btn-bordered btn-info btn-block"
                                                           value="Save">
                                                </div>
                                                <div class="col-md-2"><a href="/Tambah-Proyek">
                                                        <input type="button"
                                                               class="btn btn-bordered btn-success btn-block"
                                                               value="Reset"></a>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection