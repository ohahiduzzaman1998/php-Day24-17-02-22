@extends('master')

@section('title')
    BITM page
@endsection

@section('body')
    <h1>{{$a}}</h1>
    <h1>{{$shehon}}</h1>
    <h1>{{$nahid[3]}}</h1>



    @foreach($nahid as $key=> $value)
        @if($key >= 3 && $key <=5)
            <h4>INDEX NO : {{$key}}  and value : {{ $value }}</h4>
        @else
            <h4>out of range..</h4>
        @endif
    @endforeach


    @foreach($array as $key=> $value)
{{--        <span>{{$value['name']}}</span><br/>--}}
    @foreach($value as $key=>$item)
        <span>{{$key}}={{$item}}</span>
    @endforeach
        <br/>
    @endforeach




@endsection
