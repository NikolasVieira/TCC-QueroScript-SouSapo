<<<<<<< Updated upstream
@extends('layouts.app')

@section('content')

html da hq aqui
=======
@extends('layouts.hqtemplate')

@section('content')

<div id="hq_container" class="container">
    <div class="row">
        <div id="leftpag" class="col-sm">
            <img id="hqleftpag"  src="{{ asset('img/hq.jpg') }}" class="img-fluid">
        </div>
        <div id="rightpag" class="col-sm">
            <img id="hqrightpag" src="{{ asset('img/hq.jpg') }}" class="img-fluid">
        </div>
    </div>
</div>
>>>>>>> Stashed changes

@endsection
