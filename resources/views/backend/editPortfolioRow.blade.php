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
                                <strong class="card-title">Portfolio</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POSt"  action="{{ route('update.portfolio') }}" novalidate>
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $Portfolio->id }}">

                                    <div class="form-group mb-3">
                                        <label for="address-wpalaceholder">Title</label>
                                        <input type="text" name="title" id="address-wpalaceholder" class="form-control"
                                            placeholder="title" value="{{ $Portfolio->title }}">

                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="address-wpalaceholder">Youtube</label>
                                        <input type="text" name="youtube" id="address-wpalaceholder" class="form-control"
                                            placeholder="Enter youtube link" value="{{ $Portfolio->youtube }}">

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address-wpalaceholder">Github</label>
                                        <input type="text" name="github" id="address-wpalaceholder" class="form-control"
                                            placeholder="Enter github link" value="{{ $Portfolio->github }}">

                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="example-textarea">Description</label>
                                        <textarea class="form-control" name="des" id="example-textarea" rows="4" >{{ $Portfolio->des }}</textarea>
                                    </div>


                                    <button class="btn btn-primary" type="submit">Save</button>
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
