
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
<form action="add_profile_query.php" method="POST">

<h2 class="font-monospace pt-3 border-bottom border-secondary">STUDENT INFORMATION:</h2>
<div class="container  p-3">
          <label for="message-text" class="col-form-label">Student Number:</label>
          <input type="text" name="stud_id" placeholder=""></input><br>
          <label for="message-text" class="col-form-label">Course:</label>
          <input type="text" name="course" placeholder=""></input>
          <label for="message-text" class="col-form-label">Year & Section:</label>
          <input type="text" name="year_section" placeholder=""></input><br>
          <label for="message-text" class="col-form-label">Status:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Regular">
              <label class="form-check-label" for="inlineRadio1">Regular</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Irregular">
              <label class="form-check-label" for="inlineRadio2">Irregular</label>
            </div>
</div>

<h2 class="font-monospace pt-3 border-bottom border-secondary">PERSONAL INFORMATION:</h2>
<div class="container  p-3">
            <div class="div">
              <label for="message-text" class="col-form-label">Name:</label>
              <input type="text" name="lname" placeholder="Last Name"></input>
              <input type="text" name="fname" placeholder="First Name"></input>
              <input type="text" name="mname" placeholder="Middle Name"></input>
            </div>
            <label for="message-text" class="col-form-label">Nickname:</label>
            <input type="text" name="nname" placeholder=""></input>
            <label for="message-text" class="col-form-label">Date of Birth</label>
            <input type="date" name="date_of_birth"></input>
            <label for="message-text" class="col-form-label">Gender:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">female</label>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Email Address:</label>
              <input type="text" name="email" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact Number:</label>
              <input type="text" name="contact_number" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Permanent Address:</label>
              <input type="text" name="per_address" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Nationality:</label>
              <input type="text" name="nationality" placeholder=""></input>
              <label for="message-text" class="col-form-label">Civil Status:</label>
              <input type="text" name="civil_status" placeholder=""></input>
              <label for="message-text" class="col-form-label">Religion:</label>
              <input type="text" name="religion" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Name of Spouse(if married):</label>
              <input type="text" name="spouse" placeholder=""></input>
              <label for="message-text" class="col-form-label">Spouse's Occupation:</label>
              <input type="text" name="spuse_occupation" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Birth Order:</label>
              <input type="number" name="birth_order" placeholder="Choose..."></input>
              <label for="message-text" class="col-form-label">No. of brother/s:</label>
              <input type="number" name="brother" placeholder="Choose..."></input>
              <label for="message-text" class="col-form-label">No. of sister/s:</label>
              <input type="number" name="sister" placeholder="Choose..."></input>
            </div>
            <label for="message-text" class="col-form-label">Living with (please choose):</label>
            <div class="div d-inline-flex text-center">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault1" value="Parents">
                <label class="form-check-label" for="flexRadioDefault1">
                  Parents
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault2" value="Guardian">
                <label class="form-check-label" for="flexRadioDefault2">
                  Guardian
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault3" value="Boarding House">
                <label class="form-check-label" for="flexRadioDefault3">
                  Boarding House
                </label>
              </div>
            </div>
            <div class="">
              <label for="message-text" class="col-form-label">Name of Father</label>
              <label for="message-text" class="col-form-label ms-5">Name of Mother</label></br>
              <input type="text" name="name_of_father" placeholder=""></input>
              <input type="text" name="name_of_mother" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_address" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="mother_address" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_nationality" placeholder=""></input>
              <label for="message-text" class="col-form-label">Nationality:</label>
              <input type="text" name="mother_nationality" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_religion" placeholder=""></input>
              <label for="message-text" class="col-form-label">Religion:</label>
              <input type="text" name="mother_religion" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_educ" placeholder=""></input>
              <label for="message-text" class="col-form-label">Educ. Attainment:</label>
              <input type="text" name="mother_educ" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_occupation" placeholder=""></input>
              <label for="message-text" class="col-form-label">Occupation:</label>
              <input type="text" name="mother_occupation" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_company" placeholder=""></input>
              <label for="message-text" class="col-form-label">Company Name:</label>
              <input type="text" name="mother_company" placeholder=""></input>
            </div>
            <div class="div">
              <input type="date" name="father_birthdate" placeholder=""></input>
              <label for="message-text" class="col-form-label">Birthdate:</label>
              <input type="date" name="mother_birthdate" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_contact" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact Number/s:</label>
              <input type="text" name="mother_contact" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_email" placeholder=""></input>
              <label for="message-text" class="col-form-label">EmailAddress:</label>
              <input type="text" name="mother_email" placeholder=""></input>
            </div>
            <div class="pt-3">
              <label for="message-text" class="col-form-label">Name of Guardian:</label>
              <input type="text" name="name_of_gurdian" placeholder=""></input>
              <label for="message-text" class="col-form-label">Relationship:</label>
              <input type="text" name="gurdian_relationship" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="gurdian_address" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact no.:</label>
              <input type="text" name="gurdian_contact" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Email Address of Guardian:</label>
              <input type="text" name="gurdian_email" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Person to notify in case of emergency:</label>
              <input type="text" name="emergency_person" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact no.:</label>
              <input type="text" name="emergency_contact" placeholder=""></input>
            </div>
