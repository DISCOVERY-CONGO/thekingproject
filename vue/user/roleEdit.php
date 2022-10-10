<?php 
include __DIR__."/../auth/inc.php"; 
include __DIR__."/../../sanitalizer/user.php";


?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h4 class="center">changer le role</h4>
              <form class="pt-3" method="POST">
              <input type="hidden" name="user_id" value="<?= $data[0]['id'] ?>">
                <div class="form-group">
                  <input type="text"  value="<?= $data[0]['role'] ?>" name="role"class="form-control form-control-lg" id="exampleInputEmail1" 
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="role_save">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>