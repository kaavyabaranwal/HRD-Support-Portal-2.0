@extends('layouts.main')
@section('main-section')
    <div id="page-wrapper" class="gray-bg tab-pane active" aria-labelledby="wrapper-tab">
        <!-- form section -->
        <div class="wrapper-white">
            <div class=" dashboard-top w-100">
                <!-- top section -->
                <ul class="breadcum nav" role="tablist">
                    <li class="dashboard-heading"><i class="fa fa-bars" aria-hidden="true"></i> Available Trainings
                    </li>
                </ul>
            </div>
            <div class="registration-form">
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                {{-- <th scope="col">S.no</th> --}}

                                <th scope="col">Title/Subject</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Circular</th>
                                <th scope="col">Department</th>
                                <th scope="col">Organiser</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Place</th>
                                <th scope="col">Speaker</th>
                                {{-- <th scope="col">Role</th> --}}
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainingdet as $training)
                                <tr class="">
                                    <td>{{ $training->title }}</td>
                                    <td>{{ $training->t_start }}</td>
                                    <td>{{ $training->t_end }}</td>
                                    <td>{{ $training->circular }}</td>
                                    <td>{{ $training->department }}</td>
                                    <td>{{ $training->organiser }}</td>
                                    <td>{{ $training->t_type }}</td>
                                    <td>{{ $training->t_desc }}</td>
                                    <td>
                                        {{ $training->t_place }}
                                    </td>
                                    <td>
                                        {{ $training->speaker }}
                                    </td>

                                    
                                    <td><a href="{{ url('/trainings/delete') }}/{{ $training->id }}"><button
                                                class="btn btn-danger">delete</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                {{ $trainingdet->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection
