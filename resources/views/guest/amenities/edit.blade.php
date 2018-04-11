@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Edit Amenity</h3>
            <div class="col-md-2">
                <a href="/admin/amenities" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-11"></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin/amenities/update">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $amenity->id }}">

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $amenity->name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Amenity
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
