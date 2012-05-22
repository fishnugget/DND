<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<!--
<a href="http://cakephp.org/changelogs/<?php echo Configure::version(); ?>"><?php echo __d('cake_dev', 'Read the changelog'); ?> </a>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
-->


<h3><?php echo __d('cake_dev', 'Editing this Page'); ?></h3>
<p>
<?php
echo __d('cake_dev', 'To change the content of this page, create: APP/View/Pages/home.ctp.<br />
To change its layout, create: APP/View/Layouts/default.ctp.<br />
You can also add some CSS styles for your pages at: APP/webroot/css.');
?>
</p>

<h3><?php echo __d('cake_dev', 'Getting Started'); ?></h3>
<p>
	<?php
		echo $this->Html->link(
			sprintf('<strong>%s</strong> %s', __d('cake_dev', 'New'), __d('cake_dev', 'CakePHP 2.0 Docs')),
			'http://book.cakephp.org/2.0/en/',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>
<p>
	<?php
		echo $this->Html->link(
			__d('cake_dev', 'The 15 min Blog Tutorial'),
			'http://book.cakephp.org/2.0/en/tutorials-and-examples/blog/blog.html',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>

<h3><?php echo __d('cake_dev', 'More about Cake'); ?></h3>
<p>
<?php echo __d('cake_dev', 'CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.'); ?>
</p>
<p>
<?php echo __d('cake_dev', 'Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.'); ?>
</p>

<ul>
	<li><a href="http://cakefoundation.org/"><?php echo __d('cake_dev', 'Cake Software Foundation'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Promoting development related to CakePHP'); ?></li></ul></li>
	<li><a href="http://www.cakephp.org"><?php echo __d('cake_dev', 'CakePHP'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'The Rapid Development Framework'); ?></li></ul></li>
	<li><a href="http://book.cakephp.org"><?php echo __d('cake_dev', 'CakePHP Documentation'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Your Rapid Development Cookbook'); ?></li></ul></li>
	<li><a href="http://api20.cakephp.org"><?php echo __d('cake_dev', 'CakePHP API'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Quick Reference'); ?></li></ul></li>
	<li><a href="http://bakery.cakephp.org"><?php echo __d('cake_dev', 'The Bakery'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Everything CakePHP'); ?></li></ul></li>
	<li><a href="http://live.cakephp.org"><?php echo __d('cake_dev', 'The Show'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'The Show is a live and archived internet radio broadcast CakePHP-related topics and answer questions live via IRC, Skype, and telephone.'); ?></li></ul></li>
	<li><a href="http://groups.google.com/group/cake-php"><?php echo __d('cake_dev', 'CakePHP Google Group'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Community mailing list'); ?></li></ul></li>
	<li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
	<ul><li><?php echo __d('cake_dev', 'Live chat about CakePHP'); ?></li></ul></li>
	<li><a href="http://github.com/cakephp/"><?php echo __d('cake_dev', 'CakePHP Code'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'For the Development of CakePHP Git repository, Downloads'); ?></li></ul></li>
	<li><a href="http://cakephp.lighthouseapp.com/"><?php echo __d('cake_dev', 'CakePHP Lighthouse'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'CakePHP Tickets, Wiki pages, Roadmap'); ?></li></ul></li>
</ul>
