$(document).ready(function() {
	// When the user scrolls the page, execute myFunction
	window.onscroll = function() {myFunction()};
    // When the window is resized, execute changeHeight
	window.onresize = function() {changeHeight()};

	// Get the navbar
	var navbar = $("#topnav");
	var main_content = $("#main");

	// Get the offset position of the navbar
	var sticky = navbar.offset().top;
    // Get the height of the navbar
    var height = navbar.outerHeight();

	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
		if (window.pageYOffset >= sticky) {
			if (main_content!==null) main_content.css("padding", height+"px 0 0 0");
			navbar.addClass("sticky");
		} else {
			navbar.removeClass("sticky");
		}
	}
    // Update the height of the navbar and the padding of the main box
    function changeHeight(){
        height = navbar.outerHeight();
        myFunction();
    }
		
	
	//CATEGORIE PRODOTTI
	/*
	var cat = document.getElementsByClassName("cat");
       
        var i;
	// Show or hide the subcat when a cat is clicked
        for(i = 0; i < cat.length; i++) {
            cat[i].children[1].addEventListener("click",function() {
                this.parentElement.classList.toggle("rotate");
                this.parentElement.children[2].classList.toggle("show");
            });
        }
		*/
		
	$("div.cat > img").on("click", function() {
		$(this).toggleClass("rotate").next().slideToggle(200);
	});
	
	//SELEZIONE PRODOTTI STAFF
	var productRows = $(".productrow");
	var selectedProd = null;
	productRows.on("click", function() {
		productRows.not(this).removeClass("selected_row");
		$(this).toggleClass("selected_row");
		if($(this).hasClass("selected_row")) selectedProd = $(this).attr("id");
		else selectedProd = null;
	});
	
	$("#edit").on("click", function() {
		if(selectedProd == null ) alert ("Non hai selezionato nessun prodotto!");
		else  document.location.href = "editproduct/" + selectedProd ;
	});
	
});