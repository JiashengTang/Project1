@extends('layout.user-navigation')

@section('css')
@endsection

@section('body')

<div class="m-portlet__head-tools">
   <ul class="m-portlet__nav">
      <li class="m-portlet__nav-item">
         <a href="{{url('/missions/create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
         <span>
         <i class="la la-plus"></i>
         <span>New Mission</span>
         </span>
         </a>
      </li>
   </ul>
</div>

<!--begin::Portlet-->
<div class="m-portlet">
   <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
         <div class="m-portlet__head-title">
            <span class="m-portlet__head-icon m--hide">
            <i class="la la-gear"></i>
            </span>
            <h3 class="m-portlet__head-text">
               Mission List
            </h3>
         </div>
      </div>
   </div>
   <!--begin::Table-->
   <table class="table table-striped table-bordered table-hover table-checkable" id="course-table">
      <thead>
         <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Paymnent Type</th>
            <th>Price</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Created At</th>
         </tr>
      </thead>
      <tbody>
         @foreach($missions as $mission)
         <tr>
            <td>{{$mission->title}}</td>
            <td>{{$mission->description}}</td>
            <td>{{$mission->paymnent_type}}</td>
            <td>{{$mission->price}}</td>
            <td>{{$mission->start_time}}</td>
            <td>{{$mission->end_time}}</td>
            <td>{{$mission->created_at}}</td>
            <td nowrap>
               <a href="{{url('/missions/delete/' . $mission->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
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
@endsection

@section('script')
@endsection