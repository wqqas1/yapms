@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Add Account</h3>
            <div class="col-md-2">
                <a href="/admin/accounts" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/accounts/store">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address1" class="col-md-4 control-label">Address 1</label>
                        <div class="col-md-6">
                            <input id="address1" type="text" class="form-control" name="address1" value="{{ old('address1') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address2" class="col-md-4 control-label">Address 2</label>
                        <div class="col-md-6">
                            <input id="address2" type="text" class="form-control" name="address2" value="{{ old('address2') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-md-4 control-label">City</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip" class="col-md-4 control-label">Zip</label>
                        <div class="col-md-6">
                            <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="toll-free" class="col-md-4 control-label">Toll Free</label>
                        <div class="col-md-6">
                            <input id="toll-free" type="text" class="form-control" name="toll-free" value="{{ old('toll-free') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fax" class="col-md-4 control-label">Fax</label>
                        <div class="col-md-6">
                            <input id="fax" type="text" class="form-control" name="fax" value="{{ old('fax') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
