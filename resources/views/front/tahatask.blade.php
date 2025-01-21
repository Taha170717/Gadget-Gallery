<!DOCTYPE html>
<html>
  <head>
    <title>File Explorer</title>
    <script src="https://kit.fontawesome.com/e86fbe634d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      /* Custom CSS styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #343a40; /* Dark background color */
        color: white; /* White text color */
      }
      .navbar-brand {
        font-weight: bold;
      }
      .list-group-item {
        padding: 5px 10px;
      }
      .list-group-item:hover {
        background-color: #495057; /* Darken hover color */
        color: white;
      }
      .list-group-item.active {
        background-color: #212529; /* Darken active color */
      }
      .badge {
        margin-left: 5px;
      }
      .float-right {
        float: right;
      }
      .text-muted {
        font-size: small;
      }
      .text-right {
        text-align: right;
      }
      .w-50 {
        width: 50%;
      }
      .mb-3 {
        margin-bottom: 1rem;
      }
      /* Additional styles for cards */
      .card {
        background-color: #495057; /* Darken card background */
        color: white; /* White text color */
      }
      .card-subtitle {
        color: #adb5bd; /* Lighter gray text color */
      }
    </style>
  </head>
  <body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">This PC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Taha - Personal</a>
          </li>
        </ul>
      </div>
    </nav><br>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            
              <a href="#" class="list-group-item list-group-item-action active">
                  <i class="fas fa-desktop fa-fw mr-2"></i> Desktop
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                  <i class="fas fa-file-download fa-fw mr-2"></i> Download 
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                  <i class="fas fa-file fa-fw mr-2"></i> Documents
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <i class="fas fa-images fa-fw mr-2"></i> Pictures
            </a>
              <a href="#" class="list-group-item list-group-item-action">
                  <i class="fas fa-music fa-fw mr-2"></i> Music
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                  <i class="fas fa-video fa-fw mr-2"></i> Videos
              </a>
          
          
            <a href="#" class="list-group-item list-group-item-action active">
              <i class="fas fa-hdd fa-fw mr-2"></i> Devices and drives
              <span class="badge badge-primary badge-pill float-right">2</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <img width="10%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
                      Local Disk (C:)
              <span class="badge badge-secondary badge-pill float-right">118 GB</span>
              
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <img width="10%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
               New Volume (D:)
              <span class="badge badge-secondary badge-pill float-right">58.5 GB</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <img width="10%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
               New Volume (E:)
              <span class="badge badge-secondary badge-pill float-right">58.5 GB</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <img width="10%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
               New Volume (F:)
              <span class="badge badge-secondary badge-pill float-right">58.5 GB</span>
            </a>
            <!-- More list group items... -->
          </div>
        </div>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                  <div class="card-body d-flex align-items-center">
                      <img width="30%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
                      <h6 class="card-title ml-3 mb-0">Local Disk (C:)</h6>
                  </div>
                  <div class="card-body">
                      <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="20"
                              aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="card-text">118 GB Free of 256 GB</p>
                  </div>
              </div>
          </div>
          
          
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="card-body d-flex align-items-center">
                    <img width="30%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
                    <h6 class="card-title ml-3 mb-0">Local Disk (D:)</h6>
                </div>
                  
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">58.5 GB Free of 256Gb</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="card-body d-flex align-items-center">
                    <img width="30%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
                    <h6 class="card-title ml-3 mb-0">Local Disk (E:)</h6>
                </div>
                  
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">58.5 GB Free of 104Gb</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="card-body d-flex align-items-center">
                    <img width="30%" src="https://www.freeiconspng.com/thumbs/hard-drive-icon/hard-drive-icon-13.png" alt="Icon">
                    <h6 class="card-title ml-3 mb-0">Local Disk (F:)</h6>
                </div>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 45%;"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">95 GB Free of 256Gb</p>
                </div>
              </div>
            </div>
            <!-- More cards... -->
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSGFpoO/ufreqqF6MVu4JdG7PhIxZlW8sSJv43gkdSHlua9DmM/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX5" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
