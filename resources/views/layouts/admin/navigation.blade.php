<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">{{ config('app.name', 'YAPMS') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/admin/messages">
                                <span class="glyphicon glyphicon-envelope"></span> Messages
                                <span class="label label-pill label-success">10</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/profile">
                                <span class="glyphicon glyphicon-user"></span> Profile
                            </a>
                        </li>
                        <li>
                            <a href="/admin/settings">
                                <span class="glyphicon glyphicon-cog"></span> Settings
                            </a>
                        </li>
                        <li>
                            <a href="/admin/help">
                                <span class="glyphicon glyphicon-book"></span> Help
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-off"></span> Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
