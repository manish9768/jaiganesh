@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Users
                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ asset('/admin') }}" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Users
                            </span>
                        </a>
                    </li>
                   
                </ul>
            </div>

        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('error') }}
        </div>
        @endif
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                           <!--  <i class="flaticon-list"></i> -->
                            <i class="m-menu__link-icon flaticon-user">
                    </i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Users
                        </h3>
                    </div>
                </div>
            @if(\Auth::user()->user_type == "Company")  
                <div class="m-portlet__head-tools">
                    <a href="{{ asset('users/add') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                            Add User
                        </span>
                    </a>
                </div>
            @endif    
            </div>
            <div class="m-portlet__body">
                <div class="m-section">
                    <div class="m-section__content">
                        <div style="overflow-x:auto;">
                        <table class="table m-table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                     <th>
                                        Email
                                    </th>
                                    <th>
                                        Mobile
                                    </th>
                                   {{--  <th>
                                        Employee Type
                                    </th> --}}
                                @if(\Auth::user()->user_type == "Company")     
                                    <th>
                                        Action(s)
                                    </th>
                                @endif    
                                </tr>
                            </thead>
                            <tbody>
                                    
                                @foreach($users as $key => $user)                                    
                                <tr>
                                    <th scope="row">
                                        {{ ++$key }}
                                    </th>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                     <td>
                                        {{ $user->username }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                     <td>
                                        {{ $user->mobile }}
                                    </td>
                                    {{-- <td>
                                        {{ ucfirst($user->employee_type) }}
                                    </td> --}}                                      
                                    <td>                                   
                                        <a href="{{ asset('users/show/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                            title="View">
                                            <i class="la la-eye"></i>
                                        </a>
                                    @if(\Auth::user()->user_type == "Company")    
                                        <a href="{{ asset('users/edit/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                            title="Edit">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <a href="{{ asset('users/delete/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill confirm"
                                            title="Delete" confirm-text="Are You Sure?">
                                            <i class="la la-trash"></i>
                                        </a>
                                    @endif     
                                    </td>                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("admin.layouts.footer")