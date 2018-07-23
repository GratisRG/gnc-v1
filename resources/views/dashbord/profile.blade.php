@extends('layouts.dashbord_app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    <span style="font-size: 3em; color: Tomato;">
                     <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span style="font-size: 3em; color: Tomato;">
                      <i class="fas fa-stroopwafel"></i>
                    </span>

                    <span style="font-size: 48px; color: Dodgerblue;">
                      <i class="fas fa-stroopwafel"></i>
                    </span>

                    <span style="font-size: 3rem;">
                      <span style="color: Mediumslateblue;">
                      <i class="fas fa-stroopwafel"></i>
                      </span>
                    </span>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Profile
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
