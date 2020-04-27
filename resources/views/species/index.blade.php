@extends('layouts.master')
 
@section('content')

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($species as $specimen)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $specimen->species_type }}</td>
            <td>{{ $specimen->scientific_name }}</td>
            <td>{{ $specimen->conservation_status }}</td>
        </tr>
        @endforeach
    </table>

@endsection