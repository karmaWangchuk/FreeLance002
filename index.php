<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Phenom Picks</title>
<link rel="icon" href="images/favicon.jpg" type="image/x-icon"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
  rel="stylesheet"></script>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" media="all" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<!-- <link href="css/responsive.css" rel="stylesheet"> -->
<script src="js/validation.js"></script>

</head>
<body>

<!-- Header -->
<div class="header-main">
  <div class="container ">
    <div class="row">
      <div class="col-md-12 text-center">
         <img src="images/logo.png" class="logo-center">
      </div>
    </div>
  </div>
</div>
<!-- Header Close -->


<!-- Banner Start -->

<div class="banner-login">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-md-offset-2">
        <form class="bg-1" id='form' method="post" name="mail-send" action="mail-send.php">
          <h1> free 1 day sports trial</h1>
             <div class="form-group">
                <label for="fname">Name</label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" class="form-control" name="phone" id="no" placeholder="" oninput= "format();">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name = "email" id="" placeholder="">
              </div>
              <button type="submit" class="btn btn-default btn1" onclick='validateD();'>Get My Free Pick</button>
          </form>
      </div>
    </div>
  </div>
</div>


<!-- pop up box -->

<!-- Button trigger modal -->
<button  id = 'pop' type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="display:none">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h4 class="modal-title" id="exampleModalLongTitle">Message</h4> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body popbody">
      You will be contacted by one of our pheonms shortly
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn1" data-dismiss="modal" onclick= "resetData();">Confirm</button>
      </div>
    </div>
  </div>
</div>


<!-- Banner Close -->

<!-- Footer Start -->
<div class="footer">
  <div class="container">
    <div class="row">
     <div class="col-md-6">
        <p class="foo-text">© Copyright 2021 Phenom Picks all rights reserved</p>
     </div>
     <div class="col-md-6">
       <img src="images/logo.png" class="logo-right img-responsive">
     </div>
    </div>
  </div>
</div>

<!-- Footer Close -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/slick.js" rel="stylesheet"></script>
<script>

  if(window.location.href.split('?')[1] == 'confirm'){
    $('#pop').click()
  }
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  function format(){

    var number = $("#no").val()

    if(number.length == 3 || number.length == 7) {

      number = number+'-'
      $("#no").val(number)
    }

    
  }

  function resetData(){

    location.replace(window.location.href.split('?')[0])


  }
</script>
</body>
</html>
