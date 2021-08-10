
<?php $__env->startSection('title','รายละเอียดผู้สมัคร'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/ent/entIndex.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="mainBox">
        <div class="imgAppl">
            <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="180px" height="215px">
        </div>

        <div class="buttonBox">
            <button>ข้อมูลส่วนตัว</button>
            <button>ประวัติการศึกษา</button>
            <button>ความสามารถ</button>
            <button>ข้อมูลการติดต่อ</button>
            <button>ภูมิลำเนา</button>
            <button>ที่อยู่ปัจจุบัน</button>
        </div>

        <section>
            <div class="dataHistoryDetail">
                <label>รายละเอียดข้อมูลส่วนตัว</label>
                <div class="dataData">
                    <p>ชื่อ - นามสกุล : นาย ภาณุวัฒน์ มังสังข์ </p>
                    <p>เพศ : ชาย</p>
                    <p>สัญชาติ : ไทย</p>
                    <p>เชื้อชาติ : ไทย</p>
                    <p>ศาสนา : พุทธ</P>
                    <p>สถานะภาพทางทหาร : ผ่านการเกณฑ์ทหารแล้ว</p>
                </div>
                <div class="dataDataR">
                    <p>ชื่อ - นามสกุล : นาย ภาณุวัฒน์ มังสังข์ </p>
                    <p>วันเกิด : 25 พฤศจิกายน 2541</p>
                    <p>อายุ : 22 ปี</p>
                    <p>ส่วนสูง : 165 Cm    น้ำหนัก : 56 Kg</p>
                </div>
            </div>
        </section>

        <section>
            <div class="dataHistoryDetail">
                <label>ประวัติการศึกษา</label>
                <div class="dataData">
                    <p>จบการศึกษาปีที่ : พ.ศ.2564 </p>
                    <p>สถานศึกษา : มหาวิทยาลัยพะเยา </p>
                    <p>คณะเทคโนโลยีสารสนเทศ</p>
                    <p>สาชา วิทยาการคอมพิวเตอร์</p>
                    <p>วุฒิการศึกษา : ปริญญาตรี  (วทบ.)</P>
                    <p>เกรดเฉลี่ย (GPA.) : x.xx </p>
                </div>
             </div>
        </section>

        <section>
            <div class="dataHistoryDetail">
                <label>ความสามารถ</label>
                <div class="dataData">
                    <p>ภาษาที่ถนัด : HTML, Java, PHP, CSS  </p>
                    <p>ภาษาที่เคยเรียน : Java, HTML, PHP,  Javascript, CSS  </p>
                    <p>Framework ที่ใช้ : Laravel Framework</p>
                    <p>ความสามารถทางภาษา : ภาษาอังกฤษ </p>
                    <p>ภาษาไทย</P>
                </div>

             </div>
        </section>

        <section>
            <div class="dataHistoryDetail">
                <label>ข้อมูลการติดต่อ</label>
             </div>
        </section>

        <section>
            <div class="dataHistoryDetail">
                <label>ภูมิลำเนา</label>
             </div>
        </section>

        <section>
            <div class="dataHistoryDetail">
                <label>ที่อยู่ปัจจุบัน</label>
             </div>
        </section>
        <div class="footer"></div>


    </div>   
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Entrepreneur/indexEntrepreneur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/Entrepreneur/entIndex.blade.php ENDPATH**/ ?>