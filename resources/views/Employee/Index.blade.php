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
      <th scope="col" colspan="2">Your Actions</th>
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

      <td><a href="employee/{{ $e['id'] }}/edit" class="btn btn-outline-secondary btn-sm">Edit</a></td>
      <form action="{{ route('employee.destroy', $e['id']) }}" method="POST" onsubmit="return confirmDelete()">
        @csrf
        @method('DELETE')
        <td><input type="submit" class="btn btn-outline-danger btn-sm" name="submit" id="submit"></td>
      </form>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection