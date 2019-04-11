@extends('layouts.main')

@section('style')
<style> footer{position: absolute;bottom: 0;width: 100%;left: 0;} .nav-tabs{margin-top: -65px;} </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="inbox-tab" data-toggle="tab" href="#inbox" role="tab" aria-controls="inbox" aria-selected="true">Inbox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lessons-tab" data-toggle="tab" href="#lessons" role="tab" aria-controls="lessons" aria-selected="false">Lessons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="calendar-tab" data-toggle="tab" href="#calendar" role="tab" aria-controls="calendar" aria-selected="false">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="availability-tab" data-toggle="tab" href="#availability" role="tab" aria-controls="availability" aria-selected="false">Availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My profile</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="inbox" role="tabpanel" aria-labelledby="inbox-tab"></div>
                <div class="tab-pane fade" id="lessons" role="tabpanel" aria-labelledby="lessons-tab"></div>
                <div class="tab-pane fade" id="calendar" role="tabpanel" aria-labelledby="calendar-tab"></div>
                <div class="tab-pane fade" id="availability" role="tabpanel" aria-labelledby="availability-tab"></div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
            </div>
        </div>
    </div>
</div>
@endsection