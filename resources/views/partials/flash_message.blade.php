@if (session('signup'))
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="alert alert-success m-b-lg" role="alert">
                {!! session('signup') !!}
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="alert alert-danger m-b-lg" role="alert">
                {!! session('error') !!}
            </div>
        </div>
    </div>
@endif