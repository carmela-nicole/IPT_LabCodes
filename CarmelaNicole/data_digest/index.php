<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
        // $xml = simplexml_load_file("http://localhost/CarmelaNicole/system_data/students.xml");
        //    to print and show data in xml
        // print_r($xml);

        // echo '<h1>'.$xml->name. '</h1>';
        // echo $xml->age;
        // echo $xml->address;

        // $json = file_get_contents("http://localhost/CarmelaNicole/system_data/students.json");
        // $json = json_decode($json);

        // echo $json->name;
        // echo $json->age;
        // echo $json->address;

    ?> -->
    <!-- <p>My name is <?php echo $xml->name;?>,
    <?php echo $xml->age;?> years of age.
    I live in <?php echo $xml->address;?>
    </p>

    <p>My name is <?php echo $json->name;?>,
    <?php echo $json->age;?> years of age.
    I live in <?php echo $json->address;?>
    </p> -->

    
    <?php
    $students = simplexml_load_file("http://localhost/CarmelaNicole/system_data/students.xml");
    $json = file_get_contents("http://localhost/CarmelaNicole/system_data/students.json");
    $json = json_decode($json);
    ?>
        <!-- XML DATA IN TABLE -->
    <table border="2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>

        <tbody>
           <!-- <?php 
            // foreach($students as $student){
            //     echo '<tr>';
            //         echo '<td>'.$student->name.'</td>';
            //         echo '<td>'.$student->age.'</td>';
            //         echo '<td>'.$student->address.'</td>';
            //     echo '</tr>';
            // }

           ?> -->
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
    <script>
            $.ajax({
                url:"http://localhost/CarmelaNicole/system_data/students.json",
                type:"get",
                dataType:"json",
                success:function(e){
                    var html=''
                    $(e).each(function(k,v){
                        html+='<tr>'
                            html+='<td>'+v.name+ '</td>'
                            html+='<td>'+v.age+ '</td>'
                            html+='<td>'+v.address+ '</td>'
                        html+='</tr>'
                    })

                $('tbody').html(html)
                }
            })
    </script>

</body>
</html>