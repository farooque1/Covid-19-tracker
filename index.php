<?php

    include 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">
      <script type="text/javascript">
          window.onload=function(){
          document.getElementById('loader').style.display="none";
          document.getElementById('content').style.display="block";
          };
      </script>

    <title>Covid-19 Tracker</title>
    
    <style>
body {
  background-color: white;
  color: black;
}

.dark-mode {
  background-color: black;
  color: white;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#content{
  display: none;
}

#loader{
  position: absolute;
  margin:auto;
  top: 0;
  right:0;
  bottom:0;
  left: 0;
  width:300px;
  height:300px;     
}
#loader img{
  width:300px; 
}
</style>
  </head>

<div id="loader">
  <img src="loderr.gif">
</div>

<body>
<div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Covid-19 Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      </ul>
    <form class="form-inline my-2 my-lg-0">
            <a  href="#">Home </a>
            <a class="nav-link" href="#">About Us </a>
            <a class="nav-link" href="#">Services </a>
            <a class="nav-link" href="#">Help </a>
             <a class="nav-link" href="#">Contact us </a>

             <label class="switch">
  <input type="checkbox" onclick="myFunction()">
  <span class="slider round"></span>
</label>
                               </form>
  </div>
</nav>
    <div class="container-fluid bg-light p-5 text-center">
    
        <h1 class="">Covid-19 Tracker</h1>
        <!-- <h3> <?php echo "Today is " . date("Y-m-d") . "<br>"; ?></h3> -->
    </div>

        <div class="container mt-5 mb-2 text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <div class="row"> 
                                <div class="col-lg-6">
                                <img src="ind.png">
                                </div>
                                <div class="col-lg-6">
                                <h5 class="text-warning">Confirmed</h5>
                                <?php echo number_format($ind_total_confirmed);?>
                                <h5 class="text-success">Recovered</h5>
                                <?php echo number_format($ind_total_recovered);?>
                                <h5 class="text-danger">Deceased</h5>
                                <?php echo number_format($ind_total_deaths);?>
                                </div>    
                            </div>
                            </div>
                        </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                            <img src="chinaaa.png" style="width:155%;">
                                  </div>
                                  <div class="col-lg-6">
                                <h5 class="text-warning">Confirmed</h5>
                                <?php echo number_format($ch_total_confirmed);?>
                                <h5 class="text-success">Recovered</h5>
                                <?php echo number_format($ch_total_recovered);?>
                                <h5 class="text-danger">Deceased</h5>
                                <?php echo number_format($ch_total_deaths);?>
                                </div> 
                            </div>    
                      </div>
                    </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                <img src="usaa.png" style="width:130%;">
                                </div>
                                <div class="col-lg-6">
                                <h5 class="text-warning">Confirmed</h5>
                                <?php echo number_format($a_total_confirmed);?>
                                <h5 class="text-success">Recovered</h5>
                                <?php echo number_format($a_total_recovered);?>
                                <h5 class="text-danger">Deceased</h5>
                                <?php echo number_format($a_total_deaths);?>
                                </div> 
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
      
    </div>
</div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo number_format($total_confirmed);?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo number_format($total_recovered);?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo number_format($total_deaths);?>



            </div>
        </div>
    </div>
    
    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container-fluid mt-5">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead">
                    <tr class="table-success">
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                            $recover = $value[$days_count]['recovered'] - $value[$days_count_prev]['recovered'];
                            $death = $value[$days_count]['deaths'] - $value[$days_count_prev]['deaths'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?>
                                <?php if($recover != 0){ ?>
                                    <small class="text-success pl-3"><i class="fas fa-arrow-up"></i><?php echo $recover;?></small>  
                                <?php } ?>

                            </td>
                            <td><?php echo $value[$days_count]['deaths'];?>
                                <?php if($death != 0){ ?>
                                    <small class="text-info pl-3"><i class="fas fa-arrow-up"></i><?php echo $death;?></small>  
                                <?php } ?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, <a href="#" target="_blank">farooque</a></span>
        </div>
    </footer>

     <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</div>
</body>
</html>