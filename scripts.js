function replaceWord() {
	var html = document.getElementById("find-replace").innerHTML;
	var find = document.getElementById("find");
	var findReg = new RegExp(find.value, 'gi');
	var replace = document.getElementById("replace");
	var newHtml = html.replace(findReg, replace.value);
	document.getElementById("find-replace").innerHTML = newHtml;
}

function keyPress(event) {
	var key = event.key;
	var html = document.getElementById("keyboard").innerHTML;
	html = html + key;
	document.getElementById("keyboard").innerHTML = html;
}