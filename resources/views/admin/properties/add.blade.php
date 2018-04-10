@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Add Property</h3>
            <div class="col-md-2">
                <a href="/admin/properties" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            @if (session('status'))
                <div class="col-md-12 alert alert-info status">
                    {{ session('status') }}
                </div>
            @endif
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/properties/store">
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
                            <input id="city" type="text" class="form-control" name="city" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip" class="col-md-4 control-label">Zip</label>
                        <div class="col-md-6">
                            <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="county" class="col-md-4 control-label">County</label>
                        <div class="col-md-6">
                            <input id="county" type="text" class="form-control" name="county" value="{{ old('county') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="latitude" class="col-md-4 control-label">Latitude</label>
                        <div class="col-md-6">
                            <input id="latitude" type="text" class="form-control" name="latitude" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="longitude" class="col-md-4 control-label">Longitude</label>
                        <div class="col-md-6">
                            <input id="longitude" type="text" class="form-control" name="longitude" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rooms" class="col-md-4 control-label">Rooms</label>
                        <div class="col-md-6">
                            <input id="rooms" type="text" class="form-control" name="rooms" value="{{ old('rooms') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="baths" class="col-md-4 control-label">Baths</label>
                        <div class="col-md-6">
                            <input id="baths" type="text" class="form-control" name="baths" value="{{ old('baths') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="beds" class="col-md-4 control-label">Beds</label>
                        <div class="col-md-6">
                            <input id="beds" type="text" class="form-control" name="beds" value="{{ old('beds') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sleeps" class="col-md-4 control-label">Sleeps</label>
                        <div class="col-md-6">
                            <input id="sleeps" type="text" class="form-control" name="sleeps" value="{{ old('sleeps') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pet-friendly" class="col-md-4 control-label">Pet Friendly</label>
                        <div class="col-md-6">
                            <select class="form-control" name="pet-friendly" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pet-fee" class="col-md-4 control-label">Pet Fee</label>
                        <div class="col-md-6">
                            <input id="pet-fee" type="text" class="form-control" name="pet-fee" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="include-pet-fee-with-rate" class="col-md-4 control-label">Include With Rate (Pet Fee)</label>
                        <div class="col-md-6">
                            <select class="form-control" name="include-pet-fee-with-rate">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="daily-rate" class="col-md-4 control-label">Daily Rate</label>
                        <div class="col-md-6">
                            <input id="daily-rate" type="text" class="form-control" name="daily-rate" value="{{ old('daily_rate') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="weekly-rate" class="col-md-4 control-label">Weekly Rate</label>
                        <div class="col-md-6">
                            <input id="weekly-rate" type="text" class="form-control" name="weekly-rate" value="{{ old('weekly_rate') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="monthly-rate" class="col-md-4 control-label">Monthly Rate</label>
                        <div class="col-md-6">
                            <input id="monthly-rate" type="text" class="form-control" name="monthly-rate" value="{{ old('monthly_rate') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="minimum-stay" class="col-md-4 control-label">Minimum Stay</label>
                        <div class="col-md-6">
                            <input id="minimum-stay" type="text" class="form-control" name="minimum-stay" value="{{ old('minimum_stay') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="maximum-stay" class="col-md-4 control-label">Maximum Stay</label>
                        <div class="col-md-6">
                            <input id="maximum-stay" type="text" class="form-control" name="maximum-stay" value="{{ old('maximum_stay') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="description" required>{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
