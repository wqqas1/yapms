@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <h3>Deleted Properties</h3>
                <div class="col-md-2">
                    <a href="/admin/properties" class="btn btn-primary">Back</a>
                </div>
                <div class="col-md-10"></div>
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
                        @foreach($deletedProperties as $deletedProperty)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $deletedProperty->name }}</td>
                            <td class="col-md-2">{{ $deletedProperty->city }}</td>
                            <td class="col-md-1">{{ $deletedProperty->state }}</td>
                            <td class="col-md-1">{{ $deletedProperty->rooms }}</td>
                            <td class="col-md-1">{{ $deletedProperty->baths }}</td>
                            <td class="col-md-1">{{ $deletedProperty->beds }}</td>
                            <td class="col-md-1">{{ $deletedProperty->sleeps }}</td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/properties/restore/' . $deletedProperty->id) }}">Restore</a>
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
