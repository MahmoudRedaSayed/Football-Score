@extends('Layouts.main')
@section('content')
<div class="container-lg " style="margin: 0 auto">
    <div class="row mt-5 mx-4">
        @if(!is_null($content))
        @foreach($content["data"]  as $match)
        <div class="col-lg-5 col-md-4 col-sm-12 text-center mb-5 mx-auto">
            <div class="card" >
            <img/>
            <div class="card-body">
                <div class="card-title">{{$match["teams"]["home"]["name"]}} <img style="width:30px" src="{{$match['teams']['home']['img']}}"/> @if(isset($match["scores"]["home_score"]) && isset($match["scores"]["away_score"])) {{$match["scores"]["home_score"]}} -  {{$match["scores"]["away_score"]}} @endif <img style="width:30px" src="{{$match['teams']['away']['img']}}"/> {{$match["teams"]["away"]["name"]}}</div>
                <div class="card-text"> {{$match["time"]["time"]}} {{$match["time"]["timezone"]}}  </div>
                <div class="card-text"> {{$match["status_name"]}} </div>
            </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="text-center"> There is no matches yet</div>
        @endif
    </div>
</div>
<div>
</div>
@endsection
