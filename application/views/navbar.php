<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">eBooks</a>
		</div>
		<ul class="nav navbar-nav pull-right">
		<?php
			if (!$this->ion_auth->logged_in()) {
		?>
			<li><a data-toggle="dropdown" class="dropdown-toggle" href="#">Login
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
                        	<input type="checkbox" style="margin:10px;" name="remember" value="1" /> Remember Me
                        	<input type="submit" class="btn btn-primary" style="margin:10px;" name="submit" value="Log In">
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
		<li><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span id="credential"></span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu col-xs-6 pull-right" style="width:250px;" aria-labelledby="drop3">
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