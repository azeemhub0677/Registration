<html>
    <head>
       <title>Display</title>
       <style>
        body{
            /* background: pink; */
            background: radial-gradient(circle at 10% 20%, rgba(216, 75, 212, 0.4) 30.2%, rgba(100, 231, 204, 0.73) 62%, rgba(100, 231, 204, 0.73) 83.4%);
            /* background-image: url(""); */
        }
        h1{
            text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
            border-radius:5px;
            padding-top:5px;
            padding-bottom:5px;
            font-weight:900;
        }
        table{
            /* background:	#C0C0C0; */
            background: radial-gradient(circle at 10% 20%, rgba(216, 75, 212, 0.4) 30.2%, rgba(100, 231, 204, 0.73) 62%, rgba(100, 231, 204, 0.73) 83.4%);
            box-shadow: 8px 8px 8px rgba(0,0,0,0.5);
            border:none;
        }
        .table{
            border-radius:15px;
            padding:1px;
        }
        .head {
            font-size:25px;
            text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
            font-weight:400;
         }
        .data{
            border-radius:3px;
            background:white;
            border:none;
        }
       </style>
    </head>





<?php
include("connection.php");

$query= "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);




// echo $total;

if($total != 0)
{
    ?>

            <h1 align="center">Records Data</h1>
    <center><table border=1px cellspacing="15" class="table">
    <tr>
        <th width="5%" class="data head" style=background-color:transparent>ID</th>
        <th width="10%" class="data head" style=background-color:transparent>Name</th>
        <th width="10%" class="data head" style=background-color:transparent>Surname</th>
        <th width="10%" class="data head" style=background-color:transparent>D.O.B</th>
        <th width="10%" class="data head" style=background-color:transparent>Gender</th>
        <th width="20%" class="data head" style=background-color:transparent>Email</th>
        <th width="10%" class="data head" style=background-color:transparent>Phone No</th>
        <th width="25%" class="data head" style=background-color:transparent>Address</th>
    </tr>


<?php
    while($result= mysqli_fetch_assoc($data))
    {
        
    echo "<tr>
            <td class='data'>".$result['id']."</td>
            <td class='data'>".$result['fname']."</td>
            <td class='data'>".$result['lname']."</td>
            <td class='data'>".$result['dob']."</td>
            <td class='data'>".$result['gender']."</td>
            <td class='data'>".$result['email']."</td>
            <td class='data'>".$result['phone']."</td>
            <td class='data'>".$result['address']."</td>
         </tr>
        ";
    }
}
else
{
    echo "No records found";
}
?>
 
 </table>

</center>
    


 