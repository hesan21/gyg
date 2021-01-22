@extends('layouts.mylayout')

@section('title')
    Strategy Details
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 6 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Strategy Details</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center" ><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('rules-details-back')}}">No of Rules</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('3DVisual-back')}}">3D Visualization</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center"><a class="text-success" href="{{route('players-details-back')}}">No of Players</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('opponents-back')}}">Computer Opponents</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-options-back')}}">Game Options</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center active" id="active"><a href="#">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('animations')}}" method="POST" id="formwithsection" class="col-11 col-sm-9 offset-md-2 mb-4">
                    @csrf
                    <input type="checkbox" name="strategy[low]" {{isset($details['strategy']['low']) ? 'checked': ''}} value="Low Strategy" id="low" onclick="myFunction()"> Low<br>
                    <div class="accordian1" id="accordion" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Low
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="low[Random]" {{isset($details['low']['Random']) ? 'checked': ''}} value="Random"><p class="textinput">Random</p> <br>
                                    

                                {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">45</b></label> <br> --}}
                                    <input type="hidden" class="ml-4 mr-1 myinput" name="low[LOC]" value="45">
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="strategy[medium]" {{isset($details['strategy']['medium']) ? 'checked': ''}} value="Medium Strategy" id="medium" onclick="myFunctionmed()"> Medium<br>
                    <div class="accordian2" id="accordion2" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Medium
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="medium[level]" {{isset($details['medium']['level']) ? 'checked': ''}} value="Select Level"><p class="textinput">Select Level</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="medium[grid]" {{isset($details['medium']['grid']) ? 'checked': ''}} value="Select Grid"><p class="textinput">Select Grid</p> <br>
                                        


                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">198</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="medium[LOC]" value="198"><br>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="strategy[high]" {{isset($details['strategy']['high']) ? 'checked': ''}} value="High Strategy" id="high" onclick="myFunctionhigh()">High<br>
                    <div class="accordian3" id="accordion3" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        High
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="high[levelup]" {{isset($details['high']['levelup']) ? 'checked': ''}} value="Level Up"><p class="textinput">Level Up</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="high[gridup]" {{isset($details['high']['gridup']) ? 'checked': ''}} value="Grid Up"><p class="textinput">Grid Up</p> <br>

                                        
                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">375</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="high[LOC]" value="375"><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer d-inline">
                        <a class="btn btn-primary col-2 float-left" href="{{route('game-options-back')}}" id="btn-prev">Previous</a>
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
                var checkBox = document.getElementById("low");
                var section = document.getElementById("accordion");
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }

                var checkBox2 = document.getElementById("medium");
                var section2 = document.getElementById("accordion2");
                if (checkBox2.checked == true){
                    section2.style.display = "block";
                } else {
                    section2.style.display = "none";
                }

                var checkBox3 = document.getElementById("high");
                var section3 = document.getElementById("accordion3");
                if (checkBox3.checked == true){
                    section3.style.display = "block";
                } else {
                    section3.style.display = "none";
                }

            }
            function myFunction() {
                // Get the checkbox
                var checkBox = document.getElementById("low");
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
                var checkBox = document.getElementById("medium");
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
                var checkBox = document.getElementById("high");
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