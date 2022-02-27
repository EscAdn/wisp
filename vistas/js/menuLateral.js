	let sidebar = document.querySelector(".sidebar");
	let closeBtn = document.querySelector("#btn");
	let searchBtn = document.querySelector(".bx-search");
	let contenido = document.querySelector('.contenido');

	closeBtn.addEventListener("click", ()=>{
	  	sidebar.classList.toggle("open");
	    menuBtnChange();//calling the function(optional)
	});

	// searchBtn.addEventListener("click", ()=>{
	//     sidebar.classList.toggle("open");
	//     menuBtnChange();
	// });

	// following are the code to change sidebar button(optional)
	function menuBtnChange() {
		if(sidebar.classList.contains("open")){
			closeBtn.classList.replace("fa-chevron-right", "fa-chevron-left");//replacing the iocns class
		}else {
			closeBtn.classList.replace("fa-chevron-left","fa-chevron-right");//replacing the iocns class
		}
	}

	const root = document.querySelector(".contenido");