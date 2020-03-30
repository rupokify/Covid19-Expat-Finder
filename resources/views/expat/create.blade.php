@extends('layouts.master')

@section('content')
    @include('partials._message')

    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Report An Expat</h6>

            <div class="mT-30">
                <form action="{{ route('expats.create') }}" method="post" class="container" id="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="full_name">Expat Name</label>
                            <input name="full_name" id="full_name" type="text" class="form-control" required>
                            <div class="invalid-feedback">Please provide the full name of the expat.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="mobile_number">Mobile Number</label>
                            <input name="mobile_number" id="mobile_number" type="text" class="form-control" placeholder="+880">
                            <small id="mobile_number_help" class="form-text text-muted">
                                Way of communication with the expat.
                            </small>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" class="form-control">
                            <small id="mobile_number_help" class="form-text text-muted">
                                Way of communication with the expat.
                            </small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="location">Location</label>
                            <input name="location" id="location" type="text" class="form-control" required>
                            <small id="mobile_number_help" class="form-text text-muted">
                                Please be specific and provide as much data as you can.
                            </small>
                            <div class="invalid-feedback">Please provide the location of the expat.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="house">House #</label>
                            <input type="text" name="location_house" class="form-control" id="house">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="road">Road #</label>
                            <input type="text" name="location_road" class="form-control" id="road">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="area">Area</label>
                            <input type="text" name="location_area" class="form-control" id="area">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" name="location_postal_code" class="form-control" id="postal_code">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="age">Approximate Age</label>
                            <input type="number" name="age" class="form-control" id="age">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="country">Expat Country</label>
                            <input type="text" name="country" class="form-control" id="country">
                            <small id="country_help" class="form-text text-muted">
                                Please mention which country the expat came from.
                            </small>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="fw-500" for="date_of_arrival">Possible Date of Arrival</label>
                            <div class="timepicker-input input-icon form-group">
                                <div class="input-group">
                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                        <i class="ti-calendar"></i>
                                    </div>
                                    <input name="date_of_arrival" id="date_of_arrival" data-date-format="yyyy-mm-dd" type="text" class="form-control bdc-grey-200 start-date" data-provide="datepicker">
                                    <small id="date_of_arrival_help" class="form-text text-muted">
                                        Please mention possible arrival date of the expat.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-form-legend col-sm-2" for="status">Status</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="quarantine_status" class="form-check-input" type="radio" id="radios1" value="1">
                                        Quarantined
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="quarantine_status" class="form-check-input" type="radio" id="radios2" value="0">
                                        Not Quarantined
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <button class="btn btn-primary" type="submit">
                        Report
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
