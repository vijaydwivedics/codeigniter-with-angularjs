	<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
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
								<?php 
								echo anchor('blog/comments', 'Click Here');
								echo "<br/>";
								echo random_element();
								echo "<br/>";
								echo $random_element;
								echo "<br/>";
								echo $testing;
								echo "<br/>";
								echo $this->testing->add();
								if(is_php('5.6.1'))
								{
									echo "5.6";
								}
								echo "<br/>";
								if(is_php('7.1'))
								{
									echo "7.1";
								}
								echo "<br/>";
								$file = 'create.php';
								if (is_really_writable($file))
								{
										echo "I could write to this if I wanted to";
								}
								else
								{
										echo "File is not writable";
								}
								echo "<br/>";
								if (is_writable($file))
								{
										echo "I could write to this if I wanted to";
								}
								else
								{
										echo "File is not writable";
								}
								echo "<br/>";
								$get = function_usable('random_element'); //is_https(); //get_mimes();
								print_r($get);
								echo "<br/>";
								$sharepath = '/Nextcloud%20Manual.pdf';
								echo urldecode($sharepath);
								echo "<br/>";
								?>
								<?=$sharepath?>
								<?php
								echo "<br/>";
								$a = Array(
									1 => Array(
										 'name' => 'Peter',
										 'age' => 17
									),
									0 => Array(
										 'name' => 'Nina',
										 'age' => 21
									),
									2 => Array(
										 'name' => 'Bill',
										 'age' => 15
									),
								);
								function compareByName($a, $b) {
								  return strcmp($a["name"], $b["name"]);
								}
								usort($a, 'compareByName');
								/* The next line is used for debugging, comment or delete it after testing */
								print_r($a);
								?>
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