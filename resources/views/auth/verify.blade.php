@extends('layouts.master')

@section('content')

    @if (session('resent'))
        <div class="alert alert-success">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <div class="alert alert-info">
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
{{--        <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.--}}
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Request Another</button>
        </form>
    </div>
@stop
