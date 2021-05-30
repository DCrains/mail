@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('failure'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failure') }}
                        </div>
                    @endif
                    <h1> Рассылка </h1>  
                    <form action="{{url('/newsletter')}} " method="post">
                    {{csrf_field()}}
                   
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" class="form-control">
                    </div>    
                    <div class="form-group">
                    <input type="submit" class="form-control">
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
