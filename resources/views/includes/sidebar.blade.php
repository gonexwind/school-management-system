@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside id="sidebar" class="u-sidebar">
    <div class="u-sidebar-inner bg-gradient bdrs-30">
        <header class="u-sidebar-header">
            <a class="u-sidebar-logo" href="index.html">
                <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" width="124" alt="Stream Dashboard">
            </a>
        </header>

        <nav class="u-sidebar-nav">
            <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                <!-- Dashboard -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link {{ ($route == 'dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                        <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Manage User -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link {{ str_contains($route, 'users') ? 'active' : '' }}" href="" data-target="#manage-user">
                        <i class="fa fa-users u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Users</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="manage-user" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('users.index') }}">
                                <span class="u-sidebar-nav-menu__item-title">View User</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('users.create') }}">
                                <span class="u-sidebar-nav-menu__item-title">Add User</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Manage User -->

                <!-- Manage Profile -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link {{ ($prefix == '/profile') ? 'active' : '' }}" href="" data-target="#manage-profile">
                        <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Profile</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="manage-profile" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ url('/profile') }}">
                                <span class="u-sidebar-nav-menu__item-title">Your Profile</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ url('/profile/password') }}">
                                <span class="u-sidebar-nav-menu__item-title">Change Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Manage Profile -->

                <!-- Setup Management -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link {{ ($prefix == '/setup') ? 'active' : '' }}" href="" data-target="#setup-management">
                        <i class="fa fa-tasks u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Setup</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="setup-management" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('student.class.index') }}">
                                <span class="u-sidebar-nav-menu__item-title">Student Class</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Student Year</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Student Group</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Student Shift</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Fee Category</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Fee Category Amount</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Exam Type</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">School Subject</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Assign Subject</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Designation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Setup Management -->

                <!--Student Management-->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="" data-target="#student-management">
                        <i class="fa fa-user-graduate u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Students</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="student-management" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Student Registration</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Roll Generate</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Registration Fee</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Monthly Fee</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Exam Fee</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Student Management-->

                <!-- Employee Management -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="" data-target="#employee-management">
                        <i class="fa fa-chalkboard-teacher u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Employees</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="employee-management" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Registration</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Salary</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Leave</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Attendance</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Monthly Salary</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Employee Management -->

                <!-- Marks Management -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="" data-target="#marks-management">
                        <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Marks</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="marks-management" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Marks Entry</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Marks Edit</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Marks Grade</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Marks Management -->

                <!-- Accounts Management -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="" data-target="#accounts-management">
                        <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Accounts</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="accounts-management" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Student Fee</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Employee Salary</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="">
                                <span class="u-sidebar-nav-menu__item-title">Other Cost</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Accounts Management -->
            </ul>
        </nav>
    </div>
</aside>