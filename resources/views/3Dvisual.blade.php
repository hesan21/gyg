@extends('layouts.mylayout')

@section('title')
    3D Visualization
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 4 Of 10</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>3D Visualization</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center" ><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('rules-details-back')}}">No of Rules</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center active" id="active"><a href="#">3D Visualization</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('players-details')}}">No of Players</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('opponents')}}">Computer Opponents</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('game-options')}}">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('players-details')}}" method="POST" id="formwithsection" class="col-11 col-sm-9 offset-md-2 mb-4">
                    @csrf
                    <input type="checkbox" name="visual[Low]" value="Low" id="low" onclick="myFunction()" {{isset($details['visual']['Low']) ? 'checked' : ''}}> Low<br>
                    <div class="accordian1" id="accordion" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Low Visuals
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="low[Texture]" value="Texture" {{isset($details['low']['Texture']) ? 'checked' : ''}}><p class="textinput">Texture</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="low[Transformation]" value="Transformation" {{isset($details['low']['Transformation']) ? 'checked' : ''}}><p class="textinput">Transformation</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="low[3DObject]" value="3D Object by 3D Software" {{isset($details['low']['3DObject']) ? 'checked' : ''}}><p class="textinput">3D Object by 3D Software</p> <br>

                                {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">121</b></label> <br> --}}
                                    <input type="hidden" class="ml-4 mr-1 myinput" name="low[LOC]" value="121"><br>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="visual[Medium]" value="Medium" id="medium" onclick="myFunctionmed()" {{isset($details['visual']['Medium']) ? 'checked' : ''}}> Medium<br>
                    <div class="accordian2" id="accordion2" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Medium Visuals
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="medium[Manual3DObjects]" value="Manual 3D Objects" {{isset($details['medium']['Manual3DObjects']) ? 'checked' : ''}}><p class="textinput">Manual 3D Objects</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="medium[3DScene]" value="3D Scene" {{isset($details['medium']['3DScene']) ? 'checked' : ''}}><p class="textinput">3D Scene</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">315</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="medium[LOC]" value="315">
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="visual[High]" value="High" id="high" onclick="myFunctionhigh()" {{isset($details['visual']['High']) ? 'checked' : ''}} onload="myFunctionhigh()"> High<br>
                    <div class="accordian3" id="accordion3" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        High Visuals
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="high[3rdPartyCode]" value="3rd Party Code" {{isset($details['high']['3rdPartyCode']) ? 'checked' : ''}}><p class="textinput">3rd Party Code</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">7333</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="high[LOC]" value="7333">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer d-inline">
                        <a class="btn btn-primary col-2 float-left" href="{{route('rules-details-back')}}" id="btn-prev">Previous</a>
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