<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('dashboard ') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Dashboard</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Functionality
</div>


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('/ ') }}">
    <i class="far fa-eye"></i>
        <span>View Site</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ url('/userMessage') }}">
    <i class="fas fa-envelope"></i>
        <span>Messages</span></a>
</li>


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('/viewAllUsers ') }}">
    <i class="fas fa-users"></i>
        <span>View All Users</span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('/cms ') }}">
    <i class="fas fa-tasks"></i>
        <span>CMS</span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('categries ') }}">
    <i class="fab fa-cuttlefish"></i>
        <span>Categries</span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('tag ') }}">
    <i class="fas fa-tags"></i>
        <span>Tags</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="{{ url('blog ') }}">
    <i class="fas fa-tags"></i>
        <span>Blogs</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="{{ url('awaitingBlogs ') }}">
    <i class="fas fa-user-clock"></i>
        <span>Awaiting Blogs</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="{{ url('approvedBlogsAdmin ') }}">
    <i class="fas fa-user-clock"></i>
        <span>Approved Blogs</span></a>
</li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->