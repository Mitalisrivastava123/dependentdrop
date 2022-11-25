<?php

include "./config.php";
$json1 = json_encode($products);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        #table1 tr td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                <form>
                    <h3 class="text-center">Form</h3>
                    <select class="form-control" name="electro" id="country">
                        <option selected="selected">Select Values</option>
                        <?php
                        foreach ($products as $k => $v) {
                            // echo $k;
                            echo "<option value='$k'>$k</option>";
                        }
                        ?>
                    </select>

                    <select class="form-control mt-5" name="elctro1" id="state">
                        <option value="">select option</option>
                    </select>

                    <select class="form-control mt-5" name="elctro2" id="city">
                        <option value="">select option</option>
                    </select>
                    <table id="table1">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Brand</th>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./script.js"></script>


    <script>
       
        $("select[name='electro']").change(function() {
            var stateID = $(this).val();
            // alert(stateID);
                $.ajax({
                    url: "config.php",
                    type: 'POST',
                   data:"id="+stateID,
                    success: function(data) {
                        console.log(data);
                       
                            $('#state').append(data);
                    }
                });
          
        });

    
        $("select[name='elctro1']").change(function() {
            var stateID1 = $(this).val();
            // alert(stateID1);
                $.ajax({  
                    url: "config.php",
                    type: 'POST',
                    data:"id1="+stateID1,
                    success: function(data) {
                        // console.log(data);
                        $('#city').append(data);
                    }
                });
           
        });

        $("select[name='elctro2']").change(function() {
            var stateID3 = $(this).val();
            // alert(stateID3);
            
            
            $.ajax({
                url:"config.php",
                type:'POST',
                data:"id2="+stateID3,
            success: function(data) {
                // console.log(data);
                $('#table1').append(data);
            }
            });
        });
     
    </script>


</body>

</html>