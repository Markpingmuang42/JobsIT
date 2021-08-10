<?php $__env->startSection('title','งานของฉัน'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/myJobs.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="myJobs">
        <div class="myJobsTable">
            <div class="myJobsTitle">
                My Jobs
            </div>
            <div class="myJobsDetails">
                <a href="<?php echo e(route('allJobs')); ?>" target="iframe_a">
                    งานทั้งหมด
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="<?php echo e(route('interestedJobs')); ?>" target="iframe_a">
                    งานที่สนใจ
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="<?php echo e(route('applyJobs')); ?>" target="iframe_a">
                    งานที่สมัคร
                </a>
            </div>
            <div class="myJobsDetails">
                <a href="<?php echo e(route('historyCompanyJobs')); ?>" target="iframe_a">
                    บริษัทที่ดูประวัติ
                </a>
            </div>

        </div>
    </div>

    <div class="myJobsMain">
        <section>
            <iframe src="<?php echo e(route('allJobs')); ?>" name="iframe_a" height="600px" width="100%"></iframe>
        </section>
    </div>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('jobs/jobsMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/jobs/myJobs.blade.php ENDPATH**/ ?>