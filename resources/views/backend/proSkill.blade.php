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
                                <strong class="card-title">Technical Skills</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POSt" action="{{ route('save.proSkill') }}" novalidate>
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="address-placeholder">Skill Name</label>
                                        <input type="text" name="skill" id="address-placeholder" class="form-control" placeholder="Enter your Skill">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="skill-level">Skill Level (Percentage)</label>
                                        <input type="range" name="skill_level" id="skill-level" class="form-range" min="0" max="100" step="1"
                                            oninput="document.getElementById('skill-value').textContent = this.value + '%'">
                                        <small>Level: <span id="skill-value">50%</span></small>
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
