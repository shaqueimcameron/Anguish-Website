<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

define("TO_ROOT", "../");
define("ASSETS", TO_ROOT . "bin/php/");

$title = "Anguish - Cpanel";

require_once(ASSETS . 'data.php');
require_once(ASSETS . 'StringBuilder.php');

require_once(ASSETS . 'header.php');
require_once(ASSETS . 'footer.php');
require_once(TO_ROOT . 'ipbwi/ipbwi.inc.php');

$isLoggedIn = $ipbwi->member->isLoggedIn();
$userInfo = $ipbwi->member->info();

if(!isLoggedIn) {
	header("Location: ../index.php");
}
if(!in_array($userInfo['member_group_id'], $staff_ranks)) {
	header("Location: ../index.php");
}
if(isset($_POST['submitbutton'])) {
	switch($_POST['submitbutton']) {
		case "Search Ban": 
			$data = "Search ban clicked";
			break;
		case "Search IP Ban": 
			$data = "Search ip ban clicked";
			break;
		case "Ban User": 
			$data = "Ban user clicked";
			break;
		case "IP Ban User": 
			$data = "ip ban user clicked";
			break;
		case "Search Mute": 
			$data = "Search Mute clicked";
			break;
		case "Search IP Mute": 
			$data = "Search ip Mute clicked";
			break;
		case "Ban Mute": 
			$data = "Mute user clicked";
			break;
		case "IP Ban Mute": 
			$data = "ip Mute user clicked";
			break;
	}
} else {
	$data = "Nothing to show!";
}
$header->displayString();

?>
    <div class="body-container" role="main">
          <div class="content-container clear-fix">
            <div class="left-container">
            	<div class="box">
                    <header>
                        <h2>Results</h2>
                    </header>
                    <div id="resultsbody">
                    	<?php echo $data; ?>
                    </div>
				</div>
                <div class="box">
                    <header>
                        <h2 id="title"></h2>
                    </header>
                    <div id="centerbody">
                    	
                    </div>
				</div>

            </div>
			<aside class="right-container">

                <div class="button-links">
                    <a id="bans">Bans</a>
                    <a id="mutes">Mutes</a>
                    <a id="logs">Logs</a>
                </div>
                
	                <div id="banscontainer" style="visibility: hidden;">
	                	<div class="center">
	                		<form method="post">
		                		<p>Username: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Search Ban"></p>
	                			<p>Ip Address: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Search IP Ban"></p>
	                			<p>Username: <input></p>
	                			<p>Reason: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Ban User"></p>
	                			<p>IP Address: <input></p>
	                			<p>Reason: <input></p>
	                			<p><input type="submit" name="submitbutton" value="IP Ban User"></p>
                			</form>
	                	</div>
	                </div>
	                <div id="mutescontainer" style="visibility: hidden;">
	                	<div class="center">
	                		<form method="post">
		                		<p>Username: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Search Mute"></p>
	                			<p>Ip Address: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Search IP Mute"></p>
	                			<p>Username: <input></p>
	                			<p>Reason: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Mute User"></p>
	                			<p>IP Address: <input></p>
	                			<p>Reason: <input></p>
	                			<p><input type="submit" name="submitbutton" value="IP Mute User"></p>
                			</form>
	                	</div>
	                </div>
	                <div id="logscontainer" style="visibility: hidden;">
	                	<div class="center">
	                		<form method="post">
		                		<p>Username: <input></p>
	                			<p><input type="submit" name="submitbutton" value="Search Drop Logs"></p>
	                			<p><input type="submit" name="submitbutton" value="Search Trade Logs"></p>
	                			<p><input type="submit" name="submitbutton" value="Search Duel Logs"></p>
	                			<p><input type="submit" name="submitbutton" value="Search Connection Logs"></p>
                			</form>
	                	</div>
	                </div>
                </form>
            </aside>
		</div>
        <footer class="bottom-footer">
            <p class="copyright">
                <span>Designed by <a href="http://art0fray.deviantart.com" target="_blank">Ray</a></span>
                <br />
                <span>All Rights Reserved. © 2014 | Youserver.com</span>
            </p>
            <p class="links">
                <a href="#">home</a> | <a href="#">community</a> | <a href="#">play now</a> | <a href="#">vote</a> | <a href="#">donations</a></p>
        </footer>


  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script>
	$(document).ready(function() {
		$("#title").html("Bans");
		$("#centerbody").html($("#banscontainer").html());
		$("#bans").click(function() {
			$("#title").html("Bans");
			$("#centerbody").html($("#banscontainer").html());
		});	
		$("#mutes").click(function() {
			$("#title").html("Mutes");
			$("#centerbody").html($("#mutescontainer").html());
		});	
		$("#logs").click(function() {
			$("#title").html("Logs");
			$("#centerbody").html($("#logscontainer").html());
		});	
	});
	
</script>
</body>
</html>