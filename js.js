function goOut () {
	var x = document.getElementsByClassName("shadow");
	x[0].classList.add('goOut');

}

function selectItem (sender) {
	var x = document.getElementsByClassName("selected");
	if (sender != x[0])
	{
		x[0].classList.remove('selected');
		sender.classList.add('selected');
	}
}