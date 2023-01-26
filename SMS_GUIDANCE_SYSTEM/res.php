
<?php include 'pages/res/filesLogic.php';?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <link rel="stylesheet" href="submod_style/counseling.css"/>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block">User Name</h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
      <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="profiling.php">
                <i class='bx bxs-user-circle'></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            <li>
              <div class="iocn-link arrow">
                <a class="">
                  <i class='bx bx-smile'></i>
                  <span class="links_name">Counseling Service</span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="individual.php">Individual Counseling</a></li>
                <li><a href="group.php">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="appointment.php">
                <i class='bx bxs-calendar'></i>
                <span class="links_name">Appointment</span>
              </a>
              <span class="tooltip">Appointment</span>
            </li>
            <li>
              <a href="visitlogs.php">
               <i class='bx bx-log-in' ></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
                <i class='bx bx-search-alt'></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
                <i class='bx bxs-graduation' ></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
                <i class='bx bx-list-check'></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation.php">
                <i class='bx bxs-user-rectangle'></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="reports.php">
                <i class='bx bxs-report' ></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        <section class="home-section ms-3 p-5 bg-light rounded shadow">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
<div class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
</div>



          <h2>RESEARCH/SURVEY/EVALUATION</h2>

          <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#addFiles">Add Files</button>
          <?php if(isset($_GET['add_file'])){ ?>
            <p class="add_file" style="background: #F2DEDE; color: #A94442; padding: 10px; width: 100%; border-radius:5px; margin-top:10px;">
          <?php echo $_GET['add_file']; ?></p> <?php }?>
          <?php if(isset($_GET['success'])){ ?>
            <p class="success" style="background:#90EE90; color: #006400; padding: 10px; width: 100%; border-radius:5px; margin-top:10px">
          <?php echo $_GET['success']; ?></p> <?php }?>

<table class="table mt-3 table-striped table-bordered border-dark">
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>Category</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['category']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a class="btn btn-primary" href="res.php?file_id=<?php echo $file['id'] ?>" role="button">Download</a></td>
    </tr>
  <?php endforeach;?>
</tbody>
</table>
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>

<!-- Insert File -->

<div class="modal fade" id="addFiles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload files here:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="res.php" method="post" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="row">
      <label for="message-text"  class="pt-3">Category:</label>
        <div class="pb-2">
          <select class="btn btn-primary btn-sm" name="category">
            <option><a class=" dropdown-item option" value="Research">Research</a></option>
            <option><a class=" dropdown-item option" value="Evaluation">Evaluation</a></option>
            <option><a class=" dropdown-item option" value="Survey">Survey</a></option>
          </select>
        </div>
          <input type="file" name="myfile"></input> <br>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

      </div>
    </main>

    

    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
