@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
          	@if (session('status'))
					    <div class="alert alert-success alert-dismissible fade show" role="alert">
							  {{ session('status') }}
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						@endif
          	@if (session('error'))
					    <div class="alert alert-danger alert-dismissible fade show" role="alert">
							  {{ session('error') }}
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						@endif
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
			<form method="POST" action="/Login/auth">
				{{ csrf_field() }}
				<div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" placeholder="Password" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

			<a href="/Login/register">register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 @stop