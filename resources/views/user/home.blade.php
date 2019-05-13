@extends('layout.user-navigation')

@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Hi,{{Session::get('user')[0]['name']}}</h3>
      </div>
   </div>
</div>
<div class="m-content">
   <!--begin::Portlet-->
   <div class="row">
      <div class="col-xl-12">
         <div class="m-widget14">
            <div class="m-widget14__header">
               <h3 class="m-widget14__title">
                  Matched Misssions Today
               </h3>
               <span class="m-widget14__desc">
                  Matching percent for you today
               </span>
            </div>
            <table class="table table-striped table-bordered table-hover table-checkable" id="mission-table">
               <thead>
                  <tr>
                     <th>Mission Id</th>
                     <th>Title</th>
                     <th>Owener</th>
                     <th>Payment</th>
                     <th>Start Time</th>
                     <th>End Time</th>
                     <th>Matching Percent</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($matchResults as $matchResult)
                  <tr>
                     <td><a href="{{url('/missions/detail').'/'.$matchResult['missionId']}}">{{$matchResult['missionId']}}</a></td>
                     <td>{{$matchResult['title']}}</td>
                     <td>{{$matchResult['owner']}}</td>
                     <td>{{$matchResult['payment']}}</td>
                     <td>{{$matchResult['start_time']}}</td>
                     <td>{{$matchResult['end_time']}}</td>
                     <td>{{$matchResult['percent']}}</td>
                     <td nowrap>
                        <a href="{{url('/missions/get/' . $matchResult['missionId'])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-trash">Get mission</i>
                        </a>
                     </td>
                  </tr>         
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<!--begin:: Dashboard Digrams-->
<script type="text/javascript">
var InitAmountDashBoard = function () {
var amountDashboard = function () {
		var e = $("#income-detail");
		if (0 != e.length) {
		    var t = {
		        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
		        datasets: [{
                label: "$",
		            backgroundColor: mApp.getColor("danger"),
                data: ["2333", "112", "990", "23", "1234", "44", "52", "488", "1853", "2311", "32", "1875"]
		        }]
		    };
		    new Chart(e, {
              type: "bar",
                data: t,
                options: {
                    legend: {
                        display: !1
                    },
                }
		    })
		}
   }
   return {
      init: function() {
         amountDashboard(); 
      }
   };
}();
</script>
<!--end:: Dashboard Digrams-->

<script type="text/javascript">
var MissionsDatatables = function() {
    var initActivityTable = function() {
        var table = $('#mission-table');
        // begin first table
        table.DataTable({
            responsive: true,
            pageLength: 10,
            order: [6, 'desc']
        });
    };

    return {
        init: function() {
            initActivityTable();
        },
    };
}();

</script>

<script type="text/javascript">
jQuery(document).ready(function() {
  MissionsDatatables.init();
});
</script>
@endsection