</div>
<!---------------------------- Educational Background ------------------------------>
<h2 class="font-monospace border-bottom border-secondary">Educational Background:</h2>
<div class="container p-3">
        <div class="div">
        <label for="message-text" class="col-form-label pt-2">Please Select if you are:</label>
            <div class="div d-inline-flex text-center">
             <div class="form-check">
              <input class="form-check-input" type="radio" name="years" id="flexRadioDefault1" value="Freshmen">
                <label class="form-check-label" for="flexRadioDefault1">
                   Freshmen
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault2" value="Transferee">
                <label class="form-check-label" for="flexRadioDefault2">
                  Transferee
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault3" value="Second Degree">
                <label class="form-check-label" for="flexRadioDefault3">
                  Second Degree
                </label>
            </div>
          </div>
        </div>
        <h5 class="">Tertiary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_tertiary"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_tertiary"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_tertiary"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_tertiary"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Alternative Learning System</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_als"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_als"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_als"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_als"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Secondary</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_second"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_second"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_second"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_second"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Elementary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="schoo_name_elem"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_elem"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_elem"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_elem"placeholder=""></input>
            </div>
          </div>
      </div>
<!---------------------------- Insisutional Affiliation ------------------------------>
<h2 class="font-monospace border-bottom border-secondary pt-3">Insisutional Affiliation:</h2>
      <div class="container p-3">
        <div class=" p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Name of Organization:</label>
            <input type="text" name="name_of_org"placeholder=""></input>
            <label for="message-text" class="col-form-label">Affiliation:</label>
            <input type="text" name="affilition"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Year:</label>
            <input type="text" name="affli_year"placeholder=""></input>
            <label for="message-text" class="col-form-label">Status:</label>
            <input type="text" name="affli_status"placeholder=""></input>
          </div>
        </div>
      </div> 
<!---------------------------- Work Experience ------------------------------>
<h2 class="font-monospace border-bottom border-secondary pt-3">Work Experience:</h2>
      <div class="container">
        <div class="p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Company Name:</label>
            <input type="text" name="company_name"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Position:</label>
            <input type="text" name="position"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">From-To:</label>
            <input type="text" name="from_to"placeholder=""></input>
          </div>
        </div>
      </div>
<!---------------------------- INTEREST ------------------------------>
<h2 class="font-monospace border-bottom border-secondary pt-3">Interest:</h2>
<div class="container p-3 ">
        <div class="form-check">
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching TV" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching TV</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Reading Books" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Reading Books</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Collecting Items" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Collecting Items</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Taking care of pets" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Taking care of pets</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Going out w/Friends" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Going out w/Friends</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching Movies" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching Movies</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Shopping" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Shopping</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Eating" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Eating</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Hiking" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Hiking</label>
              </div>
          </div>
        </div>
      </div>
<!---------------------------- Talents ------------------------------>
<h2 class="font-monospace border-bottom border-secondary pt-3">TALENTS:</h2>
      <div class="container p-3">
        <div class="form-check">
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dramatic" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dramatic</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Singing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Singing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dancing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dancing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Painting" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Painting</label>
          </div>
        </div>
      </div>
<!---------------------------- Characteristics ------------------------------>
<h2 class="font-monospace border-bottom border-secondary pt-3">CHARACTERISTICS:</h2> <h5>(you may check more than one Characteristics.)</h5>
      <div class="container p-3">
        <div class="form-check">
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Friendly" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Friendly</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Jealous" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Jealous</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Industrious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Industrious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Stubborn" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Stubborn</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Patient" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Patient</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Confident" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Confident</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Kind" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Kind</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Pessimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Pessimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Thoughtful" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Thoughtful</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Insecure" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Insecure</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Humble" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Humble</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Independent" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Independent</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Studious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Studious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Talkative" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Talkative</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Optimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Optimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Moody" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Moody</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Understanding" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Understanding</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Dommineering" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Dommineering</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Sensitive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Sensitive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Responsive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Responsive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Selfish" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Selfish</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Spoiled" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Spoiled</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Lazy" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate">Lazy</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Quiet" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Quiet</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Observant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Observant</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Tolerant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Tolerant</label>
              </div>
          </div>
        </div>
        </div>
        <div class="div pt-5">
            <a class="btn btn-secondary ms-1" href="profiling.php" role="button">Back</a>
            <input class="btn btn-primary ms-1" type="submit" name="save" value="SAVE">
        </div>
      </div>

</form>
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>
      </div>
    </main>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
