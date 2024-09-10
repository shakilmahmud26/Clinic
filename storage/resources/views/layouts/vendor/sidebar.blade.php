<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span>LOGO</span>
                {{-- <img src="{{ asset('assets/img/logo/' . $company[0]->logo) }}" alt="" style="width: 150px"> --}}
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- Dashboard Route --}}
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>

        {{-- Laboratory Route --}}
        <li
            class="menu-item {{ request()->routeIs('report.accession', 'report.daily-worksheet', 'report.result-viewer', 'report.test-list','profile-setup','log.reagent','log.control','qc.daily','qc.auto-analysis','levey-jennings') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-store-alt'></i>
                <div class="text-truncate">Laboratory</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('report.accession') ? 'active' : '' }}">
                    <a href="{{ route('report.accession') }}" class="menu-link">
                        <div>Accessions Report</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('report.daily-worksheet') ? 'active' : '' }}">
                    <a href="{{ route('report.daily-worksheet') }}" class="menu-link">
                        <div>Daily Worksheet</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('report.result-viewer') ? 'active' : '' }}">
                    <a href="{{ route('report.result-viewer') }}" class="menu-link">
                        <div>Result Viewer</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('report.test-list') ? 'active' : '' }}">
                    <a href="{{ route('report.test-list') }}" class="menu-link">
                        <div>Test List</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('profile-setup') ? 'active' : '' }}">
                    <a href="{{ route('profile-setup') }}" class="menu-link">
                        <div>Profile Setup</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('log.reagent') ? 'active' : '' }}">
                    <a href="{{ route('log.reagent') }}" class="menu-link">
                        <div>Reagent Log</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('log.control') ? 'active' : '' }}">
                    <a href="{{ route('log.control') }}" class="menu-link">
                        <div>Control Log</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('qc.daily') ? 'active' : '' }}">
                    <a href="{{ route('qc.daily') }}" class="menu-link">
                        <div>Daily QC</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('qc.auto-analysis') ? 'active' : '' }}">
                    <a href="{{ route('qc.auto-analysis') }}" class="menu-link">
                        <div>QC Auto-Analysis</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('levey-jennings') ? 'active' : '' }}">
                    <a href="{{ route('levey-jennings') }}" class="menu-link">
                        <div>Levey Jennings</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Administration Route --}}
        <li
            class="menu-item {{ request()->routeIs('patient.add', 'patient.list', 'id-scanner', 'draw.master','draw.phlebotomist','booking.list','physician.list','covid.test','covid.claim','report.billing','report.production') ? 'active open' : 'open' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-user-circle'></i>
                <div class="text-truncate">Administration</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('patient.add') ? 'active' : '' }}">
                    <a href="{{ route('patient.add') }}" class="menu-link">
                        <div>Add Patient</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('patient.list') ? 'active' : '' }}">
                    <a href="{{ route('patient.list') }}" class="menu-link">
                        <div>Patient List</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('id-scanner') ? 'active' : '' }}">
                    <a href="{{ route('id-scanner') }}" class="menu-link">
                        <div>ID Scanner</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('draw.master') ? 'active' : '' }}">
                    <a href="{{ route('draw.master') }}" class="menu-link">
                        <div>Master Draw List</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('draw.phlebotomist') ? 'active' : '' }}">
                    <a href="{{ route('draw.phlebotomist') }}" class="menu-link">
                        <div>Phlebotomist Draw List</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('booking.list') ? 'active' : '' }}">
                    <a href="{{ route('booking.list') }}" class="menu-link">
                        <div>Booking/Schedule</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('report.billing') ? 'active' : '' }}">
                    <a href="{{ route('report.billing') }}" class="menu-link">
                        <div>Billing Report</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('report.production') ? 'active' : '' }}">
                    <a href="{{ route('report.production') }}" class="menu-link">
                        <div>Production Report</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('physician.list') ? 'active' : '' }}">
                    <a href="{{ route('physician.list') }}" class="menu-link">
                        <div>Physician Table</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('covid.test') ? 'active' : '' }}">
                    <a href="{{ route('covid.test') }}" class="menu-link">
                        <div>Covid Test Count Report</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('covid.claim') ? 'active' : '' }}">
                    <a href="{{ route('covid.claim') }}" class="menu-link">
                        <div>Covid Claim Report</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('logout') ? 'active' : '' }}">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-power-off'></i>
                <div class="text-truncate">Logout</div>
            </a>
        </li>
    </ul>
</aside>