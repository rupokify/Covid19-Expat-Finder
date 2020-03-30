@extends('layouts.master')

@section('style')
    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials._message')

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">
                    {{ $title }}
                </h4>

                <table class="table" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Quarantine Status</th>
                        <th scope="col">Case Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($expats as $expat)
                        <tr>
                            <td>{{ $expat->full_name }}</td>
                            <td>{{ $expat->location }}</td>
                            <td>
                            <span class="badge badge-{{ $expat->quarantine_label }}">
                                {{ $expat->quarantine_status_text }}
                            </span>
                            </td>
                            <td>{{ $expat->case_status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
