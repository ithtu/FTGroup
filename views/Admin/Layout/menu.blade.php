<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="#"></i> <h1>Danh Mục</h1> </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Slide<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ds_slide')}}"> Danh sách Slide</a>
                                </li>
                                <li>
                                    <a href="{{route('them_slide')}}">Thêm danh sách Slide</a>
                                </li>
                            </ul> 
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('ds_theloai')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Thể Loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ds_theloai')}}"> Danh sách thể loại</a>
                                </li>
                                <li>
                                    <a href="{{route('them_theloai')}}">Thêm danh sách thể loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Loại Tin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ds_loaitin')}}">Danh sách loại tin</a>
                                </li>
                                <li>
                                    <a href="{{route('them_loaitin')}}">Thêm loại tin</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Tin Tức <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ds_tintuc')}}">Danh sách tin tức</a>
                                </li>
                                <li>
                                    <a href="{{route('them_tintuc')}}">Thêm tin tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ds_user')}}">Danh sách User</a>
                                </li>
                                <li>
                            <a href="{{route('them_users')}}">Thêm User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>