@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">{{ $amenity->name }} Amenity</h3>
            @if (!empty($message))
                <div class="col-md-12 alert alert-info message">
                    {{ $message }}
                </div>
            @endif
            @if (session('status'))
                <div class="col-md-12 alert alert-info status">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-2">
                <a href="/admin/amenities" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-10"></div>
            <br />
            <br />
            <div class="col-md-12">
                <h4 class="page-header">Linked Property Amenities</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-11">Property Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propertyAmenities as $propertyAmenity)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-11">
                                {{-- TODO I'd like to be able to unlink from here, will come back to this one day --}}
                                <a href="{{ URL::to('/admin/property-amenities/show/' . $propertyAmenity->property_id)}}">
                                    {{ $propertyAmenity->property->name}}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
