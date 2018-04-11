@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Add Rate</h3>
            <div class="col-md-2">
                <a href="/admin/rates" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            @if (session('status'))
                <div class="col-md-12 alert alert-info status">
                    {{ session('status') }}
                </div>
            @endif
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/rates/store">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="value" class="col-md-4 control-label">Value</label>
                        <div class="col-md-6">
                            <input id="value" type="text" class="form-control" name="value" value="{{ old('value') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <select class="form-control" name="type" required>
                                <option value="Daily">Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start-at" class="col-md-4 control-label">Start At</label>
                        <div class="col-md-6">
                            <input id="start-at" type="text" class="form-control" name="start-at" value="{{ old('start_at') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="end-at" class="col-md-4 control-label">End At</label>
                        <div class="col-md-6">
                            <input id="end-at" type="text" class="form-control" name="end-at" value="{{ old('end_at') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
