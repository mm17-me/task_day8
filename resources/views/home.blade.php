@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <script>
                            // Add a delay of 2000 milliseconds (2 seconds) before redirecting
                            setTimeout(function() {
                                window.location.href = "{{ route('homePage') }}";
                            }, 2000);
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
