@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="center-block">
            <h1 style="text-align: center; padding-top: 100px; color:green">Transaction Success</h1>
            <div class="text-center">
                <a href="{{route('payment.end')}}" class="btn btn-success" role="button" style="text-align: center">
                    <h2>Return to Home</h2>
                    {{ dd($request) }}
                </a>
            </div>
        </div>
    </div>
@endsection