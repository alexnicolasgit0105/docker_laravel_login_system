@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-12 col-lg-8 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
				<form method="POST" action="/User/register">
					{{ csrf_field() }}
					<div class="form-group">
					    <label for="name">Name</label>
					    <input type="input" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" required>
					    <small id="emailHelp" class="form-text text-muted">anything</small>
					  </div>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
					    <small id="emailHelp" class="form-text text-muted">anything</small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" name="password" placeholder="Password" required>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
				</form>

			<a href="/">Login</a>
          </div>
        </div>
      </div>
    </div>
</div>
@stop