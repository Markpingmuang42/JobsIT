
<?php $__env->startSection('title','สร้างโฟสต์'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/ent/entPost.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="mainBoxTwo">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>
        
        <form method="post" action="<?php echo e(url('Entrepreneur/entMaster')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                 <input type="text" name="Cname" placeholder=" กรุณากรอกชื่อบริษัท" required>
                </div>
                
                <div class="jobsType">
                    <label>ตำแหน่งงานที่ต้อการ</label>
                    <select type="text" name="Sto_group"data-val="true" >
                        <option value="กิจการของคนเดียว">Programmer</option>
                        <option value="ห้างหุ้นส่วน ">IT Support </option>
                        <option value="ห้างหุ้นส่วนจำกัด">UX/UI</option>
                    </select>
                </div>
                
                <div class="amount">
                    <label>จำนวนตำแหน่งงาน</label>
                    <input type="text" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ" required>
                </div>
                
                <div class="companyDetail">
                    <label>รายละเอียดของบริษัท</label>
                    <input type="text" placeholder=" กรุณากรอกรายละเอียดของบริษัท" required>
                </div>
                
                <div class="textPost">
                    <label>ข้อความในการโพสต์</label>
                    <textarea name="message" name="Tpost" placeholder=" กรุณากรอกข้อความ" required></textarea>
                </div>
                
                <div class="property">
                    <label>คุณสมบัติที่ต้องการ</label>
                    <textarea name="message" placeholder=" กรุณากรอกคุณสมบัติ" required></textarea>
                </div>
                
                <div class="welfare">
                    <label>สวัสดิการ</label>
                    <textarea name="message" placeholder=" กรุณากรอกสวัสดิการ" required></textarea>
                </div>
                
                <div class="locationCompa">
                    <label>ที่อยู่</label>
                    <textarea name="message" placeholder=" กรุณากรอกที่อยู่" required></textarea>
                </div>
                
                <div class="nameCon">
                    <label>ข้อมูลการติดต่อ</label>
                    <input type="text" placeholder=" กรุณากรอกข้อมูลการติดต่อ" required>
                </div>  
                
                <button type="submit" class="confirmPost">โพสต์</button>
                <button type="button" class="cancelPost">ยกเลิก</button>

        </div>
    </form>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Entrepreneur/indexEntrepreneur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/Entrepreneur/entPost.blade.php ENDPATH**/ ?>