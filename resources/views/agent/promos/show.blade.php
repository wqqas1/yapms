@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Show Promo</h3>
            <div class="col-md-2">
                <a href="/admin/promos" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="col-md-12">
                <p>
                    <br />
                    <strong>Name:</strong> {{ $promo->name }}<br />
                    <strong>Code:</strong> {{ $promo->code }}<br />
                    <strong>Value:</strong> {{ round($promo->value, 2) }}<br />
                    <strong>Type:</strong> {{ $promo->type }}<br />
                    <strong>Start At:</strong> {{ date('m-d-Y H:i', strtotime($promo->start_at)) }}<br />
                    <strong>End At:</strong> {{ date('m-d-Y H:i', strtotime($promo->end_at)) }}<br />
                    <strong>Description:</strong><br /> {{ $promo->description }}<br />
                </p>
            </div>
            <div class="col-md-12">
                <h4 class="page-header">Linked Property Promos</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-11">Property Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propertyPromos as $propertyPromo)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-11">
                                {{-- TODO I'd like to be able to unlink from here, will come back to this one day --}}
                                <a href="{{ URL::to('/admin/property-promos/show/' . $propertyPromo->property_id)}}">
                                    {{ $propertyPromo->property->name}}
                                </a>
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
