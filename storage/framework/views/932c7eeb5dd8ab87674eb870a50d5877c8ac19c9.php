<?php $__env->startSection('title','รายละเอียดงาน'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/jobsDetail.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>

    <div class="showJobs">
        <section>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="logoCompany">
                <img src="../image/logoJobsIT.jpg" alt="logo company" width="100px" height="100px">
            </div>
            <div class="companyDetails">
                <p>ชื่อบริษัท</p>
            </div>
            <button class="seeDetailCompany" onclick="window.location.href='https://www.w3schools.com/css/css3_buttons.asp';">
                <p>ดูข้อมูลบริษัท</p>
            </button>
            <button class="apply" onclick="window.location.href='https://www.w3schools.com/css/css3_buttons.asp';">
                <p>สมัครงาน</p>
            </button>
        </section>
        <section>
            <div class="companyDetails">
                <p>ตำแหน่งงาน</p>
                <p>จำนวนที่เปิดรับ</p>
                <p>สถานที่ตั้งบริษัท</p>
                <p>เงินเดือน</p>
                <p>ประสบการณ์การทำงาน</p>
                <p>สวัสดิการ</p>
            </div>
        </section>
        <section>
            <p>แผนที่</p>
        </section>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('jobs/jobsMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/jobs/jobsDetail.blade.php ENDPATH**/ ?>