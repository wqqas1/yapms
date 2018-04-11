@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <div class="panel-body">
                    <h3 class="page-header">Property Promos</h3>
                    @if (!empty($message))
                        <div class="col-md-12 alert alert-info message">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="col-md-2">
                        <a href="/admin/properties" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-md-11"></div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="/admin/properties/edit/{{ $id }}">Property</a></li>
                            <li role="presentation"><a href="/admin/property-amenities/show/{{ $id }}">Property Amenities</a></li>
                            <li role="presentation"><a href="/admin/property-images/show/{{ $id }}">Property Images</a></li>
                            <li role="presentation"><a href="/admin/property-rates/show/{{ $id }}">Property Rates</a></li>
                            <li role="presentation" class="active"><a href="#">Property Promos</a></li>
                        </ul>
                    </div>
                    <br />
                    <br />
                    <div class="col-md-6">
                        <h3 class="page-header">Promos</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td class="col-md-1">#</td>
                                    <td class="col-md-8">Name</td>
                                    <td class="col-md-3"></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($promos as $promo)
                                <tr>
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-8">{{ $promo->name }}</td>
                                    <td class="col-md-3">
                                        <a class="btn btn-small btn-primary" href="{{ URL::to('/admin/property-promos/link/promo/' . $promo->id . '/property/' . $id) }}">Link</a>
                                        <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/promos/edit/' . $promo->id) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3 class="page-header">Linked Promos</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td class="col-md-1">#</td>
                                    <td class="col-md-8">Name</td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-2"></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($propertyPromos as $propertyPromo)
                                <tr>
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-8">{{ $propertyPromo->promo->name}}</td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-2">
                                        {{-- TODO Questionable wether I should pass in the property id, see unlink function in PropertyPromosController --}}
                                        <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/property-promos/unlink/promo/' . $propertyPromo->id . '/property/' . $id)}}">Unlink</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
