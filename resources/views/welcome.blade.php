@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
<div class="hero min-h-screen ">
  <div class="hero-content flex-col lg:flex-row">
    <img src="https://cdn.medcom.id/dynamic/content/2016/08/03/564190/5ou8yCcBGe.jpg?w=480" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Welcome to 1st Symphony!</h1>
      <p class="py-6">We are ready to <span class="underline">Tune in with you.</span></p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
@endsection
