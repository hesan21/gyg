@extends('layouts.mylayout')

@section('title')
    Players Detail
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 4 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Number of Players</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center" ><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('rules-details-back')}}">No of Rules</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('3DVisual-back')}}">3D Visualization</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center active" id="active"><a href="#">No of Players</a></li>
                    {{-- <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('opponents')}}">Computer Opponents</a></li> --}}
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('game-options')}}">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>

                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('game-options')}}" method="POST" id="myform" class="col-11 col-sm-11 offset-md-1 mb-4">
                    @csrf
                    <div class="form-label-group">
                        <input type="number" id="inputPlayers" name="players" value="{{isset($details['players']) ? $details['players'] : ''}}" class="form-control" placeholder="Number of Players" required>
                        <label for="inputPlayers">Number of Players</label>
                    </div>
                    <div class="footer d-inline">
                        <a class="btn btn-primary col-2 float-left" href="{{route('rules-details-back')}}" id="btn-prev">Previous</a>
                        <button class="btn btn-primary col-2 float-right" id="btn-next" type="submit">Next</button>
                    </div>
                </form>
            </div>

    </div>
@endsection