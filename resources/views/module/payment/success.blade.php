@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="center-block">
            <h1 style="text-align: center; padding-top: 100px; color:green">Transaction Success, {{ $request }}</h1>
            {{--<div class="text-center">--}}
                {{--<a href="{{route('payment.success')}}" class="btn btn-success" role="button" style="text-align: center">--}}
                    {{--<h2>Return to Home</h2>--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection