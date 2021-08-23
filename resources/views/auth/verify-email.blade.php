@extends('templates.main')

@section('content')
    <h1>Verfiy e-mail address</h1>
    <p>Must verify your email address to access this page</p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="button" class="btn btn-primary">Resend verification email</button>
    </form>
@endsection
