@extends('backend.dashboard')
@section('main')

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Edit education details </h2>
                <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible
                    tool, built upon the foundations of progressive enhancement, that adds all of these advanced
                    features to
                    any HTML table. </p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable-1_length"><label>Show <select
                                                        name="dataTable-1_length" aria-controls="dataTable-1"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="16">16</option>
                                                        <option value="32">32</option>
                                                        <option value="64">64</option>
                                                        <option value="-1">All</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="dataTable-1_filter" class="dataTables_filter"><label>Search:<input
                                                        type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="dataTable-1"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table datatables dataTable no-footer" id="dataTable-1"
                                                role="grid" aria-describedby="dataTable-1_info">
                                                <thead>
                                                    <tr role="row">

                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 8.48333px;"
                                                            aria-label="#: activate to sort column ascending">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 221.483px;"
                                                            aria-label="Name Of University/school/institute : activate to sort column ascending">
                                                            Name Of University/school/institute </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 79.4px;"
                                                            aria-label="Start Date: activate to sort column ascending">
                                                            Start Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 104.633px;"
                                                            aria-label="End Date: activate to sort column ascending">End
                                                            Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 63.7167px;"
                                                            aria-label="Education: activate to sort column ascending">
                                                            Education</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 125.167px;"
                                                            aria-label="Field/positon: activate to sort column ascending">
                                                            Field/positon</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 78.4667px;"
                                                            aria-label="Description: activate to sort column ascending">
                                                            Description</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable-1"
                                                            rowspan="1" colspan="1" style="width: 40.0333px;"
                                                            aria-label="Action: activate to sort column ascending">
                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        @foreach ($edus as $key => $edu)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td> <!-- Increment $key (0-based index) -->
                                                            <td>{{ $edu->eduName }}</td>
                                                            <td>{{ $edu->startDate }}</td>
                                                            <td>{{ $edu->EndDate }}</td>
                                                            <td>{{ $edu->education->levelName }}</td>
                                                            <td>{{ $edu->field }}</td>
                                                            <td>{{ $edu->desc }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                  <button class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="text-muted sr-only">Action</span>
                                                                  </button>
                                                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                                    <a class="dropdown-item" href="{{ route('edit.edu.row',  $edu->id) }}">Edit</a>
                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                    <a class="dropdown-item" href="#">Assign</a>
                                                                  </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach



                                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Remove</a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="dataTable-1_info" role="status"
                                                aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="dataTable-1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="dataTable-1_previous"><a href="#"
                                                            aria-controls="dataTable-1" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="dataTable-1" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="dataTable-1_next"><a href="#" aria-controls="dataTable-1"
                                                            data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Package has uploaded successfull</strong></small>
                                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Widgets are updated successfull</strong></small>
                                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Notifications have been sent</strong></small>
                                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Link was attached to menu</strong></small>
                                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
