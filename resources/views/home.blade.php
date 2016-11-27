@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <button type="button" onclick="window.location='{{ url("klass") }}'" class="btn btn-default btn-lg btn-block">Class Editor</button>
                    <button type="button" onclick="window.location='{{ url("student") }}'" class="btn btn-default btn-lg btn-block">Student Editor</button>
                    <button type="button" onclick="window.location='{{ url("instructor") }}'" class="btn btn-default btn-lg btn-block">Instructor Editor</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
