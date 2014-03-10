<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url();?>">eBooks</a>
		</div>
		<ul class="nav navbar-nav pull-right">
		<?php
			if (!$this->ion_auth->logged_in()) {
		?>
			<li><a data-toggle="dropdown" class="dropdown-toggle dropdown-login" href="#">Login
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu col-xs-6 pull-right" style="width:250px;" aria-labelledby="drop3">
                        <li>
                        	<?php
                        		echo form_open("auth/login");
                        	?>
                        	<div class="col-xs-11">
                        	<input class="form-control" type="text" style="margin: 10px" name="email" placeholder="Email"/>
                        	<input class="form-control"  type="password" style="margin:10px;" name="password" placeholder="Password"/>
                        	<input type="checkbox" style="margin:10px;" name="remember" value="1" id="remember" /><label style="color:white;" for="remember">Remember</label>
                        	<input type="submit" class="btn btn-primary btn-md" style="margin:10px;" name="submit" value="Log In">
                        	</div>
                        	<?php
                        		echo form_close();
                        	?>
                        </li>
                        <div class="clearfix"></div>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Or Signup, Maybe</a></li>
                </ul>
			</li>
		<?php 
			}
			else {
		?>
		<li><a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<?php
					$e = $this->ion_auth->get_user();
				?>
				<img src="http://www.gravatar.com/avatar/<?php echo md5($e->email);?>" id="gravatar" class="img-responsive" style="height:25px;float:left;margin:0px 5px;">
				<span id="credential">
					<?php
						echo $e->username;	
					?>
				</span>
				<span class="caret"></span>
			</a>
				<ul class="dropdown-menu pull-right" style="width:250px;" aria-labelledby="drop3">
                        <li><a href="<?php echo base_url() . index_page();?>/dashboard">Dashboard</a></li>
                        <li>
                        	<a href="<?php echo base_url() . index_page();?>/auth/logout">Log Out</a>
                        </li>
                </ul>
			</li>
		<?php
			}
		?>
		</ul>
	</div>
</nav>