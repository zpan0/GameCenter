$(document).ready(function(){

    function getCookie(name) {
		var dc = document.cookie;
		var prefix = name + "=";
		var begin = dc.indexOf("; " + prefix);
		if (begin == -1) {
			begin = dc.indexOf(prefix);
			if (begin != 0) return null;
		}
		else
		{
			begin += 2;
			var end = document.cookie.indexOf(";", begin);
			if (end == -1) {
			end = dc.length;
			}
		}
		return decodeURI(dc.substring(begin + prefix.length, end));
	} 

	function blockLoginSignup() {
		var myCookie = getCookie("userid");

		if (myCookie == null) {
			document.getElementById('play').href='regularPlay.php'; 
			document.getElementById('logout').style.display = 'none'; 
		}
		else {
			document.getElementById('login').style.display = 'none';
			document.getElementById('signup').style.display = 'none';
		}
	}
    
    // if user has already logged, block login/signup buttons
    blockLoginSignup();
 });