    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('Home')}}" class="brand-link text-center">
            <span class="brand-text font-weight-light " style="letter-spacing: 3px">CodeSnip App</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center  justify-content-center">
                <div class="info ">
                    <a href="#" class="d-block">{{ Auth::user()->email }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Hi, {{Auth::user()->name}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('Home')}}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                                    <i class="fa-solid fa-table-columns nav-icon"></i>
                                    <p>All Snippets</p>
                                </a>
                            </li>
                            <hr style="border: 1px solid white">
                            @if(count($GetFolder) > 0)
                                @foreach($GetFolder as $item)
                                    <li class="nav-item ">
                                        <a href="{{route('Folder.show', ['id' => $item->id])}}" class="nav-link btn-outline-info {{ Request::is('FolderID='.$item->id) ? 'active' : '' }} ">
                                            <i class="fa-regular fa-folder nav-icon"></i>
                                            <p>
                                                {{$item->Name}}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="nav-item ">
                                    <a class="nav-link" disabled>
                                        NO FOLDER
                                    </a>
                                </li>
                            @endif
                            <hr style="border: 1px solid white">
                            <li class="nav-item ">
                                <a href="{{route('Folder.index')}}" class="nav-link btn-outline-info {{ Request::is('FolderCreate') ? 'active' : '' }} ">
                                    <i class="fa-solid fa-folder-plus nav-icon"></i>
                                    <p>
                                        Add Folder
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
