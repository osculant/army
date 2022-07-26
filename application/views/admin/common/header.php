<div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <!-- <img src="<?php echo base_url('assets/images/user.png') ?>" alt="user" class="rounded-circle"> -->
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                       
                                        <a class="dropdown-item" href="<?php echo base_url('index.php/admin/change_password') ?>"><i class="dripicons-lock text-muted"></i> Change Password</a>
                                        <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout') ?>"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <!-- <h3 class="page-title">ADMIN</h3> -->
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>