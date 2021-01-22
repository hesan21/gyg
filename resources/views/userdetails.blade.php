@extends('layouts.mylayout')

@section('title')
    User Details
@endsection

@section('content')
{{-- {{dd($details)}} --}}
    <div class="container my-3">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 1 Of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>User Details</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center active" id="active"><a href="{{route('page-one')}}">User Details</a></li>
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('game-details')}}">Basic Game Details</a> </li>
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('rules-details')}}">No of Rules</a></li>
                    {{-- <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('3DVisual')}}">3D Visualization</a></li> --}}
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('players-details')}}">No of Players</a></li>
                    {{-- <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('opponents')}}">Computer Opponents</a></li> --}}
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('game-options')}}">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn text-primary disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('game-details')}}" id="myform" method="POST" class="col-11 col-sm-11 offset-md-1">
                    @csrf
                    <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control" name="name" placeholder="Name" value="{{isset($details['name']) ? $details['name'] : ''}}" required>
                        <label for="inputName">Name</label>
                    </div>
                
                    <div class="myformgroup my-2" style="font-family:'ZCOOL QingKe HuangYou'">
                        <label for="inputGender">Gender: </label><br>
                        <input type="radio" id="inputGender" name="gender" value="Male" placeholder="Gender" {{(isset($details['gender']) && $details['gender'] == 'Male') ? 'checked' : ''}} required>Male<br> 
                        <input type="radio" id="inputGender" name="gender" value="FeMale" placeholder="Gender" {{(isset($details['gender']) && $details['gender'] == 'FeMale') ? 'checked' : ''}}  required>FeMale
                    </div>

                    <div class="form-label-group">
                        <input type="text" id="inputProfession" class="form-control" name="profession" value="{{isset($details['profession']) ? $details['profession'] : ''}}" placeholder="Profession" required>
                        <label for="inputProfession">Profession</label>
                    </div>
                    <div class="form-label-group">
                        <input type="number" id="inputAge" name="age" class="form-control" placeholder="Age" value="{{isset($details['age']) ? $details['age'] : ''}}" required>
                        <label for="inputAge">Age</label>
                    </div>
                    <div class="form-label-group">
                        <input type="tel" id="inputNumber" name="num" class="form-control" value="{{isset($details['num']) ? $details['num'] : ''}}" placeholder="Contact Number (Optional)">
                        <label for="inputNumber">Contact Number(optional)</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" value="{{isset($details['email']) ? $details['email'] : ''}}" placeholder="Email(optional)">
                        <label for="inputEmail">Email(optional)</label>
                    </div>
                
                    <button class="btn btn-primary col-2 float-right mb-3" type="submit">Next</button>
                </form>
            </div>

    </div>
@endsection