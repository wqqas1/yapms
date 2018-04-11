@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Vendors</h3>
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
                <a href={{ url('/admin/vendors/add') }} class="btn btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-2">Location</td>
                            <td class="col-md-1">Email</td>
                            <td class="col-md-2">Phone</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $vendor)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/vendors/show/' . $vendor->id) }}">{{ $vendor->name }}</a>
                            </td>
                            <td class="col-md-2">{{ $vendor->city }}, {{ $vendor->state }}</td>
                            <td class="col-md-1">{{ $vendor->email }}</td>
                            <td class="col-md-2">{{ $vendor->phone }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/vendors/edit/' . $vendor->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/vendors/delete/' . $vendor->id) }}">Delete</a>
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
