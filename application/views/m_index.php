<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('view_head');?>
</head>
<body>

<div id="container">
	<div class="main">
		<input type="text" value="제<?php echo $num?>회">
		<input type="text" value="길사진 공모전 수상작">
        <div class="inputWrapper">

            <div class="selectedVal">
                <input type="text" value="2000년 1회" readonly="readonly">
            </div>

            <div id="wrapper">
                <div class="inningVal" id="scroller">
                    <ul>
                        <li>2000년 1회</li>
                        <li>2001년 2회</li>
                        <li>2002년 3회</li>
                        <li>2003년 4회</li>
                        <li>2004년 5회</li>
                        <li>2005년 6회</li>
                        <li>2006년 7회</li>
                        <li>2007년 8회</li>
                        <li>2008년 9회</li>
                        <li>2009년 10회</li>
                        <li>2010년 11회</li>
                        <li>2011년 12회</li>
                        <li>2012년 13회</li>
                        <li>2013년 14회</li>
                    </ul>
                </div>
            </div>
            
        </div>


	</div>
</div>

</body>
</html>