<li class="nav-item">
    <a href="{{ route('frontend_index') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
            Site
            <span class="badge badge-info right"></span>
        </p>
    </a>

</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Users
            <i class="fas fa-angle-right right"></i>
            <span class="badge badge-info right"></span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('users.create') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Role
            <i class="fas fa-angle-right right"></i>
            <span class="badge badge-info right"></span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.create') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>List</p>
            </a>
        </li>

    </ul>
</li>


<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-calendar-week"></i>
        <p>
            Schedule
            <i class="fas fa-angle-right right"></i>
            <span class="badge badge-info right"></span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('schedule') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>list</p>
            </a>
        </li>


    </ul>
</li>

