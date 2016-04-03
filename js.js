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

function getData () {
    $.ajax({
        url: 'ajax/getData.php?id=' + getIdSelection(),
        success: function(data){
            var data = JSON.parse(data);
            var z = document.getElementsByClassName("text_box");
            z[0].textContent = data['text'];
            var y = document.getElementsByClassName("slide1");
            y[0].firstChild.src=data['pic1'];
            y = document.getElementsByClassName("slide2");
            y[0].firstChild.src=data['pic2'];
            y = document.getElementsByClassName("slide3");
            y[0].firstChild.src=data['pic3'];
            y = document.getElementsByClassName("slide4");
            y[0].firstChild.src=data['videosrc'];

            y = document.getElementsByClassName("mini");
            y[0].src=data['pic1'];
            y[1].src=data['pic2'];
            y[2].src=data['pic3'];
            y[3].src="images/youtube-1.png";

            y = document.getElementsByClassName("header");
            y[0].textContent = data ['name'];
        }
    });
}

function selectItem (sender) {
	var x = document.getElementsByClassName("selected");
	if (sender != x[0])
	{
		x[0].classList.remove('selected');
		sender.classList.add('selected');
        getData();
	}
}

function getOverHere () {
	var x = document.getElementsByClassName("goOut");
	x[0].classList.remove('goOut');
	var y = document.getElementsByClassName("visible");
	y[0].classList.remove('visible');
}

function getContent(){
    $.ajax({
        url: 'ajax/getData.php?id=' + getIdSelection(),
        success: function(data){
            var data = JSON.parse(data);
        }
    });
}

function getIdSelection () {
    var x = document.getElementsByClassName("selected");
    return x[0].parentNode.id;
}