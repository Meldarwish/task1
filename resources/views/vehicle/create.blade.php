@extends('interface.master')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('vehicle.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('vehicle.store') }}" method="POST">
    @csrf
  

    <div class="row">
        <div class="col-lg-12">
            <section class="box has-border-left-3">
                <header class="panel_header gradient-blue">
                    <h2 class="title pull-left w-text">Add new vehicle</h2>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="form-container mt-20 no-padding-right no-padding-left over-h">

                            <div class=" col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Make</label>
                                                <span class="desc">e.g.  "Honda"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="text" class="form-control"  name="make">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">model</label>
                                                <span class="desc"> e.g.  "civic"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="text" class="form-control"  name="model">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">license_number</label>
                                                <span class="desc">e.g. "1548156486"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="text" class="form-control" name="license_number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">license_expiry</label>
                                                <span class="desc">e.g. "12/1/2021"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="date" class="form-control"  name="license_expiry">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="pull-right mt-30 mr-10">
                                            <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Add</button>

                                        </div>

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
   
</form>
@endsection