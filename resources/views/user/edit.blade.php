@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->first_name }} {{ $user->last_name }}
                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
                        <a href="{{ route('home') }}"
                           class="btn btn-default"
                           onclick="event.preventDefault();
                                                     document.getElementById('user-form').submit();">
                            <span class="glyphicon glyphicon-floppy-save text-success" aria-hidden="true"></span>
                        </a>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>
                </div>

                <div class="panel-body">
                    <form id="user-form" class="form-horizontal" method="PATCH" action="{{ action('UserController@update', [$user]) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control"
                                       name="first_name" value="{{ old('first_name') ? old('first_name') : $user->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <label for="middle_name" class="col-md-4 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control"
                                       name="middle_name" value="{{ old('middle_name') ? old('middle_name') : $user->middle_name }}" required>

                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control"
                                       name="last_name" value="{{ old('last_name') ? old('last_name') : $user->last_name }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" readonly name="email" value="{{ old('email') ? old('email') : $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default ">
                                    <span class="glyphicon glyphicon-floppy-save text-success" aria-hidden="true"></span>
                                    <span class="text-success">Save</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
