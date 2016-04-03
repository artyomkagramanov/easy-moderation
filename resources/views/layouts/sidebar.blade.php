<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">
        
        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="{!! url('/') !!}" class="logo-expanded">
                    <img src="/assets/images/easy_logo.png" alt=""/>
                </a>

                <a href="{!! url('/') !!}" class="logo-collapsed">
                    <img src="/assets/images/ams-logo.png" width="40" alt=""/>
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>

            
        </header>
        
        
                
        <ul id="main-menu" class="main-menu">
            <li class=" @if(Request::is('/') ) active @endif">
                <a href="{!! url( request()->segment(1) . '/') !!}">
                    <i class="fa-file-image-o"></i>
                    <span class="title">Photos</span>
                </a>
            </li>
            <li class=" @if(Request::is('dashboard') ) active @endif">
                <a href="{!! url( request()->segment(1) . '/dashboard') !!}">
                    <i class="linecons-desktop"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=" @if(Request::is('export*')) active @endif">
                <a href="{!! url( request()->segment(1) . '/export') !!}">
                    <i class="fa fa-arrow-up"></i>
                    <span class="title">Export</span>
                </a>
            </li>
            <li class=" @if(Request::is('import*')) active @endif">
                <a href="{!! url( request()->segment(1) . '/import') !!}">
                    <i class="fa fa-arrow-down"></i>
                    <span class="title">Import</span>
                </a>
            </li>
            <li class=" @if(Request::is('tags*')) active @endif">
                <a href="{!! url( request()->segment(1) . '/tags'  ) !!}">
                    <i class="fa fa-random"></i>
                    <span class="title">Tags</span>
                </a>
            </li>
        </ul>
        
    </div>

</div>