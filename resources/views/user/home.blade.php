@extends('layout.user-navigation')

@section('css')

@endsection
@section('body')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title">Hi, {{Session::get('user')[0]['name']}}</h3>
      </div>
   </div>
</div>
<div class="m-content">
   <!--begin::Portlet-->
   <div class="row">
      <div class="col-xl-8">

        <!--begin:: Widgets/Best Sellers-->
        <div class="m-portlet m-portlet--full-height ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Mission for you
                </h3>
              </div>
            </div>
            <div class="m-portlet__head-tools">
              <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                    Most Matching
                  </a>
                </li>
                <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                    Pay by hours
                  </a>
                </li>
                <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                    All
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="m-portlet__body">

            <!--begin::Content-->
            <div class="tab-content">
              <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                <!--begin::m-widget5-->

                <div class="m-widget5">

                  @foreach($matchResults as $matchResult)
                    @if($matchResult['percent'] > 90)
                    <div class="m-widget5__item">
                      <div class="m-widget5__content">
                        <div class="m-widget5__pic">
                          <a href="{{url('/missions/get/' . $matchResult['missionId'])}}">
                            <img class="m-widget7__img" src="{{asset('resources/images/logo.png')}}" alt="">
                          </a>
                        </div>
                        <div class="m-widget5__section">
                          <h4 class="m-widget5__title">
                           {{$matchResult['title']}}
                          </h4>
                          <span class="m-widget5__desc">
                           {{$matchResult['description']}}
                          </span>
                          <div class="m-widget5__info">
                            <span class="m-widget5__author">
                              Owner:
                            </span>
                            <span class="m-widget5__info-author m--font-info">
                              {{$matchResult['owner']}}
                            </span>
                            <span class="m-widget5__info-label">
                              Start:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                             {{$matchResult['start_time']}}
                            </span>
                            <span class="m-widget5__info-label">
                              End:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                              {{$matchResult['end_time']}}
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget5__content">
                        <div class="m-widget5__stats1">
                          <span class="m-widget5__number">${{$matchResult['payment']}}</span><br>
                          <span class="m-widget5__sales">{{$matchResult['payment_type']}}</span>
                        </div>
                        <div class="m-widget5__stats2">
                          <span class="m-widget5__number">{{$matchResult['percent']}}%</span><br>
                          <span class="m-widget5__votes">percent</span>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

                <!--end::m-widget5-->
              </div>
              <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">

                <!--begin::m-widget5-->
                <div class="m-widget5">
                  @foreach($matchResults as $matchResult)
                    @if($matchResult['payment_type'] == 'Hour')
                    <div class="m-widget5__item">
                      <div class="m-widget5__content">
                        <div class="m-widget5__pic">
                          <a href="{{url('/missions/get/' . $matchResult['missionId'])}}">
                            <img class="m-widget7__img" src="{{asset('resources/images/logo.png')}}" alt="">
                          </a>
                        </div>
                        <div class="m-widget5__section">
                          <h4 class="m-widget5__title">
                           {{$matchResult['title']}}
                          </h4>
                          <span class="m-widget5__desc">
                           {{$matchResult['description']}}
                          </span>
                          <div class="m-widget5__info">
                            <span class="m-widget5__author">
                              Owner:
                            </span>
                            <span class="m-widget5__info-author m--font-info">
                              {{$matchResult['owner']}}
                            </span>
                            <span class="m-widget5__info-label">
                              Start:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                             {{$matchResult['start_time']}}
                            </span>
                            <span class="m-widget5__info-label">
                              End:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                              {{$matchResult['end_time']}}
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget5__content">
                        <div class="m-widget5__stats1">
                          <span class="m-widget5__number">${{$matchResult['payment']}}</span><br>
                          <span class="m-widget5__sales">{{$matchResult['payment_type']}}</span>
                        </div>
                        <div class="m-widget5__stats2">
                          <span class="m-widget5__number">{{$matchResult['percent']}}%</span><br>
                          <span class="m-widget5__votes">percent</span>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

                <!--end::m-widget5-->
              </div>
              <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">

                <!--begin::m-widget5-->
                <div class="m-widget5">
                  
                  @foreach($matchResults as $matchResult)
                    <div class="m-widget5__item">
                      <div class="m-widget5__content">
                        <div class="m-widget5__pic">
                          <a href="{{url('/missions/get/' . $matchResult['missionId'])}}">
                            <img class="m-widget7__img" src="{{asset('resources/images/logo.png')}}" alt="">
                          </a>
                        </div>
                        <div class="m-widget5__section">
                          <h4 class="m-widget5__title">
                           {{$matchResult['title']}}
                          </h4>
                          <span class="m-widget5__desc">
                           {{$matchResult['description']}}
                          </span>
                          <div class="m-widget5__info">
                            <span class="m-widget5__author">
                              Owner:
                            </span>
                            <span class="m-widget5__info-author m--font-info">
                              {{$matchResult['owner']}}
                            </span>
                            <span class="m-widget5__info-label">
                              Start:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                             {{$matchResult['start_time']}}
                            </span>
                            <span class="m-widget5__info-label">
                              End:
                            </span>
                            <span class="m-widget5__info-date m--font-info">
                              {{$matchResult['end_time']}}
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget5__content">
                        <div class="m-widget5__stats1">
                          <span class="m-widget5__number">${{$matchResult['payment']}}</span><br>
                          <span class="m-widget5__sales">{{$matchResult['payment_type']}}</span>
                        </div>
                        <div class="m-widget5__stats2">
                          <span class="m-widget5__number">{{$matchResult['percent']}}%</span><br>
                          <span class="m-widget5__votes">percent</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>

                <!--end::m-widget5-->
              </div>
            </div>

            <!--end::Content-->
          </div>
        </div>

        <!--end:: Widgets/Best Sellers-->
      </div>

      <div class="col-xl-4" style="max-height: 500px">

        <!--begin:: Widgets/Announcements 1-->
        <div id="random-mission"class="m-portlet m--bg m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  {{$randomMission->title}}
                </h3>
              </div>
            </div>
          </div>
          <div class="m-portlet__body">

            <!--begin::Widget 7-->
            <div class="m-widget7 m-widget7--skin-dark">
              <div class="m-widget7__desc" >
                {{$randomMission->description}}
              </div>
              <div class="m-widget7__user">
                <div class="m-widget7__user-img">
                  <img class="m-widget7__img" src="{{asset('resources/images/logo.png')}}" alt="">
                </div>
                <div class="m-widget7__info">
                  <span class="m-widget7__username">
                   Owner: {{$randomMission->user->name}}
                  </span><br>
                  <span class="m-widget7__time">
                    ${{$randomMission->price}} / ${{$randomMission->payment_type}}
                  </span>
                </div>
              </div>
              <div>
                <button class="m-btn m-btn--pill btn btn-danger" onclick="randomMission()">Find new</button>
                <button class="m-btn m-btn--pill btn btn-focus" style="float:right; margin-right:5px;" onclick="getRandomMisison()">Apply job</button>
              </div>
            </div>

            <!--end::Widget 7-->
          </div>
        </div>
        <!--end:: Widgets/Announcements 1-->

        
         <!--begin::Portlet-->
         <div class="m-portlet">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h3 class="m-portlet__head-text">
                        Your Job List
                     </h3>
                  </div>
               </div>  
            </div>  

            <div class="m-portlet__body">
              <!--begin::Table-->
              <table class="table table-striped table-bordered table-hover table-checkable" id="mission-table">
                 <thead>
                    <tr>
                       <th>Title</th>
                       <th>Owner</th>
                       <th>Price</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach(Session::get('user')[0]->gotMissions()->where('activated', '1')->get() as $mission)
                    <tr>
                       <td>{{$mission->title}}</td>
                       <td>{{$mission->user->name}}</td>
                       <td>{{$mission->price}}</td>
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
            pageLength: 5,
            order: [2, 'desc']
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

<script type="text/javascript">
  function randomMission(){
    window.location.reload();
  }

  function randomColor(){ 
    var colorList = ["#ff0000","blue","gray"];
    var randomColor = colorList[Math.floor(Math.random() * colorList.length)];
    var price = '{{$randomMission->price}}';
    if(price > 500){
      randomColor = colorList[0];
    }
    else if(price > 300){
      randomColor = colorList[1];
    }
    else if(price > 100){
      randomColor = colorList[2];
    }
    else if(price > 50){
      randomColor = colorList[3];
    }
    else{
      randomColor = colorList[4];
    }
    $('#random-mission').css('background-color', randomColor);
  }
  randomColor();

  $(document).keydown(function (event) {
    if (event.keyCode == 37) { 
       randomMission();
    } 
    if (event.keyCode == 39) { 
       getRandomMisison();
    } 
  });

  var randomMissionId = '{{$randomMission->id}}';
  function getRandomMisison(){
    var href = "{{url('/missions/get')}}/" + randomMissionId;
    window.location.href = href;
  }

</script>
@endsection



