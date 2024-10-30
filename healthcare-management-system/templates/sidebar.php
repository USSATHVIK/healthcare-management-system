<?php // function to get the current page name
function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}

$current_page = PageName();
?>
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            
            <ul class="nav nav-primary">
                <!-- dashboard -->
                <li class="nav-item <?= $current_page=='dashboard.php' || $current_page=='dashboard_announcement_detail.php' ? 'active' : null ?>">
                    <a href="dashboard.php" >
                        <i class="fas fa-bullhorn"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- end of dashboard -->
                 

<!-- Voice Assist Buttons -->
<div class="voice-assist-container">
  <button id="voiceAssistStart" onclick="speakText()" class="voice-assist-btn start">🔊 Start Speaking</button>
  <button id="voiceAssistStop" onclick="stopSpeaking()" class="voice-assist-btn stop">🔇 Stop Speaking</button>
</div>

<script>
  let utterance;

  function speakText() {
    if (speechSynthesis.speaking) {
      speechSynthesis.cancel();
    }

    const textToSpeak = document.body.innerText;
    utterance = new SpeechSynthesisUtterance(textToSpeak);
    const language = document.documentElement.lang || 'en';
    utterance.lang = language;

    speechSynthesis.speak(utterance);
  }

  function stopSpeaking() {
    if (speechSynthesis.speaking) {
      speechSynthesis.cancel();
    }
  }
</script>

<style>
  .voice-assist-container {
    display: flex;
    gap: 10px;
    margin: 20px;
    justify-content: center;
  }

  .voice-assist-btn {
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  .voice-assist-btn:focus {
    outline: 2px solid #4B9CD3;
    outline-offset: 2px;
  }

  .start {
    background-color: #4B9CD3;
    color: white;
  }

  .start:hover {
    background-color: #357ABD;
    transform: scale(1.05);
  }

  .stop {
    background-color: #DC3545;
    color: white;
  }

  .stop:hover {
    background-color: #B02A37;
    transform: scale(1.05);
  }
  .sidebar {
    margin-top: 62px; /* Adjust based on your header height */
    padding-top: 0;
    height: calc(100vh - 62px);
    position: fixed;
    overflow-y: auto;
}

.sidebar-wrapper {
    height: 100%;
    padding-bottom: 100px;
}

.main-panel {
    margin-left: 250px; /* Adjust based on sidebar width */
    padding-top: 62px; /* Same as sidebar margin-top */
}

/* Ensure content doesn't overlap with header */
.main-content {
    padding-top: 20px;
}

</style>  

            <!-- appointments -->
            <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">APPOINTMENTS</h4>
                </li>
                        <!-- create appointment -->
                        <li class="nav-item <?= $current_page=='appointment.php' || $current_page=='appointment_detail.php' || $current_page=='appointment_add_form.php' || $current_page=='appointment_update_form.php' ? 'active' : null ?>">
                            <a href="appointment.php" >
                                <i class="fas fa-pills"></i>
                                <p>Appointments</p>
                            </a>
                        </li>

                <!-- medical consumables -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MEDICAL CONSUMABLES</h4>
                </li>
                        <!-- medicine -->
                        <li class="nav-item <?= $current_page=='medicine.php' || $current_page=='medicine_add_form.php'  || $current_page=='medicine_update_form.php' ? 'active' : null ?>">
                            <a href="medicine.php" >
                                <i class="fas fa-pills"></i>
                                <p>Medicine</p>
                            </a>
                        </li>
                        <!-- medical supplies -->
                        <li class="nav-item <?= $current_page=='supplies.php' || $current_page=='supplies_update_form.php' || $current_page=='supplies_add_form.php' ? 'active' : null ?>">
                            <a href="supplies.php" >
                                <i class="fas fa-medkit"></i>
                                <p>Medical Supplies</p>
                            </a>
                        </li>
                <!-- end of medical consumables -->


                
                
                 


                <!-- our barangay -->
                <?php if(isset($_SESSION['username']) && $_SESSION['role']!='medical-admin'): ?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">OUR SIDDAGANGA</h4>
                </li>
                        <!-- barangay officials -->
                        <li class="nav-item <?= $current_page=='officials.php' ? 'active' : null ?>">
                            <a href="officials.php" >
                            <i class="fa fa-users"></i>
                                <p>SHH Officials</p>
                            </a>
                        </li>
                        <!-- barangay info -->
                        <li class="nav-item <?= $current_page=='hosppital-info.php' ? 'active' : null ?>">
                            <a href="hosppital-info.php" >
                                <i class="fa fa-info"></i>
                                <p>SIDDAGANGA Map</p>
                            </a>
                        </li>
                          
                        <?php endif ?>
                <!-- end of barangay -->
               

                
                <!-- system maintenance -->
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='system-maintenance'): ?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">SYSTEM MAINTENANCE</h4>
                    <!-- resident -->
                    <li class="nav-item <?= $current_page=='resident.php' || $current_page=='resident_add_form.php' || $current_page=='resident_update_form.php' ? 'active' : null ?>">
                            <a href="resident.php" >
                            <i class="fa fa-users"></i>
                                <p>Patients</p>
                            </a>
                        </li>
                </li>
                        <!-- manage announcement -->
                        <li class="nav-item <?= $current_page=='announcement.php' || $current_page=='announcement_detail.php' || $current_page=='announcement_update_form.php' || $current_page=='announcement_add_form.php' ? 'active' : null ?>">
                            <a href="announcement.php" >
                                <i class="fas fa-podcast"></i>
                                <p>Announcement</p>
                            </a>
                        </li>
                        <!-- manage users -->
                        <li class="nav-item <?= $current_page=='manage-user.php' || $current_page=='manage_user_add_form.php' ? 'active': null ?>">
                            <a href="manage-user.php" >
                                <i class="fa fa-server"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>
                        
                        <!-- manage backup -->
                        <li class="nav-item <?= $current_page=='manage_backup.php' ? 'active' : null ?>">
                            <a href="manage_backup.php" >
                                <i class="fa fa-database"></i>
                                <p>Manage Backup</p>
                            </a>
                        </li>
                        <?php endif ?>
                <!-- end of system maintenance -->


                <!-- sign out -->
                <!-- sign out -->
<li class="nav-item">
    <a href="model/logout.php" class="logout-link">
        <i class="icon-logout"></i>
        <p>Logged as <span class='text-primary'><?php echo $_SESSION['username']; ?></span></p>
    </a>
</li>
<!-- end of sign out -->

                <!-- end of sign out -->

            </ul>
        </div>
    </div>
</div>
<style>
    .sidebar.sidebar-style-2 .nav.nav-primary > .nav-item.active > a {
        background-color: #4B9CD3  !important;
    }
    
</style>
