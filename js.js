function goOut () {
	var x = document.getElementsByClassName("upper");
	x[0].classList.add('goOut');
	var y = document.getElementsByClassName("arrowBack");
	window.setTimeout(function(){
		y[0].classList.add('visible_first');
		window.setTimeout(function(){
			y[0].classList.remove('visible_first');
			y[0].classList.add('visible');
		}, 1000);
	}, 1000)
}

function selectItem (sender) {
	var x = document.getElementsByClassName("selected");
	if (sender != x[0])
	{
		x[0].classList.remove('selected');
		sender.classList.add('selected');
	}
}

function getOverHere () {
	var x = document.getElementsByClassName("goOut");
	x[0].classList.remove('goOut');
	var y = document.getElementsByClassName("visible");
	y[0].classList.remove('visible');
}

function getIdSelection () {
    var x = document.getElementsByClassName("selected");
    return x[0].parentNode.id;
}