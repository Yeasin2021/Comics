


<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{asset('admins/assets/')}}/images/users/profile.png" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Markarn Doe</h5>
                        <a href="index.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                             <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Minimal </a></li>
                                <li><a href="#">Analytical</a></li>
                                <li><a href="#">Demographical</a></li>
                                <li><a href="#">Modern</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('slider.content.show')}}" aria-expanded="false"><i class="fas fa-sliders-h"></i><span class="hide-menu">Slider Content</span></a>
                            
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('admin-about-form')}}" aria-expanded="false"><i class="fas fa-sliders-h"></i><span class="hide-menu">About Me</span></a>
                            
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('blog.index')}}" aria-expanded="false"><i class="fas fa-blog"></i><span class="hide-menu">Blog</span></a>
                            
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('comics-index')}}" aria-expanded="false"><i class="fas fa-book-open"></i><span class="hide-menu">Comics</span></a>
                            <li>Comics Category</li>
                        </li>
                        
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        
                       
                        
                        
                        
                        
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>