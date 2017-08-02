@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->first_name }} {{ $user->last_name }}
                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
                        <a href="{{ action('UserController@edit', [$user]) }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>
                </div>

                <div class="panel-body">
                    <ul  class="list-group">
                        <li  class="list-group-item"><span class="label label-default">First</span> {{ $user->first_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Middle</span> {{ $user->middle_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Last</span> {{ $user->last_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Email</span> {{ $user->email }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
