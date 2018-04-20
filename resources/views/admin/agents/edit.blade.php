@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="panel-body">
                <h3 class="page-header">Edit Agent</h3>
                <div class="col-md-12 alert alert-info">
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Please do not edit the email or try to modify the password as this functionality
                        is not in place yet.
                    </p>
                </div>
                <div class="col-md-2">
                    <a href="/admin/agents" class="btn btn-primary">Back</a>
                </div>
                <div class="col-md-11"></div>
                <form class="form-horizontal" role="form" method="POST" action="/admin/agents/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $agent->id }}">

                    <div class="form-group">
                        <label for="first-name" class="col-md-4 control-label">First Name</label>
                        <div class="col-md-6">
                            <input id="first-name" type="text" class="form-control" name="first-name" value="{{ $agent->first_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last-name" class="col-md-4 control-label">Last Name</label>
                        <div class="col-md-6">
                            <input id="last-name" type="text" class="form-control" name="last-name" value="{{ $agent->last_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $agent->user->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="confirm-password" type="password" class="form-control" name="confirm-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $agent->phone }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cell" class="col-md-4 control-label">Cell</label>
                        <div class="col-md-6">
                            <input id="cell" type="text" class="form-control" name="cell" value="{{ $agent->cell }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="toll-free" class="col-md-4 control-label">Toll Free</label>
                        <div class="col-md-6">
                            <input id="toll-free" type="text" class="form-control" name="toll-free" value="{{ $agent->toll_free }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fax" class="col-md-4 control-label">Fax</label>
                        <div class="col-md-6">
                            <input id="fax" type="text" class="form-control" name="fax" value="{{ $agent->fax }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <select class="form-control" name="type" required>
                                <option value="User" {{ 'User' == $agent->type ? 'selected="selected"' : '' }}>User</option>
                                <option value="Admin" {{ 'Admin' == $agent->type ? 'selected="selected"' : '' }}>Admin</option>
                            </select>
                        </div>
                    </div>

                    {{-- TODO Will need to come back to this eventually and fixed it like the above select / option --}}
                    <div class="form-group">
                        <label for="client-id" class="col-md-4 control-label">Client</label>
                        <div class="col-md-6">
                            <select class="form-control" name="client-id" required>
                                <option value="">Select a client</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update Agent
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
