<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="{{url('/dashboard')}}">
                            <div class="logo-img">
                              
                            </div>
                            <span class="text">Bệnh Viện</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel"></div>
                                <div class="nav-item active">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Trang Chính</span></a>
                                </div>
                              <!--   <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div> -->

                                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Phòng Ban</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('department.create')}}" class="menu-item">Tạo Mới</a>
                                        <a href="{{route('department.index')}}" class="menu-item">Xem</a>
                                       
                                    </div>
                                </div>
                                @endif

                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Bác Sỹ</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item">Tạo Mới</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item">Xem</a>
                                       
                                    </div>
                                </div>
                                @endif
                                  @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Giờ Các Cuộc Hẹn</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('appointment.create')}}" class="menu-item">Tạo Mới</a>
                                        <a href="{{route('appointment.index')}}" class="menu-item">Kiểm Tra</a>
                                       
                                    </div>
                                </div>
                                @endif

                                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Bệnh Nhân</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patients.today')}}" class="menu-item">Bệnh Nhân(hôm nay)</a>
                                        <a href="{{route('prescribed.patients')}}" class="menu-item">Tất Cả Bệnh Nhân(Đơn Thuốc)</a>
                                       
                                    </div>
                                </div>
                                @endif

                               


                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                 <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Cuộc Hẹn Của Bệnh Nhân</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patient')}}" class="menu-item">Các Cuộc Hẹn Hôm Nay</a>
                                        <a href="{{route('all.appointments')}}" class="menu-item">Tất Cả Các Cuộc Hẹn</a>
                                       
                                    </div>
                                </div>
                                
                                @endif

                                <div class="nav-item active">
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Đăng Xuất </span></a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
                                
                            </nav>
                        </div>
                    </div>
                </div>