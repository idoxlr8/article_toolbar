function example(value) {
	alert("Value saved: " + value);
}

		function toggle_cdm_expanded() {
				notify_progress("Loading, please wait...");

				var value = getInitParam("cdm_expanded") ? "false" : "true";
				var query = "?op=rpc&method=setpref&key=CDM_EXPANDED&value=" + value;

				new Ajax.Request("backend.php",	{
					parameters: query,
					onComplete: function(transport) {
						setInitParam("cdm_expanded", !getInitParam("cdm_expanded"));
						viewCurrentFeed();
					} });
		};