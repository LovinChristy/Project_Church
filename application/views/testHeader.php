<?php
  if($this->session->userdata('loginuser'))
  {
    $session_data = $this->session->userdata('loginuser');
    $data['username'] = $session_data['username'];
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
									<a href="">Bretheren<span>Church</span></a></h1>
								</div>

							</div>
<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
<!--								<li><a href="<?php// echo base_url();?>index.php/AboutController/index" data-hover="About">About </a> </li>-->
								<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>
                                                                
                                                          <li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                            <li><a href="<?php echo base_url();?>index.php/RegisterController/index" data-hover="Contact">Book Auditorium</a></li>
                                                                           <li><a href="<?php echo base_url();?>index.php/FamilyController/index" data-hover="Contact">Brethren Matrimony</a></li>
                                                                      <li><a href="<?php echo base_url();?>index.php/EvangelistController/index" data-hover="Contact">Downloads</a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/AssociationController/index" data-hover="Contact">Donations</a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
                                                                        </ul>
							  </li>
<li class="dropdown">
                                                              <a href="" data-hover="About" class="dropdown-toggle" data-toggle="dropdown">
                                                                  <img src="<?php echo base_url()?>asset/images/user.png"><br><br> <?php echo $this->session->userdata('username'); ?>
                                                            <b class="caret"></b></a>
                                                             <ul class="dropdown-menu">
                                                                 <li><a href="<?php echo base_url()?>index.php/FamilyMainController/viewFamily" data-hover="About">My Profile
                                                            </a> </li>
                                              <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>" data-hover="About">Logout
                                                            </a> </li>
                                                             

                                                          </ul>
                                                          
                                                          </li>
							  </ul>
							</div><!-- /.navbar-collapse -->
                                                        
<?php
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
									<a href="">Bretheren<span>Church</span></a></h1>
								</div>

							</div>
<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
<!--								<li><a href="<?php// echo base_url();?>index.php/AboutController/index" data-hover="About">About </a> </li>-->
								<li><a href="<?php echo base_url();?>index.php/GalleryController/index"  data-hover="Gallery">Gallery</a></li>
                                                                <li><a href="<?php echo base_url();?>index.php/LoginController/index" data-hover="Contact" >Login</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Register <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                            <li><a href="<?php echo base_url();?>index.php/RegisterController/index" data-hover="Contact">Church Register</a></li>
                                                                           <li><a href="<?php echo base_url();?>index.php/FamilyController/index" data-hover="Contact">Family Register</a></li>
                                                                      <li><a href="<?php echo base_url();?>index.php/EvangelistController/index" data-hover="Contact">Evangelist Register</a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/AssociationController/index" data-hover="Contact">Association Register</a></li>
                                                                        </ul>
							  </li>
                                                          <li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">More <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                            <li><a href="<?php echo base_url();?>index.php/RegisterController/index" data-hover="Contact">Book Auditorium</a></li>
                                                                           <li><a href="<?php echo base_url();?>index.php/FamilyController/index" data-hover="Contact">Brethren Matrimony</a></li>
                                                                      <li><a href="<?php echo base_url();?>index.php/EvangelistController/index" data-hover="Contact">Downloads</a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/AssociationController/index" data-hover="Contact">Donations</a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/FeedbackController/index" data-hover="Contact">Feedbacks & Complaints </a></li>
                                                                    <li><a href="<?php echo base_url();?>index.php/ContactController/index" data-hover="Contact">Contact</a></li>
                                                                        </ul>
							  </li>
                                                          
							  </ul>
							</div><!-- /.navbar-collapse -->
            
 <?php   
}
?>
                                                        