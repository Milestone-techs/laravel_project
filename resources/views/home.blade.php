@extends('layout/default')
@section('title','This is home page')
@section('content')
  @include('partials.header')
  @include('partials.sidenave')
     
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h1><span class="ion-speedometer"></span> Dashboard</h1>
                    <p>
                        Welcome back, Faryal
                    </p>
                    <ul class="uk-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span href="">Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                               
                                <span class="statistics-number">
                                   Info 
                                    <span class="uk-label uk-label-success">
                                        Fill out your personal infomation
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                               
                                <span class="statistics-number">
                                    Resume  
                                    <span class="uk-label uk-label-danger">
                                        Fill out your resumue info <span class="ion-arrow-down-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                              
                                <span class="statistics-number">
                                  Prortfilo
                                    <span class="uk-label uk-label-success">
                                        Your works <span class="ion-arrow-up-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                               
                                <span class="statistics-number">
                                    Contact
                                    <span class="uk-label uk-label-success">
                                        Fill out your contact info <span class="ion-arrow-up-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
@endsection
