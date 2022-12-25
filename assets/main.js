/*
TITLE : RESPONSIVE NAVIGATION BAR - HTML CSS
MADE BY : FARAZ KHAN (WEB DESIGNER/DEVELOPER)
INSTAGRAM: @faraz_py
*/

$(document).ready(function() {

    $("#submit").click(function() {

        var email = $("#email").val();
        var password = $("#password").val();
        var remember = $("#remember").val();

        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: {
                email: email,
                remember: remember,
                password: password
            },
            cache: false,
            success: function(data) {
                $("#response").html(data);
            },
            error: function(xhr, status, error) {
                $("#response").html(xhr);
                console.error(xhr);
            }
        });

    });

});


$(document).ready(function() {

    $("#regiser").click(function() {

        var register_name = $("#register_name").val();
        var register_password = $("#register_password").val();
        var register_email = $("#register_email").val();

        $.ajax({
            type: "POST",
            url: "php/register.php",
            data: {
                register_name: register_name,
                register_password: register_password,
                register_email: register_email
            },
            cache: false,
            success: function(data) {
                $("#response").html(data);
            },
            error: function(xhr, status, error) {
                $("#response").html(xhr);
                console.error(xhr);
            }
        });

    });

});