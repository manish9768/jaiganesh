@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    User
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ asset('/admin') }}" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>   
                         <li class="m-nav__separator">
                        -
                    </li>                
                    <li class="m-nav__item">
                        <a href="{{ asset('users') }}" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Users
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Show
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        @if($errors->any())
            @foreach($errors->all() as $key => $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-add"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Show User
                        </h3>                        
                    </div>
                </div>
            </div>
            <!--begin::Table-->
            
            <div class="form_div">

    <table class="table">   
    <tbody>
    <tr>
        <th>Name:</th>
         <td id="name"> {{ $user->name }} </td>
    </tr>
    <tr>
        <th>Username:</th>
         <td id="bank_id">  {{ $user->username }} </td>
    </tr>
    <tr>
        <th>Email:</th>
         <td id="branch_id">  {{ $user->email }} </td>
    </tr>     
    <tr>
        <th>Mobile:</th>
         <td id="date_of_sanction"> {{ $user->mobile }} </td>
    </tr>
    <tr>
        <th>User Type :</th>
         <td id="date_of_npa"> {{ $user->user_type }} </td>
    </tr>
    @if($user->user_type == "Bank")
    <tr>
        <th>Bank:</th>
        @if($user->bank)
        <td id="primary_security"> {{ $user->bank->name }} </td>
        @endif 
    </tr>
    <tr>
        <th>Branch:</th>
        @if($user->branch)
        <td id="primary_security_amount"> {{ $user->branch->branch_name }} </td>
        @endif
    </tr>
    @endif
    <tr>
        <th>Employee Type:</th>
         <td id="collateral_security"> {{ $user->employee_type }} </td>
    </tr>
    <tr>
        <th>Employee Code:</th>
         <td id="collateral_security_amount"> {{ $user->employee_code }} </td>
    </tr>
    <tr>
        <th>Address:</th>
         <td id="address"> {{ $user->address }} </td>
    </tr>
     <tr>
        <th>State:</th>
        @if($user->state)
        <td id="state_id">  {{ $user->state->name }}  </td>
        @endif
    </tr>
     <tr>
        <th>District:</th>
        @if($user->district)
        <td id="district_id">  {{ $user->district->name }}  </td>
        @endif
    </tr>
     <tr>
        <th>City:</th>
        @if($user->city)
         <td id="city_id">  {{ $user->city->name }}  </td>
        @endif
    </tr>
      <tr>
        <th>Pincode:</th>
         <td id="pincode"> {{ $user->pincode }} </td>
    </tr>
         
    </tbody>
  </table>             
</div>
 
            <!--end::Table-->
        </div>
    </div>
</div>
@include("admin.layouts.footer")

