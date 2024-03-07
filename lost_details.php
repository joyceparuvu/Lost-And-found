
<?php
  include "config.php";
  if(isset($_GET['id'])) {
      
    $id=$_GET['id'];}
  $sql="SELECT * FROM `lost` where `id`='$id'";

  $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- mdbootstrap -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="node_modules/mdbootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
    <title>Similar Items</title>
    
      <!--font Awesome ... for button icon-->
      <script src="https://kit.fontawesome.com/9973cec642.js" crossorigin="anonymous"></script>

  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand grow" href="../index.php">Lost and Found</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item grow">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="list.php">List</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="forms/lostForm.html">Lost</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="forms/foundForm.html">Found</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="help.html">Help</a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="section section-lg ">
            <div class="container">     
            <div class="main-container container-fluid">
                <div class="row row-sm">
            
                                    
    <div class="col-6">
       <?php   if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){ ?>
                       
                            <div class="image m-5">
                                <img alt="img" class="d-block w-50" src="images/message/<?php echo $row['image']?>" width="540" height="300">
                            </div>
                            
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title mb-3"><span style="font-size:20px; color:#1d71f2; text-transform:none;"></span></h4>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Item name :</span><span style="font-size:15px;"><?php echo $row['item'];?>  </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Location :</span><span style="font-size:15px;"><?php echo $row['location'];?> </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Date :</span><span style="font-size:15px;"><?php echo $row['date'];?>	</p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Description:</span><span style="font-size:15px;"><?php echo $row['description'];?> </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Founded By :</span><span style="font-size:15px;"><?php echo $row['name'];?>	</p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Person Email :</span><span style="font-size:15px;"><?php echo $row['mail'];?>  </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Contact Number :</span><span style="font-size:15px;"><?php echo $row['mobile'];?> </p>
                <a class="btn btn-primary btn-block" href="connection_files/manage.php?id=<?php echo $row["id"];?>&lost=lost&mail=<?php echo $row["mail"];?>">Send</a>

            </div>
         </div>
         <?php
                    }
                  }?>

    </div>
    <div class="col-6 my-auto"> <h3 class="my-auto">Contact the person to claim your Items</h3></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243208.17099296628!2d83.12250464246186!3d17.738622503740615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1679666880180!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    <footer id="page-footer" class="py-2 bg-dark">

</div>
</div>

 
</div>

  
        </section>

    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
            <a class="navbar-brand" href="#">Lost and Found</a>
        </div>
        <div class="copyright">
            <small> <span>Designed by&copy;</span> <span>3435363739</span> <span>Terms of Use</span> and
                <span>Privacy Policy</span></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>