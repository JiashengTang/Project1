@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Manage Aplly Jobs</h3>
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
                        Apply status
                     </h3>
                  </div>
               </div>
               <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="{{url('/missions/search')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                        <span>
                          <i class="la la-plus"></i>
                          <span>Get new Mission</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>   
            </div> 

            <div class="m-portlet__body">
              <!--begin::Table-->
              <table class="table table-striped table-bordered table-hover table-checkable" id="mission-table">
                 <thead>
                    <tr>
                       <th>Title</th>
                       <th>Owner</th>
                       <th>Description</th>
                       <th>Paymnent Type</th>
                       <th>Price</th>
                       <th>Start Time</th>
                       <th>End Time</th>
                       <th>Created At</th>
                       <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($missions as $mission)
                    <tr>
                       <td>{{$mission->title}}</td>
                       <td>{{$mission->user->name}}</td>
                       <td>{{$mission->description}}</td>
                       <td>{{$mission->paymnent_type}}</td>
                       <td>{{$mission->price}}</td>
                       <td>{{$mission->start_time}}</td>
                       <td>{{$mission->end_time}}</td>
                       <td>{{$mission->created_at}}</td>
                       <td nowrap>
                          <a href="{{url('/missions/detail/' . $mission->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-trash">Detail</i>
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
var MissionsDatatablesColumnRendering = function() {
    var initActivityTable = function() {
        var table = $('#mission-table');
        // begin first table
        table.DataTable({
            responsive: true,
            pageLength: 10,
            order: [4, 'desc']
        });
    };

    return {
        init: function() {
            initActivityTable();
        },
    };
}();

// var HistoriesDatatablesColumnRendering = function() {
//     var initActivityTable = function() {
//         var table = $('#history-table');
//         // begin first table
//         table.DataTable({
//             responsive: true,
//             pageLength: 10,
//             order: [4, 'desc']
//         });
//     };

//     return {
//         init: function() {
//             initActivityTable();
//         },
//     };
// }();

jQuery(document).ready(function() {
    MissionsDatatablesColumnRendering.init();
    // HistoriesDatatablesColumnRendering.init();
});
</script>
@endsection