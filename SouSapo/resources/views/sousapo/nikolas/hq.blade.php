@extends('layouts.hqcontrols')
@extends('layouts.app')

@section('content')

<div id="hq_container">
    <div class="row justify-content-center">
        <div id="leftpag">
            <img id="hq" src="{{ asset('img/hq.jpg') }}" alt="hq" />
        </div>
        <div id="rightpag">
            <img id="hq" src="{{ asset('img/hq.jpg') }}" alt="hq" />
        </div>
    </div>
</div>

@endsection
