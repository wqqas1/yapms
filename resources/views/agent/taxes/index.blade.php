@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Fees</h3>
            <br />
            <div class="col-md-12 alert alert-info">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Fees are associated with all properties and can not be linked with just specific ones. Also please
                    keep in mind that the pet fee is added directly when creating the property, if it is pet friendly.
                    This was done to eliminate one additional flag that would have to be set for all created fees.
                </p>
            </div>
            <div class="col-md-12 alert alert-info">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    If you would like to include the fee with the rate when calculating the total cost for booking the
                    property, when creating the fee, select the yes option for include with rate.
                </p>
            </div>
            <br />
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
                <a href={{ url('/admin/fees/add') }} class="btn btn-primary">Add</a>
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
                            <td class="col-md-2">Include With Rate</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fees as $fee)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $fee->name }}</td>
                            <td class="col-md-1">{{ round($fee->value, 2) }}</td>
                            <td class="col-md-1">{{ $fee->type }}</td>
                            @if ($fee->is_included_with_rate == 0)
                                <td class="col-md-2">No</td>
                            @else
                                <td class="col-md-2">Yes</td>
                            @endif
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/fees/edit/' . $fee->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/fees/delete/' . $fee->id) }}">Delete</a>
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
