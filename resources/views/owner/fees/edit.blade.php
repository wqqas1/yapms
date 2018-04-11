@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Edit Fee</h3>
            <div class="col-md-2">
                <a href="/admin/fees" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/fees/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $fee->id }}">

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $fee->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="value" class="col-md-4 control-label">Value</label>
                        <div class="col-md-6">
                            <input id="value" type="text" class="form-control" name="value" value="{{ round($fee->value, 2) }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <select class="form-control" name="type">
                                <option value="Fixed" {{ 'Fixed' == $fee->type ? 'selected="selected"' : '' }}>Fixed</option>
                                <option value="Percentage" {{ 'Percentage' == $fee->type ? 'selected="selected"' : '' }}>Percentage</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="include-with-rate" class="col-md-4 control-label">Include with rate</label>
                        <div class="col-md-6">
                            <select class="form-control" name="include-with-rate">
                                <option value="0" {{ 0 == $fee->is_included_with_rate ? 'selected="selected"' : '' }}>No</option>
                                <option value="1" {{ 1 == $fee->is_included_with_rate ? 'selected="selected"' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
