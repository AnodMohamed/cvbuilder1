@extends('backend.dashboard')
@section('main')

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="row">

                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Education details</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POSt" action="{{ route('save.edu') }}" novalidate>
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="address-wpalaceholder">University, Scholl, Institute</label>
                                        <input type="text" name="eduName" id="address-wpalaceholder" class="form-control"
                                            placeholder="Enter...">
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">
                                            <label for="exampleInputEmail2">Start Date</label>
                                            <div class="input-group">
                                                <input type="text" name="startDate" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                  <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="custom-phone">End Date</label>
                                            <div class="input-group">
                                                <input type="text" name="EndDate" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                  <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group mb-3">
                                            <label for="example-select"> Select Education</label>
                                            <select class="form-control" name="level_id" id="example-select">
                                                @foreach ($kind as $level)
                                                    <option  value="{{ $level->id }}">{{ $level->levelName }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="example-textarea">Describe what you have to got </label>
                                            <textarea class="form-control" name="desc" id="example-textarea"  ></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="address-wpalaceholder">field / Positon</label>
                                            <input type="text" name="field" id="address-wpalaceholder" class="form-control"
                                                placeholder="Enter...">

                                        </div>

                                    </div> <!-- /.form-row -->




                                    <div class="d-flex justify-content-end">
                                        <button class="btn mb-2 btn-primary mr-2" type="submit">Save</button>
                                        <a  class="btn mb-2 btn-danger mr-2" href="{{ route('user.image') }}">Next</a>
                                    </div>

                                </form>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                </div> <!-- end section -->
            </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
@endsection
