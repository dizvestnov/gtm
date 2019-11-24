<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

	<?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 4 messages</li>
						<li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
								<li>
									<!-- start message -->
									<a href="#">
										<div class="pull-left">
											<img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
										</div>
										<h4>
											Support Team
											<small><i class="fa fa-clock-o"></i> 5 mins</small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
								<!-- end message -->
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="<?= $directoryAsset ?>/img/user3-128x128.jpg" class="img-circle" alt="user image" />
										</div>
										<h4>
											AdminLTE Design Team
											<small><i class="fa fa-clock-o"></i> 2 hours</small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="<?= $directoryAsset ?>/img/user4-128x128.jpg" class="img-circle" alt="user image" />
										</div>
										<h4>
											Developers
											<small><i class="fa fa-clock-o"></i> Today</small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="<?= $directoryAsset ?>/img/user3-128x128.jpg" class="img-circle" alt="user image" />
										</div>
										<h4>
											Sales Department
											<small><i class="fa fa-clock-o"></i> Yesterday</small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="<?= $directoryAsset ?>/img/user4-128x128.jpg" class="img-circle" alt="user image" />
										</div>
										<h4>
											Reviewers
											<small><i class="fa fa-clock-o"></i> 2 days</small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="footer"><a href="#">See All Messages</a></li>
					</ul>
				</li>

				<!-- Notifications: style can be found in dropdown.less -->
				<li class="dropdown notifications-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 10 notifications</li>
						<li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
								<li>
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 new members joined today
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-warning text-yellow"></i> Very long description here that may
										not fit into the page and may cause design problems
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-users text-red"></i> 5 new members joined
									</a>
								</li>

								<li>
									<a href="#">
										<i class="fa fa-shopping-cart text-green"></i> 25 sales made
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user text-red"></i> You changed your username
									</a>
								</li>
							</ul>
						</li>
						<li class="footer"><a href="#">View all</a></li>
					</ul>
				</li>

				<!-- Tasks: style can be found in dropdown.less -->
				<li class="dropdown tasks-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-flag-o"></i>
						<span class="label label-danger">9</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 9 tasks</li>
						<li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
								<li>
									<!-- Task item -->
									<a href="#">
										<h3>
											Design some buttons
											<small class="pull-right">20%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">20% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
								<li>
									<!-- Task item -->
									<a href="#">
										<h3>
											Create a nice theme
											<small class="pull-right">40%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
								<li>
									<!-- Task item -->
									<a href="#">
										<h3>
											Some task I need to do
											<small class="pull-right">60%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
								<li>
									<!-- Task item -->
									<a href="#">
										<h3>
											Make beautiful transitions
											<small class="pull-right">80%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
							</ul>
						</li>
						<li class="footer">
							<a href="#">View all tasks</a>
						</li>
					</ul>
				</li>

				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image" />
						<span class="hidden-xs">Alexander Pierce</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />

							<p>
								Alexander Pierce - Web Developer
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="col-xs-4 text-center">
								<a href="#">Followers</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Sales</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Friends</a>
							</div>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<?= Html::a(
									'Sign out',
									['/site/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
							</div>
						</li>
					</ul>
				</li>


				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-comments"></i>
						<span class="badge label label-primary">3</span>
					</a>
					<!-- Direct Chat -->
					<div id="direct-chat" class="dropdown-menu">
						<!-- DIRECT CHAT PRIMARY -->
						<div class="box box-primary direct-chat direct-chat-primary">
							<!-- Box-header -->
							<div class="box-header with-border">
								<!-- Pull Left -->
								<h3 class="box-title">
									<font style="vertical-align: inherit;">
										<font style="vertical-align: inherit;">Прямой чат</font>
									</font>
								</h3><!-- /.box-title -->
								<span data-toggle="tooltip" title="3 новых сообщения" class="badge label label-primary">
									<font style="vertical-align: inherit;">
										<font style="vertical-align: inherit;">3</font>
									</font>
								</span>
								<!-- Pull Right -->
								<div class="box-tools pull-right">
									<!-- Buttons -->
									<button class="btn btn-box-tool" data-toggle="tooltip" title="контакты" data-widget="chat-pane-toggle">
										<i class="fa fa-user-circle-o"></i>
									</button>
									<button class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button><!-- /.btn-box-tool -->
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->
							<!-- Box-body -->
							<div class="box-body">
								<!-- Conversations are loaded here -->
								<div class="direct-chat-messages">

									<!-- Message to the left -->
									<div class="direct-chat-msg">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-left">
												<font style="vertical-align: inherit;">
													<font style="vertical-align: inherit;">Александр Пирс </font>
												</font>
											</span>
											<span class="direct-chat-timestamp pull-right">
												<font style="vertical-align: inherit;">
													<font style="vertical-align: inherit;">23 января 14:00</font>
												</font>
											</span>
										</div>
										<!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="/assets/425aa529/img/user2-160x160.jpg" alt="сообщение пользователя">
										<!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">
													Этот шаблон действительно бесплатно? </font>
												<font style="vertical-align: inherit;">Это невероятно!
												</font>
											</font>
										</div>
										<!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

									<!-- Message to the right -->
									<div class="direct-chat-msg right">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-right">
												<font style="vertical-align: inherit;">
													<font style="vertical-align: inherit;">Сара Баллок </font>
												</font>
											</span>
											<span class="direct-chat-timestamp pull-left">
												<font style="vertical-align: inherit;">
													<font style="vertical-align: inherit;">23 января 14:05</font>
												</font>
											</span>
										</div><!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="/assets/425aa529/img/user3-128x128.jpg" alt="сообщение пользователя">
										<!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">
													Тебе лучше поверить в это!
												</font>
											</font>
										</div><!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

								</div>
								<!--/.direct-chat-messages-->
								<!-- Contacts are loaded here -->
								<div class="direct-chat-contacts">
									<!-- Contatcts-list -->
									<ul class="contacts-list">
										<!-- Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="/assets/425aa529/img/user4-128x128.jpg" alt="Контакт Аватар">
												<!-- Contacts-list-info -->
												<div class="contacts-list-info">
													<span class="contacts-list-name">
														<font style="vertical-align: inherit;">
															<font style="vertical-align: inherit;">
																Кристина Бокова
															</font>
														</font><small class="contacts-list-date pull-right">
															<font style="vertical-align: inherit;">
																<font style="vertical-align: inherit;">28.02.2015</font>
															</font>
														</small>
													</span>
													<span class="contacts-list-msg">
														<font style="vertical-align: inherit;">
															<font style="vertical-align: inherit;"> Как дела? </font>
															<font style="vertical-align: inherit;">Я был...</font>
														</font>
													</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
									</ul>
									<!-- /.contatcts-list -->
								</div><!-- /.direct-chat-contacts -->
							</div><!-- /.box-body -->
							<!-- Box-footer-->
							<div class="box-footer">
								<form action="#" method="post">
									<div class="input-group">
										<input type="text" name="message" placeholder="Type Message ..." class="form-control">
										<span class="input-group-btn">
											<button type="button" class="btn btn-primary btn-flat">
												<font style="vertical-align: inherit;">
													<font style="vertical-align: inherit;">послать</font>
												</font>
											</button>
										</span>
									</div>
								</form>
							</div><!-- /.box-footer-->
						</div>
					</div>
					<!--/.direct-chat -->
				</li>
				<!-- Sidebar: style can be found in dropdown.less -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>