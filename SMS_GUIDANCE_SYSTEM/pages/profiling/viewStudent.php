<?php
    include_once '../../includes/sms_db.php';
?>
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
    <main class="container-fluid text-secondary">
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
    <li class="breadcrumb-item"><a href="../../profiling.php">Profiling</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Student</li>
</div>

<?php
$stud_id=$_GET['stud_id'];
//$id=4;
$query = "SELECT * from profiling where stud_id=?";
if($stmt=$conn->prepare($query)){
$stmt->bind_param('i',$stud_id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_object();
?>
  <div class="">
    <div class=" d-flex align-items-center ">
        <div class="p-2">
          <img class="" src="../../assets/images/man.png" width="150" height="150" alt="profile-picture">
        </div>
        <div class="">          
          <label for="message-text" class="col-form-label"><?php echo "$row->fname";echo "&nbsp";echo "$row->lname";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->stud_id";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->course";echo "&nbsp";echo "$row->year_section";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->status";?></label><br>
        </div>
    </div>
  </div>
    <div class="bg-primary text-light mt-2 p-2">
        <label for="message-text" class="col-form-label">VISITS</label>
    </div>
        <div class="p-2">
            <div class="d-flex justify-content-between bg-light align-items-center p-3">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Excuse Letter </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Excuse Letter</a></li>
                        <li><a class="dropdown-item" href="#">Cert of Candidacy</a></li>
                        <li><a class="dropdown-item" href="#">Clearance</a></li>
                    </ul>
                <input type="email" id="" class="form-control" placeholder="Other Details...">
                <button type="button" class="btn btn-primary">+</button>
            </div>
        </div>

        <!----- Start of Accordion ---->
<div class="accordion accordion-flush p-2" id="accordionFlushExample">


<!-------- Personal Information -------------->
<div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PERSONAL_INFORMATION" aria-expanded="false" aria-controls="flush-collapseOne">
        PERSONAL INFORMATION
      </button>
    </h2>
  <div id="PERSONAL_INFORMATION" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body ">
    <div class="container">
  <div class="p-3 bg-light rounded-3 mb-3">
    <div class="d-flex align-items-centered">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Last Name</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->lname";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">First Name</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->fname";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Middle Name</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->mname";?>" readonly>
      </div>
    </div>
    <div class="d-flex align-items-centered">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nick Name</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->nname";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Gender</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->gender";?>" readonly>
      </div>
    </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Permanent Address</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->per_address";?>" readonly>
      </div>
  </div>
  <div class="d-flex align-items-centered" style="margin-left:150px">
    <div class="bg-light rounded-3 p-3">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Date of Birth</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->date_of_birth";?>" readonly>
      </div>
      <div class="input-group p-3 ">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->email";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->contact_number";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Civil Status</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->civil_status";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->religion";?>" readonly>
      </div>
    </div>
    <div class="bg-light rounded-3 ms-3 p-3 ">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Spouse</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->spouse";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Spouse Occupation</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->spuse_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Birth Order</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->birth_order";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">No. of brother/s</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->brother";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">No. of brother/s</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->sister";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Living With</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->living_with";?>" readonly>
      </div>
    </div>
  </div>
  <div class="row d-flex bg-light mt-3 pt-5 align-items-centered rounded-3">  
    <div class="col-6">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of father</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->name_of_father";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_religion";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Educ.Attainment</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_educ";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Occupation</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_company";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_email";?>" readonly>
      </div>
    </div>
    <div class="col-6">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Mother</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->name_of_mother";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_religion";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Educ.Attainment</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_educ";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Occupation</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_company";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_email";?>" readonly>
      </div>
    </div>
  </div> 
    <div class="p-3 mt-3 bg-light rounded-3">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Guardian</span>
        <input type="text"  class="form-control" value="<?php echo "$row->name_of_gurdian";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Relationship</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_relationship";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_contact";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Person to Notify in case of emergency</span>
        <input type="text"  class="form-control" value="<?php echo "$row->emergency_person";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text"  class="form-control" value="<?php echo "$row->emergency_contact";?>" readonly>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>

<!-------- Educational Background -------------->
<div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#EDUCATIONAL_BACKGROUND" aria-expanded="false" aria-controls="flush-collapseTwo">
        EDUCATIONAL BACKGROUND
      </button>
    </h2>
    <div id="EDUCATIONAL_BACKGROUND" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          
        <div class="container bg-light p-5 rounded-3">
          <div class="input-group p-3 mb-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Addmision/Registration</span>
            <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->years";?>" readonly>
          </div>
          <h2 class="font-monospace border-bottom border-secondary">Tertiary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_tertiary";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_tertiary";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_tertiary";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_tertiary";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Alternative System</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_als";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_als";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_als";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_als";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Secondary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_second";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_second";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_second";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_second";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Elementary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->schoo_name_elem";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_elem";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_elem";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_elem";?>" readonly>
                </div>
              </div>
            </div>

        </div>
      </div>
  </div>
</div>

<!-------- Institotional Affiliation -------------->
<div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#INSTITUTIONAL_AFFILIATION" aria-expanded="false" aria-controls="flush-collapseThree">
        INSTITUTIONAL AFFILIATION
      </button>
    </h2>
    <div id="INSTITUTIONAL_AFFILIATION" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container bg-light p-3 rounded-3">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Organization</span>
            <input type="text" class="form-control" value="<?php echo "$row->name_of_org";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Affiliation</span>
            <input type="text" class="form-control" value="<?php echo "$row->affilition";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Year</span>
            <input type="text" class="form-control" value="<?php echo "$row->affli_year";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Status</span>
            <input type="text" class="form-control" value="<?php echo "$row->affli_status";?>" readonly>
          </div>
        </div>
      </div>
    </div>
</div>

<!-------- Work Experience -------------->
<div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#WORK_EXPERIENCE" aria-expanded="false" aria-controls="flush-collapseThree">
        WORK EXPERIENCE
      </button>
    </h2>
    <div id="WORK_EXPERIENCE" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container bg-light p-3 rounded-3">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
            <input type="text" class="form-control" value="<?php echo "$row->company_name";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Position</span>
            <input type="text" class="form-control" value="<?php echo "$row->position";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">From-to</span>
            <input type="text" class="form-control" value="<?php echo "$row->from_to";?>" readonly>
          </div>
        </div>
      </div>
    </div>
</div>

<!-------- Interest/Talents/Characteristics -------------->
<div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#INTEREST" aria-expanded="false" aria-controls="flush-collapseThree">
        INTEREST/TALENTS/CHARACTERISTICS
      </button>
    </h2>
    <div id="INTEREST" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container p-3 bg-light">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Interest</span>
            <input type="text" class="form-control" value="<?php echo "$row->interest";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Talents</span>
            <input type="text" class="form-control" value="<?php echo "$row->talent";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Characteristics</span>
            <input type="text" class="form-control" value="<?php echo "$row->characteristic";?>" readonly>
          </div>
        </div>
      </div>
    </div>
</div>



</div> <!----- End of Accordion ---->

<?php } ?>

<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>
      </div>
    </main>
    <script src="../../assets/js/dropdown.js"></script>
    <script src="../../assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
