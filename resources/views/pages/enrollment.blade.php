@extends('includes.master')
@section('title',$title)
@section('content')

    <section class="py-5 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h3>Have a happy Learning!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="border col-lg-8 mx-auto pt-4 px-5 shadow">
                    <h4 class="text-center pb-4">Please fill the form for your desired course.</h4>
                    <form class="form-contact contact_form" id="enrollment_form"
                          action="{{ route('pages.store_enrollment') }}" id="enrollmentForm"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        @php
                            $studentID = 'STU-' . date('dY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                            $existingID = \Illuminate\Support\Facades\DB::table('enrollment')
                                ->where('StudentID', $studentID)
                                ->exists();
                            if ($existingID) {
                                $studentID = 'STU-' . date('dY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                            }
                        @endphp
                        <input type="hidden" readonly name="StudentID" class="form-control" required
                               value="{{ $studentID }}">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @elseif (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="mb-3 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <select class="form-select" id="PlanID" name="PlanID" required>
                                        <option value="" selected>Select your Plan *</option>
                                        @php
                                            $plan =\Illuminate\Support\Facades\DB::table('course_plan')->get();
                                        @endphp
                                        @foreach ($plan as $value )
                                            <option
                                                value="{{$value->PlanID}}" {{ old('PlanID') ? 'selected' : '' }}>{{$value->PlanTitle}}</option>
                                        @endforeach

                                    </select>
                                    @error('PlanID')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group CourseName_div">
                                    <select name="CourseCode" class="form-select" id="CourseName">
                                        <option value="" selected disabled>Select your Course *</option>
                                        @php
                                            $course =\Illuminate\Support\Facades\DB::table('courses_offered')->get();
                                        @endphp
                                        @foreach ($course as $value )
                                            <option
                                                value="{{$value->CourseCode}} {{ old('CourseName') ? 'selected' : '' }}">{{$value->CourseName}}</option>
                                        @endforeach
                                    </select>
                                    <div id="course_selected" name="course_selected"></div>
                                    @error('course_selected')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" name="StudentName" id="Student_Name" type="text"
                                           placeholder="Enter your Name*" value="{{ old('StudentName') }}"
                                           pattern="[A-Za-z ]+" required>
                                    @error('StudentName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="FatherName" id="father_name" type="text"
                                           placeholder="Enter your Father Name*" value="{{ old('father_name') }}"
                                           pattern="[A-Za-z ]+"
                                           required>
                                    @error('FatherName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentCNIC" id="cnic" type="text"
                                           placeholder="Enter your CNIC*" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"
                                           maxlength="15" value="{{ old('StudentCNIC') }}" required
                                           data-toggle="tooltip" data-placement="right"
                                           title="Format: xxxxx-xxxxxxxx-x">
                                    @error('StudentCNIC')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror


                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentPhone" id="Phone_no" type="text"
                                           placeholder="Enter your Phone Number*" pattern="923[0-9]{9}"
                                           data-toggle="tooltip" data-placement="right" title="Format: 923000000000"
                                           maxlength="12" value="{{ old('StudentPhone') }}" required>
                                    @error('StudentPhone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentCity" id="city" type="text"
                                           placeholder="Enter your City*" value="{{ old('city') }}" required>
                                    @error('city')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentEmail" id="email" type="email"
                                           placeholder="Enter your Email*" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select name="StudentEducation" class="form-select" id="StudentEducation" required>
                                        <option value="" selected>Select Education *</option>
                                        <option value="Matriculation" {{ old('StudentEducation') ? 'selected' : '' }}>
                                            Matriculation
                                        </option>
                                        <option value="Intermediate" {{ old('StudentEducation') ? 'selected' : '' }}>
                                            Intermediate
                                        </option>
                                        <option value="Bachelors" {{ old('StudentEducation') ? 'selected' : '' }}>
                                            Bachelors
                                        </option>
                                        <option value="Masters" {{ old('StudentEducation') ? 'selected' : '' }}>
                                            Masters
                                        </option>
                                    </select>
                                    @error('gender')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select name="TrainingMode" class="form-select" id="" required>
                                        <option value="" selected>Select your training mode *</option>
                                        <option value="On-site" {{ old('training_mode') ? 'selected' : '' }}>On-site
                                        </option>
                                        <option value="Online" {{ old('training_mode') ? 'selected' : '' }}>Online
                                        </option>
                                    </select>
                                    @error('training_mode')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select name="PaymentOption" class="form-select" id="" required>
                                        <option value="" selected>Select your Payment *</option>
                                        <option class="PaymentOption_check" value="On-Site"
                                            {{ old('PaymentOption') ? 'selected' : '' }}>On-site
                                        </option>
                                        <option class="PaymentOption_check" value="Online"
                                            {{ old('PaymentOption') ? 'selected' : '' }}>Online
                                        </option>
                                    </select>
                                    @error('PaymentOption')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select name="KnowAboutUs" class="form-select" id="" required>
                                        <option value="" selected>How did you get to know about us? <span
                                                class="text-danger">*</span></option>
                                        <option value="social_media" {{ old('heard_from') ? 'selected' : '' }}>Social
                                            Media
                                        </option>
                                        <option value="ads" {{ old('heard_from') ? 'selected' : '' }}>Ads</option>
                                        <option value="google" {{ old('heard_from') ? 'selected' : '' }}>Google
                                        </option>
                                        <option value="friend family" {{ old('heard_from') ? 'selected' : '' }}>
                                            Friends/Family
                                        </option>
                                        <option value="office employee" {{ old('heard_from') ? 'selected' : '' }}>
                                            Office employee
                                        </option>
                                        <option value="office trainee" {{ old('heard_from') ? 'selected' : '' }}>
                                            Office Trainee
                                        </option>
                                        <option value="others" {{ old('heard_from') ? 'selected' : '' }}>Others
                                        </option>
                                    </select>
                                    @error('heard_from')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-none col-sm-12 col-md-12 col-lg-12 attach_doc_div">
                                <div class="form-group mt-3">
                                    <input type="hidden" name="is_file_visible" id="is_file_visible">
                                    <input type="file" name="attach_doc" class="form-control" id="attach_doc">
                                    <span class="text-dark text-center ">Please attach the deposit slip or screenshot after submitting the fee</span>

                                    <div class="modal-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th class="col-sm-4 col-md-3">Name of Bank:</th>
                                                    <td class="col-sm-8 col-md-9">Allied Bank Limited</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-sm-4 col-md-3">Title of Account:</th>
                                                    <td class="col-sm-8 col-md-9">ECOMGLADIATORS (PRIVATE)</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-sm-4 col-md-3">Account Number:</th>
                                                    <td class="col-sm-8 col-md-9">12450010099561950012</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-sm-4 col-md-3">IBAN Number:</th>
                                                    <td class="col-sm-8 col-md-9">PK44ABPA0010099561950012</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-sm-4 col-md-3">SWIFT/BIC Code:</th>
                                                    <td class="col-sm-8 col-md-9">ABPAPKKA</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <strong>Note: Please contact us if you are unable to deposit the funds.</strong>

                                    </div>
                                    @error('attach_doc')
                                    <br><span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 bg-light p-3 justify-content-sm-around"
                                 style="text-align: justify;">
                                <h3 class="text-dark">Terms & Conditions:</h3>
                                <ol style="line-height:2">
                                    <li>Upon enrollment, trainees are eligible for a full refund of their training fees
                                        within two (2) days from the date of registration.
                                    </li>
                                    <li>To request a refund within the eligibility period, trainees must submit a
                                        written request via email or in-person to the training coordinator.
                                    </li>
                                    <li>After the two-day refund eligibility period, all training fees are
                                        non-refundable.
                                    </li>
                                    <li>In the event that the training program is canceled or rescheduled by
                                        Ecomgladiators, alternative arrangements will be offered. Eligible trainees
                                        may also choose to receive a refund if desired.
                                    </li>
                                    <li>Upon course completion, candidates will receive the certificate upon
                                        successful assessment results.
                                    </li>
                                </ol>


                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms_check"
                                               required>
                                        <label class="form-check-label" for="terms_check">
                                            &nbsp; I accept the terms and conditions.
                                        </label>
                                    </div>
                                    @error('terms')
                                    <span class="text-danger">Please accept the terms and conditions to proceed.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 float-end mt-3">
                                <button type="submit" id="btn-submit" class="btn btn-outline-primary mb-3">Enroll Now!
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container pt-4 px-5 mt-3">
                <h5 class="text-center">FAQs</h5>
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <strong>Q1. What is the nature of the training provided? Is it theoretical or
                                    practical?</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Answer: Our training approach emphasizes hands-on practical experience and is based on
                                real-world client scenarios.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Q2. Are students allowed to utilize the office premises for practice after
                                    completing the course?</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Answer: Certainly! If there are available seats, we welcome students to utilize our
                                office space for practice without any additional charges.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Q3. Are job opportunities available upon completing the course?</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Answer: Yes, we offer job opportunities based on individual performance and availability
                                upon completion of the course.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>Q4. Can I obtain a certificate without undergoing any assessments?
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Answer: Regrettably, we only issue certificates to candidates who successfully pass the
                                assessments after completing the course. The assessment is designed to ensure that our
                                graduates have the skills and knowledge necessary to be successful in their careers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>Q5. Do you offer training classes in the evening or at night?</strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                Answer: Our onsite training classes are scheduled from morning to evening. However, for
                                online students, we can accommodate training sessions after evening hours, subject to
                                consultation and agreement.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).ready(function () {
            var PaymentOption_check = $('select[name=PaymentOption] :selected').val();
            if (PaymentOption_check === 'Online') {
                $('.attach_doc_div').removeClass('d-none');
                $('#is_file_visible').val(true);
            } else {
                $('.attach_doc_div').addClass('d-none');
                $('#is_file_visible').val(false);
            }
            $('select[name=PaymentOption]').on('change', function () {
                var PaymentOption_check = $('select[name=PaymentOption] :selected').val();
                if (PaymentOption_check === 'Online') {
                    $('.attach_doc_div').removeClass('d-none');
                    $('#is_file_visible').val(true);
                    // $('#attach_doc').prop('required', true);
                } else {
                    $('.attach_doc_div').addClass('d-none');
                    $('#is_file_visible').val(false);
                    // $('#attach_doc').prop('required', false);
                }
            });

            function toggleAttachmentDiv() {
                var PaymentOption_check = $('select[name=PaymentOption]').val();
                $('.attach_doc_div').toggleClass('d-none', PaymentOption_check !== 'Online');
                $('#is_file_visible').val(PaymentOption_check === 'Online');
            }

            toggleAttachmentDiv();

            $('select[name=PaymentOption]').on('change', toggleAttachmentDiv);

            $('select[name=PlanID]').on('change', function () {
                var PlanID = $(this).val();
                $('#course_selected').html('');
                $('select[id=CourseName] option').prop('disabled', false);

                if (PlanID === '3') {
                    $('select[id=CourseName] option:not(:first)').each(function () {
                        $('#course_selected').append('<span class="badge bg-primary me-2 p-3 mt-2"><input type="hidden" value="' + $(this).val() +
                            '" name="course_selected[]">' + $(this).val() +
                            '</span>');
                        $('select[id=CourseName] option').prop('disabled', true);
                    });
                }

            });

            $('select[id=CourseName]').on('change', function () {
                var CourseName = $(this).val();
                var PlanID = $('select[name=PlanID]').val();
                var course_selected = $('#course_selected').html();

                if (PlanID === '1') {
                    $('#course_selected').html('<span class="badge bg-primary me-2 p-3 mt-2"><input type="hidden" value="' + CourseName +
                        '" name="course_selected[]">' + CourseName +
                        '<a href="#" class="course_select_cancel_btn text-white p-2">&times;</a></span>');
                } else if (PlanID === '2' && !($('span:contains("' + CourseName + '")').length)) {
                    $('#course_selected').append('<span class="badge bg-primary me-2 p-3 mt-2"><input type="hidden" value="' + CourseName +
                        '" name="course_selected[]">' + CourseName +
                        '<a href="#" class="course_select_cancel_btn text-white p-2">&times;</a></span>');
                    var length = $('#course_selected').children().length;
                    $('select[id=CourseName] option').prop('disabled', length >= 2);
                }
            });


            $('#course_selected').on('click', '.course_select_cancel_btn', function (e) {
                e.preventDefault();
                $(this).closest('span').remove();
                var length = $('#course_selected').children().length;
                $('select[id=CourseName] option').prop('disabled', length >= 2);
            });
        });
        $(document).ready(function () {
            var btn = $('#btn-submit');
            $(document).on('submit', 'form', function () {
                btn.text("Enrolling please wait...");
                $('button').attr('disabled', 'disabled');

            });
        });
    </script>

@endsection
