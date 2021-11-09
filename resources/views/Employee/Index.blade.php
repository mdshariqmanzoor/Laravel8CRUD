@extends('layouts/master')

@section('data')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody>

    @foreach($emp as $e)

    <tr>
      <th scope="row">{{ $e['id'] }}</th>
      <td>{{ $e['name'] }}</td>
      <td>{{ $e['age'] }}</td>
      <td>{{ $e['gender'] }}</td>
      <td>{{ $e['designation'] }}</td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection