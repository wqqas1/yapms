@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Edit Promo</h3>
            <div class="col-md-2">
                <a href="/admin/promos" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/promos/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $promo->id }}">

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $promo->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="code" class="col-md-4 control-label">Code</label>
                        <div class="col-md-6">
                            <input id="code" type="text" class="form-control" name="code" value="{{ $promo->code }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="value" class="col-md-4 control-label">Value</label>
                        <div class="col-md-6">
                            <input id="value" type="text" class="form-control" name="value" value="{{ round($promo->value, 2) }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <select class="form-control" name="type">
                                <option value="Fixed" {{ 'Fixed' == $promo->type ? 'selected="selected"' : '' }}>Fixed</option>
                                <option value="Percentage" {{ 'Percentage' == $promo->type ? 'selected="selected"' : '' }}>Percentage</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start-at" class="col-md-4 control-label">Start At</label>
                        <div class="col-md-6">
                            <input id="start-at" type="text" class="form-control" name="start-at" value="{{ $promo->start_at }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="end-at" class="col-md-4 control-label">End At</label>
                        <div class="col-md-6">
                            <input id="end-at" type="text" class="form-control datepicker" name="end-at" value="{{ $promo->end_at }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="description" required>{{ $promo->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
