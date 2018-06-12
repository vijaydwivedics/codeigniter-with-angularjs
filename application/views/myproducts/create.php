	<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Create</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        </ol>

        <div class="container-fluid">
          <div class="animated fadeIn">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<?php echo $title; ?>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
								<?php echo validation_errors(); ?>
								<?php print_r($msg); ?>
								 <!--<form class="form-horizontal" ng-submit="submitStudnetForm()" role="form">-->
								 <?php //echo form_open_multipart('myproducts/do_upload');?>
								 <?php echo form_open('myproducts/create'); ?>
								 
									<div class="form-group">
										<label for="firstName" class="col-sm-3 control-label">First Name</label>
										<div class="col-sm-6">
											<input type="text" id="firstName" name="firstName" class="form-control" ng-model="student.firstName" />
										</div>
										<div class="col-sm-3"></div>

									</div>
									<div class="form-group">
										<label for="lastName" class="col-sm-3 control-label">Last Name</label>
										<div class="col-sm-6">
											<input type="text" id="lastName" name="lastName" class="form-control" ng-model="student.lastName" />
										</div>
										<div class="col-sm-3"></div>
									</div>
									
									<div class="form-group">
										<label for="lastName" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-6">
											<input type="text" id="email" name="email" class="form-control" ng-model="student.email" />
										</div>
										<div class="col-sm-3"></div>
									</div>
									
									<div class="form-group">
										<label for="lastName" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-6">
											<input type="text" id="password" name="password" class="form-control" ng-model="student.password" />
										</div>
										<div class="col-sm-3"></div>
									</div>
									
									<div class="form-group">
										<label for="lastName" class="col-sm-3 control-label">Confirm Password</label>
										<div class="col-sm-6">
											<input type="text" id="conf_password" name="conf_password" class="form-control" ng-model="student.conf_password" />
										</div>
										<div class="col-sm-3"></div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="col-sm-3 control-label">DoB</label>
										<div class="col-sm-2">
											<input type="date" id="dob" class="form-control" ng-model="student.DoB" />
										</div>
										<div class="col-sm-7"></div>
									</div>
									
									<div class="form-group">
										<label for="gender" class="col-sm-3 control-label">Gender</label>
										<div class="col-sm-2">
											<select id="gender" class="form-control" ng-model="student.gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
										<div class="col-sm-7"></div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-3"></div>
										<div class="col-sm-2">
											<span><b>Training Location</b></span>
											<div class="radio">
												<label><input value="online" type="radio" name="training" ng-model="student.trainingType" />Online</label>
											</div>
											<div class="radio">
												<label><input value="onsite" type="radio" name="training" ng-model="student.trainingType" />OnSite</label>
											</div>
										</div>
										<div class="col-sm-7">
											<span><b>Main Subjects</b></span>
											<div class="checkbox">
												<label><input type="checkbox" ng-model="student.maths" />Maths</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" ng-model="student.physics" />Physics</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox"  ng-model="student.chemistry" />Chemistry</label>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="col-sm-3 control-label">Profile Photo</label>
										<div class="col-sm-4">
											<input type="file" name="image" id="image" class="form-control" size="20" ng-model="student.image" />
										</div>
										<div class="col-sm-7"></div>
									</div>
									
									<input type="submit" value="Save" class="btn btn-primary col-sm-offset-3" /> 
									<input type="reset" value="Reset" ng-click="resetForm()" class="btn" />
								</form>
								</div>
							 </div>
						</div>
				  </div>
				</div>	
			</div>
			<!--/.row-->
			
          </div>
        </div>
	  </main>