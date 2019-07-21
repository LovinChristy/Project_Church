<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-6">
<!--                                                                     <li><a href="../../index.php/AdminController/index" data-hover="About">
                                                                      <img src="<?php// echo base_url()?>asset/images/homeicon1.png">
                                                                 </a> 
                                                               </li>-->

							<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Add  <b class="caret"></b></a>
									<ul class="dropdown-menu">
                                                                             <li><a href="../CountryController/index" data-hover="Contact">Country</a></li>
                                                                            <li><a href="../StateController/index" data-hover="Contact">State</a></li>
										<li><a href="../DistrictController/index" data-hover="Contact">District</a></li>
                                                                                <li><a href="../TalukController/index" data-hover="Contact">Taluk</a></li>
                                                                                <li><a href="../VillageController/index" data-hover="Contact">Village</a></li>
                                                                                <li><a href="../postalController/index" data-hover="About">Post office </a> </li>
                                                                                <li><a href="../RelationController/index" data-hover="About">Relationship </a> </li>
									</ul>
							  </li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">View <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="view_church" data-hover="Contact">Church</a></li>
                                                                                <li><a href="view_evangelist" data-hover="Contact">Evangelist</a></li>
                                                                                  <li><a href="view_family" data-hover="Contact">Family</a></li>
                                                                                    <li><a href="view_association" data-hover="Contact">Association</a></li>
                                                                                    <li><a href="view_feedback" data-hover="Contact">Feedback</a></li>
                                                                                    <li><a href="view_Country" data-hover="Contact">Country</a></li>
                                                                                <li><a href="view_state" data-hover="Contact">State</a></li>
                                                                                  <li><a href="view_district" data-hover="Contact">District</a></li>
                                                                                  <li><a href="view_taluk" data-hover="Contact">Taluk</a></li>
                                                                                    <li><a href="view_village" data-hover="Contact">Village</a></li>
                                                                                    <li><a href="view_relation" data-hover="Contact">Relationship</a></li>
									</ul>
							  </li>
<!--								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="" data-toggle="dropdown">Approvals <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="approve_church" data-hover="Contact">Church</a></li>
                                                                                <li><a href="approve_evangelist" data-hover="Contact">Evangelist</a></li>
                                                                                  <li><a href="approve_family" data-hover="Contact">Family</a></li>
                                                                                    <li><a href="approve_association" data-hover="Contact">Association</a></li>
									</ul>
							  </li>-->
                                                          <li class="dropdown">
                                                              <a href="" data-hover="About" class="dropdown-toggle" data-toggle="dropdown">
                                                                  <img src="<?php echo base_url()?>asset/images/adminlogo.png"><br><br> <?php echo $this->session->userdata('username'); ?>
                                                            <b class="caret"></b></a>
                                                             <ul class="dropdown-menu">
                                                                 <li><a href="<?php echo base_url()?>index.php/AdminController/viewProfile" data-hover="About">My Profile
                                                            </a> </li>
                                              <li><a href="<?php echo base_url()."index.php/LoginController/logout"; ?>" data-hover="About">Logout
                                                            </a> </li>

                                                          </ul>
                                                          
                                                          </li>
                                                         
							  </ul>
							</div><!-- /.navbar-collapse -->