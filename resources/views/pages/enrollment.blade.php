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
                    <h4 class="text-center pb-4">Please fill the form for your desired course intake</h4>
                    <form class="form-contact contact_form" id="enrollment_form"
                          action="{{ route('pages.store_enrollment') }}"
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
                        @if (session()->has('errors'))
                            <div class="alert alert-danger">
                                {{ session()->get('errors') }}
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
                                            <option value="{{$value->PlanID}}" {{ old('PlanID') ? 'selected' : '' }}>{{$value->PlanTitle}}</option>
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
                                    <input class="form-control" name="StudentName" type="text"
                                           placeholder="Enter your Name*" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="FatherName" id="father_name" type="text"
                                           placeholder="Enter your Father Name*" value="{{ old('father_name') }}" required>
                                    @error('father_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentCNIC" id="cnic" type="text"
                                           placeholder="Enter your CNIC*" value="{{ old('cnic') }}" required>
                                    @error('cnic')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="StudentPhone" id="Phone_no" type="text"
                                           placeholder="Enter your Phone Number*" value="{{ old('Phone_no') }}" required>
                                    @error('Phone_no')
                                    <span class="text-danger"> {{ $message }} </span>
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
                                    <select name="StudentGender" class="form-select" id="" required>
                                        <option value="" selected>Select Gender *</option>
                                        <option value="male" {{ old('gender') ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') ? 'selected' : '' }}>Female</option>
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
                                        <option value="friend_family" {{ old('heard_from') ? 'selected' : '' }}>
                                            Friends/Family
                                        </option>
                                        <option value="offcie_employee" {{ old('heard_from') ? 'selected' : '' }}>
                                            Office employee
                                        </option>
                                        <option value="office_trainee" {{ old('heard_from') ? 'selected' : '' }}>
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
                            <div class="col-sm-12 col-md-12 col-lg-12 bg-light p-3 justify-content-sm-around">
                                <h3 class="text-dark">Terms & Conditions</h3>
                                <p class="text-muted">After submitting the form the candidate will have 1 day to
                                    send the cancel request via email.
                                    The refund process will take maximum 5 business days.</p>
                                <p class="text-muted">After the confirmation email, the candidate will be enrolled so
                                    the request for refund will not be accepted</p>
                                <p class="text-muted">On course completion, the candidate will be given the
                                    certificate after the successful analysis test results.</p>
                            </div>
                            <div class="col-sm-12 float-end mt-3">
                                <button type="submit" class="btn btn-outline-primary mb-3">Enroll Now</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var PaymentOption_check = $('select[name=PaymentOption] :selected').val();
            if (PaymentOption_check === 'Online') {
                $('.attach_doc_div').removeClass('d-none');
                $('#is_file_visible').val(true);
            } else {
                $('.attach_doc_div').addClass('d-none');
                $('#is_file_visible').val(false);
            }
            $('select[name=PaymentOption]').on('change', function() {
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

            $('select[id=CourseName]').on('change', function() {
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

    </script>

@endsection
