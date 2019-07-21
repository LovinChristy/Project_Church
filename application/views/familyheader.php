<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-6">
                                                                     <li><a href="../../index.php/FamilyMainController/home" data-hover="About">Home
                                                                      <!--<img src="<?php// echo base_url()?>asset/images/homeicon1.png">-->
                                                                 </a> 
                                                               </li>

							<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Add  <b class="caret"></b></a>
									<ul class="dropdown-menu">
<!--                                                                             <li><a href="#" data-hover="Contact">Accounts</a></li>-->
                                                                            <li><a href="#" data-hover="Contact">Prayer</a></li>
<!--										<li><a href="#" data-hover="Contact">Marriage Record</a></li>
                                                                                <li><a href="#" data-hover="Contact">Baptism Record</a></li>
                                                                                <li><a href="#" data-hover="Contact">Death Record</a></li>-->
<!--                                                                                <li><a href="#" data-hover="About">Church Events </a> </li>-->
									</ul>
							  </li>
                                                          <li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">View  <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                             <li><a href="#" data-hover="About">Prayer Requests </a> </li>
<!--                                                                             <li><a href="#" data-hover="Contact">Accounts</a></li>-->
                                                                            <li><a href="#" data-hover="Contact">Prayer Schedule</a></li>
<!--										<li><a href="#" data-hover="Contact">Marriage Record</a></li>
                                                                                <li><a href="#" data-hover="Contact">Baptism Record</a></li>
                                                                                <li><a href="#" data-hover="Contact">Death Record</a></li>-->
                                                                                <li><a href="#" data-hover="About">Church Events </a> </li>
                                                                                
									</ul>
							  </li>
                                                           <li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown"><img src="<?php echo base_url()?>asset/images/notification-bell.png"> <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                             <li><a href="#" data-hover="About">Notifications </a> </li>
                                                                             <li><a href="#" data-hover="Contact">Feedbacks</a></li>
<!--                                                                            <li><a href="#" data-hover="Contact">Complaints</a></li>-->
										<li><a href="#" data-hover="Contact">Prayer Request</a></li>
                                                                                
									</ul>
							  </li>
                                       
                                                     <li class="dropdown">
                                                              <a href="" data-hover="About" class="dropdown-toggle" data-toggle="dropdown">
                                                                  <img src="<?php echo base_url()?>asset/images/user.png"><br><br> <?php echo $this->session->userdata('username'); ?>
                                                            <b class="caret"></b></a>
                                                             <ul class="dropdown-menu">
                                                                 <li><a href="viewFamily" data-hover="About">My Profile
                                                            </a> </li>
                                              <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>" data-hover="About">Logout
                                                            </a> </li>
                                                             

                                                          </ul>
                                                          
                                                          </li>
                                                         
							  </ul>
							</div><!-- /.navbar-collapse -->