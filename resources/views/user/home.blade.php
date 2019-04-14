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
                  </tr>         
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      <div class="col-xl-12">
         <!--begin:: Widgets/Activity-->
         <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <h3 class="m-portlet__head-text">
                       Finished Missions - Past 12 Months
                     </h3>
                  </div>
               </div>
            </div>
            <div class="m-portlet__body">
               <div class="m-widget17">
                  <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top ">
                     <div class="m-widget17__chart" style="height:330px;">
                        <canvas id="finished-missions"></canvas>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end:: Widgets/Activity-->
      </div>
      <div class="col-xl-6">
         <!--begin:: Widgets/Top Products-->
         <div class="m-portlet m-portlet--bordered-semi">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <h3 class="m-portlet__head-text">
                        Popular skills
                     </h3>
                  </div>
               </div>
            </div>
            <div class="m-portlet__body">
               <!--begin::Widget5-->
               <div class="m-widget4">
                  <div class="m-widget4__item">
                     <div class="m-widget4__info">
                        <span class="m-widget4__title">
                       	Most used
                        </span>
                     </div>
                     <span class="m-widget4__ext">
                     <span class="m-widget4__number m--font-danger">Python</span>
                     </span>
                  </div>
                  <div class="m-widget4__item">
                     <div class="m-widget4__info">
                        <span class="m-widget4__title">
                        Most people have
                        </span>
                     </div>
                     <span class="m-widget4__ext">
                     <span class="m-widget4__number m--font-danger">Java</span>
                     </span>
                  </div>
                  <div class="m-widget4__item">
                     <div class="m-widget4__info">
                        <span class="m-widget4__title">
                        Most expensive
                        </span>
                     </div>
                     <span class="m-widget4__ext">
                     <span class="m-widget4__number m--font-danger">C++</span>
                     </span>
                  </div>
                  <div class="m-widget4__item">
                     <div class="m-widget4__info">
                        <span class="m-widget4__title">
                        Most hot
                        </span>
                     </div>
                     <span class="m-widget4__ext">
                     <span class="m-widget4__number m--font-danger">Java script</span>
                     </span>
                  </div>
               </div>
               <!--end::Widget 5-->
            </div>
         </div>
         <!--end:: Widgets/Top Products-->
      </div>
      <div class="col-xl-6">
         <!--begin:: Widgets/Daily Sales-->
         <div class="m-widget14" style="padding-top: 0px;">
            <div class="m-widget14__header m--margin-bottom-30">
               <h3 class="m-widget14__title">
                  You income - Past 12 Months
               </h3>
               <span class="m-widget14__desc">
               Check out how much income you got 
               </span>
            </div>
            <div class="m-widget14__chart" style="height:120px; margin-top: -20px;">
               <canvas id="income-detail"></canvas>
            </div>
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
var InitCountDashBoard = function () {
var countDashboard = function () {
	if ($('#finished-missions').length == 0) {
        return;
    }

    var ctx = document.getElementById("finished-missions").getContext("2d");

    var gradient = ctx.createLinearGradient(0, 0, 0, 240);
    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                backgroundColor: gradient,
                borderColor: '#e13a58',
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                data: ["5", "2", "7", "3", "12", "4", "11", "2", "9", "1", "12", "8"]
            }]
        },
        options: {
            legend: {
                display: false
            },
            maintainAspectRatio: false,
            elements: {
                line: {
                    tension: 0.0000001
                },
                point: {
                    radius: 4,
                    borderWidth: 12
                }
            },
        }
    };

    var chart = new Chart(ctx, config);
   }
   return {
      init: function() {
         countDashboard(); 
      }
   };
}();

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
  InitAmountDashBoard.init();
  InitCountDashBoard.init();
  MissionsDatatables.init();
});
</script>
@endsection



