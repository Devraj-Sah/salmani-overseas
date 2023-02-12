@extends('layouts.master')

@section('content')
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('/website/img/service-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Shalmani Overseas.</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>JOB SECTORS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- About Area Start -->
        <section class="about-area ptb--60">
            <div class="container">
                @if (isset($jobs))
                    
                        <div class="row">
                            @foreach ($jobs as $job)
                            <div class="col-md-6 col-sm-12">
                                <div class="job-box">
                                    <div class="job__inner">
                                        <a href="/jobdetail/{{ $job->nav_name }}" class="job-overlay"></a>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <figure class="job__icon">
                                                    <img src="{{ $job->banner_image }}" alt="Job" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="job__body">
                                                    <div class="job-header">
                                                        <h3>{{ $job->caption }}</h3>
                                                        <p>{{ $job->getJob->company_name }}</p>
                                                    </div>
                                                    <div class="job-detail">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>{{ $job->getJob->country }}</li>
                                                            <li><i class="fa fa-users"></i> ({{ $job->getJob->total_demand }})</li>
                                                            <li><i class="fa fa-money"></i> NRs.{{ $job->getJob->salary }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="job-footer">
                                                        <ul>
                                                            <li>Posted On: {{ $job->getJob->deadline }}</li>
                                                            <li class="deadline">{{ $job->getJob->posted_on }}</li>
                                                        </ul>
                                                        <a href="/job_detail_single_page" class="btn btn-shape-round">View & Apply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                   
                @endif
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <!-- Main Content Wrapper End --> --}}
    
    @if (isset($job_categories))
        <div class="container">
            <div class="job-sectors-area">
                <div class="row">
                    @foreach ($job_categories as $job)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        <a href="/{{ $job->nav_name }}">
                            <div class="bg-items">
                                <div class="items" style="background-image : url('{{ $job->banner_image }}');">
                                    <div class="job-sector-title">
                                        <p>{{ $job->caption }}</p>
                                    </div>
                                    
                                    <div class="tl5"></div>
                                    <div class="br5"></div>
                                    <div class="details">
                                        <p>{{ $job->caption }}</p>
                                        <h6>Read more</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if (!isset($job_categories))   
    <div class="innerpage_wrapper">
        <div class="job_sector_main">
            <div class="container">
                <div class="job_desc">
                    <h1 class="special">{{$slug1->caption}} <span>contents !!!</span></h1>
                </div>
                <div class="row">
                    @foreach ($jobs as $job)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <a href="jobdetail/{{ $job->nav_name }}">
                            <div class="job-innear-page-content">
                                <img src="{{ $job->banner_image }}" alt="Avatar" class="image">
                                <div class="overlay">{{$job->caption}}<span> <br>({{$job->getJob->total_demand}} Open Position)</span><br><span>Read More</span></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection
