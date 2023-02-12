<section class="job-area ptb--60 bg--gray">
    <div class="container">
        <div class="row">
            <div class="heading text-center">
                <h1 class="mb--18">Latest Job</h1>
                <hr class="delimeter mx-auto mb--22">
            </div>
            @if (isset($jobs))
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
                                                {{-- @dd($job->getJob) --}}
                                                <h3>{{ $job->caption }}</h3>
                                                <p>{{ $job->getJob->company_name }}</p>
                                            </div>
                                            <div class="job-detail">
                                                <ul>
                                                    <li><i class="fa fa-map-marker"></i> {{ $job->getJob->country }}
                                                    </li>
                                                    <li><i class="fa fa-users"></i> ({{ $job->getJob->total_demand }})
                                                    </li>
                                                    <li><i class="fa fa-money"></i> NRs.{{ $job->getJob->salary }}</li>
                                                </ul>
                                            </div>
                                            <div class="job-footer">
                                                <ul>
                                                    <li>Posted On: {{ $job->getJob->deadline }}</li>
                                                    <li class="deadline">Deadline: {{ $job->getJob->posted_on }}</li>
                                                </ul>
                                                <a href="/jobdetails" class="btn btn-shape-round">View & Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <a style="display: flex" href="/job" class="btn">View All</a>

</section>
