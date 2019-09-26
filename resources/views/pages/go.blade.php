@extends('home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <iframe width="1080" height="330" src="https://www.youtube.com/embed/D24on2kg9t0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Lets Rock!</h5>
                        <div class="text-center">
                            <img class="rounded-circle"
                                 src="https://ichef.bbci.co.uk/news/660/cpsprodpb/12D1F/production/_105478077_10b7b7ca-ad7a-4bbb-bbdc-6f9e2161f18f.jpg"
                                 class="d-block w-100" alt="..."
                                 style="maxheight: 300px; width: 200px; max-height: 330px; max-width: 330px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
