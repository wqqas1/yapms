@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Rates</h3>
            <div class="col-md-12 alert alert-info">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    All properties have a default daily, weekly and monthly rate when they are created. This allows you to creates
                    rates that run for specific periods and link those to a property, overriding default rates for that duration.
                </p>
            </div>
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
                <a href={{ url('/admin/rates/add') }} class="btn btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-1">Value</td>
                            <td class="col-md-1">Type</td>
                            <td class="col-md-2">Start At</td>
                            <td class="col-md-2">End At</td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates as $rate)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/rates/show/' . $rate->id) }}">{{ $rate->name }}</a>
                            </td>
                            <td class="col-md-1">{{ round($rate->value, 2) }}</td>
                            <td class="col-md-1">{{ $rate->type }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($rate->start_at)) }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($rate->end_at)) }}</td>
                            <td class="col-md-1"></td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/rates/edit/' . $rate->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/rates/delete/' . $rate->id) }}">Delete</a>
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
