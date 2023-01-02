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
                    <a href=""> Pegawai </a>
                </li>
                <li class="breadcrumb-current-item"> Data Pegawai</li>
            </ol>
        </div>
    </header>


    <!-- -------------- Content -------------- -->
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">

            <!-- -------------- Products Status Table -------------- -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title hidden-xs">List Pegawai</span><br />
                        </div><br />
                        @if(Session::has('failed'))
                            <div class="alert alert-danger">
                                {{ Session::get('failed') }}
                            </div>
                        @endif
                        <div class="panel-menu allcp-form theme-primary mtn">
                        <div class="row">
                            {!! Form::open() !!}
                            <div class="col-md-3">
                                <input type="text" class="field form-control" placeholder="query string" style="height:40px" value="{{$string}}" name="string">
                            </div>
                            <div class="col-md-3">
                                <label class="field select">
                                    {!! Form::select('column', getEmployeeDropDown(),$column) !!}
                                    <i class="arrow double"></i>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" value="Search" name="button" class="btn btn-primary">
                            </div>

                            <div class="col-md-2">
                                <input type="submit" value="Export" name="button" class="btn btn-success">
                            </div>
                            {!! Form::close() !!}
                            <div class="col-md-2">
                                <a href="/employee-manager" >
                                    <input type="submit" value="Reset" class="btn btn-warning"></a>
                            </div>
                        </div>
                            </div>

                        <div class="panel-body pn">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('flash_message') }}
                                    </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table allcp-form theme-warning tc-checkbox-1 fs13">
                                    <thead>
                                    <tr class="bg-light">
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Id Pegawai</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Absen</th>
                                        <th class="text-center">Divisi</th>
                                        <th class="text-center">Tanggal Bergabung</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">No Whatsapp</th>
                                        <th class="text-center">Jabatan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i =0;?>
                                    @foreach($emps as $emp)
                                    <tr>
                                        <td class="text-center">{{$i+=1}}</td>
                                        <td class="text-center">{{$emp->employee['code']}}</td>
                                        <td class="text-center">{{$emp->name}}</td>
                                        <td class="text-center">{{convertStatusBack($emp->employee['status'])}}</td>
                                        <td class="text-center">{{isset($emp->role->role->name)?$emp->role->role->name:''}}</td>
                                        <td class="text-center">{{date('Y-m-d', strtotime($emp->employee['date_of_joining']))}}</td>
                                        <td class="text-center">{{$emp->employee['current_address']}}</td>
                                        <td class="text-center">{{$emp->employee['number']}}</td>
                                        <td class="text-center">{{$emp->employee['department']}}</td>
                                        <td class="text-center">
                                            <div class="btn-group text-right">
                                                <button type="button"
                                                        class="btn btn-info br2 btn-xs fs12 dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"> Action
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="/edit-emp/{{$emp->id}}">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="/delete-emp/{{$emp->id}}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr><td colspan="10">
                                            {!! $emps->render() !!}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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