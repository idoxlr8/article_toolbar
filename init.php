<?php
class article_toolbar extends Plugin {

	private $link;
	private $host;

	function about() {
		return array(0.4,
			"Toolbar for easy access to feed functions",
			"idoxlr8", false);
	}

	function init($host) {
		$this->link = $host->get_link();
		$this->host = $host;

		$host->add_hook($host::HOOK_TOOLBAR_BUTTON, $this);
	}
	///Experimental get users name
/*	function CDM_EXPANDED($link) {



		if (!$user_id) {
			$user_id = $_SESSION["uid"];
		}
			$result = db_query($link, "SELECT CDM_EXPANDED FROM ttrss_user_prefs WHERE owner_uid = $user_id");	
			$value = db_fetch_result($result, 0, "CDM_EXPANDED");
			return $value;
*/	}		

///
	function HOOK_TOOLBAR_BUTTON() {
		require_once dirname(__FILE__) . "/toolbar_body.php";
	}



}
?>
