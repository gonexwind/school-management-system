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
                            <a class="u-sidebar-nav-menu__link active" href="index.html">
                                <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                            </a>
                        </li>
                        <!-- End Dashboard -->

                        <!-- Attendances -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#attendances">
                                <i class="fas fa-user-check u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Attendances</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="attendances" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Attendances Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-list.html">
                                        <span class="u-sidebar-nav-menu__item-title">Attendances List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-report-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Attendances Report Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-report.html">
                                        <span class="u-sidebar-nav-menu__item-title">Attendances Report</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Attendances -->

                        <!-- Routines -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu1">
                                <i class="fas fa-stopwatch u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">My Routines</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-mathmetics.html">
                                        <span class="u-sidebar-nav-menu__item-title">Routines Mathmetics</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-mathmetics-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Routines Mathmetics</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-accounting.html">
                                        <span class="u-sidebar-nav-menu__item-title">Routines Accounting</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-accounting-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Routines Accounting</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Routines -->

                        <!-- Homework -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#homework">
                                <i class="fas fa-home u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Homework</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="homework" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Homework Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework.html">
                                        <span class="u-sidebar-nav-menu__item-title">Homework</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-add-new.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add New Homework</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Homework -->

                        <!-- Questions -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#questions">
                                <i class="fas fa-question u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Questions</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="questions" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Questions Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-bank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Questions Bank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Questions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Questions -->

                        <!-- Online-Exam -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#online-exam">
                                <i class="fas fa-diagnoses u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Online Exam</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="online-exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Online Exam Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exams.html">
                                        <span class="u-sidebar-nav-menu__item-title">Online Exams</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Online Exam</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Online-Exams -->

                        <!-- Marks -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#marks">
                                <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Marks</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="marks" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Marks Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks.html">
                                        <span class="u-sidebar-nav-menu__item-title">Marks</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Marks</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Marks -->

                        <!-- Students -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#students">
                                <i class="fas fa-user-graduate u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Students</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="students" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-all-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">All Student Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-all.html">
                                        <span class="u-sidebar-nav-menu__item-title">All Student</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Student</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Students -->

                        <!-- Profile -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#profile">
                                <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">My Profile</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="profile" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="my-profile.html">
                                        <span class="u-sidebar-nav-menu__item-title">My Profile</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="edit-my-profile.html">
                                        <span class="u-sidebar-nav-menu__item-title">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Profile -->
                    </ul>
                </nav>
            </div>
        </aside>