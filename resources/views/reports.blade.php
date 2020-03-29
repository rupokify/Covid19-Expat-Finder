@extends('layouts.master')

@section('content')
    @include('partials._message')

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <form action="{{ route('expats.index') }}" method="get">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="location">Location</label>
                            <input name="location" type="text" class="form-control" id="location">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option value="">Choose...</option>
                                <option value="1">Quarantined</option>
                                <option value="0">Not Quarantined</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="postal_code">Postal Code</label>
                            <input name="postal_code" type="text" class="form-control" id="postal_code">
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
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
