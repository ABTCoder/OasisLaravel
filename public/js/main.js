$(document).ready(function () {
    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
        myFunction()
    };
    // When the window is resized, execute changeHeight
    window.onresize = function () {
        changeHeight()
    };

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
            if (main_content !== null)
                main_content.css("padding", height + "px 0 0 0");
            navbar.addClass("sticky");
        } else {
            navbar.removeClass("sticky");
        }
    }
    // Update the height of the navbar and the padding of the main box
    function changeHeight() {
        height = navbar.outerHeight();
        myFunction();
    }



    //MENU CATEGORIE PRODOTTI
    $("div.cat > img").on("click", function () {
        $(this).toggleClass("rotate").next().slideToggle(200);
    });


    //PREVIEW FOTO NEL FORM PRODOTTI
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#p_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#immagine").change(function () {
        readURL(this);
    });

    //SELEZIONE PRODOTTI STAFF (usato anche per categorie e sottocategorie)
    var productRows = $(".productrow");
    var selectedItem = null;
    productRows.on("click", function () {
        productRows.not(this).removeClass("selected_row");
        $(this).toggleClass("selected_row");
        if ($(this).hasClass("selected_row"))
            selectedItem = $(this).attr("id");
        else
            selectedItem = null;
    });


    $("#edit, #delete").on("click", function () {
        if (selectedItem == null)
            alert("Non hai effettuato la selezione!");
        else {
            if ($(this).attr("id") == "edit")
                document.location.href = url + "/" + selectedItem;
            else { //attr(id) == delete
                if (confirm("Sei sicuro di voler procedere con l'eliminazione?")) { {
                    var token = $(this).data("token");
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        data: {'id': selectedItem, '_token': token, '_method': 'DELETE'},
                        success: function () { //Il return dal controller non funziona con Ajax
                            document.location.href = msgUrl;
                        }
                    });
                }
            }
        }
    });
    //VALIDAZIONE FORM IN JSON
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
		if( formElementId === 'password_confirmation') formElementId = "password";
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addproduct,#adduser").on('click', function (event) //NON FUNZIONA!
    {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });

    function getErrorHtml(elemErrors) {
        if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
            return;
        var out = '';
        for (var i = 0; i < elemErrors.length; i++) {
            out += '<div class="errormsg" id="error_msg">' + elemErrors[i] + '</div>';
        }
        return out;
    }

    function doElemValidation(id, actionUrl, formId) {

        var formElems;

        function addFormToken() {
            var tokenVal = $("#" + formId + " input[name=_token]").val();
            formElems.append('_token', tokenVal);
        }

        function sendAjaxReq() {
            $.ajax({
                type: method,
                url: actionUrl,
                data: formElems,
                dataType: "json",
                error: function (data) {
                    if (data.status === 422) {
                        var errMsgs = JSON.parse(data.responseText);
                        $("#" + id).next('.errormsg').html(' ');
                        $("#" + id).next('.errormsg').html(getErrorHtml(errMsgs[id]));
                    }
                },
                contentType: false,
                processData: false
            });
        }

        var elem = $("#" + formId + " :input[name=" + id + "]");
        var password_conf_val = $("#" + formId + " :input[name='password_confirmation']").val();

        if (elem.attr('type') === 'file') {
            // elemento di input type=file valorizzato
            if (elem.val() !== '') {
                inputVal = elem.get(0).files[0];
            } else {
                inputVal = new File([""], ""); //rappresenta la mappatura di un file all'interno della form
            } //se l'utente non mette il nome del file si genera un file senza contenuto e nome
        } else {
            // elemento di input type != file
            inputVal = elem.val();
        }
        formElems = new FormData();
        formElems.append(id, inputVal);
        if (id === 'password') {
            formElems.append('password_confirmation', password_conf_val);
        }
        addFormToken();
        sendAjaxReq();

    }


    function doFormValidation(actionUrl, formId) {

        var form = new FormData(document.getElementById(formId));
        $.ajax({
            type: method,
            url: actionUrl,
            data: form,
            dataType: "json",
            error: function (data) {
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);
                    $.each(errMsgs, function (id) {
                        $("#" + id).next('.errormsg').html(' ');
                        $("#" + id).next('.errormsg').html(getErrorHtml(errMsgs[id]));
                    });
                }
            },
            success: function (data) {
                window.location.replace(data.redirect);
            },
            contentType: false,
            processData: false
        });
    }


    //SELEZIONE STAFF ADMIN
    $("#loadstaff").on('click', function () {
        window.location.href = "/~grp_07/laraProject/public/admin/editstaff/" + $("#userlist option:selected").val();
    });

});
