@extends('layouts.mylayout')

@section('title')
    Rules
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 3 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Number of Rules</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center" ><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center active" id="active"><a href="#">No of Rules</a></li>
                    {{-- <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('3DVisual')}}">3D Visualization</a></li> --}}
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('players-details')}}">No of Players</a></li>
                    {{-- <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('opponents')}}">Computer Opponents</a></li> --}}
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('game-options')}}">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>

                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('players-details')}}" method="POST" id="myform" class="col-11 col-sm-11 offset-md-1 mb-4">
                    @csrf
                    <div class="form-label-group">
                        <input type="number" id="inputRules" name="rules" class="form-control" value="{{isset($details['rules']) ? $details['rules'] : ''}}" placeholder="Number of Rules" required>
                        <label for="inputRules">Number of Rules</label>
                    </div>
                    <div class="footer d-inline">
                        <a class="btn btn-primary col-2 float-left" href="{{route('game-details-back')}}" id="btn-prev">Previous</a>
                        <button class="btn btn-primary col-2 float-right" id="btn-next" type="submit">Next</button>
                    </div>
                </form>
            </div>

    </div>
@endsection