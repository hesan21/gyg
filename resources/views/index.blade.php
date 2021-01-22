@extends('layouts.app')

@include('includes.preloader')
@section('header-content')
<div class="landing-page">
    <div class="myquotes">
        @include('includes.quotes')
    </div>
    <div class="page-content ">
        <h1 class="mylogo animated bounceInUp">
            <span>G</span>
            <span>A</span>
            <span>M</span>
            <span>E</span>
            <span>D</span>
            <span>E</span>
            <span>V</span>
            <span>S</span>
        </h1>

        
        <a href="{{route('page-one')}}" class="btn-land" style="text-decoration: none;">
            <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
            </svg>
            <span>
            Get Your Score Now
            </span>
        </a>
    </div>
</div>
@endsection

