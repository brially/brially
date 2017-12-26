@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->first_name }} {{ $user->last_name }}
                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
                        <a href="{{ url()->previous()  }}" class="btn btn-default">
                            <span class="glyphicon glyphicon-arrow-left text-success" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('home') }}"
                           class="btn btn-default">
                            <span class="glyphicon glyphicon-home text-success" aria-hidden="true"></span>
                        </a>
                        <a href="{{ action('UserController@edit', [$user]) }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    </div>
                </div>

                <div class="panel-body">

                    <ul  class="list-group">
                        <li  class="list-group-item"><span class="label label-default">First</span> {{ $user->first_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Middle</span> {{ $user->middle_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Last</span> {{ $user->last_name }}</li>
                        <li  class="list-group-item"><span class="label label-default">Email</span> {{ $user->email }}</li>
                    </ul>

                        <div class="table-responsive">
                            <table class="table table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Address</th>
                                        <th>Address 2</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>zip</th>
                                        <th>
                                            <a href="{{ action('UserAddressController@create', ['user_id' => $user]) }}" class="btn btn-xs btn-default">
                                                <span class="glyphicon glyphicon-plus-sign text-success" aria-hidden="true"></span>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($user->addresses as $address)
                                    <tr>
                                        <td>{{ $address->address }}</td>
                                        <td>{{ $address->address2 }}</td>
                                        <td>{{ $address->city }}</td>
                                        <td>{{ $address->state }}</td>
                                        <td>{{ $address->country }}</td>
                                        <td>{{ $address->post_code }}</td>
                                        <td>
                                            <a href="{{ action('AddressController@edit', [$address]) }}" class="btn btn-xs btn-default">
                                                <span class="glyphicon glyphicon-edit text-success" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Addresses</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
