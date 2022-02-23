@extends('layouts.default')
@section('content')
	
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">WELCOME! USERID {{$user['id']}}</h5>
        		@if (session('status'))
				    <div class="alert alert-success alert-dismissible fade show" role="alert">
					  {{ session('status') }}
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				@endif
				<form method="POST" action="/User/update">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$user['id']}}">
					<div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="input" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{$user['name']}}">
					    <small id="emailHelp" class="form-text text-muted">anything</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user['email']}}">
					    <small id="emailHelp" class="form-text text-muted">anything</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary">Update</button>
				</form>
				<a href="/Login/logout">logout</a>
          </div>
        </div>
      </div>
    </div>
</div>
@stop