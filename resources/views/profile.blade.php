@extends('layouts.master')
@section('content')
    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Profile</h6>

            <div class="mT-30">
                @include('partials._message')

                <form action="{{ route('profile') }}" method="post" class="container" id="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="full_name">Full Name</label>
                            <input name="full_name" id="full_name" type="text" class="form-control" value="{{ $user->full_name }}" required>
                            <div class="invalid-feedback">Please provide your full name.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="text" class="form-control" value="{{ $user->email }}" readonly>
                            <div class="invalid-feedback">Please provide your valid email address.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="location">Location</label>
                            <input name="location" id="location" type="text" class="form-control" value="{{ $user->location }}" required>
                            <small id="location_help" class="form-text text-muted">
                                We'll never share your location with anyone else.
                            </small>
                            <div class="invalid-feedback">Please provide your location.</div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Update Profile
                    </button>
                </form>
                <script>
                    !function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            const e = document.getElementById('needs-validation');
                            e.addEventListener('submit', function(t) {
                                !1 === e.checkValidity() &&
                                (t.preventDefault(), t.stopPropagation()), e.classList.add('was-validated');
                            }, !1);
                        }, !1);
                    }();
                </script>
            </div>
        </div>
    </div>
@endsection
