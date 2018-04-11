@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Owners</h3>
            @if ($clientCount != 0)
                <div class="col-md-3">
                    <a href={{ url('/admin/owners/add') }} class="btn btn-primary">Add</a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <form class="form-inline" role="form" method="POST" action="/admin/owners/send-invite">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Email</div>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="input-group">
                                {{-- TODO Would like to style up the select / option area --}}
                                <select class="form-control" name="client" required>
                                    <option value="">Select a client</option>
                                    @foreach($clients as $client)
                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Invite</button>
                    </form>
                </div>
            @endif
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
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td class="col-md-1">Id</td>
                            <td class="col-md-2">Client</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-1">Email</td>
                            <td class="col-md-2">Phone</td>
                            <td class="col-md-1"></td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($owners as $owner)
                        <tr>
                            <td class="col-md-1">{{ $owner->id }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/clients/show/' . $owner->client->id) }}">{{ $owner->client->name }}</a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/owners/show/' . $owner->id) }}">{{ $owner->first_name }} {{ $owner->last_name }}</a>
                            </td>
                            <td class="col-md-1">{{ $owner->user->email }}</td>
                            <td class="col-md-2">{{ $owner->phone }}</td>
                            <td class="col-md-1"></td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2">
                                <a class="btn btn-xs btn-warning" href="{{ URL::to('/admin/owners/edit/' . $owner->id) }}">Edit</a>
                                <a class="btn btn-xs btn-danger" href="{{ URL::to('/admin/owners/delete/' . $owner->id) }}">Delete</a>
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
