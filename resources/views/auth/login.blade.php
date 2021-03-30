@extends('layouts.app')

@section('main-content')
<section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-8 col-xl-6">
        <div class="row">
          <div class="col text-center">
            <h1>Login</h1>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
@enderror
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
          </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row align-items-center">
          <div class="col mt-4">
            <input type="email" name="email" class="form-control" placeholder="nfebe@smis.com">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="password" name="password" class="form-control" placeholder="Enter password">
          </div>
        </div>
 

        <div class="row justify-content-start mt-4">
          <div class="col">
            <button class="btn btn-primary mt-4">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection