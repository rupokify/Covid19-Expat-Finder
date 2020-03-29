@extends('layouts.master')
@section('content')
    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Profile</h6>

            <div class="mT-30">
                <form action="{{ route('profile') }}" method="post" class="container" id="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="full_name">Full Name</label>
                            <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Your Full Name" required>
                            <div class="invalid-feedback">Please provide your full name.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="mobile_number">Mobile Number</label>
                            <input name="mobile_number" id="mobile_number" type="text" class="form-control" placeholder="+880" required>
                            <small id="mobile_number_help" class="form-text text-muted">
                                We'll never share your mobile number with anyone else.
                            </small>
                            <div class="invalid-feedback">Please provide your valid mobile number.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="location">Location</label>
                            <input name="location" id="location" type="text" class="form-control" placeholder="Your Location" required>
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
