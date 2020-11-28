@extends('interface.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit vehicle</h2>
            </div>
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
  
    <form action="{{ route('vehicle.update',$vehicles->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Make:</strong>
                    <input type="text" name="make" value="{{ $vehicles->make }}" class="form-control" placeholder="make">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Model:</strong>
                     <input type="text" name="model" value="{{ $vehicles->model }}" class="form-control" placeholder="model">
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>license_number:</strong>
                     <input type="text" name="license_number" value="{{ $vehicles->license_number }}" class="form-control" placeholder="license_number">
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>license_expiry:</strong>
                     <input type="text" name="license_expiry" value="{{ $vehicles->license_expiry }}" class="form-control" placeholder="license_expiry">
                 </div>
             </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection