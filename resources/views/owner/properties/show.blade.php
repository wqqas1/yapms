@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">{{ $property->name }}</h3>
            <div class="col-md-12">
                <div class="col-md-2">
                    <a href="/admin/properties" class="btn btn-primary">Back</a>
                </div>

                <br />
                <br />

                <div class="col-md-10"></div>
                @if (session('status'))
                    <div class="col-md-12 alert alert-info status">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-md-12">
                    @foreach($propertyImages as $propertyImage)
                        @if ($loop->iteration == 1)
                            <div class="col-md-12">
                                <a href="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" target="_blank">
                                    <img src="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" alt="{{ $propertyImage->description }}" width="1024" height="768">
                                </a>
                            </div>
                        @else
                            <div class="col-md-2">
                                <a href="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" target="_blank">
                                    <img src="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" alt="{{ $propertyImage->description }}" width="300" height="225">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    <h3>Basic Info</h3>
                    {{-- <strong>Name:</strong> {{ $property->name }}<br /> --}}
                    <strong>Address:</strong> {{ $property->address1 }} {{ $property->address2 }}<br />
                    <strong>City:</strong> {{ $property->city }}<br />
                    <strong>State:</strong> {{ $property->state }}<br />
                    <strong>Zip:</strong> {{ $property->zip }}<br />
                    <strong>County:</strong> {{ $property->county }}<br />
                    <strong>Latitude:</strong> {{ $property->latitude }}<br />
                    <strong>Longitude:</strong> {{ $property->longitude }}<br />
                    <strong>Rooms:</strong> {{ $property->rooms }}<br />
                    <strong>Baths:</strong> {{ $property->baths }}<br />
                    <strong>Beds:</strong> {{ $property->beds }}<br />
                    <strong>Sleeps:</strong> {{ $property->sleeps }}<br />
                </div>
                <div class="col-md-6">
                    <h3></h3>
                    <strong>Pet Friendly:</strong>
                    @if ($property->is_pet_friendly == 0)
                        No <br />
                    @else
                        Yes <br />
                    @endif
                    <strong>Pet Fee:</strong> {{ $property->pet_fee }}<br />
                    <strong>Include With Rate (Pet Fee):</strong>
                    @if ($property->is_pet_fee_included_with_rate == 0)
                        No <br />
                    @else
                        Yes <br />
                    @endif
                    <strong>Daily Rate:</strong> {{ $property->daily_rate }}<br />
                    <strong>Weekly Rate:</strong> {{ $property->weekly_rate }}<br />
                    <strong>Monthly Rate:</strong> {{ $property->monthly_rate }}<br />
                    <strong>Minimum Stay:</strong> {{ $property->minimum_stay }}<br />
                    <strong>Maximum Stay:</strong> {{ $property->maximum_stay }}<br />
                    <strong>Created By:</strong><br />
                    <strong>Created At:</strong>{{ $property->created_at }}<br />
                    <strong>Updated By:</strong><br />
                    <strong>Updated At:</strong>{{ $property->updated_at }}<br />
                </div>
                <div class="col-md-12">
                    <strong>Description:</strong> {{ $property->description }}<br />
                </div>
                @if (!empty($propertyAmenities))
                    <div class="col-md-6">
                        <h3>Property Amenties</h3>
                        @foreach($propertyAmenities as $propertyAmenity)
                            {{ $propertyAmenity->amenity->name }}<br />
                        @endforeach
                    </div>
                @endif
                @if (!empty($propertyPromos))
                    <div class="col-md-6">
                        <h3>Property Promos</h3>
                        @foreach($propertyPromos as $propertyPromo)
                            {{ $propertyPromo->promo->name }}<br />
                        @endforeach
                    </div>
                @endif
                @if (!empty($propertyRates))
                    <div class="col-md-6">
                        <h3>Property Rates</h3>
                        @foreach($propertyRates as $propertyRate)
                            {{ $propertyRate->rate->name }}<br />
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
