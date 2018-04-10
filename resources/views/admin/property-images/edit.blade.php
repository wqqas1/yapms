@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <div class="panel-body">
                    <h3 class="page-header">Edit Property Image</h3>
                    <div class="col-md-2">
                        <a href="/admin/property-images/show/{{ $propertyImage->property_id }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-md-11"></div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="/admin/properties/edit/{{ $propertyImage->property_id }}">Property</a></li>
                            <li role="presentation"><a href="/admin/property-amenities/show/{{ $propertyImage->property_id }}">Property Amenities</a></li>
                            <li role="presentation" class="active"><a href="#">Property Images</a></li>
                            <li role="presentation"><a href="/admin/property-rates/show/{{ $propertyImage->property_id }}">Property Rates</a></li>
                            <li role="presentation"><a href="/admin/property-promos/show/{{ $propertyImage->property_id }}">Property Promos</a></li>
                        </ul>
                    </div>
                    <br />
                    <br />
                    <div class="col-md-12">
                        <div class="panel-body">
                            <form class="form-inline" role="form" method="POST" action="/admin/property-images/upload" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $propertyImage->property_id }}">

                                <div class="form-group">
                                    <label for="description" class="col-md-12 control-label">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="10" cols="55" name="description" required>{{ $property->description }}</textarea>
                                    </div>
                                </div>

                                <br />
                                <br />

                                <div class="form-group">
                                    <label for="property-image" class="col-md-4 control-label">File</label>
                                    <div class="col-md-6">
                                        <input id="property-image" type="file" class="form-control" name="property-image" required></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Upload
                                        </button>
                                    </div>
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
