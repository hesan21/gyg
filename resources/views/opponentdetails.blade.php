@extends('layouts.mylayout')

@section('title')
    Computer Opponent
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 6 Of 10</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Computer Opponent</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center" ><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('rules-details-back')}}">No of Rules</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('3DVisual-back')}}">3D Visualization</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center"><a class="text-success" href="{{route('players-details-back')}}">No of Players</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center active" id="active"><a href="#">Computer Opponents</a></li> --}}
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('game-options')}}">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('game-options')}}" id="formwithsection" method="POST" class="col-11 col-sm-9 offset-md-2 mb-4">
                    @csrf
                    <input type="checkbox" name="opponent[Random]" value="Random" id="random" onclick="myFunction()" {{isset($details['opponent']['Random']) ? 'checked': ''}}> Random<br>
                    <div class="accordian1" id="accordion" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Random Approach
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="random[DiceRolling]" value="Dice Rolling" {{isset($details['random']['DiceRolling']) ? 'checked' : ''}}><p class="textinput">Dice Rolling</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="random[RandomMove]" value="Random Move" {{isset($details['random']['RandomMove']) ? 'checked' : ''}}><p class="textinput">Random Move</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="random[RandomPlacement]" value="Random Placement" {{isset($details['random']['RandomPlacement']) ? 'checked' : ''}}><p class="textinput">Random Placement</p> <br>

                                {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">150</b></label> <br> --}}
                                    <input type="hidden" class="ml-4 mr-1 myinput" name="random[LOC]" value="150"><br>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="opponent[Greedy]" value="Greedy" id="greedy" onclick="myFunctionmed()" {{isset($details['opponent']['Greedy']) ? 'checked': ''}}> Greedy<br>
                    <div class="accordian2" id="accordion2" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Greedy Approach
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="greedy[BlocksPlacement]" value="Blocks Placement" {{isset($details['greedy']['BlocksPlacement']) ? 'checked' : ''}}><p class="textinput">Blocks Placement</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="greedy[StrategyFlipping]" value="Strategy Flipping" {{isset($details['greedy']['StrategyFlipping']) ? 'checked' : ''}}><p class="textinput">Strategy Flipping</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="greedy[PatternMatching]" value="Pattern Matching" {{isset($details['greedy']['PatternMatching']) ? 'checked' : ''}}><p class="textinput">Pattern Matching</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="greedy[StrategyMoving]" value="Strategy Moving" {{isset($details['greedy']['StrategyMoving']) ? 'checked' : ''}}><p class="textinput">Strategy Moving</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">404</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="greedy[LOC]" value="404"><br>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="opponent[BruteForce]" value="Brute Force" id="bruteforce" onclick="myFunctionhigh()" {{isset($details['opponent']['BruteForce']) ? 'checked': ''}}> Brute Force<br>
                    <div class="accordian3" id="accordion3" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Brute Force Approach
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="brute[Think]" value="Think, Search And Move" {{isset($details['brute']['Think']) ? 'checked' : ''}}><p class="textinput">Think, Search And Move</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">832</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="brute[LOC]" value="832"><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer d-inline">
                        <a class="btn btn-primary col-2 float-left" href="{{route('players-details-back')}}" id="btn-prev">Previous</a>
                        <button class="btn btn-primary col-2 mt-2 float-right" id="btn-next" type="submit">Next</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            window.onload = function() {
                loadFunction();
            };

            function loadFunction(){
                var checkBox = document.getElementById("random");
                var section = document.getElementById("accordion");
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }

                var checkBox2 = document.getElementById("greedy");
                var section2 = document.getElementById("accordion2");
                if (checkBox2.checked == true){
                    section2.style.display = "block";
                } else {
                    section2.style.display = "none";
                }

                var checkBox3 = document.getElementById("bruteforce");
                var section3 = document.getElementById("accordion3");
                if (checkBox3.checked == true){
                    section3.style.display = "block";
                } else {
                    section3.style.display = "none";
                }

            }
            function myFunction() {
                // Get the checkbox
                var checkBox = document.getElementById("random");
                // Get the output text
                var section = document.getElementById("accordion");
                // alert(section);
                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }
            }

            function myFunctionmed() {
                // Get the checkbox
                var checkBox = document.getElementById("greedy");
                // Get the output text
                var section = document.getElementById("accordion2");
                // alert(section);
                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }
            }
            function myFunctionhigh() {
                // Get the checkbox
                var checkBox = document.getElementById("bruteforce");
                // Get the output text
                var section = document.getElementById("accordion3");
                // alert(section);
                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }
            }
        </script>
@endsection