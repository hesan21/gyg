@extends('layouts.mylayout')

@section('title')
    Animations
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 7 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Animations</b></p>
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
                    <li class="nav-item text-center"><a class="text-success" href="{{route('strategy-details-back')}}">Strategy Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center active" id="active"><a href="#">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('finalize')}}" method="POST" id="formwithsection" class="col-11 col-sm-9 offset-md-2 mb-4">
                    @csrf
                    <input type="checkbox" name="animation[low]" {{isset($details['animation']['low']) ? 'checked': ''}} value="Low" id="low" onclick="myFunction()"> Low<br>
                    <div class="accordian1" id="accordion" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Low Animations
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="lowanim[Highlights]" {{isset($details['lowanim']['Highlights']) ? 'checked': ''}} value="Highlights"><p class="textinput">Highlights</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="lowanim[FadeIn/Out]" {{isset($details['lowanim']['FadeIn/Out']) ? 'checked': ''}} value="Fade In/Out"><p class="textinput">Fade In/Out</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="lowanim[TextEffect]" {{isset($details['lowanim']['TextEffect']) ? 'checked': ''}} value="Text Effect"><p class="textinput">Text Effect</p> <br>

                                {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">38</b></label> <br> --}}
                                    <input type="hidden" class="ml-4 mr-1 myinput" name="lowanim[LOC]" value="38">
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="animation[medium]" value="Medium" {{isset($details['animation']['medium']) ? 'checked': ''}} id="medium" onclick="myFunctionmed()"> Medium<br>
                    <div class="accordian2" id="accordion2" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Medium Animations
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="mediumanim[Bouncing]" {{isset($details['mediumanim']['Bouncing']) ? 'checked': ''}} value="Bouncing"><p class="textinput">Bouncing</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="mediumanim[FlipAnimation]" {{isset($details['mediumanim']['FlipAnimation']) ? 'checked': ''}} value="Flip Animation"><p class="textinput">Flip Animation</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="mediumanim[HoverAnimation]" {{isset($details['mediumanim']['HoverAnimation']) ? 'checked': ''}} value="Hover Animation"><p class="textinput">Hover Animation</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="mediumanim[Rotation]" {{isset($details['mediumanim']['Rotation']) ? 'checked': ''}} value="Rotation"><p class="textinput">Rotation</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">86</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="mediumanim[LOC]" value="86">
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="animation[high]" value="High" {{isset($details['animation']['high']) ? 'checked': ''}} id="high" onclick="myFunctionhigh()"> High<br>
                    <div class="accordian3" id="accordion3" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        High Animations
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="highanim[Translation]" {{isset($details['highanim']['Translation']) ? 'checked': ''}} value="Translation"><p class="textinput">Translation</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="highanim[BackgroundAnimation]" {{isset($details['highanim']['BackgroundAnimation']) ? 'checked': ''}} value="Background Animation"><p class="textinput">Background Animation</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="highanim[Sprite]" {{isset($details['highanim']['Sprite']) ? 'checked': ''}} value="Sprite"><p class="textinput">Sprite</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="highanim[TextureSheet]" {{isset($details['highanim']['TextureSheet']) ? 'checked': ''}} value="Texture Sheet"><p class="textinput">Texture Sheet</p> <br>

                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">241</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="highanim[LOC]" value="241">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer d-inline mb-3">
                        <a class="btn btn-primary col-2 float-left" href="{{route('game-options-back')}}" id="btn-prev">Previous</a>
                        <button class="btn btn-primary col-2 mt-2 float-right" id="btn-next" type="submit">Get Score!</button>
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