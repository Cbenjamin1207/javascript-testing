function replaceWord() {
	var html = document.getElementById("find-replace").innerHTML;
	var find = document.getElementById("find");
	var replace = document.getElementById("replace");
	var newHtml = html.replace(find.value, replace.value);
	document.getElementById("find-replace").innerHTML = newHtml;
}