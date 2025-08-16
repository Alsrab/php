<?php
include 'inc/db.php';
include 'inc/form.php';
include 'inc/select.php';
include 'inc/db_close.php';
?>
<?php include_once './parts/header.php' ?>
<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5 text-center">
        <img src="images/logo.jpg" alt="logo" class="img-fluid mb-3">
        <h1 class="display-4 fw-bold">🎉 سحب الجوائز الكبرى 🎉</h1>
        <p class="lead fw-normal">باقي علي انتهاء المسابقة:</p>
        <h3 id="countdown"></h3>
        <p class="lead fw-normal">ادخل الآن لفرصة الفوز بجائزة كبرى من موقعنا</p>
        <p class="text-muted fs-4">📢 قريبًا</p>
    </div>

</div>
<div class="container">
    <ul class="list-group list-group-flush text-center">
        <li class="list-group-item fw-bold">🏆 السحب الكبير يبدأ يوم 30 أغسطس</li>
        <li class="list-group-item">⏰ السحب سيتم مساءً في تمام الساعة 8:00</li>
        <li class="list-group-item">🎉 جهز نفسك! قد تكون أنت الفائز</li>
        <li class="list-group-item">📅 تابعنا لمعرفة النتيجة فور إعلانها</li>
        <li class="list-group-item">💌 شكرًا لكل من انضم إلى المسابقة</li>
    </ul>
</div>
<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5 text-center">
        <form action="index.php" <?php $_SERVER['PHP_SELF'] ?> method="POST">
            <h3> الرجاء أدخل معلوماتك </h3>
            <div class="mb-3">
                <label for="firstname" class="form-label">الاسم الاول</label>
                <input type="text" name="fname" class="form-control" id="firstname" aria-describedby="firstname" value="<?php echo $fname ?>">
                <div class="form-text error"> <?php echo $errors['firstnameError']; ?> </div>
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">الاسم الاخير</label>
                <input type="text" name="lname" class="form-control" id="lastname" aria-describedby="lastname" value="<?php echo $lname ?>">
                <div class="form-text error"> <?php echo $errors['lastNameError']; ?> </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <input type="text" name="email" class="form-control" id="email" aria-describedby="email" value="<?php echo $email ?>">
                <div class="form-text error"> <?php echo $errors['emailError']; ?> </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            <div class="loder-con">
                <div id="loader">
                    <canvas id="circularLoader" width="200" height="200"></canvas>
                </div>
            </div>
            <!-- Button trigger modal -->
            <div class="d-grid gap-2 col-6 mx-auto my-5">
                <button type="button" id="winner" class="btn btn-primary">
                    اختيار الرابح
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="modalLabel"> الرابح في المسابقة </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($users as $user): ?>
                                <h1 class="display-3 test-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['firstname']) . " " . htmlspecialchars($user['lastname']); ?> </h1>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once './parts/footer.php' ?>