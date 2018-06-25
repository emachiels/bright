@extends('layouts.app')

@section('title', trans('home.title'))

@section('content')
    <section class="map wrapper"></section>
    <section class="white values">
        <div class="wrapper">
            <div class="col-row">
                <div class="col col-4 box-thingy">
                    <img class="box-icon" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/128/tools-icon.png">
                    <h1>Do BRIGHT</h1>
                    <div class="devider"></div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi eos eum, illum iure, labore libero maiores minus natus nemo similique sunt suscipit velit? Alias consequuntur magni maxime officia sunt.
                </div>
                <div class="col col-4 box-thingy">
                    <img class="box-icon" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/128/trophy-icon.png">
                    <h1>Get BRIGHT</h1>
                    <div class="devider"></div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi eos eum, illum iure, labore libero maiores minus natus nemo similique sunt suscipit velit? Alias consequuntur magni maxime officia sunt.
                </div>
                <div class="col col-4 box-thingy">
                    <img class="box-icon" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/128/globe-icon.png">
                    <h1>Live BRIGHT</h1>
                    <div class="devider"></div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi eos eum, illum iure, labore libero maiores minus natus nemo similique sunt suscipit velit? Alias consequuntur magni maxime officia sunt.
                </div>
            </div>
        </div>
    </section>

    <section class="grey">
        <div class="wrapper">
            <div class="col-row">
                <div class="col-3">
                    <div class="module-container">
                        <div class="front">
                            <div class="overlay">
                                <h1>CommuneBRIGHT</h1>
                            </div>
                            <div class="module-background commune"></div>
                        </div>
                        <div class="back">
                            <h1>CommuneBRIGHT</h1>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="module-container">
                        <div class="overlay">
                            <h1>WorkBRIGHT</h1>
                        </div>
                        <div class="module-background work"></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="module-container">
                        <div class="overlay">
                            <h1>LiveBRIGHT</h1>
                        </div>
                        <div class="module-background live"></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="module-container">
                        <div class="overlay">
                            <h1>MoveBRIGHT</h1>
                        </div>
                        <div class="module-background move"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
