@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-11">
                <h3 class="page-header">{{ $account->name }}</h3>
            </div>
            <div class="col-md-1">
                <a href="/admin/accounts" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12">
                <span>
                    {{ $account->address1 }} {{ $account->address2 }}<br />
                    {{ $account->city }}, {{ $account->state }}, {{ $account->zip }}<br />
                </span>
                <strong>Email:</strong> {{ $account->email }}<br />
                <strong>Phone:</strong> {{ $account->phone }}<br />
                <strong>Toll Free:</strong> {{ $account->toll_free }}<br />
                <strong>Fax:</strong> {{ $account->fax }}<br />
                <strong>Status:</strong> {{ $account->is_api_enabled }}<br />
                <strong>Created By:</strong><br />
                <strong>Created At:</strong>{{ $account->created_at }}<br />
                <strong>Updated By:</strong><br />
                <strong>Updated At:</strong>{{ $account->updated_at }}<br />
            </div>
        </div>
    </div>
</div>
@endsection
