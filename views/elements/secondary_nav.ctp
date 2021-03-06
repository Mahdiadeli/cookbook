<div id="secondary_nav">
<ul class="navigation">
		<?php
		if ($session->read('Auth.User.id')) {
			echo '<li>' . $html->link(sprintf(__('Logged in as %1$s', true), $session->read('Auth.User.username')), '#', array('id' => 'loggedInAs')) . '</li>';
			echo '<li>' . $html->link(__('Logout', true), array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'logout')) . '</li>';
			if ($session->read('Auth.User.Level') === ADMIN) {
				echo '<li>' . $html->link('Admin', array('plugin' => null, 'admin' => true, 'controller' => 'revisions', 'action' => 'pending')) . '</li>';
			}
		} else {
			echo '<li>' . $html->link(__('Login', true), array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'login')) . '</li>';
		}
		?>
			<li><?php
			echo $html->link(__('Top Contributors', true), array('admin' => false, 'plugin' => null, 'controller' => 'nodes', 'action' => 'stats', '#' => $this->params['lang']));
		?></li>
		<li><?php
			echo $html->link(__('Todo', true), array('admin' => false, 'plugin' => null, 'controller' => 'nodes', 'action' => 'todo'));
		?></li>
		<li><a href="http://cakephp.org/"><?php __('About CakePHP') ?></a></li>
		<li><a href="http://cakefoundation.org/pages/donations"><?php __('Donate') ?></a></li>
	</ul>
</div>