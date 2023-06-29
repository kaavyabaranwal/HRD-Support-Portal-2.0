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
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="/employee/personal" role="tab"
                                aria-controls="home" aria-selected="true">Personal Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="/employee/education" role="tab"
                                aria-controls="profile" aria-selected="false">Educational Qualification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/employee/professional" role="tab"
                                aria-controls="contact" aria-selected="false">Work Experience</a>
                        </li>
                    </ul>
                    <div class="registration-form-body">
                        <div class="tab-content" id="myTabContent">

                            <form name="personal" action="{{$url}}" method="POST" class="tab-pane fade show active"
                                id="home" role="tabpanel" aria-labelledby="home-tab">
                                {{-- {{session('userid')}} --}}
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" value="{{ $personal->firstname}}" id="" name="firstname" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" value="{{ $personal->lastname }}" id=""
                                                name="lastname" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Employee Code</label>
                                            <input type="text" value="{{ $personal->emp_code }}" id=""
                                                name="emp_code" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Present Designation</label>
                                            <input type="text" value="{{ $personal->designation }}" id=""
                                                name="designation" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Present Department</label>
                                            <input type="text" value="{{ $personal->department }}" id=""
                                                name="department" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Organisation</label>
                                            <input type="text" value="{{ $personal->organisation }}" id=""
                                                name="organisation" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" value="{{ $personal->phone }}" id=""
                                                name="phone" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Present Address</label>
                                            <input type="text" value="{{ $personal->address }}" id=""
                                                name="address" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" value="{{ $personal->state }}" name="state"
                                                class="form-control icon-inside" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>District</label>
                                            <input type="text" value="{{ $personal->district }}" id=""
                                                name="district" class="form-control icon-inside" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="tel" value="{{ $personal->pincode }}" id=""
                                                name="pincode" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" value="{{ $personal->email }}" id=""
                                                name="email" class="form-control icon-inside" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>FAX</label>
                                            <input type="number" value="{{ $personal->fax }}" id=""
                                                name="fax" class="form-control icon-inside" />
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <!-- <button type="button" class="custombtn blue-br-btn w-100" name="submit"
                                                                type="submit" value="submit">Save</button> -->
                                            <input type="submit" name="submit_personal" value="Submit"
                                                class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <!-- <a href="#"><button type="button"
                                                                    class="custombtn bluebtn w-100">Next</button></a> -->

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
