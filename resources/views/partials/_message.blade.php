@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('message') }}
    </div>
@endif

@if(session('verified'))
    <div class="alert alert-success">
        Your account is verified now. Please login to start using our service.
    </div>
@endif
