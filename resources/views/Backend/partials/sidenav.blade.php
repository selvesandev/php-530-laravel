<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>PHP Project.</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img
						src="http://dev.php5pmproject.com/assets/img/admin/91c503429d8f43628e2ed08169e98094.jpg"
						height="
					50" class="img-circle profile_img"/>
			</div>

			<div class="profile_info">
				<span>Welcome,</span>
				<h2>John <br>
					<small>Super Admin</small>
				</h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br/>

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{route('admin-dashboard')}}">
							<i class="fa fa-laptop"></i> Dashboard
						</a>
					</li>

					<li><a><i class="fa fa-table"></i> Admin <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{route('admin')}}">List</a>
							</li>
							<li>
								<a href="{{route('add-admin')}}">Add</a>
							</li>
						</ul>
					</li>


					{{--<li><a><i class="fa fa-newspaper-o"></i> News <span--}}
					{{--class="fa fa-chevron-down"></span></a>--}}
					{{--<ul class="nav child_menu">--}}
					{{--<li>--}}
					{{--<a href="http://dev.php5pmproject.com/admin/master.php?page=categories">Categories</a>--}}
					{{--</li>--}}
					{{--<li>--}}
					{{--<a href="http://dev.php5pmproject.com/admin/master.php?page=add-news">Add</a>--}}
					{{--</li>--}}
					{{--<li><a href="http://dev.php5pmproject.com/admin/master.php?page=news">News</a>--}}
					{{--</li>--}}
					{{--</ul>--}}
					{{--</li>--}}

				</ul>
			</div>

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>
