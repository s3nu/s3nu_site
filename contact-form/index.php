<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Send Anything & Everything <br />';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = 'Hold No Bounds';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	
	<title>Link Up | Anahit Sarao</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Engineer/consolidated-4.css?rwcache=585658454" />
		
	    
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
	<div class="hero" id="hero">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="https://anahitsaraosite.herokuapp.com/"><img src="../rw_common/images/IMG_3148-3.JPG" width="2502" height="3000" alt="Anahit Sarao"/> <span class="navbar-title">Anahit Sarao</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../downloads/" rel="" class="nav-link">Treasure</a></li><li class="nav-item"><a href="../sitemap/" rel="" class="nav-link">s3nu</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Link Up</a></li></ul>
			</div>
		</nav>

		<div class="hero-content container d-flex align-items-center" id="hero">
			<div class="">
				<h1 class="hero-title">Anahit Sarao</h1>
				<p class="hero-slogan display-4">S/corp</p>
			</div>
			<div class="hero-background" title="Anahit Sarao"></div>
			<div class="hero-overlay"></div>
		</div>

	</div>

    <div class="content">
        <section class="main" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 main">
                        
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>One Liner</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Words</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<label>Files</label> <br />
		<input type="file" name="element4" /><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Retry" />
		<input class="form-input-button" type="submit" name="submitButton" value="Have No Fear" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

                    </div>

                    <div class="col-sm-12 sidebar">
                        <h2></h2>
                         
                    </div>
                </div>
            </div>
        </section>
    </div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 footer-content">
					<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../downloads/" rel="" class="nav-link">Treasure</a></li><li class="nav-item"><a href="../sitemap/" rel="" class="nav-link">s3nu</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Link Up</a></li></ul>
					&copy; 2019 Anahit Sarao
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../rw_common/themes/Engineer/js/main.js?rwcache=585658454"></script>
<div id="rapidweaver_privacy_message">
    <p><span style="font:13px .AppleSystemUIFont; color:#000000;">Im not taking anything from you.</span></p>
    <button id="rapidweaver_privacy_message_dismiss_button">Trust</button>
</div>

<script src="../rw_common/assets/message.js?rwcache=585658454"></script>
</body>

</html>