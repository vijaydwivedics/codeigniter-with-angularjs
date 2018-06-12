	<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Products(<?php echo isset($slug)?$slug:''; ?>)</li>
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
						<table data-ng-app="userApp" data-ng-controller="UserController" data-ng-init="init()" class="table table-responsive-sm table-hover table-outline mb-0" >
						  <thead class="thead-light">
							<tr>
							  <th class="text-center"><i class="icon-people"></i></th>
							  <th>User</th>
							  <th>Email</th>
							  <th class="text-center">Company</th>
							  <th class="text-center">Designation</th>
							  <th>Usage</th>
							  <th>Activity</th>
							  <th>Action</th>
							</tr>
						  </thead>
						  <tbody>
							<tr data-ng-repeat="user in post.users | orderBy : '-id'">
							  <td class="text-center">
								<div class="avatar">
								  <img src="<?php echo base_url(); ?>/assets/images/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
								  <span class="avatar-status badge-success"></span>
								</div>
							  </td>
							  <td>
								<div>{{user.first_name}} {{user.last_name}}</div>
								<div class="small text-muted">
								  <span>New</span> | Registered: Jan 1, 2015
								</div>
							  </td>
							  <td>
								<div>{{user.user_email}}</div>
							  </td>
							  <td class="text-center">
								<div>{{user.company_name}}</div>
							  </td>
							  <td class="text-center">
								<div>{{user.designation}}</div>
							  </td>
							  <td>
								<div class="clearfix">
								  <div class="float-left">
									<strong>50%</strong>
								  </div>
								  <div class="float-right">
									<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
								  </div>
								</div>
								<div class="progress progress-xs">
								  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							  </td>
							  <td>
								<div class="small text-muted">Last login</div>
								<strong>10 sec ago</strong>
							  </td>
							  <td><a href="<?php echo base_url('users/view/'); ?>{{user.id}}"> View </a> | <span data-ng-click="editUser(user)"> Edit</span> | <span data-ng-click="deleteUser(user)">Delete</span> </td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>	
			</div>
			<!--/.row-->
			
          </div>
        </div>
	  </main>