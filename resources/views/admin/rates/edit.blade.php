@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Edit Rate</h3>
            <div class="col-md-2">
                <a href="/admin/rates" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/rates/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $rate->id }}">

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $rate->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="value" class="col-md-4 control-label">Value</label>
                        <div class="col-md-6">
                            <input id="value" type="text" class="form-control" name="value" value="{{ round($rate->value, 2) }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <select class="form-control" name="type">
                                <option value="Daily" {{ 'Daily' == $rate->type ? 'selected="selected"' : '' }}>Daily</option>
                                <option value="Weekly" {{ 'Weekly' == $rate->type ? 'selected="selected"' : '' }}>Weekly</option>
                                <option value="Monthly" {{ 'Monthly' == $rate->type ? 'selected="selected"' : '' }}>Monthly</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start-at" class="col-md-4 control-label">Start At</label>
                        <div class="col-md-6">
                            <input id="start-at" type="text" class="form-control" name="start-at" value="{{ $rate->start_at }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="end-at" class="col-md-4 control-label">End At</label>
                        <div class="col-md-6">
                            <input id="end-at" type="text" class="form-control" name="end-at" value="{{ $rate->end_at }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Rate
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
