@extends('layouts.main')
@section('main-section')
    <div id="page-wrapper" class="gray-bg tab-pane active" aria-labelledby="wrapper-tab">
        <!-- form section -->
        <div class="wrapper-white">
            <div class=" dashboard-top w-100">
                <!-- top section -->
                <ul class="breadcum nav" role="tablist">
                    <li class="dashboard-heading"><i class="fa fa-bars" aria-hidden="true"></i> Bio-Data Management
                    </li>
                </ul>
            </div>
            <div class="registration-form">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="nav nav-tabs registration-form-head" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="/employee/personal" role="tab"
                                aria-controls="home" aria-selected="true">Personal Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="/employee/education" role="tab"
                                aria-controls="profile" aria-selected="false">Educational Qualification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="contact-tab" data-toggle="tab" href="/employee/professional" role="tab"
                                aria-controls="contact" aria-selected="false">Work Experience</a>
                        </li>
                    </ul>
                    <div class="registration-form-body">
                        <div class="tab-content" id="myTabContent">

                            <form name="professional" action="{{$url}}" method="POST" class="tab-pane fade show active" id="contact"
                                role="tabpanel" aria-labelledby="contact-tab">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Post</label>
                                            <input type="text" value="{{$professional->post}}" id="" name="post"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Office</label>
                                            <input type="text" value="{{$professional->office}}" id="" name="office"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" value="{{$professional->city}}" id="" name="city"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="date" value="{{$professional->start_date}}" id="" name="start_date"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" value="{{$professional->end_date}}" id="" name="end_date"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Type of Charge</label>
                                            <input type="text" value="{{$professional->type_of_charge}}" id="" name="type_of_charge"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Work Handled</label>
                                            <input type="text" value="{{$professional->work_handled}}" id="" name="work_handled"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Contribution</label>
                                            <input type="text" value="{{$professional->contri}}" id="" name="contribution"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="text" value="{{$professional->remark}}" id="" name="remark2"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <input type="submit" name="submit_workexp" value="Submit"
                                                class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
