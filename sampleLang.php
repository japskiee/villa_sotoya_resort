<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Date Picker</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <style>
            form{
                max-width: 600px;
                margin: 100px auto;
            }
        </style>
    </head>
    <body>


        <form>
            <h4>Bus ticket reservation</h4>
            <input type="text" id="depart" placeholder="Depart">
            <input type="text" id="return" placeholder="Return">
            <input type="submit" value="Search">
        </form>

     <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {


                $("#depart").datepicker({
                    showAnim: 'drop',
                    numberOfMonth: 1,
                    dateFormat: 'dd-mm-yy',
                    onClose: function (selectedDate) {
                        $("#return").datepicker("option", "minDate", selectedDate);
                    }
                });



                $("#return").datepicker({
                    showAnim: 'drop',
                    numberOfMonth: 1,
                    dateFormat: 'dd-mm-yy',
                    onClose: function (selectedDate) {
                        $("#depart").datepicker("option", "maxDate", selectedDate);
                    }
                });

            });


        </script>
    </body>
</html>