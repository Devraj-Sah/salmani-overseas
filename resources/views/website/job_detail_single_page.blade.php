@php
    $all_jobs = App\Models\Navigation::all()
        ->where('page_type', 'Job')
        ->take(5);
    
@endphp

@extends('layouts.master')

@section('content')
    {{-- <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">{{$slug1}} </h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/job-list">Job</a></li>
                        @if(isset($slug2))
                        <li class="current"><span>{{$slug2}} </span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End --> --}}

    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('/website/img/service-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Shalmani Overseas.</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>JOB-description</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="job-description-area">
            <div class="service-title">
                <h1>WHAT WE PROVIDE</h1>
            </div>
            <div class="job-description-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card mb-3" style="max-width:100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <div class="card-img">
                                        <img src="{{ $job->banner_image }}" class="card-img" alt="...">
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$job->getJob->caption}}</h5>
                                        <ul class="mt-4">
                                            <li class="mt-3">
                                                <h5><i class="fa fa-map-marker"></i> <span> {{$job->getJob->country}}</span></h5>
                                            </li>
                                            <li class="mt-3">
                                                <h5>Company Name: <span>{{ $job->getJob->company_name }}</span></h5>
                                            </li>
                                            <li class="mt-3">
                                                <h5>Required No: <span>{{ $job->getJob->total_demand }}</span></h5>
                                            </li>
                                            <li class="mt-3">
                                                <h5>Minimum Qualification: <span>SLC</span></h5>
                                            </li>
                                            <li class="mt-3">
                                                <h5>Salary: <span>20000-50000</span></h5>
                                            </li>
                                        </ul>
                                        <div class="ml-auto">
                                            <a class="btn" href="#">apply now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="border"></div>
                                <div class="col-sm-12">
                                    <div class="job-req-content">
                                        <h5>Job Description</h5>
                                        {{-- @php
                                            $line_by_line= explode('||', $job->long_content);
                                        @endphp
                                        <ul>
                                            @foreach ($line_by_line as $one_string)                                                
                                                <li><i class="fa-solid fa-hand-point-right"></i><span><strong>{!! htmlspecialchars_decode($one_string) !!}</strong></span></li>                                           
                                            @endforeach
                                        </ul> --}}
                                        {!! htmlspecialchars_decode($job->long_content) !!}
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <div class="siderbar-link-list">
                            <h5>OUR SERVICES</h5>
                            <hr>
                            <ul>
                                <li>
                                    <a href="">Overseas Recruitment</a>
                                </li>
                                <li>
                                    <a href="">Overseas Recruitment</a>
                                </li>
                                <li>
                                    <a href="">Overseas Recruitment</a>
                                </li>
                                <li>
                                    <a href="">Deployment</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



{{-- 
    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- About Area Start -->
        <section class="job-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="job-description">
                            <p>
                                @php echo $job->short_content; @endphp
                            </p>
                            <p>
                                @php echo $job->long_content; @endphp
                            </p>
                        </div>
                        <div class="apply-now">
                            <a href="#" id="btnOpenFormbutton" class="apply-button">Apply Now</a>
                        </div>
                        <div class="heading mt--22 mb--22">
                            <h3>Basic Job Information</h3>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Position</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->company_name }}</td>
                                </tr>
                                <tr>
                                    <td>Number of Vacancies</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->contract_time }}</td>
                                </tr>
                                <tr>
                                    <td>Salary</td>
                                    <td>:</td>
                                    <td>Rs. {{ $job->getJob->salary }}</td>
                                </tr>
                                <tr>
                                    <td>Food & Accommodation</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->foodaccommondation }}</td>
                                </tr>
                                <tr>
                                    <td>Contract Period</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->total_demand }}</td>
                                </tr>
                                <tr>
                                    <td>Working day</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->working_day }}</td>
                                </tr>
                                <tr>
                                    <td>Working Hour</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->working_hour }}</td>
                                </tr>
                                <tr>
                                    <td>Visa & Ticket</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->visa_ticket }}</td>
                                </tr>
                                <tr>
                                    <td>Service Charge</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->service_charge }}</td>
                                </tr>
                                <tr>
                                    <td>LT Number</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->lt_number }}</td>
                                </tr>
                                <tr>
                                    <td>Interview</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->interview }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <img src="{{ $job->banner_image }}">
                    </div>

                  
                   
                       
                        <div class="col-sm-4">
                            <h3>Latest Jobs</h3>
                            @foreach ($all_jobs as $all_jobsitem)
                           
                            <div class="side-bar">
                                <div class="heading mt--22 mb--22"> 
                                    <div class="job-box">
                                        <div class="job__inner">
                                            <a href="{{ route('single_job', $all_jobsitem->nav_name) }}" class="job-overlay"></a>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <figure class="job__icon">
                                                        <img src="{{ $all_jobsitem->banner_image }}" alt="Job"
                                                            class="mx-auto">
                                                    </figure>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="job__body">
                                                        <div class="job-header">
                                                            <h3>{{ $all_jobsitem->getJob->country }}</h3>
                                                            <p>({{ $all_jobsitem->getJob->company_name }})</p>
                                                        </div>
                                                        <div class="job-footer">
                                                            <a href="/job_detail_single_page"  class="btn btn-shape-round">View &amp;
                                                                Apply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                

                </div>
            </div>
        </section>
    </main>

    <!-- Popup Form Start-->
    <div class="form-popup-bg">
        <div class="form-container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <button id="btnCloseForm" class="close-button fa fa-times-circle" ></button>
            <h4>Application Form</h4>
            <p class="job-title">{{ $job->caption }}</p>

            <form method="post" action="{{ route('contactstore') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="first_name">Full Name</label>
                    <input name="first_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="message">Applying For</label>
                    <input name="message" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input name="email" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input name="number" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="file">Upload your CV</label>
                    <input name="file" type="file" class="form-control file-upload">
                </div>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </div>
    <!-- Popup Form End--> --}}

    
@endsection
