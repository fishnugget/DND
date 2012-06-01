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
 $this->set('title_for_layout', 'View Active Users');
 
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
echo $this->Html->script('home');
?>

<?php
if($_SERVER['HTTP_HOST'] == 'www.drinksnextdoor.com' || $_SERVER['HTTP_HOST'] == 'drinksnextdoor.com'){
?>

<?php
}else{

?>

<div id="home-search-top">
	<div id="home-top-mobile"></div>
    <div id="home-top-right">
    	<div id="home-top-headline"></div>
        <div id="home-top-search-box">
        	<form action="" method="post" enctype="multipart/form-data">
            	<input type="text" name="main-search" id="" value="ZIPCODE, NEIGHBORHOOD, OR RESTAURANT" rel="default" default="ZIPCODE, NEIGHBORHOOD, OR RESTAURANT"/><button type="submit">SEARCH</button>
            </form>
        </div>
    </div>
</div>

<div class="home-mod-row">
	<ul id="module-homemash">
    	<li>
        	<div class="row"><div class="vendor-icon"></div></div>
            <div class="row">
            <ul class="stars-rating">
            	<li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
            </ul></div>
        </li>
        <li>
        	<div class="row"><div class="vendor-icon"></div></div>
            <div class="row">
            <ul class="stars-rating">
            	<li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
            </ul></div>
        </li>
        <li>
        	<div class="row"><div class="vendor-icon"></div></div>
            <div class="row">
            <ul class="stars-rating">
            	<li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
            </ul></div>
        </li>
        <li>
        	<div class="row"><div class="vendor-icon"></div></div>
            <div class="row">
            <ul class="stars-rating">
            	<li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
            </ul></div>
        </li>
    </div>
    
    <div class="home-mod-row noborder margin-tb-20">
        <div class="half">
			<div class="text-headline">WHAT EVERYONE'S SAYING</div>
            <div class="text-short-body">Vestibulum iaculis malesuada cursus. Suspendisse fermentum semper urna, sed bibendum nisi gravida vitae. Praesent sodales metus in nisl gravida eleifend. Pellentesque mattis fermentum odio, at dictum nisi pulvinar sed. Vivamus at dignissim diam. Nam semper, velit nec hendrerit pulvinar, velit tellus vehicula dolor, nec lacinia ante urna facilisis nisl. Curabitur dapibus volutpat fringilla.</div>            
        </div>
        	<div class="text-headline">TWITTER FEED</div>
            <div class="text-short-body">Integer vitae fermentum est. Nam ultricies, magna sit amet vehicula hendrerit, ligula urna tempus risus, ac gravida urna est id metus. Maecenas tincidunt placerat elit id hendrerit. Curabitur ultricies lorem metus, eu vehicula felis. Integer massa massa, dignissim vel ullamcorper at, fringilla eget leo</div>
        </div>
<?php } ?>


