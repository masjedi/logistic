<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>

							<li class="nav-item start active">
								<a href="{{url('admin/dashboard')}}" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href=" {{route('services.index')}} " class="nav-link nav-toggle">
									<span class="title">Services</span>
									<i class="fa fa-tasks" aria-hidden="true"></i>
								</a>
							</li>
							<li class="nav-item">
								<a href=" {{route('projects.index')}}" class="nav-link nav-toggle">
									<span class="title">Projects</span>
									<i class="fa fa-handshake-o"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
