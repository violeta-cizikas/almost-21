
let bananaRefresh = document.getElementsByClassName('bananaRefresh')[0]; 

function onclickBananaRefresh() {	
	bananaRefresh.className += " bananaRefreshRotating";
	setTimeout(function() {
		window.location.reload();
	}, 100);
}