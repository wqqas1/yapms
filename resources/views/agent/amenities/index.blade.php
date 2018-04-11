@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Amenities</h3>
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
                <a href={{ url('/admin/amenities/add') }} class="btn btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-7"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($amenities as $amenity)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/amenities/show/' . $amenity->id) }}">{{ $amenity->name }}</a>
                            </td>
                            <td class="col-md-7"></td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/amenities/edit/' . $amenity->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/amenities/delete/' . $amenity->id) }}">Delete</a>
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
