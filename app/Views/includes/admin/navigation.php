<?php 
    use App\Helpers\Translate_helper;
?>
<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>
        <!-- <form class="d-none d-sm-inline-block">
            <div class="input-group input-group-navbar">
                <input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
                <button class="btn" type="button">
                    <i class="align-middle" data-feather="search"></i>
                </button>
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item px-2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Mega menu </a>
                <div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
                    <div class="d-md-flex align-items-start justify-content-start">
                        <div class="dropdown-mega-list">
                            <div class="dropdown-header">UI Elements</div>
                            <a class="dropdown-item" href="#">Alerts</a>
                            <a class="dropdown-item" href="#">Buttons</a>
                            <a class="dropdown-item" href="#">Cards</a>
                            <a class="dropdown-item" href="#">Carousel</a>
                            <a class="dropdown-item" href="#">General</a>
                            <a class="dropdown-item" href="#">Grid</a>
                            <a class="dropdown-item" href="#">Modals</a>
                            <a class="dropdown-item" href="#">Tabs</a>
                            <a class="dropdown-item" href="#">Typography</a>
                        </div>
                        <div class="dropdown-mega-list">
                            <div class="dropdown-header">Forms</div>
                            <a class="dropdown-item" href="#">Layouts</a>
                            <a class="dropdown-item" href="#">Basic Inputs</a>
                            <a class="dropdown-item" href="#">Input Groups</a>
                            <a class="dropdown-item" href="#">Advanced Inputs</a>
                            <a class="dropdown-item" href="#">Editors</a>
                            <a class="dropdown-item" href="#">Validation</a>
                            <a class="dropdown-item" href="#">Wizard</a>
                        </div>
                        <div class="dropdown-mega-list">
                            <div class="dropdown-header">Tables</div>
                            <a class="dropdown-item" href="#">Basic Tables</a>
                            <a class="dropdown-item" href="#">Responsive Table</a>
                            <a class="dropdown-item" href="#">Table with Buttons</a>
                            <a class="dropdown-item" href="#">Column Search</a>
                            <a class="dropdown-item" href="#">Muulti Selection</a>
                            <a class="dropdown-item" href="#">Ajax Sourced Data</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul> -->
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="message-circle"></i>
                            <span class="indicator">4</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                            <div class="position-relative"> 4 New Messages </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Ashley Briggs</div>
                                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                        <div class="text-muted small mt-1">15m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Carl Jenkins</div>
                                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Stacie Hall</div>
                                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                        <div class="text-muted small mt-1">4h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Bertha Martin</div>
                                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                        <div class="text-muted small mt-1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all messages</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell-off"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header"> 4 New Notifications </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-danger" data-feather="alert-circle"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Update completed</div>
                                        <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-warning" data-feather="bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Lorem ipsum</div>
                                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                        <div class="text-muted small mt-1">6h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-primary" data-feather="home"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Login from 192.186.1.1</div>
                                        <div class="text-muted small mt-1">8h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-success" data-feather="user-plus"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">New connection</div>
                                        <div class="text-muted small mt-1">Anna accepted your request.</div>
                                        <div class="text-muted small mt-1">12h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                        <img src="img/flags/us.png" alt="English" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#">
                            <img src="img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
                            <span class="align-middle">English</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />
                            <span class="align-middle">Spanish</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="img/flags/de.png" alt="German" width="20" class="align-middle me-1" />
                            <span class="align-middle">German</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="img/flags/nl.png" alt="Dutch" width="20" class="align-middle me-1" />
                            <span class="align-middle">Dutch</span>
                        </a>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>
                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <!-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> -->
                        <span class="text-dark">
                            <?php
                                echo
                                    $_SESSION['firstName'] . ' '
                                    . $_SESSION['secondName'] . ' ('
                                    . $_SESSION['accountId'] . ')';
                                ?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- <a class="dropdown-item" href="pages-profile.html">
                            <i class="align-middle me-1" data-feather="user"></i> Profile </a>
                        <a class="dropdown-item" href="#">
                            <i class="align-middle me-1" data-feather="pie-chart"></i> Analytics </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
                        <a class="dropdown-item" href="#">Help</a> -->
                        <a
                            class="dropdown-item"
                            href="<?php echo $baseUrl . 'logout'; ?>"
                            >
                            <?php echo Translate_helper::translate('Sign out'); ?>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
