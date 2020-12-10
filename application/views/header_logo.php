<!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <strong>Halo, <?php if($this->session->userdata("akses")=="MHS"){
							echo $this->session->userdata("username"). " [Ketua Kelas]";
						}  else{
							echo $this->session->userdata("username"). " [".$this->session->userdata("akses")."]";
						}
						?></strong>
                        <div class="form-inline">
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/images/user.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            
                            <!--<a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>-->

                            <a class="nav-link" href="<?php echo base_url() ?>dashboard/logout"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header>
		<div style="margin:auto; width:500px; margin-top:15%">
			
			<img src="<?php echo base_url() ?>assets/images/logo.png" width="500px">
		</div>