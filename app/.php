<?php
include '../includes/config.php';


$countClass = 1;

try{
  $SQL = "SELECT * FROM professional_experience ";
  $stmt = $conn->prepare($SQL);
  $stmt->execute();
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $arrayAreas[$row['id']] = $row['name'];
  }
}catch(PDOException $e){
  echo $e->getMessage();

}

var_dump($arrayAreas);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>
    Margon - Resume
  </title>
  <?php include '../includes/inc-css.php'; ?>
</head>

<body class="g-sidenav bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <?php include '../includes/inc-menu.php'; ?>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <?php include '../includes/inc-navbar.php'; ?>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body ">
        <button class="btn btn-primary" type="button"></button>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 text-uppercase text-sm">Education Information</p>
                <input type="hidden" name="id" id="id" value="">
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="../controller/ResumeController.php?action=salvar">

                <input type="hidden" id="countClass" name="countClass" value="<?php echo $countClass; ?>" required>

                <div class="row" id="contentClass0">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Name School</label>
                      <input id="nameschool0" class="form-control" type="text" name="nameschool[]" value="" data-index="0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Adress</label>
                      <input id="adress0" class="form-control" type="text" name="adress[]" value="" data-index="0">
                    </div>
                  </div>

                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Description</label>
                      <textarea id="description0" class="form-control" name="description[]" aria-label=" " data-index="0"></textarea>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Date</label>
                      <input id="date0" class="form-control" type="text" name="date[]" value="" data-index="0">
                    </div>
                  </div>
                  <div class="col-md-2 mt-4">
                    <div class="form-group">
                      <button type="button" class="btn btn-success add">+</button>
                    </div>
                  </div>
                </div>

                <div class="contentIncrement"></div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
            </form>
          </div>
          </form>
          
        </div>
      </div>
      <div class="container-fluid py-4">

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  <p class="mb-0 text-uppercase text-sm">Experience Information</p>
                  <form method="POST" action="../controller/ResumeController.php?action=salvar2">
                    <input type="hidden" name="id" id="id" value="">
                  </div>
                </div>
                <div class="card-body">
                  
                  <input type="hidden" id="countClass" name="countClass" value="<?php echo $countClass; ?>" required>
                  
                  <div class="row" id="contentClass0">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Experience. </label>
                        
                        <span id="addAreas" class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                      </button> 
                      <select id="slcExperience" class="form-control" type="text" name="slcExperience" value="">
                        <option value=""></option>
                        <?php foreach($arrayAreas as $key => $value){ ?>
                          <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Description</label>
                        <textarea id="descriptions0" class="form-control" name="descriptions[]" aria-label=" " data-index="0"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-md-2 mt-4">
                      <div class="form-group">
                        <button type="button" class="btn btn-success add2">+</button>
                      </div>
                    </div>
                  </div>
                  
                  <div class="contentIncrement2"></div>
                  
                </div>
                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
              </form>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include_once("../includes/footer.php"); ?>
  </div>



  <?php include_once '../includes/inc-js.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <script type="text/javascript" src="../assets/js/resume.js"></script>

  <script>

  </script>
</body>

</html>