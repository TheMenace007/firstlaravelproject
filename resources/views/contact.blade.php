@extends('layouts.app')

@section('content')

    <h1>Contact Page</h1>

    @if(count(array($people)))

        <ul>

            @foreach($people as $person)

                <li>{{$person}}</li>

            @endforeach

        </ul>

    @endif

@stop

@section('footer')

    {{--<script>

        alert('hey there Menace!')

    </script>--}}

@stop
