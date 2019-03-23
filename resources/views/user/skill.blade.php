@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Manage Skill</h3>
      </div>
   </div>
</div>
<div class="m-content">
   <div class="row">
      <div class="col-lg-12">
         <!--begin::Portlet-->
         <div class="m-portlet">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h3 class="m-portlet__head-text">
                        Add New Skill
                     </h3>
                  </div>
               </div>
            </div>
            <!--begin::Form-->
            <form id="new-course-form" class="m-form m-form--label-align-right" method="post" enctype="multipart/form-data" action="{{url('/skills/add')}}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                  	<div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Choose skill:</label>
                        <div class="col-lg-6">
                           <select class="form-control m-input m-input--square" name="skill-id">
                           	@foreach ($skills as $skill)
                    	 		   <option value="{{$skill->id}}">{{$skill['name']}}</option>
							        @endforeach
                           </select>
                        </div>
                     </div>  
                  </div>
               </div>
               <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                     <button id="submit-btn" type="submit" class="btn btn-primary">Add</button>
                  </div>
               </div>
            </form>
            <!--end::Form-->
         </div>
         <!--end::Portlet-->
         <!--begin::Portlet-->
         <div class="m-portlet">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h3 class="m-portlet__head-text">
                        Skill List
                     </h3>
                  </div>
               </div>
            </div>
            <!--begin::Table-->
            <table class="table table-striped table-bordered table-hover table-checkable" id="course-table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Type</th>
                     <th>Description</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($userSkills as $skill)
                  <tr>
                     <td>{{$skill->name}}</td>
                     <td>{{$skill->type->name}}</td>
                     <td>{{$skill->description}}</td>
                     <td nowrap>
                        <a href="{{url('/skills/delete/' . $skill->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-trash">Delete</i>
                        </a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <!--end::Table-->
         </div>
         <!--end::Portlet-->
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection