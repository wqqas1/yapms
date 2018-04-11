@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="panel-body">
                <h3 class="page-header">Edit {{ $property->name }}</h3>
                <div class="col-md-2">
                    <a href="/admin/properties" class="btn btn-primary">Back</a>
                </div>
                <div class="col-md-10"></div>
                @if (session('status'))
                    <div class="col-md-12 alert alert-info status">
                        {{ session('status') }}
                    </div>
                @endif
                <br />
                <br />{{-- TODO Need to refactor out this better, instead of using br --}}
                <div class="col-md-24">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Property</a></li>
                        <li role="presentation"><a href="/admin/property-amenities/show/{{ $property->id }}">Property Amenities</a></li>
                        <li role="presentation"><a href="/admin/property-images/show/{{ $property->id }}">Property Images</a></li>
                        <li role="presentation"><a href="/admin/property-rates/show/{{ $property->id }}">Property Rates</a></li>
                        <li role="presentation"><a href="/admin/property-promos/show/{{ $property->id }}">Property Promos</a></li>
                    </ul>
                </div>
                <br />
                <br />
                <form class="form-horizontal" role="form" method="POST" action="/admin/properties/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $property->id }}">

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $property->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address1" class="col-md-4 control-label">Address 1</label>
                        <div class="col-md-6">
                            <input id="address1" type="text" class="form-control" name="address1" value="{{ $property->address1 }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address2" class="col-md-4 control-label">Address 2</label>
                        <div class="col-md-6">
                            <input id="address2" type="text" class="form-control" name="address2" value="{{ $property->address2 }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-md-4 control-label">City</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{ $property->city }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" value="{{ $property->state }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip" class="col-md-4 control-label">Zip</label>
                        <div class="col-md-6">
                            <input id="zip" type="text" class="form-control" name="zip" value="{{ $property->zip }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="county" class="col-md-4 control-label">County</label>
                        <div class="col-md-6">
                            <input id="county" type="text" class="form-control" name="county" value="{{ $property->county }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="latitude" class="col-md-4 control-label">Latitude</label>
                        <div class="col-md-6">
                            <input id="latitude" type="text" class="form-control" name="latitude" value="{{ $property->latitude }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="longitude" class="col-md-4 control-label">Longitude</label>
                        <div class="col-md-6">
                            <input id="longitude" type="text" class="form-control" name="longitude" value="{{ $property->longitude }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rooms" class="col-md-4 control-label">Rooms</label>
                        <div class="col-md-6">
                            <input id="rooms" type="text" class="form-control" name="rooms" value="{{ $property->rooms }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="baths" class="col-md-4 control-label">Baths</label>
                        <div class="col-md-6">
                            <input id="baths" type="text" class="form-control" name="baths" value="{{ $property->baths }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="beds" class="col-md-4 control-label">Beds</label>
                        <div class="col-md-6">
                            <input id="beds" type="text" class="form-control" name="beds" value="{{ $property->beds }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sleeps" class="col-md-4 control-label">Sleeps</label>
                        <div class="col-md-6">
                            <input id="sleeps" type="text" class="form-control" name="sleeps" value="{{ $property->sleeps }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pet-friendly" class="col-md-4 control-label">Pet Friendly</label>
                        <div class="col-md-6">
                            <select class="form-control" name="pet-friendly" required>
                                <option value="0" {{ 0 == $property->is_pet_friendly ? 'selected="selected"' : '' }}>No</option>
                                <option value="1" {{ 1 == $property->is_pet_friendly ? 'selected="selected"' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pet-fee" class="col-md-4 control-label">Pet Fee</label>
                        <div class="col-md-6">
                            <input id="pet-fee" type="text" class="form-control" name="pet-fee" value="{{ $property->pet_fee }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="include-pet-fee-with-rate" class="col-md-4 control-label">Include With Rate (Pet Fee)</label>
                        <div class="col-md-6">
                            <select class="form-control" name="include-pet-fee-with-rate">
                                <option value="0" {{ 0 == $property->is_pet_fee_included_with_rate ? 'selected="selected"' : '' }}>No</option>
                                <option value="1" {{ 1 == $property->is_pet_fee_included_with_rate ? 'selected="selected"' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="daily-rate" class="col-md-4 control-label">Daily Rate</label>
                        <div class="col-md-6">
                            <input id="daily-rate" type="text" class="form-control" name="daily-rate" value="{{ $property->daily_rate }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="weekly-rate" class="col-md-4 control-label">Weekly Rate</label>
                        <div class="col-md-6">
                            <input id="weekly-rate" type="text" class="form-control" name="weekly-rate" value="{{ $property->weekly_rate }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="monthly-rate" class="col-md-4 control-label">Monthly Rate</label>
                        <div class="col-md-6">
                            <input id="monthly-rate" type="text" class="form-control" name="monthly-rate" value="{{ $property->monthly_rate }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="minimum-stay" class="col-md-4 control-label">Minimum Stay</label>
                        <div class="col-md-6">
                            <input id="minimum-stay" type="text" class="form-control" name="minimum-stay" value="{{ $property->minimum_stay }}" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="maximum-stay" class="col-md-4 control-label">Maximum Stay</label>
                        <div class="col-md-6">
                            <input id="maximum-stay" type="text" class="form-control" name="maximum-stay" value="{{ $property->maximum_stay }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="description" required>{{ $property->description }}</textarea>
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
