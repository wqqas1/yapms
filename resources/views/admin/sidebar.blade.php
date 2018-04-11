<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li {{{ (Request::is('admin/dashboard') ? 'class=active' : '') }}}><a href="/admin/dashboard">Dashboard</span></a></li>
        <li {{{ (Request::is('admin/accounts') ? 'class=active' : '') }}}><a href="/admin/accounts">Accounts</a></li>
        <li {{{ (Request::is('admin/agents') ? 'class=active' : '') }}}><a href="/admin/agents">Agents</a></li>
        <li {{{ (Request::is('admin/documents') ? 'class=active' : '') }}}><a href="/admin/documents">Documents</a></li>
        <li {{{ (Request::is('admin/messages') ? 'class=active' : '') }}}><a href="/admin/messages">Messages</a></li>
        <li {{{ (Request::is('admin/owners') ? 'class=active' : '') }}}><a href="/admin/owners">Owners</a></li>
        <li {{{ (Request::is('admin/reports') ? 'class=active' : '') }}}><a href="/admin/reports">Reports</a></li>
        <li {{{ (Request::is('admin/support') ? 'class=active' : '') }}}><a href="/admin/support">Support</a></li>
    </ul>
</div>
