<?php

  $page = 'home';
  include('includes/layouts/header.php');

?>

  <!-- Page Content -->
  <div class="container">

    <!-- Slogan -->
    <div class="row col-md-8 mt-3">
      <?php include('includes/layouts/slogan.php'); ?>
    </div>
    <!-- ./Slogan -->

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Prayer request form -->

        <div class="container" id="contact">
            <h1 class="my-4">Prayer Request</h1>

            <p class="text-center" id="required" style="color: rgb(200,30,30); font-size: 12px; display: none;">
              All fields are required
            </p>
            
            <form method="POST" action="assets/mail/contact_us_process.php" onsubmit="return validate()">
                <label style="color: #555;">Name *</label>
              <div class="form-row">
            
                <div class="form-group col-md-6">
                  <!-- <label>Name</label> -->
                  <input oninput="return clear_required();" onsuspend="return show_required();" type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" required>
                  <!-- <label id="required" style="color: rgb(200,30,30); font-size: 12px; margin-bottom: 10px; margin-top: 0; display: none; padding-left: 5px;">This field is required</label> -->
                </div>
            
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
                </div>
              </div>
            
            <!-- Email -->
              <div class="form-group">
                <label style="color: #555;">Email *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
              </div>
            
            <!-- Phone number -->
              <div class="form-group">
                <label style="color: #555;">Phone *</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone number" required>
              </div>
            
            <!-- Prayer request -->
              <div class="form-group">
                <label style="color: #555;">Prayer request *</label>
                <textarea class="form-control" id="prayer_request" name="prayer_request" rows="3" required></textarea>
              </div>
              <br />

              <button type="submit" name="contact_submit" class="btn btn-primary">SUBMIT</button>
            
            </form>

        </div>

        <!-- /.Prayer request form -->
        
      </div>

      <!-- Sidebar Widgets Column -->
      <?php include('includes/layouts/side_bar.php'); ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<!-- Footer -->
<?php
  include('includes/layouts/footer.php');
?>


<script type="text/javascript">

  function validate(){
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var subject = document.getElementById("phone").value;
    var message = document.getElementById("prayer_request").value;
    
    if (firstName.trim() == "" && lastName.trim() == "" && subject.trim() == "" && message.trim() == ""){
      var requiredLabel = document.getElementById("required");
      requiredLabel.style.display = "block";
      return false;
    }
    // var message = document.getElementById("complaint_message").value;
    // if (message.trim() == ""){
    //   alert("Message cannot be empty!");
    //   return false;
    // }

    return true;
  }
  
</script>