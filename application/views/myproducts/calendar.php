<style>
table{
	border: 15px solid #25BAE4;
	border-collapse:collapse;
}
td{
	width: 50px;
	height: 50px;
	text-align: center;
	border: 1px solid #e2e0e0;
	font-size: 18px;
	font-weight: bold;
}
th{
	height: 50px;
	padding-bottom: 8px;
	background:#25BAE4;
	font-size: 20px;
}
.prev_sign a, .next_sign a{
	color:white;
	text-decoration: none;
}
tr.week_name{
	font-size: 16px;
	font-weight:400;
	color:red;
	width: 10px;
	background-color: #efe8e8;
}
.highlight{
	background-color:#25BAE4;
	color:white;
	padding-top: 13px;
	padding-bottom: 7px;
}
</style>

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
								<div class='col-md-12'>
									<div class="col-md-6">
									<?php
									// Generate calendar
									echo $this->calendar->generate($year, $month,$date);
									?>
									</div>
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