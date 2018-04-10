<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li {{{ (Request::is('admin/dashboard') ? 'class=active' : '') }}}><a href="/admin/dashboard">Dashboard</span></a></li>
        <li {{{ (Request::is('admin/partners') ? 'class=active' : '') }}}><a href="/admin/partners">Partners</a></li>
        <li {{{ (Request::is('admin/associates') ? 'class=active' : '') }}}><a href="/admin/associates">Associates</a></li>
        <li {{{ (Request::is('admin/clients') ? 'class=active' : '') }}}><a href="/admin/clients">Clients</a></li>
        <li {{{ (Request::is('admin/agents') ? 'class=active' : '') }}}><a href="/admin/agents">Agents</a></li>
        <li {{{ (Request::is('admin/owners') ? 'class=active' : '') }}}><a href="/admin/owners">Owners</a></li>
        <li {{{ (Request::is('admin/leads') ? 'class=active' : '') }}}><a href="/admin/leads">Leads</a></li>
        <li {{{ (Request::is('admin/sales') ? 'class=active' : '') }}}><a href="/admin/sales">Sales</a></li>
        <li {{{ (Request::is('admin/documents') ? 'class=active' : '') }}}><a href="/admin/documents">Documents</a></li>
        <li {{{ (Request::is('admin/reports') ? 'class=active' : '') }}}><a href="/admin/reports">Reports</a></li>
        <li {{{ (Request::is('admin/support') ? 'class=active' : '') }}}><a href="/admin/support">Support</a></li>
    </ul>
</div>
