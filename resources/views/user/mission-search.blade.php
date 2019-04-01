@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Find Mission</h3>
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
                        What Misiion You Want?
                     </h3>
                  </div>
               </div>
            </div>
            <!--begin::Form-->
             <form class="m-form m-form--label-align-right" method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Add skill:</label>
                        <div class="col-lg-4">
                           <select class="form-control m-input m-input--square" id="skill-select">
                              @foreach ($skills as $skill)
                              <option value="{{$skill->id}}">{{$skill['name']}}</option>
                              @endforeach
                           </select>   
                        </div>
                        <button id="submit-btn" type="button" class="btn btn-primary" onclick="addNewSkill()">Add Skill</button>
                     </div>  
                  </div>
               </div>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Skill:</label>
                        <div class="col-lg-6">
                           <input class="form-control" type="text" name="skill" id="skill-id" hidden></input>
                           <label class="form-control" id="skill-name"></label>
                        </div>
                     </div>                                             
                  </div>
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Keyword:</label>
                        <div class="col-lg-6">
                           <input class="form-control" type="text" name="keyword"></input>
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
function addNewSkill(){
   $('#skill-id').val( $('#skill-id').val() + $('#skill-select').val() + ',' );
   $('#skill-name').html( $('#skill-name').html() + $('#skill-select option:selected').html() + ' ');
}
</script>
@endsection