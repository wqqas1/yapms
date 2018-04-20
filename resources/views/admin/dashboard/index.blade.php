@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.admin.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Dashboard</h3>
            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder checking-in">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-calendar glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">1,345 / 2,345</span>
                    </div>
                    <div class="col-md-12">
                        <h4>CHECKING IN</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder checking-out">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-calendar glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">657 / 2,500</span>
                    </div>
                    <div class="col-md-12">
                        <h4>CHECKING OUT</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder unread-messages">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-envelope glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>UNREAD MESSAGES</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder open-work-orders">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-wrench glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>OPEN WORK ORDERS</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder units-not-clean">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-alert glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>UNITS NOT CLEAN</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder owner-stays-this-week">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-home glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>OWNER STAYS THIS WEEK</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder unit-reviews">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-bullhorn glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>NEW REVIEWS</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder bookings-today">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-usd glyph-style"></span>
                    </div>
                    <div class="col-md-10">
                        <span class="dashboard-counts">10</span>
                    </div>
                    <div class="col-md-12">
                        <h4>BOOKINGS TODAY</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
