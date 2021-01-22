<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MyMainController extends Controller
{
    public function index()
    {
        Session::forget('userdetails');
        Session::forget('gamedetails');
        return view('index');
    }
    public function userdetails()
    {
        
        if(session()->has('userdetails')){
            return view('userdetails')->with('details', session('userdetails'));
        }else{
            return view('userdetails');
        }
    }
    public function gamedetails(Request $request)
    {
        // $request->session()->flush();
        $userdetails = $request->all();
        $request->session()->put('userdetails', $userdetails);
        Session::save();
        if(session()->has('gamedetails')){
            return view('gamedetails')->with('details', session('gamedetails'));
        }else{
            return view('gamedetails');
        }
        return view('gamedetails');
    }

    public function rulesdetails(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('gamedetails', $gamedetails);
        Session::save();
        if(session()->has('rulesdetails')){
            return view('rulesdetails')->with('details', session('rulesdetails'));
        }else{
            return view('rulesdetails');
        }
    }

    // public function visuals(Request $request)
    // {
    //     $gamedetails = $request->all();
    //     $request->session()->put('rulesdetails', $gamedetails);
    //     Session::save();
    //     if(session()->has('visuals')){
    //         return view('3Dvisual')->with('details', session('visuals'));
    //     }else{
    //         return view('3Dvisual');
    //     }
    // }

    public function players(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('rulesdetails', $gamedetails);
        Session::save();

        if(session()->has('players')){
            return view('playersdetails')->with('details', session('players'));
        }else{
            return view('playersdetails');
        }
    }

    // public function opponents(Request $request)
    // {
    //     $gamedetails = $request->all();
    //     $request->session()->put('players', $gamedetails);
    //     Session::save();
        
    //     if(session()->has('opponents')){
    //         return view('opponentdetails')->with('details', session('opponents'));
    //     }else{
    //         return view('opponentdetails');
    //     }
    // }

    public function gameoptions(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('players', $gamedetails);
        Session::save();

        if(session()->has('gameoptions')){
            return view('gameoptions')->with('details', session('gameoptions'));
        }else{
            return view('gameoptions');
        }
    }

    public function strategydetails(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('gameoptions', $gamedetails);
        Session::save();
        
        if(session()->has('strategy')){
            return view('strategydetails')->with('details', session('strategy'));
        }else{
            return view('strategydetails');
        }

    }

    public function animationsdetails(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('strategy', $gamedetails);
        Session::save();

        if(session()->has('animations')){
            return view('animationdetail')->with('details', session('animations'));
        }else{
            return view('animationdetail');
        }
    }

    public function finalize(Request $request)
    {
        $gamedetails = $request->all();
        $request->session()->put('animations', $gamedetails);
        Session::save();

        //animations
        // dd(session('rulesdetails'));

        $rules = session('rulesdetails')['rules']; //2
        

        // $lowvisuals = 0;
        // $mediumvisuals = 0;
        // $highvisuals = 0;
        // if(isset(session('visuals')['visual']['Low'])){
        //     // dd(count(session('visuals')['low']));
        //     $lowselected = count(session('visuals')['low']) - 1;
        //     $lowvisuals = 1 * $lowselected;
        // }

        // if(isset(session('visuals')['visual']['Medium'])){
        //     $mediumselected = count(session('visuals')['medium']) - 1 ;
        //     $mediumvisuals = 3 * $mediumselected;
        // }

        // if(isset(session('visuals')['visual']['High'])){
        //     $highselected = count(session('visuals')['high']) - 1 ;
        //     $highvisuals = 61 * $highselected;
        // }

        // $visuals = $lowvisuals + $mediumvisuals + $highvisuals;
        // // dd($visuals);

        $players = session('players')['players']; //2


        // $random = 0;
        // $greedy = 0;
        // $brute = 0;
        // if(isset(session('opponents')['opponent']['Random'])){
        //     // dd(count(session('visuals')['low']));
        //     $randomselected = count(session('opponents')['random']) - 1;
        //     $random = 1 * $randomselected;
        // }

        // if(isset(session('opponents')['opponent']['Greedy'])){
        //     $greedyselected = count(session('opponents')['greedy']) - 1 ;
        //     $greedy = 3 * $greedyselected;
        // }

        // if(isset(session('opponents')['opponent']['BruteForce'])){
        //     $bruteselected = count(session('opponents')['brute']) - 1 ;
        //     $brute = 6 * $bruteselected;
        // }

        // $opponents = $random + $greedy + $brute;

        $static = 0;
        $config = 0;
        $func = 0;
        if(isset(session('gameoptions')['gameoption']['StaticControls'])){
            // dd(count(session('visuals')['low']));
            $staticselected = count(session('gameoptions')['static']) - 1;
            $static = 1 * $staticselected;
        }

        if(isset(session('gameoptions')['gameoption']['ConfigurationControls'])){
            $configselected = count(session('gameoptions')['config']) - 1 ;
            $config = 6 * $configselected;
        }

        if(isset(session('gameoptions')['gameoption']['FunctionsandInformationStorage'])){
            $funcselected = count(session('gameoptions')['func']) - 1 ;
            $func = 9 * $funcselected;
        }

        $game = $static + $config + $func;
        // dd(session('strategy'));


        $lowstrategy = 0;
        $mediumstrategy = 0;
        $highstrategy = 0;

        if(isset(session('strategy')['strategy']['low'])){
            // dd(count(session('strategys')['low']));
            $lowstrategyselected = count(session('strategy')['low']) - 1;
            $lowstrategy = 1 * $lowstrategyselected;
        }

        if(isset(session('strategy')['strategy']['medium'])){
            $mediumstrategyselected = count(session('strategy')['medium']) - 1 ;
            $mediumstrategy = 4 * $mediumstrategyselected;
        }

        if(isset(session('strategy')['strategy']['high'])){
            $highstrategyselected = count(session('strategy')['high']) - 1 ;
            $highstrategy = 8 * $highstrategyselected;
        }

        $strategy = $lowstrategy + $mediumstrategy + $highstrategy;


        $lowanim = 0;
        $medanim = 0;
        $highanim = 0;
        // dd(session('animations'));
        if(isset(session('animations')['animation']['low'])){
            // dd(count(session('visuals')['low']));
            $lowanimselected = count(session('animations')['lowanim']) - 1;
            $lowanim = 1 * $lowanimselected;
        }

        if(isset(session('animations')['animation']['medium'])){
            $mediumanimselected = count(session('animations')['mediumanim']) - 1 ;
            $medanim = 2 * $mediumanimselected;
        }

        if(isset(session('animations')['animation']['high'])){
            $highanimselected = count(session('animations')['highanim']) - 1 ;
            $highanim = 6 * $highanimselected;
        }

        $animations = $lowanim + $medanim + $highanim;
        
        $constant = env('MainConstant');
        $ruleConstant = env('NRULConstant');
        $gameConstant = env('mGopConstant');
        $playerConstant= env('NplyConstant');
        $animConstant = env('AnimConstant');
        $stratConstant = env('StraConstant');

        $result = $constant + ($animConstant * $animations) + ($playerConstant * $players) + 
                  ($ruleConstant * $rules) + ($gameConstant * $game) + ($stratConstant * $strategy);
        
        // dd(session('opponents'));
        
        return view('finalize')->with('result', $result)
                               ->with('rules', session('rulesdetails'))
                            //    ->with('visuals', session('visuals'))
                               ->with('players', session('players'))
                            //    ->with('opponents', session('opponents'))
                               ->with('gameoptions', session('gameoptions'))
                               ->with('strategy', session('strategy'))
                               ->with('animations', session('animations'));
    }
}
