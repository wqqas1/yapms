@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="panel-body">
                <h3 class="page-header">Edit Owner</h3>
                <div class="col-md-12 alert alert-info">
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Please do not edit the email or try to modify the password as this functionality
                        is not in place yet.
                    </p>
                </div>
                <div class="col-md-2">
                    <a href="/admin/owners" class="btn btn-primary">Back</a>
                </div>
                <div class="col-md-11"></div>
                <form class="form-horizontal" role="form" method="POST" action="/admin/owners/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $owner->id }}">

                    <div class="form-group">
                        <label for="first-name" class="col-md-4 control-label">First Name</label>
                        <div class="col-md-6">
                            <input id="first-name" type="text" class="form-control" name="first-name" value="{{ $owner->first_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last-name" class="col-md-4 control-label">Last Name</label>
                        <div class="col-md-6">
                            <input id="last-name" type="text" class="form-control" name="last-name" value="{{ $owner->last_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $owner->user->email }}">
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
                        <label for="address1" class="col-md-4 control-label">Address 1</label>
                        <div class="col-md-6">
                            <input id="address1" type="text" class="form-control" name="address1" value="{{ $owner->address1 }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address2" class="col-md-4 control-label">Address 2</label>
                        <div class="col-md-6">
                            <input id="address2" type="text" class="form-control" name="address2" value="{{ $owner->address2 }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-md-4 control-label">City</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{ $owner->city }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" value="{{ $owner->state }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip" class="col-md-4 control-label">Zip</label>
                        <div class="col-md-6">
                            <input id="zip" type="text" class="form-control" name="zip" value="{{ $owner->zip }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cell" class="col-md-4 control-label">Cell</label>
                        <div class="col-md-6">
                            <input id="cell" type="text" class="form-control" name="cell" value="{{ $owner->cell }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $owner->phone }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="toll-free" class="col-md-4 control-label">Toll Free</label>
                        <div class="col-md-6">
                            <input id="toll-free" type="text" class="form-control" name="toll-free" value="{{ $owner->toll_free }}" placeholder="555-555-5555">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fax" class="col-md-4 control-label">Fax</label>
                        <div class="col-md-6">
                            <input id="fax" type="text" class="form-control" name="fax" value="{{ $owner->fax }}" placeholder="555-555-5555">
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
                                Update Owner
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
