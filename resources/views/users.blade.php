@extends('layouts.main')
@section('main-section')
    <div id="page-wrapper" class="gray-bg tab-pane active" aria-labelledby="wrapper-tab">
        <!-- form section -->
        <div class="wrapper-white">
            <div class=" dashboard-top w-100">
                <!-- top section -->
                <ul class="breadcum nav" role="tablist">
                    <li class="dashboard-heading"><i class="fa fa-bars" aria-hidden="true"></i> Registered Users
                    </li>
                </ul>
            </div>
            <div class="registration-form">
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                {{-- <th scope="col">S.no</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Dept</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                {{-- <th scope="col">Role</th> --}}
                                <th scope="col">Degree</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userdet as $user)
                                <tr class="">
                                    <td scope="row">{{ $user->firstname }} {{ $user->lastname}}</td>
                                    <td>{{ $user->department }}</td>
                                    <td>{{ $user->designation }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    {{-- <td>{{$user->post}}</td> --}}
                                    <td>
                                        {{$user->degree }}
                                    </td>

                                    <td><a href="{{ url('/employee/personal/update') }}/{{ $user->emp_id }}"><button
                                                class="btn btn-success">update</button></a></td>
                                    <td><a href="{{ url('/employee/delete') }}/{{ $user->emp_id }}"><button
                                                class="btn btn-danger">delete</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                    {{ $userdet->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection
