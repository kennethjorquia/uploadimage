<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../../assets/css/sidebar.css" />
    <link rel="stylesheet" href="../../assets/css/card.css" />
    <link rel="stylesheet" href="../../submod_style/counseling.css"/>
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
                src="../../assets/images/newLogin/logo.png"
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
                    src="../../assets/images/man.png"
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
                    <a class="dropdown-item" href="login/login.php">Logout</a>
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
              <a href="../../index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="../../profiling.php">
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
                <li><a href="../../individual.php">Individual Counseling</a></li>
                <li><a href="../../group.php">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="../../appointment.php">
                <i class='bx bxs-calendar'></i>
                <span class="links_name">Appointment</span>
              </a>
              <span class="tooltip">Appointment</span>
            </li>
            <li>
              <a href="../../visitlogs.php">
               <i class='bx bx-log-in' ></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="../../career_orientation.php">
                <i class='bx bx-search-alt'></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="../../scholarship.php">
                <i class='bx bxs-graduation' ></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="../../res.php">
                <i class='bx bx-list-check'></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="../../student_evaluation.php">
                <i class='bx bxs-user-rectangle'></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="../../reports.php">
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
    <li class="breadcrumb-item"><a href="../../student_evaluation.php">Result</a></li>
    <li class="breadcrumb-item"><a href="#">Personality Test</a></li>
    <li class="breadcrumb-item active" aria-current="page">IQ Test</li>
    <li class="breadcrumb-item active" aria-current="page">Filipino Test</li>
</div>

          <h2 class="pt-3 pb-3">Student Evaluation - Personality Test</h2>
            <a class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#editQuestion">Create Question</a>
            <div class="d-flex justify-content-between align-items-center ">
                <div class="dropdown py-3 ">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 10 </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li><a class="dropdown-item" href="#">25</a></li>
                            <li><a class="dropdown-item" href="#">50</a></li>
                            <li><a class="dropdown-item" href="#">100</a></li>
                        </ul>
                </div>
                <nav class="navbar bg-body-tertiary ">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
  
         <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col" class="col-1">#</th>
                <th scope="col" class="col-8">Questions</th>
                <th scope="col" class="col-2">Created Date</th>
                <th scope="col" class="col-1">Action</th>
              </tr>
            </thead>
         <tbody>
             <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="#" role="button">Detail</a>
                    <a class="btn btn-primary" href="#" role="button">Edit</a>
                </td>
             </tr>
          </tbody>
        </table>    
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>
<!-- Edit Question Modal -->
<div class="modal fade" id="editQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Personality Test</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



      </div>
    </main>
    <script src="../../assets/js/dropdown.js"></script>
    <script src="../../assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
