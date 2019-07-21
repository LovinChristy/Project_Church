<?php
  if($this->session->userdata('loginuser'))
  {
    $session_data = $this->session->userdata('loginuser');
    $data['type'] = $session_data['type'];
    $data['username'] = $session_data['username'];
    if($this->session->userdata('type')=='1')
    {
        ?>
<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/AdminController/viewProfile" data-hover="Home">Home</a> </li>
        	<li><a href="<?php echo base_url();?>index.php/AdminController/auditorium" data-hover="Home">Booking</a> </li>

<!--        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Add  <b class="caret"></b></a>
		<ul class="dropdown-menu">

                    <li><a href="<?php// echo base_url();?>index.php/postalController/index" data-hover="About">Post office </a> </li>

                </ul>
        </li>-->
                <!--<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>-->
<li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Approval  <b class="caret"></b></a>
        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/AdminController/view_notification" data-hover="Contact">Notifications</a></li>
		<li><a href="<?php echo base_url();?>index.php/AdminController/view_church" data-hover="Contact">Church</a></li>
                    <li><a href="<?php echo base_url();?>index.php/AdminController/view_evangelist" data-hover="Contact">Evangelist</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_family" data-hover="Contact">Family</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_association" data-hover="Contact">Association</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_feedback" data-hover="Contact">Feedback</a></li>
<!--       		        <li><a href="<?php echo base_url();?>index.php/AdminController/viewBooking" data-hover="Contact">Bookings</a></li>-->
                  <li><a href="<?php echo base_url();?>index.php/AdminController/viewDonationRequest"  data-hover="Gallery">Donation</a></li>

        </ul>
</li>
	<li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Add <b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>index.php/AdminController/addPrincipal"  data-hover="Gallery">Add Principal</a></li>
                  <li><a href="<?php echo base_url();?>index.php/AdminController/viewSchoolPrincipal"  data-hover="Gallery">View Principal</a></li>

                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_Country" data-hover="Contact">Country</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_state" data-hover="Contact">State</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_district" data-hover="Contact">District</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_taluk" data-hover="Contact">Taluk</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_village" data-hover="Contact">Village</a></li>
                        <li><a href="<?php echo base_url();?>index.php/AdminController/view_relation" data-hover="Contact">Relationship</a></li>

            </ul>
	</li>
        
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <!--<li><a href="<?php echo base_url();?>index.php/AdminController/#" data-hover="Contact">Book Auditorium</a></li>-->
                <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact">Brethren Matrimony</a></li>
                <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
                <li><a href="<?php echo base_url();?>index.php/DonationController/request" data-hover="Contact">Donation Request</a></li>
                <li><a href="<?php echo base_url();?>index.php/upload_controller/index" data-hover="Contact">Uploads</a></li>

                <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
            </ul>
	</li>
         <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/AdminController/viewProfile" data-hover="About">My Profile
                </a> </li>
              <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
else    if($this->session->userdata('type')=='2')
    {
?>
<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/ChurchController/home" data-hover="Home">Home</a> </li>
        	

        <!--<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>-->
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Add  <b class="caret"></b></a>
		<ul class="dropdown-menu">
                   <li><a href="<?php echo base_url();?>index.php/ChurchController/church_account_add" data-hover="Contact">Accounts</a></li>
                     <li><a href="<?php echo base_url();?>index.php/ChurchController/addChurchEvent" data-hover="About">Church Events </a> </li>
            <li><a href="<?php echo base_url();?>index.php/ChurchController/addHead" data-hover="Contact">Sunday School Head</a></li>
<!--<li><a href="<?php echo base_url();?>index.php/PrayerController/index" data-hover="Contact">Prayer Requests</a></li>-->         
            <li><a href="<?php echo base_url();?>index.php/ChurchController/addPrayer" data-hover="Contact">Church Prayer</a></li>
		<li><a href="<?php echo base_url();?>index.php/RecordsController/marriageindex" data-hover="Contact">Marriage Record</a></li>
                 <li><a href="<?php echo base_url();?>index.php/RecordsController/baptismindex" data-hover="Contact">Baptism Record</a></li>
                    <li><a href="<?php echo base_url();?>index.php/RecordsController/deathindex" data-hover="Contact">Death Record</a></li>
               <!--<li><a href="<?php echo base_url();?>index.php/NotificationController/index" data-hover="About">Notifications </a> </li>-->
 <!--<li><a href="<?php echo base_url();?>index.php/ChurchController/EvgAdd" data-hover="About">Evangelist History </a> </li>-->
                </ul>
	</li>
        <li class="dropdown">
		<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">View  <b class="caret"></b></a>
			<ul class="dropdown-menu">
                   <!--<li><a href="<?php // echo base_url();?>index.php/ChurchController/view_notif_church_sent" data-hover="Contact">My Notifications</a></li>-->

                        <!--<li><a href="<?php echo base_url();?>index.php/ChurchController/view_family" data-hover="Contact">Registered Family</a></li>-->

                           <li><a href="<?php echo base_url();?>index.php/ChurchController/viewChurchFamily" data-hover="Contact">Church Family</a></li>
                            <li><a href="<?php echo base_url();?>index.php/ChurchController/viewChurchevangelist" data-hover="Contact">Evangelist History</a></li>
                             <li><a href="<?php echo base_url();?>index.php/ChurchController/view_church_prayer" data-hover="Contact">Prayer Schedule </a></li>
				<li><a href="<?php echo base_url();?>index.php/RecordsController/view_marriage_record" data-hover="Contact">Marriage Record</a></li>
                                <li><a href="<?php echo base_url();?>index.php/RecordsController/view_baptism_record" data-hover="Contact">Baptism Record</a></li>
                                 <li><a href="<?php echo base_url();?>index.php/RecordsController/view_death_record" data-hover="Contact">Death Record</a></li>
<li><a href="<?php echo base_url();?>index.php/ChurchController/viewSchoolRecords" data-hover="Contact">Sunday School</a></li>
                                 <!--<li><a href="#" data-hover="About">Church Events </a> </li>-->
                                 <!--<li><a href="#" data-hover="Contact">Accounts</a></li>-->
                            </ul>
			</li>
                                        <li class="dropdown">
						<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown"><img src="<?php echo base_url()?>asset/images/notification-bell.png"> <b class="caret"></b></a>
						<ul class="dropdown-menu">
                                                    
                                                    <li ><a href="<?php echo base_url();?>index.php/ChurchController/church_search_main" data-hover="Home">Search</a> </li>
                                                    <li ><a href="<?php echo base_url();?>index.php/ChurchController/view_notif_church_sent" data-hover="Home">Notices</a> </li>
                   <li><a href="<?php echo base_url();?>index.php/DonationController/viewDonationReq"  data-hover="Gallery">Donations</a></li>

                                                    <!--<li><a href="#" data-hover="Contact">Feedbacks & Complaints</a></li>-->
							<li><a href="<?php echo base_url();?>index.php/PrayerController/view_prayer_request" data-hover="Contact">Prayer Request</a></li>
                                               </ul>
					</li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php/BookingController/index" data-hover="Contact">Book Auditorium</a></li>
                <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact">Brethren Matrimony</a></li>
                <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
                <li><a href="<?php echo base_url();?>index.php/DonationController/request" data-hover="Contact">Donations</a></li>
                <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
            </ul>
	</li>
        
<!--        <li class="dropdown">
            <a href="" data-hover="About" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url()?>asset/images/churchlogo.png"><br><br> <?php echo $this->session->userdata('username'); ?>
            <b class="caret"></b></a>
             <ul class="dropdown-menu">-->
 <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/ChurchController/viewChurchProfile" data-hover="About">My Profile
                </a> </li>
                <li class="divider"></li>
                 <li><a href="<?php echo base_url()?>index.php/ChurchController/change_password" data-hover="About">Change Password
                </a> </li>
                <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
else if($this->session->userdata('type')=='3' )
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
        <!--<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>-->
        <li><a href="<?php echo base_url();?>index.php/BookingController/index" data-hover="Contact">Book Auditorium</a></li>
        <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact"> Matrimony</a></li>
            <!--<a href="<?php echo base_url();?>index.php/PrayerController/index"  data-hover="Contact">Prayer Request</a>-->
            
	
        
       <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown"><img src="<?php echo base_url()?>asset/images/notification-bell.png"> <b class="caret"></b></a>
	<ul class="dropdown-menu">
<li><a href="<?php echo base_url();?>index.php/FamilyMainController/viewExamNotifications" data-hover="Contact"> Exam Notification </a></li>
<li><a href="<?php echo base_url();?>index.php/FamilyMainController/viewFamilyNotification" data-hover="Contact"> Family Notification </a></li>
                   <li><a href="<?php echo base_url();?>index.php/DonationController/viewDonationReq"  data-hover="Gallery">Donations Request</a></li>

<li><a href="<?php echo base_url();?>index.php/FamilyMainController/familyNotification" data-hover="About">Public Notifications </a> </li>
         <!--<li><a href="#" data-hover="Contact">Feedbacks</a></li>-->
	<li><a href="<?php echo base_url();?>index.php/PrayerController/view_prayer_request" data-hover="Contact">Prayer Request</a></li>
 <li><a href="<?php echo base_url();?>index.php/FamilyMainController/viewChurchPrayers" data-hover="Contact">Prayer Schedule</a></li>
            <!--<li><a href="#" data-hover="About">Church Events </a> </li>-->
       </ul>
	</li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                 <li ><a href="<?php echo base_url();?>index.php/FamilyMainController/search" data-hover="Home">Search</a> </li>

                <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
                <!--<li></li>-->
                <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
            </ul>
	</li>
        <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/FamilyMainController/viewFamily" data-hover="About">My Profile
                </a> </li><li class="divider"></li>
                 <li><a href="<?php echo base_url()?>index.php/FamilyMainController/change_password" data-hover="About">Change Password
                </a> </li>
                 <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
else if($this->session->userdata('type')=='4')
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
        <li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>
     <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Notification <b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li ><a href="<?php echo base_url();?>index.php/EvangelistMainController/evangelistNotification" data-hover="Home">Public</a> </li>
    <li ><a href="<?php echo base_url();?>index.php/EvangelistMainController/viewEvangelistNotification" data-hover="Home">Evangelist</a> </li>
                   <li><a href="<?php echo base_url();?>index.php/DonationController/viewDonationReq"  data-hover="Gallery">Donations</a></li>

            </ul>
	</li>   
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php/BookingController/index" data-hover="Contact">Book Auditorium</a></li>
                <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact">Brethren Matrimony</a></li>
                <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
                <li><a href="<?php echo base_url();?>index.php/DonationController/request" data-hover="Contact">Donations</a></li>
                <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
            </ul>
	</li>
       <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/EvangelistMainController/viewEvangelist" data-hover="About">My Profile
                    </a> </li><li class="divider"></li>
                     <li><a href="<?php echo base_url()?>index.php/EvangelistMainController/change_password" data-hover="About">Change Password
                </a> </li>
                <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
else if($this->session->userdata('type')=='5')
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
        <!--<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>-->
 <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Notification <b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li ><a href="<?php echo base_url();?>index.php/AssociationMainController/associationNotification" data-hover="Home">Public</a> </li>
    <li ><a href="<?php echo base_url();?>index.php/AssociationMainController/viewAssociationNotification" data-hover="Home">Association</a> </li>
                   <li><a href="<?php echo base_url();?>index.php/DonationController/viewDonationReq"  data-hover="Gallery">Donations</a></li>

            </ul>
	</li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Events <b class="caret"></b></a>
            <ul class="dropdown-menu">
                  <li ><a href="<?php echo base_url();?>index.php/AssociationMainController/addevents" data-hover="Home">Add</a> </li>
    <li ><a href="<?php echo base_url();?>index.php/AssociationMainController/asso_view_events" data-hover="Home">View</a> </li>

            </ul>
	</li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php/BookingController/index" data-hover="Contact">Book Auditorium</a></li>
                <!--<li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact">Brethren Matrimony</a></li>-->
                <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
                <li><a href="<?php echo base_url();?>index.php/DonationController/request" data-hover="Contact">Donations</a></li>
                <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
            
            </ul>
	</li>
 <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/AssociationMainController/viewAssociation" data-hover="About">My Profile
                </a> </li><li class="divider"></li>
                 <li><a href="<?php echo base_url()?>index.php/AssociationMainController/change_password" data-hover="About">Change Password
                </a> </li>
               <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
                                                    
<?php
}
else if($this->session->userdata('type')=='6')
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/SundaySchoolController/index" data-hover="Home">Home</a> </li>
        	<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSyllabus" data-hover="Home">Syllabus</a> </li>
<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewExams" data-hover="Contact"> Exams</a></li>
<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/principal_report_view" data-hover="Contact"> Reports</a></li>
<li><a href="<?php echo base_url();?>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">View <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <!--<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addSyllabus" data-hover="Contact">Add Syllabus</a></li>-->
                <!--<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addExams" data-hover="Contact"> Add Exams</a></li>-->
                <!--<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSyllabus" data-hover="Contact"> Syllabus</a></li>-->
                <!--<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewExams" data-hover="Contact"> Exams</a></li>-->
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSchoolHead" data-hover="Contact">View School Head</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSchoolTutor" data-hover="Contact">View Tutor by church</a></li>
              <!--merge attendance and reports to view students-->
              <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/principal_viewStudent" data-hover="Contact">View Students by church</a></li>
<!--                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/index" data-hover="Contact">View Student Reports</a></li>
            <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/index" data-hover="Contact"> View Attendance Report</a></li>-->
            </ul>
	</li>

 <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/principalProfile" data-hover="About">My Profile
                </a> </li> 
                <li class="divider"></li>
                 <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/change_password" data-hover="About">Change Password
                </a> </li>
                <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>
    </ul>
</div><!-- /.navbar-collapse -->
                                                    
<?php
}
else if($this->session->userdata('type')=='7')
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/SundaySchoolController/headindex" data-hover="Home">Home</a> </li>
       <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Tutors <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addTeachers" data-hover="Contact">Add Teachers</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewTeachers" data-hover="Contact">View Teachers</a></li>
                
            </ul>
       </li>
 <!--<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>-->
         <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Students <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addStudents" data-hover="Contact">Add Students</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewStudents" data-hover="Contact">View Students</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/head_viewStudAttend" data-hover="Contact">View Attendance</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewStudentMarks" data-hover="Contact">View Marks </a></li>
            </ul>
         </li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewExamNotifications" data-hover="Contact"> Exam  </a></li>
               <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSyllabusAll" data-hover="Contact">Syllabus</a></li>

          
        
         <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
<!--                        <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/headProfile" data-hover="About">My Profile
                </a> </li><li class="divider"></li>-->
                 <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/change_password" data-hover="About">Change Password
                </a> </li>
                <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
         </li>

    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
    
      else if($this->session->userdata('type')=='8')
    {
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
        <h1 class="animated wow pulse" data-wow-delay=".2s">
            <a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
	<li class="active"><a href="<?php echo base_url();?>index.php/SundaySchoolController/index" data-hover="Home">Home</a> </li>

        
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Attendance <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addattendance" data-hover="Contact">Add Attendance</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewAttendance" data-hover="Contact">View Attendance</a></li>
               <!--<li><a href="<?php echo base_url();?>index.php/SundaySchoolController/attendCal" data-hover="Contact">Calculate Attendance</a></li>-->
               <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/tutor_attendGenerate" data-hover="Contact">Calculate Attendance</a></li>

        </ul>
        </li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Marks <b class="caret"></b></a>
        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/addMarks" data-hover="Contact">Add Marks</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewMarks" data-hover="Contact">View Marks </a></li>

        </ul>
        </li>
        <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">View <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewClassStudents" data-hover="Contact">View Students</a></li>
               <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewExamNotifications" data-hover="Contact">View Exams</a></li>
                <li><a href="<?php echo base_url();?>index.php/SundaySchoolController/viewSyllabusAll" data-hover="Contact">View Syllabus</a></li>
            
            </ul>
	</li>
                 <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
        <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
<!--                        <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/classProfile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li><li class="divider"></li>-->
                         <li><a href="<?php echo base_url()?>index.php/SundaySchoolController/change_password" data-hover="About">Change Password
                </a> </li>
<!--                        <li><a ><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
        

    </ul>
</div><!-- /.navbar-collapse -->
<?php
    }
    }
    else
    {
    ?>


<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
	<h1 class="animated wow pulse" data-wow-delay=".2s">
	<a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
    <li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
    <li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>
    <li><a href="<?php echo base_url();?>index.php/LoginController/index" data-hover="Contact" >Login</a></li>
    <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Register <b class="caret"></b></a>
	<ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/RegisterController/index" data-hover="Contact">Church </a></li>
            <li><a href="<?php echo base_url();?>index.php/FamilyController/index" data-hover="Contact">Family </a></li>
            <li><a href="<?php echo base_url();?>index.php/EvangelistController/index" data-hover="Contact">Evangelist </a></li>
            <li><a href="<?php echo base_url();?>index.php/AssociationController/index" data-hover="Contact">Association </a></li>
        </ul>
    </li>
    <li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
	<ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/HomeContoller/instructions" data-hover="Contact">*Instruction*</a></li>
            <li><a href="<?php echo base_url();?>index.php/BookingController/index" data-hover="Contact">Book Auditorium</a></li>
            <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index" data-hover="Contact">Brethren Matrimony</a></li>
            <li><a href="<?php echo base_url();?>index.php/DownloadController/downloadindex" data-hover="Contact">Our Institutions</a></li>
            <li><a href="<?php echo base_url();?>index.php/DonationController/request" data-hover="Contact">Donations</a></li>
            <!--<li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>-->
            <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
        </ul>
    </li>
 </ul>
</div><!-- /.navbar-collapse -->
          
 <?php   
}

?>
                                                        