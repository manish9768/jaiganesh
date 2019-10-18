<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close">
    </i>
</button>
<div class="m-grid__item m-aside-left m-aside-left--skin-dark " id="m_aside_left">
    <!-- BEGIN: Aside Menu -->
    <div class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-dropdown-timeout="500" data-menu-scrollable="false" data-menu-vertical="true" id="m_ver_menu">
        <ul class="m-menu__nav m-menu__nav--dropdown-submenu-arrow ">
 
        @if(\Auth::user()->user_type == "Company") 
            <li aria-haspopup="true" class="m-menu__item ">
                <a class="m-menu__link " href="{{ asset('admin') }}">
                    <i class="m-menu__link-icon flaticon-line-graph">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Dashboard
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            
           
            <li class="m-menu__item m-menu__item--submenu @if(isset($sidebar_master)) m-menu__item--open m-menu__item--expanded @endif" data-menu-submenu-toggle="hover">
                <a class="m-menu__link m-menu__toggle" href="#">
                    <i class="m-menu__link-icon flaticon-layers">
                    </i>
                    <span class="m-menu__link-text">
                        Master
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right">
                    </i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow">
                    </span>
                    <ul class="m-menu__subnav">
                        <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'states') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('states') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            State
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'districts') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('districts') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            District
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'cities') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('cities') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            City
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'pincodes') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('pincodes') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            Pincode
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                         <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'notetypes') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('notetypes') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            Note Type
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'banks') m-menu__item--active @endif">
                            <a class="m-menu__link " href="{{ asset('banks') }}">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            Bank
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
    
            <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'users') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('users') }}">
                    <i class="m-menu__link-icon flaticon-user">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                User
                            </span>
                        </span>
                    </span>
                </a>
            </li>
    
    
                  <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'companyinformation') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('companyinformation') }}">
                    <i class="m-menu__link-icon flaticon-business">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">

                                Company Information

                            </span>
                        </span>
                    </span>
                </a>
            </li>

             <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'companybank') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('company_bank') }}">
                    <i class="m-menu__link-icon flaticon-piggy-bank">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">

                                Company Bank

                            </span>
                        </span>
                    </span>
                </a>
            </li>
        @endif

            <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'accounts') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('accounts') }}">
                    <i class="m-menu__link-icon flaticon-coins">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Account
                            </span>
                        </span>
                    </span>
                </a>
            </li>

         @if(\Auth::user()->user_type == "Company")
            <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'accountrecovery') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('accountrecovery') }}">
                    <i class="m-menu__link-icon flaticon-suitcase">

                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Account Recovery
                            </span>
                        </span>
                    </span>
                </a>
            </li>

            <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'accountbill') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('accountbill') }}">
                    <i class="m-menu__link-icon flaticon-list-3">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Account Bill
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            
            <li aria-haspopup="true" class="m-menu__item @if(isset($sidebar) && $sidebar == 'reports') m-menu__item--active @endif">
                <a class="m-menu__link " href="{{ asset('reports') }}">
                    <i class="m-menu__link-icon flaticon-line-graph">
                    </i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Reports
                            </span>
                        </span>
                    </span>
                </a>
            </li> 
        @endif    
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
