<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href=" {{ route('dashboard') }} ">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @if(Auth::user()->can('stock.menu'))
                <li>
                    <a href="{{ route('stock') }}">
                        <span class="badge bg-pink float-end">Hot</span>
                       <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Stock </span>
                    </a>
                </li>
                @endif
    
           
                <li class="menu-title mt-2">Apps</li>

                
                @if(Auth::user()->can('employee.menu'))
                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Employee Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            @if(Auth::user()->can('employee.all'))
                            <li>
                                <a href="{{ route('all.employee') }}">All Employee</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('employee.add'))
                            <li>
                                <a href="{{ route('add.employee') }}">Add Employee</a>
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('customer.all'))
                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Customer Manage  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}">All Customer</a>
                            </li>
                            @if(Auth::user()->can('customer.add'))
                            <li>
                                <a href="{{ route('add.customer') }}">Add Customer</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Supplier Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">All Supplier</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}">Add Supplier</a>
                            </li>
        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#salary" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Employee Salary </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="salary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                            </li>
                            <li>
                                <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                            </li>
                            <li>
                                <a href="{{ route('pay.salary') }}">Pay Salary</a>
                            </li> 

                            <li>
                                <a href="{{ route('month.salary') }}">Last Month Salary</a>
                            </li>
        
                        </ul>
                    </div>
                </li>

                @if(Auth::user()->can('employee.attendence.menu'))
                <li>
                    <a href="#attendence" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Employee Attendence </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="attendence">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Employee Attendence List </a>
                            </li>
        
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('all.category'))
                <li>
                    <a href="#category" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="category">
                        <ul class="nav-second-level">
                            {{-- @if(Auth::user()->can('all.category')) --}}
                            <li>
                                <a href="{{ route('all.category') }}">All Category </a>
                            </li>
                            {{-- @endif --}}
                        </ul>
                    </div>
                </li>
                @endif

                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Products  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}">All Product </a>
                            </li>
        
                             <li>
                                <a href="{{ route('add.product') }}">Add Product </a>
                            </li>
        
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#permission" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Roles And Permission    </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="permission">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.permission') }}">All Permission </a>
                            </li>            
                                
                            <li>
                                <a href="{{ route('all.roles') }}">All Roles </a>
                            </li>
                            <li>
                                <a href="{{ route('add.roles.permission') }}">Roles in Permission </a>
                            </li>
                            <li>
                                <a href="{{ route('all.roles.permission') }}">All Roles in Permission </a>
                            </li>
                
                        </ul>
                    </div>
                </li>
        
                
                <li>
                    <a href="#admin" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Setting Admin User    </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="admin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admin') }}">All Admin </a>
                            </li>            
                                
                            <li>
                                <a href="{{ route('add.admin') }}">Add Admin </a>
                            </li>                
                        </ul>
                    </div>
                </li>



                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="javascript:void(0);">Log In</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Log In 2</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="javascript:void(0);">Starter</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Timeline</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Sitemap</a>
                            </li>

                        </ul>
                    </div>
                </li>


                

                
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>