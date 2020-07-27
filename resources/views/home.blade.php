@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
           <h1> Welcome to dashboard</h1>
           {{-- <p>Current Sign In {{ auth()->user()->current_sign_in_at->diffForHumans() }}</p>
           <p>Last Sign In {{ auth()->user()->last_sign_in_at->diffForHumans() }}</p> --}}
           
        </div>
    </div>
</div>
@endsection
