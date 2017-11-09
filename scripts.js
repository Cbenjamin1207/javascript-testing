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

function shuffle() {
	var html = document.getElementById("shuffle-text").innerHTML;
	var htmlArray = html.split(" ");
	htmlArray.sort(function(a, b){return 0.5 - Math.random()});
	var i;
	var newHtml = "";
	for(i = 0; i < htmlArray.length; i++) {
		newHtml = newHtml + htmlArray[i] + " ";
	}
	document.getElementById("shuffle-text").innerHTML = newHtml;
}