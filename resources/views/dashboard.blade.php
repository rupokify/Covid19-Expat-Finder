@extends('layouts.master')
@section('content')
    <div class="alert alert-danger">
        Your profile is not verified.
        <a href="{{ route('verification') }}">
            Please upload a valid identification document to verify your profile now.
        </a>
    </div>

    <div class="alert alert-success">
        <a href="{{ route('expats.create') }}">
            Report an expat case of your area.
        </a>
    </div>

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item w-100">
            <div class="row gap-20">
                <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Total Expats</h6>
                        </div>

                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span id="sparklinedash"></span>
                                </div>

                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">
                                        +10%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Quarantined Expats</h6>
                        </div>

                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span id="sparklinedash2"></span>
                                </div>

                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Non-quarantined Expats</h6>
                        </div>

                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span id="sparklinedash3"></span>
                                </div>

                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">
                                        ~12%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Pending Expats</h6>
                        </div>

                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span id="sparklinedash4"></span>
                                </div>

                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">
                                        33%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="masonry-item col-12">
            <div class="bd bgc-white">
                <div class="peers fxw-nw@lg+ ai-s">
                    <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                        <div class="layers">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Expats Overview</h6></div>
                            <div class="layer w-100">
                                <div id="world-map-marker"></div>
                            </div>
                        </div>
                    </div>

                    <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                        <div class="layers">
                            <div class="layer w-100">
                                <div class="layers">
                                    <div class="layer w-100">
                                        <h5 class="mB-5">300k</h5>
                                        <small class="fw-600 c-grey-700">
                                            Total Expats
                                        </small>
                                        <span class="pull-right c-grey-600 fsz-sm">50%</span>
                                        <div class="progress mT-10">
                                            <div class="progress-bar bgc-deep-purple-500" role="progressbar"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:50%"><span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layer w-100 mT-15">
                                        <h5 class="mB-5">10k</h5>
                                        <small class="fw-600 c-grey-700">
                                            Quarantined Expats
                                        </small>
                                        <span class="pull-right c-grey-600 fsz-sm">50%</span>
                                        <div class="progress mT-10">
                                            <div class="progress-bar bgc-green-500" role="progressbar"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:50%"><span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layer w-100 mT-15">
                                        <h5 class="mB-5">290k</h5>
                                        <small class="fw-600 c-grey-700">
                                            Non-quarantined Expats
                                        </small>
                                        <span class="pull-right c-grey-600 fsz-sm">50%</span>
                                        <div class="progress mT-10">
                                            <div class="progress-bar bgc-red-500" role="progressbar"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:50%"><span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layer w-100 mT-15">
                                        <h5 class="mB-5">50k</h5>
                                        <small class="fw-600 c-grey-700">
                                            Pending Expats
                                        </small>
                                        <span class="pull-right c-grey-600 fsz-sm">50%</span>
                                        <div class="progress mT-10">
                                            <div class="progress-bar bgc-yellow-500" role="progressbar"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:50%"><span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
