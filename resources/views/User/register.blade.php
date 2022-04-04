@extends('layouts.app')

@section('title')
Register
@endsection


@section('content')
@include('inc.authorerrors')
<h1 class="text-center">Register</h1>
<form class="my-4" action="{{route('handleregister')}}" method="post" enctype="multipart/form-data" style="width:40%; margin-left: auto;margin-right: auto;">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <h6>Role<h3>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="teacher">
  <label class="form-check-label" for="inlineRadio1" style="font-size:15px">Teacher</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="student">
  <label class="form-check-label" for="inlineRadio2" style="font-size:15px">Student</label>
</div>
<div class="mt-3">
  <h6 for="formFile" class="form-label"> Image</h6>
  <input name="img" class="form-control" type="file" id="formFile">
</div>
  <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-plus"></i> Register</button>
</form>
@endsection
