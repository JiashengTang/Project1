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
                          <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
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
                          <span class="m-widget5__number">{{$matchResult['percent']}}</span><br>
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
                          <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
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
                          <span class="m-widget5__number">{{$matchResult['percent']}}</span><br>
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
                          <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
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
                          <span class="m-widget5__number">{{$matchResult['percent']}}</span><br>
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

      <div class="col-xl-4">

        <!--begin:: Widgets/Announcements 1-->
        <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Announcements
                </h3>
              </div>
            </div>
            <div class="m-portlet__head-tools">
              <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                  <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                    <i class="la la-ellipsis-h m--font-light"></i>
                  </a>
                  <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                      <div class="m-dropdown__body">
                        <div class="m-dropdown__content">
                          <ul class="m-nav">
                            <li class="m-nav__section m-nav__section--first">
                              <span class="m-nav__section-text">Quick Actions</span>
                            </li>
                            <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-share"></i>
                                <span class="m-nav__link-text">Activity</span>
                              </a>
                            </li>
                            <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                <span class="m-nav__link-text">Messages</span>
                              </a>
                            </li>
                            <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-info"></i>
                                <span class="m-nav__link-text">FAQ</span>
                              </a>
                            </li>
                            <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                <span class="m-nav__link-text">Support</span>
                              </a>
                            </li>
                            <li class="m-nav__separator m-nav__separator--fit">
                            </li>
                            <li class="m-nav__item">
                              <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="m-portlet__body">

            <!--begin::Widget 7-->
            <div class="m-widget7 m-widget7--skin-dark">
              <div class="m-widget7__desc">
                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod tinciduntut laoreet doloremagna
              </div>
              <div class="m-widget7__user">
                <div class="m-widget7__user-img">
                  <img class="m-widget7__img" src="../../assets/app/media/img//users/100_3.jpg" alt="">
                </div>
                <div class="m-widget7__info">
                  <span class="m-widget7__username">
                    Dan Bold
                  </span><br>
                  <span class="m-widget7__time">
                    3 days ago
                  </span>
                </div>
              </div>
              <div class="m-widget7__button">
                <a class="m-btn m-btn--pill btn btn-danger" href="#" role="button">All Feeds</a>
              </div>
            </div>

            <!--end::Widget 7-->
          </div>
        </div>

        <!--end:: Widgets/Announcements 1-->
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



