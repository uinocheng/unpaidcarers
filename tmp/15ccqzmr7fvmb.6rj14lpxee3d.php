<script src="ui/js/jquery.min.js">/*using a local copy of jQuery ~~ could alternatively use an online one*/</script>
<script>
    /*
    This code adapted from Jules' xmlhttp code

    Explanation: When the query is sent from the JavaScript to the PHP file, the following happens:

        PHP opens a connection to a MySQL server
        The correct person is found
        An HTML table is created, filled with data, and sent back to the "responseTable" placeholder

    */

    // the function is called when the user changes the value of the form select below
    function showUser(str)
    {
        // if the string == empty then the first option was selected
        // so we set the HTML inside our Div to be empty, then quit the script
        if (str=="") {
            $("#responseTable").html("");
            return;
        }

        // create jQuery AJAX call -- can always use the same pattern as here
        $.ajax({
            type: 'GET',	// needs to be the http method that the PHP code is expecting
            url: "<?= ($BASE) ?>/ajaxEx/user/" + str,		// adding data param for F3
            success: function(response) {	// anonymous function to call if AJAX request successful
                $("#responseTable").html(response);
            },
            failure: function() {	// anonymous function to call if AJAX request unsuccessful
                console.log("ajax failure!");
            },
        });
    }


    /*
    This code adapted from http://www.w3schools.com/php/php_ajax_php.asp
    and then adapted further for use with F3

    Explanation: If there is any text sent from the JavaScript the following happens:

        Find a name matching the characters sent from the JavaScript
        If no match were found, set the response string to "no suggestion"
        If one or more matching names were found, set the response string to all these names
        The response is sent to the "txtHint" placeholder

    */

    // see the annotations above for an explanation of this code, since it's mostly the same
    function showHint(str)
    {
        console.log("showHint(), str is", str);
        if (str.length==0) {
            $("#txtHint").html("");
            return;
        }

        $.ajax({
            type: 'GET',	// needs to be the http method that the PHP code is expecting
            url: "<?= ($BASE) ?>/ajaxEx/hint/" + str,
            success: function(response) {
                $("#txtHint").html(response);
            },
            failure: function() {
                console.log("ajax failure!");
            },
        });
    }

    function showHint2(str)
    {
        console.log("showHint2(), str is", str);
        if (str.length==0) {
            $("#txtHint").html("");
            $("#results").html("");
            return;
        }

        $.ajax({
            type: 'GET',	// needs to be the http method that the PHP code is expecting
            url: "<?= ($BASE) ?>/ajaxEx/hint2/" + str,
            success: function(response) {
                $("#txtHint").html(response);
            },
            failure: function() {
                console.log("ajax failure!");
            },
        });
    }

    function showHintTab(user) {
        $.ajax({
            type: 'GET',	// needs to be the http method that the PHP code is expecting
            url: "<?= ($BASE) ?>/ajaxEx/usertbn/" + user,
            success: function(response) {
                console.log("showHintTab: response is ", response);
                $("#results").html(response);
            },
            failure: function() {
                console.log("ajax failure!");
            },
        });
    }
</script>
