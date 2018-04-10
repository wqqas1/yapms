@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Show Owner</h3>
            <div class="col-md-2">
                <a href="/admin/owners" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <p>
                    <br />
                    <strong>Client:</strong> {{ $owner->client->name }}<br />
                    <strong>First Name:</strong> {{ $owner->first_name }}<br />
                    <strong>Last Name:</strong> {{ $owner->last_name }}<br />
                    <strong>Email:</strong> {{ $owner->user->email }}<br />
                    <strong>Address 1:</strong> {{ $owner->address1 }}<br />
                    <strong>Address 2:</strong> {{ $owner->address2 }}<br />
                    <strong>City:</strong> {{ $owner->city }}<br />
                    <strong>State:</strong> {{ $owner->state }}<br />
                    <strong>Zip:</strong> {{ $owner->zip}}<br />
                    <strong>Phone:</strong> {{ $owner->phone }}<br />
                    <strong>Toll Free:</strong> {{ $owner->toll_free }}<br />
                    <strong>Fax:</strong> {{ $owner->fax }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
