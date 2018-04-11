@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Work Orders</h3>
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
                <a href={{ url('/admin/work-orders/add') }} class="btn btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-1">Vendor</td>
                            <td class="col-md-1">Property</td>
                            <td class="col-md-2">Start At</td>
                            <td class="col-md-2">End At</td>
                            <td class="col-md-1">Status</td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workOrders as $workOrder)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/work-orders/show/' . $workOrder->id) }}">{{ $workOrder->name }}</a>
                            </td>
                            <td class="col-md-1">{{ $workOrder->vendor->name }}</td>
                            <td class="col-md-1">{{ $workOrder->property->name }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($workOrder->start_at)) }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($workOrder->end_at)) }}</td>
                            <td class="col-md-1">{{ $workOrder->status }}</td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/work-orders/edit/' . $workOrder->id) }}">Edit</a>
                                <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/work-orders/delete/' . $workOrder->id) }}">Delete</a>
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
