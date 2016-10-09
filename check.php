

<html>
    <head>
        <script>
       function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
} 
       </script>
    </head>
    <form action="?action=check" method="post">
        <input type="text" name="myidd" maxlength="10" pattern="\d{5}" id="extra7" onkeypress="return isNumber(event)" title="Please enter exactly 5 digits" />
        <input type="submit" name="submit" value="Check"/>
    </form>
    <?php
        if(isset($_POST["myidd"]))
        {
            $myidd = $_POST["myidd"];
            echo $myidd;
            
        }




?>
    
</html>

      