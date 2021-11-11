@extends('layouts/master')

@section('data')


<div class="col-lg-6 col-md-6 col-sm-12 mx-auto">


<form action="{{ route('employee.update', $emp->id) }}" method="POST">
  @csrf
  @method('PATCH')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $emp->name }}" placeholder="Enter Your Name">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" id="age" value="{{ $emp->age }}" placeholder="Enter Your Age">
    @error('age')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="gender">Gender select</label>
    <select class="form-control" name="gender" id="gender">
      <option value="">Select</option>
      <option value="male" @if($emp->gender=="male") selected="selected" @endif >Male</option>
      <option value="female" @if($emp->gender=="female") selected @endif >Female</option>
    </select>
    @error('gender')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" name="designation" id="designation" value="{{ $emp->designation }}" placeholder="Enter Your Designation">
    @error('designation')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="submit" id="submit">
  </div>
</form>
</div>


@endsection