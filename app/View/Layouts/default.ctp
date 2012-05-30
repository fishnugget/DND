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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Drinks Next Door');

$this->set('title_for_layout','Good ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('global');
		
		echo $this->Html->Script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		echo $this->Html->script('global');
		

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
    <link href='http://fonts.googleapis.com/css?family=Exo:400,600' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<a href="/"><div id="main-logo"></div></a>
            <div class="row">
                <div id="social-bar">
                	<ul>
                    	<a href="javascript:;"><li class="facebook"></li></a>
                        <a href="javascript:;"><li class="twitter"></li></a>
                        <a href="javascript:;"><li class="rss"></li></a>
                        <a href="javascript:;"><li class="google"></li></a>
                    </ul>
                </div>
                <div id="search-site">
                	<form method="post" action="" enctype="multipart/form-data">
                    	<input type="text" name"search-site" rel="default" default="SEARCH" value="SEARCH"/>
                    </form>
                </div>
            </div>
            <div id="main-nav">
            	<ul id="main-nav-links">
                	<li class="left">
                    	<a href="javascript:;">
                    	<div class="headline">HOME</div>
                    	<div class="subhead">DRINKS NEXT DOOR</div>
                        </a>
                    </li>
                    <li class="left">
                    	<a href="javascript:;">
                    	<div class="headline">ABOUT</div>
                    	<div class="subhead">HOW IT WORKS</div>
                        </a>
                    </li>
                    <li class="left">
                    	<a href="javascript:;">
                    	<div class="headline">DEALS</div>
                    	<div class="subhead">FEATURED DEALS</div>
                        </a>
                    </li>
                    <li class="right">
                    	<a href="javascript:;">
                    	<div class="headline">HOODS</div>
                    	<div class="subhead">WHERE TO GO</div>
                        </a>
                    </li>
                    <li class="right">
                    	<a href="javascript:;">
                    	<div class="headline">SPOTS</div>
                    	<div class="subhead">DRINKS NEXT DOOR</div>
                        </a>
                    </li>
                    <li class="right">
                    	<a href="javascript:;">
                    	<div class="headline">STUFF</div>
                    	<div class="subhead">DRINKS NEXT DOOR</div>
                        </a>
                    </li>
                </ul>
            </div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
            
            <div class="home-mod-row noborder margin-tb-20">
        		<div class="quarter left">
                	<div class="footer-social-icon facebook left"></div>
                    <div class="footer-social-copy left">facebook.com/DrinksNextDoor</div>
                </div>
                <div class="quarter left">
                	<div class="footer-social-icon twitter left"></div>
                    <div class="footer-social-copy left">Follow Us @DrinksNextDoor</div>
                </div>
                <div class="quarter left">
                	<div class="footer-social-icon email left"></div>
                    <div class="footer-social-copy left">hello@drinksnextdoor.com</div>
                </div>
                <div class="quarter left">
                	<div class="footer-social-icon copyright left"></div>
                    <div class="footer-social-copy left">Copyright 2012, Drinks Next Door</div>
                </div>
        	</div>
		
        </div>
		
        <!-- 
        <div id="footer">
        
			<?php //echo $this->Html->link(
					//$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					//'http://www.cakephp.org/',
					//array('target' => '_blank', 'escape' => false)
				//	);
			?>
		</div>
        -->
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
