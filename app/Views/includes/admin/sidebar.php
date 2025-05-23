<?php 
    use App\Helpers\Translate_helper;
?>
<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <ul class="sidebar-nav">
            <!-- <li class="sidebar-header"> Pages </li> -->
            <li class="sidebar-item">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboards</span>
                    <span class="badge badge-sidebar-primary"></span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard-default.html">Default</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard-analytics.html">Analytics</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard-saas.html">SaaS</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard-social.html">Social</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard-crypto.html">Crypto</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i>
                    <span class="align-middle">Pages</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-profile.html">Profile</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-settings.html">Settings</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-clients.html">Clients</a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#projects" data-bs-toggle="collapse" class="sidebar-link collapsed"> Projects </a>
                        <ul id="projects" class="sidebar-dropdown list-unstyled collapse ">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="pages-projects-list.html">List</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="pages-projects-detail.html">Detail <span class="badge badge-sidebar-primary">New</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">Invoice</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-pricing.html">Pricing</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-tasks.html">Tasks</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-chat.html">Chat <span class="badge badge-sidebar-primary">New</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">Auth</span>
                    <span class="badge badge-sidebar-secondary">Special</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-in.html">Sign In</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-up.html">Sign Up</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-reset-password.html">Reset Password</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-404.html">404 Page</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-500.html">500 Page</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="book-open"></i>
                    <span class="align-middle">Documentation</span>
                </a>
                <ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="docs-introduction.html">Introduction</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="docs-installation.html">Getting Started</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="docs-customization.html">Customization</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="docs-plugins.html">Plugins</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="docs-changelog.html">Changelog</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header"> Tools & Components </li>
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="grid"></i>
                    <span class="align-middle">UI Elements</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-alerts.html">Alerts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">Buttons</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">Cards</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-carousel.html">Carousel</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-embed-video.html">Embed Video</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-general.html">General <span class="badge badge-sidebar-primary">10+</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-grid.html">Grid</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-modals.html">Modals</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-offcanvas.html">Offcanvas</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-placeholders.html">Placeholders</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-tabs.html">Tabs</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="heart"></i>
                    <span class="align-middle">Icons</span>
                    <span class="badge badge-sidebar-primary">1500+</span>
                </a>
                <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">Feather</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-font-awesome.html">Font Awesome</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-square"></i>
                    <span class="align-middle">Forms</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-layouts.html">Layouts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-input-groups.html">Input Groups</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-floating-labels.html">Floating Labels</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="tables-bootstrap.html">
                    <i class="align-middle" data-feather="list"></i>
                    <span class="align-middle">Tables</span>
                </a>
            </li>
            <li class="sidebar-header"> Plugins & Addons </li>
            <li class="sidebar-item">
                <a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-square"></i>
                    <span class="align-middle">Form Plugins</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-advanced-inputs.html">Advanced Inputs</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-editors.html">Editors</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-validation.html">Validation</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="forms-wizard.html">Wizard</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="list"></i>
                    <span class="align-middle">DataTables</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-responsive.html">Responsive Table</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-buttons.html">Table with Buttons</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-column-search.html">Column Search</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-fixed-header.html">Fixed Header</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-multi.html">Multi Selection</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-datatables-ajax.html">Ajax Sourced Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="pie-chart"></i>
                    <span class="align-middle">Charts</span>
                    <span class="badge badge-sidebar-primary">New</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">Chart.js</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span class="badge badge-sidebar-primary">New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="notifications.html">
                    <i class="align-middle" data-feather="bell"></i>
                    <span class="align-middle">Notifications</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="map-pin"></i>
                    <span class="align-middle">Maps</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">Google Maps</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-vector.html">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="calendar.html">
                    <i class="align-middle" data-feather="calendar"></i>
                    <span class="align-middle">Calendar</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="share-2"></i>
                    <span class="align-middle">Multi Level</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed"> Two Levels </a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" data-bs-target="#">Item 1</a>
                                <a class="sidebar-link" data-bs-target="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link collapsed"> Three Levels </a>
                        <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link collapsed"> Item 1 </a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" data-bs-target="#">Item 1</a>
                                        <a class="sidebar-link" data-bs-target="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" data-bs-target="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
</nav>