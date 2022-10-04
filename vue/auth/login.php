<?php 
include __DIR__."/inc.php"; 
include __DIR__."/../../sanitalizer/user.php";
// use \Models\User;

// $structure = new \models\structure();
// $user = new User;


// if (isset($_POST['action']) == 'login') {
   
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   // validation
//   $error = array(
//     'error_status' => 0
//   );

//   if (empty($email)) {
//     $error['error_status'] = 1;
//     $error['email'] = 'Email is required!';
//   }
//   if (empty($password)) {
//     $error['error_status'] = 1;
//     $error['password'] = 'Password is required!';
//   }
//   if ($error['error_status'] > 0) {
//     echo json_encode($error);
//     exit();
//   }
//   // if validation is successful
//   $data = ['email'=>$email,'password'=>$password];
//   $result = $user->login($data);
//   if($result){
//     $response = array(
//       'status' => 1,
//       'msg' => 'Login successful'
//     );
//   } else {
//     $response = array(
//       'status' => 0,
//       'msg' => 'Invalid Credentials'
//     );
//   }
//   echo json_encode($response);
//   exit();
// } 

?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h4 class="center">se connecter</h4>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <small class=" text-red-800 ml-5" id="emailError"></small>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <small class=" text-red-800 ml-5" id="passwordError"></small>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="login">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div><script>
    // $('#loginForm').on('submit', function(e) {
    //   e.preventDefault();
    //   var data = new FormData($(this)[0]);
    //   data.append('action', 'login');
    //   var form = $(this);
    //   form.find(':submit').attr('disabled', true);
    //   var url = "http://theking/login";
    //   $.ajax({
    //     type: 'POST',
    //     url: url,
    //     data: data,
    //     dataType: 'JSON',
    //     processData: false,
    //     contentType: false,
    //     error: function(xhr, textStatus, errorThrown) {
    //       console.log(xhr.responseText);
    //     },
    //     success: function(response) {
    //       console.log(response);
    //       form.find(':submit').attr('disabled', false);
    //       if (response.error_status == 1) {
    //         form.find('small').text('');
    //         // If validation error exists
    //         for (var key in response) {
    //           var errorContainer = form.find(`#${key}Error`);
    //           if (errorContainer.length !== 0) {
    //             errorContainer.html(response[key]);
    //           }
    //         }
    //       }
    //       if (response.status == 1) {
    //         form.trigger('reset');
    //         form.find('small').text('');
    //         // handling success response
    //         window.location.href = 'commandes';

    //       } else if (response.status == 0) {
    //         // Handling failure response
    //         toastr.error(response.msg);
    //       }
    //     }
    //   });
    // });
  </script>
</body>

</html>