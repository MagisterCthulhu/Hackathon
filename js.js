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
Share = {
    vkontakte: function(purl, ptitle, pimg, text) {
        url  = 'http://vkontakte.ru/share.php?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&image='       + encodeURIComponent(pimg);
        url += '&noparse=true';
        Share.popup(url);
    },
    odnoklassniki: function(purl, text) {
        url  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
        url += '&st.comments=' + encodeURIComponent(text);
        url += '&st._surl='    + encodeURIComponent(purl);
        Share.popup(url);
    },
    facebook: function(purl, ptitle, pimg, text) {
        url  = 'http://www.facebook.com/sharer.php?s=100';
        url += '&p[title]='     + encodeURIComponent(ptitle);
        url += '&p[summary]='   + encodeURIComponent(text);
        url += '&p[url]='       + encodeURIComponent(purl);
        url += '&p[images][0]=' + encodeURIComponent(pimg);
        Share.popup(url);
    },
    twitter: function(purl, ptitle) {
        url  = 'http://twitter.com/share?';
        url += 'text='      + encodeURIComponent(ptitle);
        url += '&url='      + encodeURIComponent(purl);
        url += '&counturl=' + encodeURIComponent(purl);
        Share.popup(url);
    },
    mailru: function(purl, ptitle, pimg, text) {
        url  = 'http://connect.mail.ru/share?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&imageurl='    + encodeURIComponent(pimg);
        Share.popup(url)
    },

    popup: function(url) {
        window.open(url,'','toolbar=0,status=0,width=626,height=436');
    }
};