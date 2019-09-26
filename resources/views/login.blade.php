@extends('inicio')

@section('content')
    <div class="container">
        <div class="row">
            <form class="col-md-12">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control col-lg-9" id="nick" aria-describedby="emailHelp"
                           placeholder="Give me your signer name!!">
                </div>
                <div class="col-md-9"></div>
                <button type="submit" class="btn btn-primary btn-lg float-right">Lets Sing!</button>
            </form>
        </div>
    </div>
@stop