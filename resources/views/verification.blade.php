@extends('layouts.master')
@section('content')
    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Verification</h6>

            <div class="mT-30">
                <form action="{{ route('verification') }}" method="post" class="container" id="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="id_document">Upload Identification Document</label>
                            <input name="id_document" id="id_document" type="file" class="form-control" required>
                            <small id="id_document_help" class="form-text text-muted">
                                We'll never share your information with anyone else.
                            </small>
                            <div class="invalid-feedback">Please provide a valid photo identification document.</div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Upload Verification ID
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
