<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">Mon Application</span>
    </a>
    <div class="sidebar">
    <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.etudiants.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>Étudiants</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.evaluations.index') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Évaluations</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.notes.index') }}" class="nav-link">
            <i class="nav-icon fas fa-pen"></i>
            <p>Notes</p>
            </a>
        </li>
        </ul>
    </nav>
    </div>
</aside>
