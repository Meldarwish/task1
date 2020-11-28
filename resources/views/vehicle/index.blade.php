@extends('interface.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicle.create') }}"> Create New vehicle</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Make</th>
            <th>Model</th>
            <th>license_number</th>
            <th>license_expiry</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->make }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->license_number }}</td>
            <td>{{ $vehicle->license_expiry }}</td>
            <td>
                <form action="{{ route('vehicle.destroy',$vehicle->id) }}" method="POST">
   
                  <!--  <a class="btn btn-info" href="{{ route('vehicle.show',$vehicle->id) }}">Show</a>-->
    
                    <a class="btn btn-primary" href="{{ route('vehicle.edit',$vehicle->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vehicles->links() !!}
      
@endsection