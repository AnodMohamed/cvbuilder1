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
                                <strong class="card-title">Edit Technical Skill </strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POSt" action="{{ route('update.proSkill') }}" novalidate>
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $proSkill->id }}">

                                     <!-- Skill Name -->
                                    <div class="form-group mb-3">
                                        <label for="address-placeholder">Skill Name</label>
                                        <input
                                            type="text"
                                            name="skill"
                                            id="address-placeholder"
                                            class="form-control"
                                            placeholder="Enter your Skill"
                                            value="{{ $proSkill->skill }}"
                                            required>
                                    </div>

                                    <!-- Skill Level -->
                                    <div class="form-group mb-3">
                                        <label for="skill-level">Skill Level (Percentage)</label>
                                        <input
                                            type="range"
                                            name="skill_level"
                                            id="skill-level"
                                            class="form-range"
                                            min="0"
                                            max="100"
                                            step="1"
                                            value="{{ $proSkill->skill_level }}"
                                            oninput="document.getElementById('skill-value').textContent = this.value + '%'">
                                        <small>Level: <span id="skill-value">{{ $proSkill->skill_level }}%</span></small>


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
