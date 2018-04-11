@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <div class="panel-body">
                    <h3 class="page-header">Property Images</h3>
                    <div class="col-md-12 alert alert-info">
                        <p>
                            <span class="glyphicon glyphicon-info-sign"></span>
                            The description you enter when uploading an image can also be used alt text. The character limit for alt text on an image
                            is 125 characters.
                        </p>
                    </div>
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
                        <a href="/admin/properties" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-md-11"></div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="/admin/properties/edit/{{ $propertyId }}">Property</a></li>
                            <li role="presentation"><a href="/admin/property-amenities/show/{{ $propertyId }}">Property Amenities</a></li>
                            <li role="presentation" class="active"><a href="#">Property Images</a></li>
                            <li role="presentation"><a href="/admin/property-rates/show/{{ $propertyId }}">Property Rates</a></li>
                            <li role="presentation"><a href="/admin/property-promos/show/{{ $propertyId }}">Property Promos</a></li>
                        </ul>
                    </div>
                    <br />
                    <br />
                    <div class="col-md-6">
                        <div class="panel-body">
                            <form class="form-inline" role="form" method="POST" action="/admin/property-images/upload" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $propertyId }}">

                                <div class="form-group">
                                    <label for="description" class="col-md-12 control-label">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="10" cols="55" name="description" required></textarea>
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
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td class="col-md-1">#</td>
                                    <td class="col-md-3">Image</td>
                                    <td class="col-md-3">Description</td>
                                    <td class="col-md-5"></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($propertyImages as $propertyImage)
                                <tr>
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-3">
                                        {{--
                                            Below is how we used to display the images. Still going to store those files locally for back up
                                            purposes, for now anyways. But now we use the S3 link to display the image
                                        --}}
                                        {{-- <a href="{{ asset('storage') . '/' . $filePath . '/' . $propertyImage->filename }}" target="_blank">
                                            <img src="{{ asset('storage') . '/' . $filePath . '/' . $propertyImage->filename }}" alt="Property Image" width="300" height="225">
                                        </a> --}}
                                        {{-- TODO Need to come back to this, research and fix!!! --}}
                                        <a href="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" target="_blank">
                                            <img src="{{ Storage::disk('s3')->url($filePath . '/' . $propertyImage->filename) }}" alt="Property Image" width="300" height="225">
                                        </a>
                                    </td>
                                    <td class="col-md-3">{{ $propertyImage->description }}</td>
                                    <td class="col-md-5">
                                        <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/property-images/edit/' . $propertyImage->id) }}">Edit</a>
                                        @if ($agent->type == 'Admin')
                                            <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/property-images/delete/' . $propertyImage->id) }}">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
