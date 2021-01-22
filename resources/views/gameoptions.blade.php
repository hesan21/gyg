@extends('layouts.mylayout')

@section('title')
    Game Options
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 5 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Game Options</b></p>
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
                    <li class="nav-item text-center active" id="active"><a href="#">Game Options</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('strategy-details-back')}}">Strategy Details</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('animations')}}">Animations</a></li>
                    <li class="nav-item text-center"><a class="btn disabled" role="button" aria-disabled="true" href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <form action="{{route('strategy')}}" method="POST" id="formwithsection" class="col-11 col-sm-9 offset-md-2 mb-4">
                    @csrf
                    <input type="checkbox" name="gameoption[StaticControls]" {{isset($details['gameoption']['StaticControls']) ? 'checked': ''}} value="Static Controls" id="static" onclick="myFunction()"> Static Controls<br>
                    <div class="accordian1" id="accordion" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Static Controls
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[AboutUs]" {{isset($details['static']['AboutUs']) ? 'checked': ''}} value="About Us"><p class="textinput">About Us</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[Credits]" {{isset($details['static']['Credits']) ? 'checked': ''}} value="Credits"><p class="textinput">Credits</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[License]" {{isset($details['static']['License']) ? 'checked': ''}} value="License"><p class="textinput">License</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[Help]" {{isset($details['static']['Help']) ? 'checked': ''}} value="Help"><p class="textinput">Help</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[GameInstructions]" {{isset($details['static']['GameInstructions']) ? 'checked': ''}} value="Game Instructions"><p class="textinput">Game Instructions</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[Tutorials/Manual]" {{isset($details['static']['Tutorials/Manual']) ? 'checked': ''}} value="Tutorials/Manual"><p class="textinput">Tutorials/Manual</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[Print]" {{isset($details['static']['Print']) ? 'checked': ''}} value="Print"><p class="textinput">Print</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[Exit]" {{isset($details['static']['Exit']) ? 'checked': ''}} value="Exit"><p class="textinput">Exit</p> <br>
                                    <input type="checkbox" class="ml-4 mr-1 myinput" name="static[CheckUpdates]" {{isset($details['static']['CheckUpdates']) ? 'checked': ''}} value="Check Updates"><p class="textinput">Check Updates</p> <br>

                                {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">6</b></label> <br> --}}
                                    <input type="hidden" class="ml-4 mr-1 myinput" name="static[LOC]" value="6">
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="gameoption[ConfigurationControls]" {{isset($details['gameoption']['ConfigurationControls']) ? 'checked': ''}} value="Configuration Controls" id="config" onclick="myFunctionmed()"> Configuration Controls<br>
                    <div class="accordian2" id="accordion2" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Configuration Controls
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[ChangeKeys]" {{isset($details['config']['ChangeKeys']) ? 'checked': ''}} value="Change Keys"><p class="textinput">Change Keys</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[ChangeTheDisplay]" {{isset($details['config']['ChangeTheDisplay']) ? 'checked': ''}} value="Change The Display"><p class="textinput">Strategy Flipping</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[FullScreen]" {{isset($details['config']['FullScreen']) ? 'checked': ''}} value="Full Screen"><p class="textinput">Full Screen</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Language]" {{isset($details['config']['Language']) ? 'checked': ''}} value="Language"><p class="textinput">Language</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Resolution]" {{isset($details['config']['Resolution']) ? 'checked': ''}} value="Resolution"><p class="textinput">Resolution</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Sound]" {{isset($details['config']['Sound']) ? 'checked': ''}} value="Sound"><p class="textinput">Sound</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Speed]" {{isset($details['config']['Speed']) ? 'checked': ''}} value="Speed"><p class="textinput">Speed</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Theme]" {{isset($details['config']['Theme']) ? 'checked': ''}} value="Theme"><p class="textinput">Theme</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[TimeLimit]" {{isset($details['config']['TimeLimit']) ? 'checked': ''}} value="Time Limit"><p class="textinput">Time Limit</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[Timeron/off]" {{isset($details['config']['Timeron/off']) ? 'checked': ''}} value="Timer on/off"><p class="textinput">Timer on/off</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[UseProxy]" {{isset($details['config']['UseProxy']) ? 'checked': ''}} value="Use Proxy"><p class="textinput">Use Proxy</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[ChangeColor]" {{isset($details['config']['ChangeColor']) ? 'checked': ''}} value="Change Color"><p class="textinput">Change Color</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[ShowPossibleMoves]" {{isset($details['config']['ShowPossibleMoves']) ? 'checked': ''}} value="Show Possible Moves"><p class="textinput">Show Possible Moves</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[ZoomIn/Out]" {{isset($details['config']['ZoomIn/Out']) ? 'checked': ''}} value="Zoom In/Out"><p class="textinput">Zoom In/Out</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="config[MultiSkills]" {{isset($details['config']['MultiSkills']) ? 'checked': ''}} value="Multi Skills"><p class="textinput">Multi Skills</p> <br>


                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">36</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="config[LOC]" value="36"><br>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="checkbox" name="gameoption[FunctionsandInformationStorage]" {{isset($details['gameoption']['FunctionsandInformationStorage']) ? 'checked': ''}} value="Functions and Information Storage" id="functions" onclick="myFunctionhigh()">Functions and Information Storage<br>
                    <div class="accordian3" id="accordion3" style="display:none">
                        <div class="card">
                            <div class="card-header btn-section" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Functions and Information Storage
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Representative Examples</label> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[BestTimes/HighScores]" {{isset($details['func']['BestTimes/HighScores']) ? 'checked': ''}} value="Best Times/ High Scores"><p class="textinput">Best Times/ High Scores</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Grade/Score/Rank]" {{isset($details['func']['Grade/Score/Rank']) ? 'checked': ''}} value="Grade/Score/Rank"><p class="textinput">Grade/Score/Rank</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Statistics]" {{isset($details['func']['Statistics']) ? 'checked': ''}} value="Statistics"><p class="textinput">Statistics</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Hint]" {{isset($details['func']['Hint']) ? 'checked': ''}} value="Hint"><p class="textinput">Hint</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[ConnectServer]" {{isset($details['func']['ConnectServer']) ? 'checked': ''}} value="Connect Server"><p class="textinput">Connect Server</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[JoinGame]" {{isset($details['func']['JoinGame']) ? 'checked': ''}} value="Join Game"><p class="textinput">Join Game</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[PlayOnline]" {{isset($details['func']['PlayOnline']) ? 'checked': ''}} value="Play Online"><p class="textinput">Play Online</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Resign]" {{isset($details['func']['Resign']) ? 'checked': ''}} value="Resign"><p class="textinput">Resign</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[ClearRecords]" {{isset($details['func']['ClearRecords']) ? 'checked': ''}} value="Clear Records"><p class="textinput">Clear Records</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Load]" {{isset($details['func']['Load']) ? 'checked': ''}} value="Load"><p class="textinput">Load</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[New]" {{isset($details['func']['New']) ? 'checked': ''}} value="New"><p class="textinput">New</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Open]" {{isset($details['func']['Open']) ? 'checked': ''}} value="Open"><p class="textinput">Open</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Pause]" {{isset($details['func']['Pause']) ? 'checked': ''}} value="Pause"><p class="textinput">Pause</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Redo]" {{isset($details['func']['Redo']) ? 'checked': ''}} value="Redo"><p class="textinput">Redo</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Restart]" {{isset($details['func']['Restart']) ? 'checked': ''}} value="Restart"><p class="textinput">Restart</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Save]" {{isset($details['func']['Save']) ? 'checked': ''}} value="Save"><p class="textinput">Save</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Undo]" {{isset($details['func']['Undo']) ? 'checked': ''}} value="Undo"><p class="textinput">Undo</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Check]" {{isset($details['func']['Check']) ? 'checked': ''}} value="Check"><p class="textinput">Check</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Solve]" {{isset($details['func']['Solve']) ? 'checked': ''}} value="Solve"><p class="textinput">Solve</p> <br>
                                        <input type="checkbox" class="ml-4 mr-1 myinput" name="func[Start]" {{isset($details['func']['Start']) ? 'checked': ''}} value="Start"><p class="textinput">Start</p> <br>


                                    {{-- <label class="mylabel text-primary">Average LOC : <b id="textval">54</b></label> <br> --}}
                                        <input type="hidden" class="ml-4 mr-1 myinput" name="func[LOC]" value="54"><br>
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
                var checkBox = document.getElementById("static");
                var section = document.getElementById("accordion");
                if (checkBox.checked == true){
                    section.style.display = "block";
                } else {
                    section.style.display = "none";
                }

                var checkBox2 = document.getElementById("config");
                var section2 = document.getElementById("accordion2");
                if (checkBox2.checked == true){
                    section2.style.display = "block";
                } else {
                    section2.style.display = "none";
                }

                var checkBox3 = document.getElementById("functions");
                var section3 = document.getElementById("accordion3");
                if (checkBox3.checked == true){
                    section3.style.display = "block";
                } else {
                    section3.style.display = "none";
                }

            }
            function myFunction() {
                // Get the checkbox
                var checkBox = document.getElementById("static");
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
                var checkBox = document.getElementById("config");
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
                var checkBox = document.getElementById("functions");
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