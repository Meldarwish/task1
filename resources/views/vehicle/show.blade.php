@extends('interface.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show vehicle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicle.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>make</th>
                <th>model</th>
                <th>license_number</th>
                <th>license_expiry</th>

            </tr>

                <tr>
                    <td>{{$vehicles->id }}</td>
                    <td>{{ $vehicles->make }}</td>
                    <td>{{ $vehicles->model }}</td>
                    <td>{{ $vehicles->license_number }}</td>
                    <td>{{ $vehicles->license_expiry }}</td>


                </tr>

        </table>
    </div>
@endsection