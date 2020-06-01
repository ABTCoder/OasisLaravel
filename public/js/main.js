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
		
	
	//MENU CATEGORIE PRODOTTI
	$("div.cat > img").on("click", function() {
		$(this).toggleClass("rotate").next().slideToggle(200);
	});
	
	
	//PREVIEW FOTO NEL FORM PRODOTTI
	function readURL(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#p_img').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}

	$("#image").change(function() {
		readURL(this);
	});
	
	//SELEZIONE PRODOTTI STAFF (usato anche per categorie e sottocategorie)
	var productRows = $(".productrow");
	var selectedItem = null;
	productRows.on("click", function() {
		productRows.not(this).removeClass("selected_row");
		$(this).toggleClass("selected_row");
		if($(this).hasClass("selected_row")) selectedItem = $(this).attr("id");
		else selectedItem = null;
	});
	
        
    $("#edit, #delete").on("click", function() {
		if(selectedItem == null ) alert ("Non hai effettuato la selezione!");
		else {
			if($(this).attr("id") == "edit") document.location.href = url + "/" + selectedItem ;
			else { //attr(id) == delete
				if(confirm("Sei sicuro di voler eliminare questa categoria?")) {
					var token = $(this).data("token");					
					$.ajax({
						type: "DELETE",
						url: url,
						data: {'id': selectedItem, '_token' : token, '_method' : 'DELETE'},
						success: function () { //Il return dal controller non funziona con Ajax
							document.location.href = "completemsg/5";
						}
					});
				}
			}
		}
	});
        
	
});
