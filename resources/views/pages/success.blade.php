@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
 <!-- Navbar-->

    <div class="section-success d-flex align-items-center">
      <div class="col text-center mt-5">
        <img src="{{ url('frontend/images/ic_email.png') }}" alt=""/>
        <h1>Yay! Success</h1>
        <p>
          We've sent you email for trip instruction
          <br/>
          please read it as well
        </p>
        <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>

@endsection
