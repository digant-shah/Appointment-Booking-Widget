function isMobile() {
	
	var index = navigator.appVersion.indexOf("Mobile");
	return (index > -1);
}

function setStyleMobile() {
	
	document.write('<link rel="stylesheet" href="mobile.css" />\n');
}

function makeFontTripleSize() {
	document.write("<style>body { font-size: 3em; } </style>");
}
