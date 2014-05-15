toggle = 1;
function resizeMe(object){ 
	var obj = document.getElementById("minirss");
	var expandlink = document.getElementById("expand");
	if (toggle == 1){
		toggle = 0;
		if (BrowserDetect.browser == "Firefox"){
		ifrmHeight = minirssfeeds.document.body.scrollHeight;
		contentHeight = document.body.scrollHeight;
		 obj.style.height = ifrmHeight + 'px';
		} else if (BrowserDetect.browser == "Explorer" && BrowserDetect.version == "7") {
		ifrmHeight = minirssfeeds.document.body.scrollHeight;
		contentHeight = document.body.scrollHeight;
		 obj.style.height = ifrmHeight + 'px';
		} else if (BrowserDetect.browser == "Explorer" && BrowserDetect.version != "7") {
		ifrmHeight = minirssfeeds.document.body.scrollHeight;
		contentHeight = document.body.scrollHeight;
		 obj.style.height = (ifrmHeight + (ifrmHeight/4) + (ifrmHeight/50)) + 'px';
		}
		expandlink.innerHTML = 'COLLAPSE';
	} else if (toggle == 0){
		toggle = 1;
		obj.style.height = '';
		expandlink.innerHTML = 'EXPAND';
	}
} 
function resizeMe2(obj){ 
	ifrmHeight = miniweather.document.body.scrollHeight;
	contentHeight = document.body.scrollHeight;
	if (window.BrowserDetect) {
		if (BrowserDetect.browser == "Firefox"){
			obj.style.height = ifrmHeight + 'px';
		} else if (BrowserDetect.browser == "Explorer" && BrowserDetect.version == "7") {
		 	obj.style.height = ifrmHeight + 'px';
		} else if (BrowserDetect.browser == "Explorer" && BrowserDetect.version != "7") {
		 	obj.style.height = (ifrmHeight + (ifrmHeight/4) + (ifrmHeight/50)) + 'px';
		}
	}
}
