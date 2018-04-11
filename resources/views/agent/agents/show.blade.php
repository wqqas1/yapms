@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('agent.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-11">
                <h3 class="page-header">{{ $agent->first_name }} {{ $agent->last_name}}</h3>
            </div>
            <div class="col-md-1">
                <a href="/admin/agents" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12">
                <strong>Client:</strong> {{ $agent->client->name }}<br />
                <strong>Email:</strong> {{ $agent->user->email }}<br />
                <strong>Phone:</strong> {{ $agent->phone }}<br />
                <strong>Cell:</strong> {{ $agent->cell }}<br />
                <strong>Toll Free:</strong> {{ $agent->toll_free }}<br />
                <strong>Fax:</strong> {{ $agent->fax }}<br />
                <strong>Type:</strong> {{ $agent->type }}<br />
                <strong>Created By:</strong><br />
                <strong>Created At:</strong>{{ $agent->created_at }}<br />
                <strong>Updated By:</strong><br />
                <strong>Updated At:</strong>{{ $agent->updated_at }}<br />
            </div>
        </div>
    </div>
</div>
@endsection
