@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Accounts</h3>
            <div class="col-md-2">
                <a href={{ url('/admin/accounts/add') }} class="btn btn-sm btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            @if (!empty($message))
                <div class="col-md-12 alert alert-info message">
                    {{ $message }}
                </div>
            @endif
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-2">Location</td>
                            <td class="col-md-1">Email</td>
                            <td class="col-md-2">Phone</td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $account)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/accounts/show/' . $account->id) }}">{{ $account->name }}</a>
                            </td>
                            <td class="col-md-2">{{ $account->city }}, {{ $account->state }}</td>
                            <td class="col-md-1">{{ $account->email }}</td>
                            <td class="col-md-2">{{ $account->phone }}</td>
                            <td class="col-md-1">
                                @if ($account->is_api_enabled == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2">
                                <a class="btn btn-xs btn-warning" href="{{ URL::to('/admin/accounts/edit/' . $account->id) }}">Edit</a>
                                <a class="btn btn-xs btn-danger" href="{{ URL::to('/admin/accounts/delete/' . $account->id) }}">Delete</a>
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
