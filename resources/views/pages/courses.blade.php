@extends('includes.master')
@section('title',$title)
@section('content')
    <style>
        .course-details {
            display: none;
        }
    </style>
    <div class="container-xxl py-5">
        <div class="container">
            <h1>Course Catalog</h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Introduction Lesson</h4>
                        <button class="btn btn-primary toggle-details" data-toggle="collapse" data-target="#details1"
                                aria-expanded="false" aria-controls="details1">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    <div class="collapse course-details" id="details1">
                        <p>This is the introduction lesson details.</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Basics of HTML</h4>
                        <button class="btn btn-primary toggle-details" data-toggle="collapse" data-target="#details2"
                                aria-expanded="false" aria-controls="details2">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    <div class="collapse course-details" id="details2">
                        <p>This is the basics of HTML details.</p>
                    </div>
                </li>
                <!-- Add more list items for other courses -->
            </ul>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.toggle-details').click(function () {
                $(this).find('i').toggleClass('bi-chevron-down bi-chevron-up');
            });
        });
    </script>

@endsection
