@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <h3 class="page-header">Properties</h3>
                <div class="col-md-12 alert alert-info">
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        After adding a property, you can add amenities, rates, promos, images, work orders, and documents
                        provided they are already created through editing an existing property.
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
                <div class="col-md-11">
                    <a href={{ url('/admin/properties/add') }} class="btn btn-primary btn-sm">Add</a>
                </div>
                <div class="col-md-1">
                    <a href={{ url('/admin/properties/deleted') }} class="btn btn-primary btn-sm">Deleted</a>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-2">City</td>
                            <td class="col-md-1">State</td>
                            <td class="col-md-1">Rooms</td>
                            <td class="col-md-1">Baths</td>
                            <td class="col-md-1">Beds</td>
                            <td class="col-md-1">Sleeps</td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($properties as $property)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/properties/show/' . $property->id) }}">{{ $property->name }}</a>
                            </td>
                            <td class="col-md-2">{{ $property->city }}</td>
                            <td class="col-md-1">{{ $property->state }}</td>
                            <td class="col-md-1">{{ $property->rooms }}</td>
                            <td class="col-md-1">{{ $property->baths }}</td>
                            <td class="col-md-1">{{ $property->beds }}</td>
                            <td class="col-md-1">{{ $property->sleeps }}</td>
                            <td class="col-md-2">
                                <a class="btn btn-xs btn-primary" href="{{ URL::to('/admin/properties/book/' . $property->id) }}">Book</a>
                                <a class="btn btn-xs btn-warning" href="{{ URL::to('/admin/properties/edit/' . $property->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-xs btn-danger" href="{{ URL::to('/admin/properties/delete/' . $property->id) }}">Delete</a>
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
@endsection
