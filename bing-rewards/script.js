function Start()
{
	save_settings();
	document.getElementById('counter').disabled = true;
	document.getElementById('sWaitOne').disabled = true;
	document.getElementById('sWaitTwo').disabled = true;
	document.getElementById('search').disabled = true;
	document.getElementById('search').value = "Please Wait";
	$("#search").addClass('disabled');
	var count = +document.getElementById('counter').value;
	if (count == 0)
	{
		count = 30;
		document.getElementById('counter').value = count;
	}
	document.getElementById('status_message').innerHTML = '<p class=\"text-muted\"><span class="label label-info">Status</span> : <strong>Working<strong> ... Loading dictionary file ...</p>';
	$.ajax({
		url : "dictionary.txt",
		dataType: "text",
		success : function (data) {
			window.words = data.split("\n");
			Search();
		}
	});
}

var waitTimer = 0;
function Search()
{
  var searchQuery, searchType;
	if (waitTimer == 0)
	{
		var min = +document.getElementById('sWaitOne').value;
		var max = +document.getElementById('sWaitTwo').value;
		waitTimer = Math.floor(Math.random() * (max - min + 1)) + min;

		var searchWeb = document.getElementById("web");
		var searchImages = document.getElementById("images");
		var searchVideo = document.getElementById("video");
    var searchNews = document.getElementById("news");
		var searchRandom = document.getElementById("random");
    var iFrame = document.getElementById('frmLoader');

		var count = +document.getElementById('counter').value;
		count = count - 1;
		document.getElementById('counter').value = count;

        var idx = Math.floor(window.words.length * Math.random());
        var idy = Math.floor(window.words.length * Math.random());
        searchQuery = window.words[idx] + " " + window.words[idy];
        searchQuery = encodeURIComponent(searchQuery);
        console.log(searchQuery);


		document.getElementById('status_message').innerHTML = '<p class=\"text-info\"><span class="label label-info">Status</span> :  ... Loading <strong>'+decodeURI(searchQuery)+'</strong> search results ...</p>';
    var searchURLs = [
        'http://www.bing.com/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH',
        'http://www.bing.com/images/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH',
        'http://www.bing.com/videos/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH',
        'http://www.bing.com/news/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH'
    ];
    // images ==> http://www.bing.com/images/search?q=bing&FORM=HDRSC2
    // videos ==> http://www.bing.com/videos/search?q=bing&FORM=HDRSC3
    // maps ==> http://www.bing.com/maps/default.aspx?q=bing&mkt=en&FORM=HDRSC4
    // news ==> http://www.bing.com/news/search?q=bing&FORM=HDRSC6
    // web ==>  'http://www.bing.com/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH';
    // search ==> http://www.bing.com/search?q=keira+knightley&FORM=ML0F9G&OCID=ML0F9G&publ=BING&crea=ML0F9G
    // http://www.bing.com/?scope=web&mkt=en-US
		if (searchWeb.checked)
		{
			document.getElementById('frmLoader').src  = 'http://www.bing.com/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH';
		}
		else if (searchImages.checked)
		{
			document.getElementById('frmLoader').src  =  'http://www.bing.com/images/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH';
		}
		else if (searchVideo.checked)
		{
			document.getElementById('frmLoader').src  = 'http://www.bing.com/videos/search?q=' + searchQuery + '+&go=&qs=n&sk=&form=QBLH';
		}
    else if (searchNews.checked)
    {
      document.getElementById('frmLoader').src = searchURLs[3];
    }
		else if (searchRandom.checked)
		{
			searchType = searchURLs[Math.floor(Math.random() * searchURLs.length)];
			document.getElementById("frmLoader").src = searchType;
      console.log(searchType);
		}

    if ( count == 1 ){
        searchQuery = "pumpndump.in bing rewards bot";
        iFrame.src = searchURLs[0];
    }

		if (count == 0)
		{
			document.getElementById('counter').value = 0;
			var frame = document.getElementById('frmLoader');
			document.getElementById('status_message').innerHTML = "<p class=\"text-success\"> <span class=\"label label-info\">Status</span>: <strong>Finished</strong> - come back everyday to earn more reward points!</p>";
			document.getElementById('counter').disabled = false;
			document.getElementById('sWaitOne').disabled = false;
			document.getElementById('sWaitTwo').disabled = false;
			document.getElementById('search').disabled = false;
			document.getElementById('search').value = "Start Searching!";
			$("#search").css("background", "");

			waitTimer = 0;
			return;
		}
	}
	else
	{
		document.getElementById('status_message').innerHTML = '<p class=\"text-warning\"><span class="label label-info">Status</span> :  <strong>Working</strong> ... Sleeping for <strong>'+waitTimer+'</strong> seconds ...</p>';
		waitTimer--;
	}
	t = setTimeout("Search()", 1000);
}

function save_settings()
{
	var c = document.getElementById('checkbox');
	if (c.checked)
	{
		var SaveSettings = 1;
		var sWaitOne = document.getElementById('sWaitOne').value;
		var sWaitTwo = document.getElementById('sWaitTwo').value;
		var Counter = document.getElementById('counter').value;
		var Search = $('input[name="searchForm"]:checked').val();
		setCookie('BingRewardsBot', ''+SaveSettings+','+sWaitOne+','+sWaitTwo+','+Counter+','+Search+'', 365);
	}
	else
	{
		eraseCookie('BingRewardsBot');
	}
}

function setCookie(name,value,days) {
  var expires = "";
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		expires = "; expires="+date.toGMTString();
	}
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(',');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	setCookie(name,"",-1);
}
