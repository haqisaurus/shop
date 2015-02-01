<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="{{ url('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menu-catalog"><i class="fa fa-fw fa-cubes"></i> Catalog <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menu-catalog" class="collapse">
                <li>
                    <a href="{{ URL::to('category') }}">Category</a>
                </li>
                <li>
                    <a href="{{ url('product') }}">Product</a>
                </li>
                <li>
                    <a href="{{ url('supplier') }}">supplier</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menu-sales"><i class="fa fa-fw fa-bar-chart-o"></i> Sales <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menu-sales" class="collapse">
                <li>
                    <a href="{{ url('orders') }}">Order</a>
                </li>
                <li>
                    <a href="{{ url('returns') }}">Return</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('messages') }}"><i class="fa fa-inbox"></i> Message</a>
        </li>
        <li>
            <a href="{{ url('user') }}"><i class="fa fa-users"></i> Users</a>
        </li>
        <li>
            <a href="{{ url('settings') }}"><i class="fa fa-cogs"></i> Settings</a>
        </li>
    </ul>
</div>