@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">New Mission</h3>
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
                        Create New Mission
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
                           <input class="form-control" name="title" required></input>
                        </div>
                     </div>      
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">*Paymnent type:</label>
                        <div class="col-lg-6">
                           <select class="form-control m-input m-input--square" name="paymnent-type">
                              <option value="Once">Once</option>
                              <option value="Hour">Hour</option>
                              <option value="Daily">Daily</option>
                           </select>
                        </div>
                     </div>    
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">*Price:</label>
                        <div class="col-lg-6">
                           <input class="form-control" type="number" step="0.01" name="price"></input>
                        </div>
                     </div>                                       
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Start Time:</label>
                        <div class="col-lg-6">
                           <input type="text" class="form-control" id="start-time" name="start-time" placeholder="Select start date and time" >
                        </div>
                     </div>       
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">End Time:</label>
                        <div class="col-lg-6">
                           <input type="text" class="form-control" id="end-time" name="end-time" placeholder="Select end date and time" >
                        </div>
                     </div> 
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Description:</label>
                        <div class="col-lg-6">
                           <input class="form-control" name="description"></input>
                        </div>
                     </div>                                               
                  </div>
               </div>
               <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </form>
            <!--end::Form-->
         </div>
         <!--end::Portlet-->
      </div>
   </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
var InitDateTimePickers = function () {
   var datetimepickers = function () {
      $('#start-time, #end-time').datetimepicker({
         todayHighlight: true,
         autoclose: true,
         format: 'mm/dd/yyyy hh:ii'
      });
   }

   return {
      init: function() {
         datetimepickers(); 
      }
   };
}();

jQuery(document).ready(function() {    
   InitDateTimePickers.init();
}); 
</script>
@endsection