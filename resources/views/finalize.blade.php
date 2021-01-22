@extends('layouts.mylayout')

@section('title')
    Estimataion Details
@endsection

@section('content')
    <div class="container">
        <div class="breadcumb row border-bottom pt-2">
            <b class="col-4 myindex">Page 8 of 8</b>
            <p class="col-8 col-md-6 offset-md-2 myheading"><b>Estimate</b></p>
        </div>

        <div class="mt-3 card-deck">
            <div class="mysidebar col-12 col-md-3 h-100">
                <ul class="navbar-nav">
                    <li class="nav-item text-center"><a class="text-success" href="{{route('page-one')}}">User Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-details-back')}}">Basic Game Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('rules-details-back')}}">No of Rules</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('3DVisual-back')}}">3D Visualization</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center"><a class="text-success" href="{{route('players-details-back')}}">No of Players</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    {{-- <li class="nav-item text-center"><a class="text-success" href="{{route('opponents-back')}}">Computer Opponents</a><i class="ml-1 fas fa-check-circle text-success"></i></li> --}}
                    <li class="nav-item text-center"><a class="text-success" href="{{route('game-options-back')}}">Game Options</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('strategy-details-back')}}">Strategy Details</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center"><a class="text-success" href="{{route('animations-back')}}">Animations</a><i class="ml-1 fas fa-check-circle text-success"></i></li>
                    <li class="nav-item text-center active" id="active"><a href="{{route('finalize')}}">Estimate</a></li>
                </ul>
            </div>
            <div class="myarticle border-left col-12 col-md-9 mt-4">
                <div class="alert alert-success text-center myresultparent">
                    Your Estimated Lines of Code is: 
                    <p class="display-4 myresult">{{$result}}</p>
                </div>
                <div class="textinput font-weight-bold">
                    Your Selections: 

                    <div class="accordion1" id="accordion1">
                        <div class="card">
                            <div class="card-header btn-section" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Basics
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                                <div class="card-body">
                                    <label class="mylabel text-primary">Number of Rules: {!! isset($rules["rules"]) ? '<b id="textval">'.$rules["rules"].'</b>' : '' !!} </label> <br>
                                    <label class="mylabel text-primary">Number of Players: {!! isset($players['players']) ? '<b id="textval">'.$players['players'].'</b>' : '' !!} </label> <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($visuals))
                        @if(count($visuals['low']) > 1 || count($visuals['medium']) > 1 || count($visuals['high']) > 1)
                        <div class="accordion2" id="accordion2">
                                <div class="card">
                                    <div class="card-header btn-section" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                3DVisuals
                                            </button>
                                        </h5>
                                    </div>
                                    
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                        <div class="card-body">
                                            @if(isset($visuals))
                                                @if(count($visuals['low']) >1)
                                                    <label class="mylabel text-primary">LOW: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($visuals['low'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
        
                                            @if(isset($visuals))
                                                @if(count($visuals['medium']) >1)
                                                    <label class="mylabel text-primary">Medium: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($visuals['medium'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
                                                
                                            @if(isset($visuals))
                                                @if(count($visuals['high']) >1)
                                                    <label class="mylabel text-primary">High: </label> <br>
                                                    <div class="selected">
                                                        
                                                        @foreach ($visuals['high'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

                    @if(isset($opponents))
                        @if(count($opponents['random'])>1 || count($opponents['greedy'])>1 || count($opponents['brute'])>1)
                        <div class="accordion3" id="accordion3">
                                <div class="card">
                                    <div class="card-header btn-section" id="headingThree">
                                        <h5 class="mb-0">
                                            <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Computer Opponents
                                            </button>
                                        </h5>
                                    </div>
                                    
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                        <div class="card-body">
                                            <div class="card-body">
                                                @if(isset($opponents))
                                                    @if(count($opponents['random']) >1)
                                                        <label class="mylabel text-primary">Random: </label> <br>
                                                        <div class="selected">
                                                            @foreach ($opponents['random'] as $key => $value)
                                                                @if($key != "LOC")
                                                                    {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endif
                                                    
                                                @if(isset($opponents))
                                                    @if(count($opponents['greedy']) >1)
                                                        <label class="mylabel text-primary">Greedy: </label> <br>
                                                        <div class="selected">
                                                            @foreach ($opponents['greedy'] as $key => $value)
                                                                @if($key != "LOC")
                                                                    {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endif 
                
                                                @if(isset($opponents))
                                                    @if(count($opponents['brute']) >1)
                                                    <label class="mylabel text-primary">BruteForce: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($opponents['brute'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    @endif
                                                @endif 
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                    

                    @if(isset($gameoptions))
                        @if(count($gameoptions['static'])>1 || count($gameoptions['config'])>1 || count($gameoptions['func'])>1 )
                        <div class="accordion4" id="accordion4">
                                <div class="card">
                                    <div class="card-header btn-section" id="headingFour">
                                        <h5 class="mb-0">
                                            <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Game Options
                                            </button>
                                        </h5>
                                    </div>
                                    
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion4">
                                        <div class="card-body">
                                            <div class="card-body">
                                                @if(isset($gameoptions))
                                                    @if(count($gameoptions['static']) >1)
                                                        <label class="mylabel text-primary">Static Controls: </label> <br>
                                                        <div class="selected">
                                                            @foreach ($gameoptions['static'] as $key => $value)
                                                                @if($key != "LOC")
                                                                    {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                    @endif
                                                @endif 
                                                    
                                                @if(isset($gameoptions))
                                                    @if(count($gameoptions['config']) >1)
                                                        <label class="mylabel text-primary">Configuration Controls: </label> <br>
                                                        <div class="selected">
                                                            @foreach ($gameoptions['config'] as $key => $value)
                                                                @if($key != "LOC")
                                                                    {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endif 
                
                                                @if(isset($gameoptions))
                                                    @if(count($gameoptions['func']) >1)
                                                        <label class="mylabel text-primary">Function and Information Storage: </label> <br>
                                                        <div class="selected">
                                                            @foreach ($gameoptions['func'] as $key => $value)
                                                                @if($key != "LOC")
                                                                    {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endif 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                    

                    @if(isset($strategy))
                        @if(count($strategy['low']) > 1 || count($strategy['medium']) > 1 || count($strategy['high']) > 1)
                        <div class="accordion5" id="accordion5">
                                <div class="card">
                                    <div class="card-header btn-section" id="headingfive">
                                        <h5 class="mb-0">
                                            <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Strategy
                                            </button>
                                        </h5>
                                    </div>
                                    
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion5">
                                        <div class="card-body">
                                                <div class="card-body">
                                                    @if(isset($strategy))
                                                        @if(count($strategy['low']) >1)
                                                            <label class="mylabel text-primary">LOW: </label> <br>
                                                            <div class="selected">
                                                                @foreach ($strategy['low'] as $key => $value)
                                                                    @if($key != "LOC")
                                                                        {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endif  
                                                        
                                                    @if(isset($strategy))
                                                        @if(count($strategy['medium']) >1)
                                                            <label class="mylabel text-primary">Medium: </label> <br>
                                                            <div class="selected">
                                                                @foreach ($strategy['medium'] as $key => $value)
                                                                    @if($key != "LOC")
                                                                        {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endif    
                    
                                                    @if(isset($strategy))
                                                        @if(count($strategy['high']) >1)
                                                            <label class="mylabel text-primary">High: </label> <br>
                                                            <div class="selected">
                                                                @foreach ($strategy['high'] as $key => $value)
                                                                    @if($key != "LOC")
                                                                        {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    @endif 
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

                    

                    @if(isset($animations))
                        @if(count($animations)>1)
                            
                        @endif
                    @endif

                    <div class="accordion6" id="accordion6">
                        <div class="card">
                            <div class="card-header btn-section" id="headingsix">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Animations
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion6">
                                <div class="card-body">
                                        <div class="card-body">
                                            @if(isset($animations))
                                                @if(count($animations['lowanim']) >1)
                                                    <label class="mylabel text-primary">LOW: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($animations['lowanim'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
                                                
                                            @if(isset($animations))
                                                @if(count($animations['mediumanim']) >1)
                                                    <label class="mylabel text-primary">Medium: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($animations['mediumanim'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif  
            
                                            @if(isset($animations))
                                                @if(count($animations['highanim']) >1)
                                                    <label class="mylabel text-primary">High: </label> <br>
                                                    <div class="selected">
                                                        @foreach ($animations['highanim'] as $key => $value)
                                                            @if($key != "LOC")
                                                                {!! '<b class="ml-4" id="textval">'.$value.'</b> <br>' !!}
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif 
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

            
@endsection