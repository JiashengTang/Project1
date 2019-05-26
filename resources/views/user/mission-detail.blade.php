@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Job</h3>
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
                        Information and Detail
                     </h3>
                  </div>
               </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--label-align-right" method="post" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">*Title: </label>
                        <div class="col-lg-6">
                           <label class="form-control" name="title" readonly>{{$mission->title}}</label>
                        </div>
                     </div>      
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">*Payment type:</label>
                        <div class="col-lg-6">
                           <label class="form-control" name="payment-type" readonly>{{$mission->payment_type}}</label>
                        </div>
                     </div>    
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">*Price:</label>
                        <div class="col-lg-6">
                           <label class="form-control" type="number" step="0.01" name="price" readonly>{{$mission->price}}</label>
                        </div>
                     </div>                                       
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Start Time:</label>
                        <div class="col-lg-6">
                           <label type="text" class="form-control" name="start-time" readonly>{{$mission->start_time}}</label>
                        </div>
                     </div>       
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">End Time:</label>
                        <div class="col-lg-6">
                           <label type="text" class="form-control" name="end-time" readonly>{{$mission->end_time}}</label>
                        </div>
                     </div> 
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Description:</label>
                        <div class="col-lg-6">
                           <label class="form-control" name="description" readonly>{{$mission->description}}</label>
                        </div>
                     </div>                                               
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
                        Link New Skill
                     </h3>
                  </div>
               </div>
            </div>
            <!--begin::Form-->
            <form id="new-course-form" class="m-form m-form--label-align-right" method="post" enctype="multipart/form-data" action="{{url('/missions/skills/link/'.$mission->id)}}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Choose skill:</label>
                        <div class="col-lg-4">
                           <select class="form-control m-input m-input--square" name="skill-id">
                              @foreach ($skills as $skill)
                              <option value="{{$skill->id}}">{{$skill['name']}}</option>
                             @endforeach
                           </select>
                        </div>
                        <button id="submit-btn" type="submit" class="btn btn-primary">Link Skill</button>
                     </div>  
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
            <div class="m-portlet__body">
               <!--begin::Table-->
               <table class="table table-striped table-bordered table-hover table-checkable" id="skill-table">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>     
                     @foreach($mission->skills as $skill)
                     <tr>
                        <td>{{$skill->name}}</td>
                        <td>{{$skill->type->name}}</td>
                        <td>{{$skill->description}}</td>
                        <td nowrap>
                           <a href="{{url('/missions/skills/unlink/' . $mission->id . '/' . $skill->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                           <i class="la la-trash">Delete</i>
                           </a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <!--end::Table-->
            </div>
         </div>
         <!--end::Portlet-->
      </div>
   </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
var DatatablesColumnRendering = function() {
    var initActivityTable = function() {
        var table = $('#skill-table');
        // begin first table
        table.DataTable({
            responsive: true,
            pageLength: 10,
            order: [3, 'desc']
        });
    };

    return {
        init: function() {
            initActivityTable();
        },
    };
}();

jQuery(document).ready(function() {
    DatatablesColumnRendering.init();
});
</script>
@endsection