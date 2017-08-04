@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $address->address }}
                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
                        <a href="{{ url()->previous()  }}" class="btn btn-default">
                            <span class="glyphicon glyphicon-arrow-left text-success" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('home') }}"
                           class="btn btn-default">
                            <span class="glyphicon glyphicon-home text-success" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('home') }}"
                           class="btn btn-default"
                           onclick="event.preventDefault();
                                                     document.getElementById('address-form').submit();">
                            <span class="glyphicon glyphicon-floppy-save text-success" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

                <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="address-form" class="form-horizontal" method="POST" action="{{ action('AddressController@update', [$address]) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-4 control-label">Street Address</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control"
                                                   name="address" value="{{ old('address') ? old('address') : $address->address }}" required autofocus>

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
                                                   name="address2" value="{{ old('address2') ? old('address2') : $address->address2 }}"  >

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
                                                   name="city" value="{{ old('city') ? old('city') : $address->city }}" required >

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
                                                <option {{ $address->state == 'AL' ? 'selected' : '' }} value="AL">Alabama</option>
                                                <option {{ $address->state == 'AK' ? 'selected' : '' }} value="AK">Alaska</option>
                                                <option {{ $address->state == 'AZ' ? 'selected' : '' }} value="AZ">Arizona</option>
                                                <option {{ $address->state == 'AR' ? 'selected' : '' }} value="AR">Arkansas</option>
                                                <option {{ $address->state == 'CA' ? 'selected' : '' }} value="CA">California</option>
                                                <option {{ $address->state == 'CO' ? 'selected' : '' }} value="CO">Colorado</option>
                                                <option {{ $address->state == 'CT' ? 'selected' : '' }} value="CT">Connecticut</option>
                                                <option {{ $address->state == 'DE' ? 'selected' : '' }} value="DE">Delaware</option>
                                                <option {{ $address->state == 'DC' ? 'selected' : '' }} value="DC">District Of Columbia</option>
                                                <option {{ $address->state == 'FL' ? 'selected' : '' }} value="FL">Florida</option>
                                                <option {{ $address->state == 'GA' ? 'selected' : '' }} value="GA">Georgia</option>
                                                <option {{ $address->state == 'HI' ? 'selected' : '' }} value="HI">Hawaii</option>
                                                <option {{ $address->state == 'ID' ? 'selected' : '' }} value="ID">Idaho</option>
                                                <option {{ $address->state == 'IL' ? 'selected' : '' }} value="IL">Illinois</option>
                                                <option {{ $address->state == 'IN' ? 'selected' : '' }} value="IN">Indiana</option>
                                                <option {{ $address->state == 'IA' ? 'selected' : '' }} value="IA">Iowa</option>
                                                <option {{ $address->state == 'KS' ? 'selected' : '' }} value="KS">Kansas</option>
                                                <option {{ $address->state == 'KY' ? 'selected' : '' }} value="KY">Kentucky</option>
                                                <option {{ $address->state == 'LA' ? 'selected' : '' }} value="LA">Louisiana</option>
                                                <option {{ $address->state == 'ME' ? 'selected' : '' }} value="ME">Maine</option>
                                                <option {{ $address->state == 'MD' ? 'selected' : '' }} value="MD">Maryland</option>
                                                <option {{ $address->state == 'MA' ? 'selected' : '' }} value="MA">Massachusetts</option>
                                                <option {{ $address->state == 'MI' ? 'selected' : '' }} value="MI">Michigan</option>
                                                <option {{ $address->state == 'MN' ? 'selected' : '' }} value="MN">Minnesota</option>
                                                <option {{ $address->state == 'MS' ? 'selected' : '' }} value="MS">Mississippi</option>
                                                <option {{ $address->state == 'MO' ? 'selected' : '' }} value="MO">Missouri</option>
                                                <option {{ $address->state == 'MT' ? 'selected' : '' }} value="MT">Montana</option>
                                                <option {{ $address->state == 'NE' ? 'selected' : '' }} value="NE">Nebraska</option>
                                                <option {{ $address->state == 'NV' ? 'selected' : '' }} value="NV">Nevada</option>
                                                <option {{ $address->state == 'NH' ? 'selected' : '' }} value="NH">New Hampshire</option>
                                                <option {{ $address->state == 'NJ' ? 'selected' : '' }} value="NJ">New Jersey</option>
                                                <option {{ $address->state == 'NM' ? 'selected' : '' }} value="NM">New Mexico</option>
                                                <option {{ $address->state == 'NY' ? 'selected' : '' }} value="NY">New York</option>
                                                <option {{ $address->state == 'NC' ? 'selected' : '' }} value="NC">North Carolina</option>
                                                <option {{ $address->state == 'ND' ? 'selected' : '' }} value="ND">North Dakota</option>
                                                <option {{ $address->state == 'OH' ? 'selected' : '' }} value="OH">Ohio</option>
                                                <option {{ $address->state == 'OK' ? 'selected' : '' }} value="OK">Oklahoma</option>
                                                <option {{ $address->state == 'OR' ? 'selected' : '' }} value="OR">Oregon</option>
                                                <option {{ $address->state == 'PA' ? 'selected' : '' }} value="PA">Pennsylvania</option>
                                                <option {{ $address->state == 'RI' ? 'selected' : '' }} value="RI">Rhode Island</option>
                                                <option {{ $address->state == 'SC' ? 'selected' : '' }} value="SC">South Carolina</option>
                                                <option {{ $address->state == 'SD' ? 'selected' : '' }} value="SD">South Dakota</option>
                                                <option {{ $address->state == 'TN' ? 'selected' : '' }} value="TN">Tennessee</option>
                                                <option {{ $address->state == 'TX' ? 'selected' : '' }} value="TX">Texas</option>
                                                <option {{ $address->state == 'UT' ? 'selected' : '' }} value="UT">Utah</option>
                                                <option {{ $address->state == 'VT' ? 'selected' : '' }} value="VT">Vermont</option>
                                                <option {{ $address->state == 'VA' ? 'selected' : '' }} value="VA">Virginia</option>
                                                <option {{ $address->state == 'WA' ? 'selected' : '' }} value="WA">Washington</option>
                                                <option {{ $address->state == 'WV' ? 'selected' : '' }} value="WV">West Virginia</option>
                                                <option {{ $address->state == 'WI' ? 'selected' : '' }} value="WI">Wisconsin</option>
                                                <option {{ $address->state == 'WY' ? 'selected' : '' }} value="WY">Wyoming</option>
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
                                                   name="post_code" value="{{ old('post_code') ? old('post_code') : $address->post_code }}" required >

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
                                                   name="country" value="{{ old('country') ? old('country')  : $address->country }}" required >

                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group"> <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary pull-right">Save!</button>
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
