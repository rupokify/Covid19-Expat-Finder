@extends('layouts.master')

@section('content')
    @include('partials._message')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('expats.index') }}" method="get">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="search"></label>
                        <input type="text" name="search" class="form-control" id="search" name="search" placeholder="Search">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">
                    Expats List
                </h4>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Quarantine Status</th>
                        <th scope="col">Case Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Mirpur DOHS</td>
                        <td><span class="badge badge-danger">Not Quarantined</span></td>
                        <td><span class="badge badge-danger">Report Sent to LE</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
