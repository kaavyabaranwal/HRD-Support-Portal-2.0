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
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="" role="tab"
                                aria-controls="home" aria-selected="true">Personal Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="" role="tab"
                                aria-controls="profile" aria-selected="false">Educational Qualification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="" role="tab"
                                aria-controls="contact" aria-selected="false">Work Experience</a>
                        </li>
                    </ul>
                    <div class="registration-form-body">
                        <div class="tab-content" id="myTabContent">
                            <form name="education" action="{{$url}}" method="POST" class="tab-pane fade show active" id="profile"
                                role="tabpanel" aria-labelledby="profile-tab">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" value="{{$education->degree}}" id="" name="degree"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" value="{{$education->subject}}" id="" name="subject"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" value="{{$education->institute}}" id="" name="institute"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Year of Passing</label>
                                            <input type="number" value="{{$education->pass_year}}" id="" name="pass_year"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input type="text" value="{{$education->duration}}" id="" name="duration"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="text" value="{{$education->remark}}" id="" name="remark1"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <!-- <button type="button" class="custombtn blue-br-btn w-100"
                                                            data-toggle="modal" data-target="#myModal">Save</button> -->
                                            <input type="submit" name="submit_education" value="Submit"
                                                class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <!-- <button type="button" class="custombtn bluebtn w-100"
                                                            data-toggle="modal" data-target="#myModal">Next</button> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
