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
                                <strong class="card-title">Image</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POSt" enctype="multipart/form-data" action="{{ route('save.image') }}" novalidate>
                                    @csrf


                                    <div class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label for="example-fileinput">Uplode Image: </label>
                                            <input type="file" id="example-fileinput" class="form-control-file" name="img">
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-end">
                                        <button class="btn mb-2 btn-primary mr-2" type="submit">Save</button>
                                        <a  class="btn mb-2 btn-danger mr-2" href="{{ route('cv') }}">Next</a>
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
