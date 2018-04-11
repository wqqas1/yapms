@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Show Vendor</h3>
            <div class="col-md-2">
                <a href="/admin/vendors" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <p>
                    <br />
                    <strong>{{ $vendor->name }}</strong><br />
                    <span>
                        {{ $vendor->address1 }} {{ $vendor->address2 }}<br />
                        {{ $vendor->city }}, {{ $vendor->state }}, {{ $vendor->zip }}<br />
                    </span>
                    <strong>Email:</strong> {{ $vendor->email }}<br />
                    <strong>Phone:</strong> {{ $vendor->phone }}<br />
                    <strong>Toll Free:</strong> {{ $vendor->toll_free }}<br />
                    <strong>Fax:</strong> {{ $vendor->fax }}<br />
                    <strong>Created By:</strong><br />
                    <strong>Created At:</strong><br />
                    <strong>Modified By:</strong><br />
                    <strong>Modified At:</strong><br />
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
