function whereAmI() {
	var location = window.location.href.match(/([^/])+/g);
	return location[location.length - 1];
}
function setActiveMenuItem(active_li) {
	var mainMenuLi = document.getElementById("mainNav").getElementsByTagName("li");
	mainMenuLi[active_li].getElementsByTagName("a")[0].style.color = "#A2CD3A";
}

window.onload = function () {
	var productsBut = document.getElementById("products");
	var subMenu = document.getElementById("subMenu");
	
	//Sub Menu:
	productsBut.onmouseover = function(){
		subMenu.style.display = "block";
	};
	productsBut.onmouseout = function(){
		subMenu.style.display = "none";
	};
	
	//Set Active Menu:
	if(whereAmI() == "%D0%B7%D0%B0-%D0%BD%D0%B0%D1%81") {
		setActiveMenuItem(0);
	} else if(whereAmI() == "%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82%D0%B8") {
		setActiveMenuItem(1);
	} else if(whereAmI() == "%D0%BA%D0%B0%D0%B1%D0%B5%D0%BB%D0%B8-%D0%B8-%D0%BA%D0%B0%D0%B1%D0%B5%D0%BB%D0%BD%D0%B0-%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0") {
		setActiveMenuItem(1);
		setActiveMenuItem(2);
	} else if(whereAmI() == "%D0%BE%D1%81%D0%B2%D0%B5%D1%82%D0%B8%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D1%82%D0%B5%D0%BB%D0%B0") {
		setActiveMenuItem(1);
		setActiveMenuItem(3);
	} else if(whereAmI() == "%D0%BA%D0%BB%D1%8E%D1%87%D0%BE%D0%B2%D0%B5-%D0%B8-%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B8") {
		setActiveMenuItem(1);
		setActiveMenuItem(4);
	} else if(whereAmI() == "%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B8") {
		setActiveMenuItem(6);
	}
	
	//Top Img fix:
	document.getElementById("insideTopImg").style.marginLeft = (document.body.clientWidth/2)*(-1) + "px";
};