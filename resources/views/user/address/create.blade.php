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
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="user-form" class="form-horizontal" method="POST" action="{{ action('UserAddressController@store') }}">
                                    <input type="hidden" name="_method" value="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}">

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-4 control-label">Street Address</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control"
                                                   name="address" value="{{ old('address') }}" required autofocus>

                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                                        <label for="address2" class="col-md-4 control-label">Address</label>

                                        <div class="col-md-6">
                                            <input id="address2" type="text" class="form-control"
                                                   name="address2" value="{{ old('address2') }}"  >

                                            @if ($errors->has('address2'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address2') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <label for="city" class="col-md-4 control-label">City</label>

                                        <div class="col-md-6">
                                            <input id="city" type="text" class="form-control"
                                                   name="city" value="{{ old('city') }}" required >

                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                        <label for="state" class="col-md-4 control-label">State</label>

                                        <div class="col-md-6">
                                            <select class="form-control" id="state" name="state" >
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>

                                            @if ($errors->has('state'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('post_code') ? ' has-error' : '' }}">
                                        <label for="post_code" class="col-md-4 control-label">Zip/Post Code</label>

                                        <div class="col-md-6">
                                            <input id="post_code" type="text" class="form-control"
                                                   name="post_code" value="{{ old('post_code') }}" required >

                                            @if ($errors->has('post_code'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('post_code') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                        <label for="country" class="col-md-4 control-label">Country</label>

                                        <div class="col-md-6">
                                            <input id="country" type="text" class="form-control"
                                                   name="country" value="{{ old('country') }}" required >

                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group"> <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary">Save!</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
