<x-app-layout title="Patients">

    <div class="container-fluid pt-4">

        {{--Breadcrumbs & Page Filters Starts--}}
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 breadcrum-control-left">
                <x-breadcrumb title="Patients"/>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-8 breadcrum-control-right">
                <div class="btn-toolbar demo-inline-spacing" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Today
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 7 Days
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 30 Days
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 90 Days
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{--Breadcrumbs & Page Filters Ends--}}
    </div>

    {{-- Recent Patients Records Table Starts --}}
    <div class="container-fluid flex-grow-1">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="">Patients List</h5>
                        <div class="btn-toolbar demo-inline-spacing mtneg-50" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary">
                                    Advanced Filter
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Export
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Add Patient
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap scroll-container">
                            <table class="table">
                            <thead>
                                <tr>
                                <th><form><input class="data-select" type="checkbox"></form></th>
                                <th class="head-th-ctrl"><i class='bx bx-user'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient's Name with Date of Birth</span>">
                                        Patient
                                    </span>
                                </th>

                                <th class="head-th-ctrl"><i class='bx bx-id-card'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient's Portal ID</span>">
                                        Patient ID
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-phone'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient's Phone Number</span>">
                                        Phone
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-current-location'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient's Full Address</span>">
                                        Address
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-pin'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient's Facility Location</span>">
                                        Location
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-calendar'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Date & Time of Patient Creation</span>">
                                        Created
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-calendar-check'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Date & Time of Patient Modification</span>">
                                        Modified
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bxs-star-half'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Patient Status</span>">
                                        Status
                                    </span>
                                </th>
                                <th class="head-th-ctrl"><i class='bx bx-cog'></i>
                                    <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>View, Edit & Delete</span>">
                                        Actions
                                    </span>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="{{route('patient-details')}}">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="{{route('patient-details')}}">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><form><input class="data-select" type="checkbox"></form></td>
                                    <td><a class="patient-name" href="javascript:void(0);">Alice Shane <br> (12/03/1947)</a></td>
                                    <td><a class="patient-name" href="javascript:void(0);">PT-100016515</a></td>
                                    <td>(651) 261-5369</td>
                                    <td>416 S Brad St, Grantsburg, WI, 54840</td>
                                    <td>Deliver My Meds</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td>12-12-2023 <br> 10:30 AM</td>
                                    <td><span class="badge bg-label-success me-1">Active</span></td>
                                    <td>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-show'></i></a>
                                        <a class="controls" href="javascript:void(0);"><i class='bx bx-pencil'></i></a>
                                        {{-- <a class="controls" href="javascript:void(0);"><i class='bx bx-history' ></i></a> --}}
                                        <a class="controls" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <nav class="table-pagination" aria-label="Page navigation">
                            <ul class="pagination">
                              <li class="page-item first">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                              </li>
                              <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">5</a>
                              </li>
                              <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                              </li>
                              <li class="page-item last">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                              </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Recent Patients Records Table Ends --}}

</x-app-layout>
