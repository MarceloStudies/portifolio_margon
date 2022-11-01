<?php
include '../includes/config.php';




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <style>
    /*custom inpu file*/
    .custom-file-input {
      color: transparent;
      backggroun-color: #fff;

    }

    .custom-file-input::-webkit-file-upload-button {
      visibility: hidden;
    }

    .custom-file-input::before {
      content: "▲ Upload File";
      color: #fff;
      display: inline-block;
      background: #f39c12;
      padding: 10px 22px;
      outline: none;
      white-space: nowrap;
      -webkit-user-select: none;
      cursor: pointer;
      font-weight: 400;
      border-radius: 2px;
      outline: none;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .custom-file-input:focus {
      outline: none !important;

    }

    .custom-file-input:active::before {
      transform: scale(.9) translate(0px, 2px);
      box-shadow: inset 4px 4px 5px 0px rgba(0, 0, 0, 0.20);

    }
  </style>

  <title>
    Margon - Project
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
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 text-uppercase text-sm">Projects Information</p>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="../controller/ProjectController.php?action=salvar" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="img1">Primeira Imagem:</label>
                      <input type="file" class="custom-file-input" name="img1">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="img2">Segunda Imagem:</label>
                      <input type="file" class="custom-file-input" name="img2">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="img3">Terceira Imagem:</label>
                      <input type="file" class="custom-file-input" name="img3">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Name Project</label>
                      <input id="nameproject" class="form-control" type="text" name="name" value="" data-index="0">
                    </div>
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Link Project</label>
                      <input id="nameproject" class="form-control" type="text" name="link" value="" data-index="0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Resume</label>
                      <textarea class="form-control" name="resume" aria-label=" " data-index="0"></textarea>
                    </div>
                  </div>

                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Description</label>
                      <textarea id="description" class="form-control" name="description" aria-label=" " data-index="0"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
              </form>
            </div>
            </form>

          </div>
        </div>

      </div>
      <?php include_once("../includes/footer.php"); ?>
    </div>



    <?php include_once '../includes/inc-js.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script>

    </script>
</body>

</html>