@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Promos</h3>
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
                <a href={{ url('/admin/promos/add') }} class="btn btn-primary">Add</a>
            </div>
            <div class="col-md-10"></div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-1">#</td>
                            <td class="col-md-2">Name</td>
                            <td class="col-md-1">Code</td>
                            <td class="col-md-1">Value</td>
                            <td class="col-md-1">Type</td>
                            <td class="col-md-2">Start At</td>
                            <td class="col-md-2">End At</td>
                            <td class="col-md-2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promos as $promo)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">
                                <a href="{{ URL::to('/admin/promos/show/' . $promo->id) }}">{{ $promo->name }}</a>
                            </td>
                            <td class="col-md-1">{{ $promo->code }}</td>
                            <td class="col-md-1">{{ round($promo->value, 2) }}</td>
                            <td class="col-md-1">{{ $promo->type }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($promo->start_at)) }}</td>
                            <td class="col-md-2">{{ date('m-d-Y H:i', strtotime($promo->end_at)) }}</td>
                            <td class="col-md-2">
                                <a class="btn btn-small btn-warning" href="{{ URL::to('/admin/promos/edit/' . $promo->id) }}">Edit</a>
                                @if ($agent->type == 'Admin')
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('/admin/promos/delete/' . $promo->id) }}">Delete</a>
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
