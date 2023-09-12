<!-- partial -->
<div class="container-fluid page-body-wrapper pt-5">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav pt-4">
      <?php if($user_roll=='admin'){?>
      <li class="nav-item">
        <a class="nav-link" href="view/dashboard/index.php">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#user_section" aria-expanded="false" aria-controls="user_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="user_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/user/userList.php">User-List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/faculty/faculty_list.php">Faculty-List</a>
            </li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Student_section" aria-expanded="false" aria-controls="Student_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Student</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Student_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/student/student_list.php">Student-List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/student/VotingCandidateslist.php">Voting Candidates List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/student/Get_votingt.php">Voting Now</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Upload-File</a>
            </li>
<!--             <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">View-Uploaded-File</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="view/student/Voting_results.php">Voting Results</a>
            </li> -->
          </ul>
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Document_section" aria-expanded="false" aria-controls="Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Document_section">
          <ul class="nav flex-column sub-menu">

            <li class="nav-item">
              <a class="nav-link" href="view/document/document_types.php">Document-Types</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/document_list.php">Document-List</a>
            </li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Uploaded_Document_section" aria-expanded="false" aria-controls="Uploaded_Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Uploaded-Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Uploaded_Document_section">
          <ul class="nav flex-column sub-menu">


            <li class="nav-item">
              <a class="nav-link" href="view/document/event.php">Event</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="view/document/notice.php">Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/study_material.php">Study Material</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/exam.php">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/other.php">Other</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Student-Upload-File</a>
            </li>
           
          </ul>
        </div>
      </li>
    <?php } elseif($user_roll=='faculty') {?>
 <li class="nav-item">
        <a class="nav-link" href="view/dashboard/faculty.php">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Document_section" aria-expanded="false" aria-controls="Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Document_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/document/document_list.php">Document-List</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Uploaded_Document_section" aria-expanded="false" aria-controls="Uploaded_Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Uploaded-Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Uploaded_Document_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/document/notice.php">Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/study_material.php">Study Material</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/exam.php">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/other.php">Other</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Student-Upload-File</a>
            </li>
          </ul>
        </div>
      </li>
    <?php }elseif($user_roll=='student'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="view/dashboard/student.php">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Student_section" aria-expanded="false" aria-controls="Student_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Student</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Student_section">
          <ul class="nav flex-column sub-menu">
       
            <!-- <li class="nav-item">
              <a class="nav-link" href="view/student/VotingCandidateslist.php">Voting Candidates List</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="view/student/Get_votingt.php">Voting Now</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="view/student/Voting_results.php">Voting Results</a>
            </li> -->
          </ul>
        </div>

      </li>
      <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Uploaded_Document_section" aria-expanded="false" aria-controls="Uploaded_Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">View-Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Uploaded_Document_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/document/notice.php">Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/study_material.php">Study Material</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/exam.php">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/other.php">Other</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Upload-File</a>
            </li>
            
          </ul>
        </div>
      </li>
  <?php } elseif($user_roll=='event'){?>
      <li class="nav-item">
        <a class="nav-link" href="view/dashboard/event.php">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Document_section" aria-expanded="false" aria-controls="Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Document_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/document/document_list.php">Document-List</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Student-Upload-File</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Student_section" aria-expanded="false" aria-controls="Student_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Student</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Student_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/student/student_list.php">Student-List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/student/VotingCandidateslist.php">Voting Candidates List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/student/Get_votingt.php">Voting Now</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="view/student/Voting_results.php">Voting Results</a>
            </li> -->
          </ul>
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Uploaded_Document_section" aria-expanded="false" aria-controls="Uploaded_Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Uploaded-Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Uploaded_Document_section">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="view/document/Event.php">Event</a>
            </li>
                       <li class="nav-item">
              <a class="nav-link" href="view/document/notice.php">Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/other.php">Other</a>
            </li>

          </ul>
        </div>
      </li>
 <?php }elseif($user_roll=='exam'){?>
      <li class="nav-item">
        <a class="nav-link" href="view/dashboard/exam.php">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Document_section" aria-expanded="false" aria-controls="Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Document_section">
          <ul class="nav flex-column sub-menu">

            <li class="nav-item">
              <a class="nav-link" href="view/document/document_types.php">Document-Types</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/document_list.php">Document-List</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Uploaded_Document_section" aria-expanded="false" aria-controls="Uploaded_Document_section">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Uploaded-Document</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="Uploaded_Document_section">
          <ul class="nav flex-column sub-menu">
  <li class="nav-item">
              <a class="nav-link" href="view/document/notice.php">Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/study_material.php">Study Material</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/exam.php">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/document/other.php">Other</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="view/student/upload_file.php">Student-Upload-File</a>
            </li>
          </ul>
        </div>
      </li>
    <?php }?>

    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- Page Title Header Starts-->