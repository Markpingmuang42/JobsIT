@extends('jobs/jobsMaster')
@section('title','งานของฉัน')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/myJobs.css">
@stop

@section('content')

<body>
    <div class="myJobs">
        <div class="myJobsTable">
            <div class="myJobsTitle">
                My Jobs
            </div>
            <div class="myJobsDetails">
                <a href="{{route('allJobs')}}" target="iframe_a">
                    งานทั้งหมด
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="{{route('interestedJobs')}}" target="iframe_a">
                    งานที่สนใจ
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="{{route('applyJobs')}}" target="iframe_a">
                    งานที่สมัคร
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="{{route('historyCompanyJobs')}}" target="iframe_a">
                    บริษัทที่ดูประวัติ
                </a>
            </div>

        </div>
    </div>

    <div class="myJobsMain">
        <section>
            <iframe src="{{route('allJobs')}}" name="iframe_a" height="600px" width="100%"></iframe>
        </section>
    </div>

</body>
@stop