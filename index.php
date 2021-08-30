<?php

// import file mange array
require_once './src/config/mange-array.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" />

    <!-- Favicon Link -->
    <link rel="shortcut icon" href="https://www.php.net/images/logos/new-php-logo.svg" type="image/svg" />

    <!-- External CSS -->
    <link rel="stylesheet" href="./src/style/style.css">

    <title>CodeDynamicWebsites / Home</title>
  </head>
  <body>
    <!-- Bootstrap Navbar -->
    <div class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">CodeDynamicWebsites</a>

            <!-- navbar toggle button -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/SamiurRahmanMukul/CodeDynamicWebsites" target="_blank">Github Repository</a>
                </li>
              </ul>

              <!-- searching form -->
              <form class="d-flex">
                <input class="form-control me-2" placeholder="Search something" type="search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Main Content / Body Section -->
    <div class="container-fluid">
      <div class="container">
        <h2 class="header-title">Code Dynamic Websites In PHP</h2>
      </div>
    </div>

    <!-- Bootstrap Content Of Table -->
    <div class="container-fluid">
      <div class="container">
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tittle / Resource Name</th>
              <th scope="col">Source Code</th>
              <th scope="col">Live Preview</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($mange_array as $i => $access_array): ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $access_array['title'] ?></td>
                <td>
                  <a href="<?php echo $access_array['source'] ?>" target="_blank">👉 Click Here</a>
                </td>
                <td>
                  <a href="<?php echo $access_array['preview'] ?>" target="_blank">👉 Click Here</a>
                </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
