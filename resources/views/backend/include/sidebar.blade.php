


<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{Auth::user()->image}}" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Markarn Doe</h5>
                        <a href="index.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="{{ route('subscriber') }}" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
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
                        <li> <a class="has-arrow waves-effect waves-white" href="{{ route('admin.home') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                            
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