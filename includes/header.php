<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="/termproject/css/bootstrap.css">
    <link rel="stylesheet" href="/termproject/css/style.css">
    
  </head>
  <body>
    <header class="mb-5">
      <!-- Create a container to contain 3 blocks -->
      <div class="container mt-5">
        <!-- The first block - two buttons -->
        <div class="d-flex justify-content-end">
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm" data-bs-theme-value="dark">
              Dark
            </button>
          </div>
          <div class="btn-group">
            <button class="btn btn-light btn-sm" data-bs-theme-value="light">
              Light
            </button>
          </div>
        </div>
        <!-- The second block- Animals -->
        <h1 class="mb-4"><a href="/termproject/index.php" >Animal</a></h1>
        <!-- The third block - search and links -->
        <div class="row">
          <!-- left hand side - search box -->
          <div class="col-md-4">
            <input
              type="text"
              class="form-control form-control-lg"
              placeholder="Search Animals"
            />
          </div>
          <!-- right side - links -->
          <div
            class="col-md-8 discussion-menu d-flex justify-content-end align-itms-center"
          >
            <ul class="nav">
              <li class="nav-itm">
                <a href="#" class="nav-link">Adaptations</a>
              </li>
              <li class="nav-itm">
                <a href="/termproject/php/behavior.php" class="nav-link text-bg-primary rounded-3"
                  >Behavior</a
                >
              </li>
              <li class="nav-itm">
                <a href="#" class="nav-link">Conservation</a>
              </li>
              <li class="nav-itm">
                <a href="#" class="nav-link">Diversity</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- closed header -->