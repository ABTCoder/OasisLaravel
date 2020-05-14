/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function() {
	var cat = document.getElementsByClassName("cat");
       
        
        var i;
	// Show or hide the subcat when a cat is clicked
        for(i = 0; i < cat.length; i++) {
            cat[i].children[1].addEventListener("click",function() {
                this.parentElement.classList.toggle("rotate");
                this.parentElement.children[2].classList.toggle("show");
            });
        }



};

