<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active"><a href="{{ route('dashboard.index') }}"><i
                                    class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        {{-- <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI
                                    Elements</span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li><a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li><a href="ui-cards.html"><span
                                            class="badge badge-primary float-right">New</span>Cards</a>
                                </li>
                                <li><a href="ui-panels.html">Panels</a>
                                </li>
                                <li><a href="ui-general.html">General</a>
                                </li>
                                <li><a href="ui-modals.html">Modals</a>
                                </li>
                                <li><a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li><a href="ui-icons.html">Icons</a>
                                </li>
                                <li><a href="ui-grid.html">Grid</a>
                                </li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                </li>
                                <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                </li>
                                <li><a href="ui-typography.html">Typography</a>
                                </li>
                                <li><a href="ui-dragdrop.html"><span
                                            class="badge badge-primary float-right">New</span>Drag &amp;
                                        Drop</a>
                                </li>
                                <li><a href="ui-sweetalert2.html"><span
                                            class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="parent"><a href=""><i class="icon mdi mdi-file"></i><span>Dokumen</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('admin.document.category') }}">Kategori</a>
                                </li>
                                <li><a href="{{ route('admin.document') }}">Dokumen</a>
                                </li>

                            </ul>
                        </li>
                        <li class=""><a href="{{ route('user') }}"><i class="icon mdi mdi-account"></i><span>List
                                    Member</span></a>
                        </li>
                        {{-- <li class=""><a href="{{ route('admin.portofolio') }}"><i
                                    class="icon mdi mdi-book-image"></i><span>Portofolio</span></a>
                        </li> --}}
                        <li class=""><a href="{{ route('admin.testimonial') }}"><i
                                    class="icon mdi mdi-comments"></i><span>Testimoni</span></a>
                        </li>
                        <li class=""><a href="{{ route('admin.banner') }}"><i
                                    class="icon mdi mdi-collection-image-o"></i><span>Banner</span></a>
                        </li>
                        <li class=""><a href="{{ route('admin.client') }}"><i
                                    class="icon mdi mdi-collection-folder-image"></i><span>Logo Mitra</span></a>
                        </li>
                        <li class=""><a href="{{ route('admin.message') }}"><i
                                    class="icon mdi mdi-comments"></i><span>List Pesan</span></a>
                        </li>

                        <li class="divider">Blog</li>
                        <li class=""><a href="{{ route('admin.post.category') }}"><i
                                    class="icon mdi mdi-collection-plus"></i><span>Kategori</span></a>
                        </li>
                        <li class=""><a href="{{ route('admin.post.tag') }}"><i
                                    class="icon mdi mdi-tag"></i><span>Tag</span></a>
                        </li>
                        <li class=""><a href="{{ route('admin.post') }}"><i
                                    class="icon mdi mdi-blogger"></i><span>Post</span></a>
                        </li>
                        {{-- <li class="parent"><a href="#"><i
                                    class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Elements</a>
                                </li>
                                <li><a href="form-validation.html">Validation</a>
                                </li>
                                <li><a href="form-multiselect.html">Multiselect</a>
                                </li>
                                <li><a href="form-wizard.html">Wizard</a>
                                </li>
                                <li><a href="form-masks.html">Input Masks</a>
                                </li>
                                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                </li>
                                <li><a href="form-upload.html">Multi Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i
                                    class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                            <ul class="sub-menu">
                                <li><a href="tables-general.html">General</a>
                                </li>
                                <li><a href="tables-datatables.html">Data Tables</a>
                                </li>
                                <li><a href="tables-filters.html"><span
                                            class="badge badge-primary float-right">New</span>Table Filters</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="pages-blank.html">Blank Page</a>
                                </li>
                                <li><a href="pages-blank-header.html">Blank Page Header</a>
                                </li>
                                <li><a href="pages-login.html">Login</a>
                                </li>
                                <li><a href="pages-login2.html">Login v2</a>
                                </li>
                                <li><a href="pages-404.html">404 Page</a>
                                </li>
                                <li><a href="pages-sign-up.html">Sign Up</a>
                                </li>
                                <li><a href="pages-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="pages-profile.html">Profile</a>
                                </li>
                                <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                </li>
                                <li><a href="pages-timeline.html">Timeline</a>
                                </li>
                                <li><a href="pages-timeline2.html">Timeline v2</a>
                                </li>
                                <li><a href="pages-invoice.html"><span
                                            class="badge badge-primary float-right">New</span>Invoice</a>
                                </li>
                                <li><a href="pages-calendar.html">Calendar</a>
                                </li>
                                <li><a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li><a href="pages-code-editor.html"><span class="badge badge-primary float-right">New
                                        </span>Code Editor</a>
                                </li>
                                <li><a href="pages-booking.html"><span
                                            class="badge badge-primary float-right">New</span>Booking</a>
                                </li>
                                <li><a href="pages-loaders.html"><span
                                            class="badge badge-primary float-right">New</span>Loaders</a>
                                </li>
                                <li><a href="pages-ajax-loader.html"><span
                                            class="badge badge-primary float-right">New</span>AJAX Loader</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider">Features</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                            <ul class="sub-menu">
                                <li><a href="email-inbox.html">Inbox</a>
                                </li>
                                <li><a href="email-read.html">Email Detail</a>
                                </li>
                                <li><a href="email-compose.html">Email Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i
                                    class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                            <ul class="sub-menu">
                                <li><a href="layouts-primary-header.html">Primary Header</a>
                                </li>
                                <li><a href="layouts-success-header.html">Success Header</a>
                                </li>
                                <li><a href="layouts-warning-header.html">Warning Header</a>
                                </li>
                                <li><a href="layouts-danger-header.html">Danger Header</a>
                                </li>
                                <li><a href="layouts-search-input.html">Search Input</a>
                                </li>
                                <li><a href="layouts-offcanvas-menu.html">Off Canvas Menu</a>
                                </li>
                                <li><a href="layouts-top-menu.html"><span
                                            class="badge badge-primary float-right">New</span>Top Menu</a>
                                </li>
                                <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                </li>
                                <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                </li>
                                <li><a href="layouts-boxed-layout.html"><span
                                            class="badge badge-primary float-right">New</span>Boxed Layout</a>
                                </li>
                                <li><a href="pages-blank-aside.html">Page Aside</a>
                                </li>
                                <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                                </li>
                                <li><a href="layouts-sub-navigation.html"><span
                                            class="badge badge-primary float-right">New</span>Sub
                                        Navigation</a>
                                </li>
                                <li><a href="layouts-mega-menu.html"><span
                                            class="badge badge-primary float-right">New</span>Mega Menu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a>
                                </li>
                                <li><a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu
                                    Levels</span></a>
                            <ul class="sub-menu">
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level
                                                    2</span></a>
                                        </li>
                                        <li class="parent"><a href="#"><i
                                                    class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level
                                                            3</span></a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level
                                                            3</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level
                                                    2</span></a>
                                        </li>
                                        <li class="parent"><a href="#"><i
                                                    class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level
                                                            3</span></a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level
                                                            3</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="documentation.html"><i
                                    class="icon mdi mdi-book"></i><span>Documentation</span></a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current
                    Project</span></div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
        </div>
    </div>
</div>
