<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
    <div id="theme-settings" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
        </div>
    </div>
</div>
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close fa fa-times"></i>
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                        <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                    </div>
                </form>
            </div>
            <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Team review meeting at 3.00 PM
                            </label>
                        </div>
                        <i class="remove fa fa-times-circle"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Prepare for presentation
                            </label>
                        </div>
                        <i class="remove fa fa-times-circle"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Resolve all the low priority tickets due today
                            </label>
                        </div>
                        <i class="remove fa fa-times-circle"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Schedule meeting for next week
                            </label>
                        </div>
                        <i class="remove fa fa-times-circle"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Project review
                            </label>
                        </div>
                        <i class="remove fa fa-times-circle"></i>
                    </li>
                </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="fa fa-times-circle text-primary mr-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="fa fa-times-circle text-primary mr-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <div class="wrapper d-flex">
                            <p>Catherine</p>
                        </div>
                        <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- chat tab ends -->
    </div>
</div>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="images/faces/face5.jpg" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome Jane
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index-2.html">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
                <i class="fa fa-puzzle-piece menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">Page Layouts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Sidebar Layouts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="far fa-compass menu-icon"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="fas fa-clipboard-list menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="fab fa-wpforms menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="fas fa-pen-square menu-icon"></i>
                <span class="menu-title">Editors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="fas fa-chart-pie menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="fas fa-table menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
                <i class="fas fa-minus-square menu-icon"></i>
                <span class="menu-title">Popups</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
                <i class="fas fa-bell menu-icon"></i>
                <span class="menu-title">Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="fa fa-stop-circle menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="fas fa-map-marker-alt menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="fas fa-exclamation-circle menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="fas fa-file menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                <i class="fas fa-briefcase menu-icon"></i>
                <span class="menu-title">Apps</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/apps/email.html"> Email </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html"> Calendar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/apps/todo.html"> Todo </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/apps/gallery.html"> Gallery </a></li>
                </ul>`
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="fas fa-shopping-cart menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation.html">
                <i class="far fa-file-alt menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
