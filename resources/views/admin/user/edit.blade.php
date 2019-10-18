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
                                Edit
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
                            Edit Users
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ asset('users/edit/'.$user->id) }}" class="m-form m-form--fit m-form--label-align-right" method="POST">
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Name:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="name" value="{{ Request::old('name',$user->name) }}" placeholder="Enter name" required>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Username:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="username" value="{{ Request::old('username',$user->username) }}" placeholder="Enter Username" required>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Email:
                            </label>
                            <div class="col-lg-6">
                                <input type="email" class="form-control m-input" name="email" value="{{ Request::old('email',$user->email) }}" placeholder="Enter email" required>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Mobile:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="mobile" value="{{ Request::old('mobile',$user->mobile) }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="10" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Password:
                            </label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control m-input" name="password" placeholder="Enter Password" required>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Confirm Password:
                            </label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control m-input" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                User Type:
                            </label>
                            <div class="col-lg-6">
                               <select class="form-control m-input" name="user_type" id="user_type" required>
                               <option value=""> Select</option>
                               <option value="Company" @if(Request::old('user_type',$user->user_type)=="Company" ) selected="" @endif>Company</option>
                               <option value="Bank" @if(Request::old('user_type',$user->user_type)=="Bank" ) selected="" @endif>Bank</option>      </select>
                            </div>
                        </div>

                    <div id="bankdetails">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Bank:
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="bank_id" id="bank_id">
                               <option value=""> Select </option>
                                @foreach($banks as $bank)                                 
                                    <option value="{{ $bank->id }}"  @if($user->bank) @if(Request::old('bank_id',$user->bank->id)==$bank->id) selected="" @endif @endif>{{ $bank->name }}</option>
                                @endforeach    
                              </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Branch:
                            </label>
                            <div class="col-lg-6">
                              <select class="form-control m-input" name="branch_id" id="branch_id">
                                <option value=""> Select </option>
                                @foreach($branches as $branch)                                   
                                    <option value="{{ $branch->id }}"  @if($user->bank) @if(Request::old('branch_id',$user->branch->id)==$branch->id) selected="" @endif @endif>{{ $branch->branch_name }}</option>                                    
                                @endforeach    
                              </select>
                            </div>
                        </div>
                    </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Employee Type:
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="employee_type" id="exampleSelect1">
                               <option value=""> Select</option>
                               <option value="A" @if(Request::old('employee_type',$user->employee_type)=="A" ) selected="" @endif>A</option>
                               <option value="B" @if(Request::old('employee_type',$user->employee_type)=="B" ) selected="" @endif>B</option>
                               <option value="C" @if(Request::old('employee_type',$user->employee_type)=="C" ) selected="" @endif>C</option>
                               <option value="D" @if(Request::old('employee_type',$user->employee_type)=="D" ) selected="" @endif>D</option>
                               <option value="E" @if(Request::old('employee_type',$user->employee_type)=="E" ) selected="" @endif>E</option>
                              </select>
                            </div>
                        </div>
                 
                  <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Employee Code:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="employee_code" value="{{ Request::old('employee_code',$user->employee_code) }}" placeholder="Enter Employee Code">
                            </div>
                        </div>
                 <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Address:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="address" value="{{ Request::old('address',$user->address) }}" placeholder="Enter Address">
                            </div>
                        </div>                       

                         <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                State:
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="state_id" id="state_id">

                                @if($user->state)                                 
                                   @foreach($states as $state)
                                    <option value="{{ $state->id }}" @if(Request::old('state_id',$user->state->id) == $state->id) selected="" @endif>{{ $state->name }}</option>
                                    @endforeach   
                                @else
                                    <option value=""> Select </option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}" @if(Request::old('state_id')) selected="" @endif>{{ $state->name }}</option>
                                    @endforeach    
                                @endif
                               
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                District:
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="district_id" id="district_id">
                                 @if($user->district)
                                   <option value="{{ $user->district->id }}" @if(Request::old('district_id',$user->district->id)) selected="" @endif>{{ $user->district->name }}</option>                                
                               @endif
                               @foreach($districts as $district)
                                    <option value="{{ $district->id }}" @if(Request::old('district_id',$district->id)) selected="" @endif>{{ $district->name }}</option> 
                               @endforeach 

                              </select>
                            </div>
                        </div>

                   
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                City:
                            </label>
                            <div class="col-lg-6">
                              <select class="form-control m-input" name="city_id" id="city_id">
                               @if($user->city)
                                   <option value="{{ $user->city->id }}" @if(Request::old('city_id',$user->city->id)) selected="" @endif>{{ $user->city->name }}
                                   </option>                               
                               @endif     
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" @if(Request::old('city_id',$city->id)) selected="" @endif>{{ $city->name }}</option> 
                               @endforeach                                                 
                              </select>
                            </div>
                        </div> 




                         <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Pincode:
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" name="pincode" value="{{ Request::old('pincode',$user->pincode) }}"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="6" placeholder="Enter Pincode">
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                         <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                            </label>
                            <div class="col-lg-6">
                      
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                      <!--   <button type="reset" class="btn btn-secondary">
                            Cancel
                        </button> -->
                         <button type="button" class="btn btn-secondary" onclick="window.open('{{ asset('users') }}','_self')">
                                            Cancel
                                        </button>
                    </div>
                </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@include("admin.layouts.footer")

<script type="text/javascript">
    $('#state_id').change(function(){
          console.log("on change");
    var stateID = $(this).val();  
    console.log(stateID);  
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{asset('get-district-list')}}"+"/"+stateID,
           success:function(res){               
            if(res){
                console.log(res);
                $("#district_id").empty();
                $("#city_id").empty();
                $("#district_id").append('<option value="">Select</option>');
                $.each(res,function(key,value){
                    $("#district_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#district_id").empty();
            }
           }
        });
    }else{
        $("#district_id").empty();
        $("#city_id").empty();
    }      
   });


    $('#district_id').on('change',function(){
    var districtId = $(this).val();    
    if(districtId){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}"+"/"+districtId,
           success:function(res){               
            if(res){
                $("#city_id").empty();
                $("#city_id").append('<option value="">Select</option>');
                $.each(res,function(key,value){
                    $("#city_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city_id").empty();
            }
           }
        });
    }else{
        $("#city_id").empty();
    }
        
   });


$('#bank_id').change(function(){
          console.log("on change");
    var bankId = $(this).val();  
    console.log(bankId);  
    if(bankId){
        $.ajax({
           type:"GET",
           url:"{{asset('get-branch-list')}}"+"/"+bankId,
           success:function(res){               
            if(res){
                console.log(res);
                $("#branch_id").empty();
                $("#branch_id").append('<option value="">Select</option>');
                $.each(res,function(key,value){
                    $("#branch_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#branch_id").empty();
            }
           }
        });
    }else{
        $("#branch_id").empty();       
    }      
   });


$(document).ready(function(){
    
     if($("#user_type").val() != 'Bank')
     {
        $("#bankdetails").hide();
     }   
});

$(document).on('change','#user_type',function(){
            if($("#user_type").val() == 'Bank'){
                    $("#bankdetails").show();  
                    $("#bank_id").attr("required", true);
                    $("#branch_id").attr("required", true);               
            }else{
                $("#bankdetails").hide(); 
                $("#bank_id").attr("required", false);
                $("#branch_id").attr("required", false);                
            }
 });       
</script>