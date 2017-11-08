function replaceWord(find, replace) {
	var html = document.getElementById("find");
	var newHtml = html.replace(find, replace);
	document.getElementById("find").innerHTML = newHtml;
}