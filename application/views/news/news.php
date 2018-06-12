	<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">News(<?php echo isset($slug)?$slug:''; ?>)</li>
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
					<table class="table table-responsive-sm table-hover table-outline mb-0">
					  <thead class="thead-light">
						<tr>
						  <th class="text-center">
							<i class="icon-people"></i>
						  </th>
						  <th>User</th>
						  <th class="text-center">Country</th>
						  <th>Usage</th>
						  <th class="text-center">Payment Method</th>
						  <th>Activity</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td class="text-center">
							<div class="avatar">
							  <img src="<?php echo base_url(); ?>/assets/images/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
							  <span class="avatar-status badge-success"></span>
							</div>
						  </td>
						  <td>
							<div>Yiorgos Avraamu</div>
							<div class="small text-muted">
							  <span>New</span> | Registered: Jan 1, 2015
							</div>
						  </td>
						  <td class="text-center">
							<i class="flag-icon flag-icon-us h4 mb-0" title="us" id="us"></i>
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
						  <td class="text-center">
							<i class="fa fa-cc-mastercard" style="font-size:24px"></i>
						  </td>
						  <td>
							<div class="small text-muted">Last login</div>
							<strong>10 sec ago</strong>
						  </td>
						</tr>
					  <tbody>
					</table>
				  </div>
				</div>	
			</div>
			<!--/.row-->
			
          </div>
        </div>
	  </main>