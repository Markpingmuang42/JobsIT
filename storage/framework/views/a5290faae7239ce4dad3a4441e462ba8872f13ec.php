<?php $__env->startSection('title','หน้าหลัก'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/jobsIndex.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="listName">
        <button class="history" onclick="window.location.href='<?php echo e(url('/jobs/history/')); ?>';">
            การฝากประวัติ
        </button>

        <div class="listNameTable">
            <table style="width:350px">
                <tr>
                    <th class="maybeFine">รายชื่อของคนที่อาจรู้จัก</th>
                </tr>
                <tr>
                    <td class="maybeFineName">พันธการ ปิงเมือง</td>
                </tr>
                <tr>
                    <td class="maybeFineName">พันธการ ปิงเมือง</td>
                </tr>
                <tr>
                    <td class="maybeFineName">พันธการ ปิงเมือง</td>
                </tr>
                <tr>
                    <td class="maybeFineName">พันธการ ปิงเมือง</td>
                </tr>
                <tr>
                    <td class="maybeFineName">พันธการ ปิงเมือง</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="listJobs">
        <section>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="logoCompany">
                <img src="../image/logoJobsIT.jpg" alt="logo company" width="50px" height="50px">
            </div>
            <div class="companyDetails">
                <p>ตำแหน่งงาน</p>
                <p>ชื่อบริษัท</p>
                <p>สถานที่ตั้งบริษัท</p>
                <p>จำนวนที่เปิดรับ</p>
                <p>เงินเดือน</p>
            </div>
            <div class="friends">
                <p>เพื่อนที่อาจรู้จัก</p>
            </div>
            <button class="interested" onclick="window.location.href='#';">
                <p>สนใจ</p>
            </button>
            <button class="seeDetail" onclick="window.location.href='#';">
                <p>ดูรายละเอียด</p>
            </button>
        </section>

        <section>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="logoCompany">
                <img src="../image/logoJobsIT.jpg" alt="logo company" width="50px" height="50px">
            </div>
            <div class="companyDetails">
                <p>ตำแหน่งงาน</p>
                <p>ชื่อบริษัท</p>
                <p>สถานที่ตั้งบริษัท</p>
                <p>จำนวนที่เปิดรับ</p>
                <p>เงินเดือน</p>
            </div>
            <div class="friends">
                <p>เพื่อนที่อาจรู้จัก</p>
            </div>
            <button class="interested2" onclick="window.location.href='#';">
                <p>สนใจ</p>
            </button>
            <button class="seeDetail" onclick="window.location.href='#';">
                <p>ดูรายละเอียด</p>
            </button>
        </section>
        <section>

        </section>
    </div>

    <div class="topLessJobs">
        <div class="topLessJobsTable">
            <table style="width:350px">
                <tr>
                    <th class="topLessJobsTitle">งานยอดนิยม</th>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Programmer</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Web Programmer</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Design UX/UI</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Tester</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Mobile Developer</td>
                </tr>
            </table>
        </div>

        <div class="topLessJobsTable">
            <table style="width:350px">
                <tr>
                    <th class="topLessJobsTitle">งานที่ไม่นิยม</th>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">IT Support</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">IT Consulting</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">System Analyst</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">System Engineer</td>
                </tr>
                <tr>
                    <td class="topLessJobsDetail">Project Manager</td>
                </tr>
            </table>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('jobs/jobsMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/jobs/jobsIndex.blade.php ENDPATH**/ ?>