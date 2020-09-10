<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Loader</title>
      
        <style>
            table.center {
            margin-left:auto; 
            margin-right:auto;
            
            }
            #table-wrapper {
                position:relative;
                }
            #table-scroll {
            height:500px;
            overflow:auto;  
            margin-top:20px;
            }
            #table-wrapper table {
            width:80%;

            }

            #table-wrapper table thead th .text {
            position:absolute;   
            top:-20px;
            z-index:2;
            height:20px;
            width:35%;
            border:1px solid red;
            }

            .header {
                text-align: center;
                font-size: 30px;
            }


            table {
            border-collapse: collapse;
            }

            body { background-color:	#F8F8FF;
            color: 	#4B0082 }

            table, td, th {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            }

            tr:hover {
                background-color: #f5f5f5;
                }
            tr {background-color: #f2f2f2;}

            th {
  background-color: #4B0082;
  color: white;
}
        </style>
      
    </head>
    <body>
     
    <div class="header">
  <h1>Critical Products</h1>
</div>

        <div id="table-wrapper">
        <div id="table-scroll">
            <div style="overflow-x:auto;">
        <table class="center" border="1">
            <tr>
                <th>Name</th>
                <th>Availability</th>
            </tr>
            <?php for($i = 0; $i < count($names); $i++) : ?>
            <tr>
                <td><?= $names[$i]?></td>
                <td><?= $availables[$i]?></td>
            </tr>
            <?php endfor ?>
        </table>
        </div>
        </div>
        </div>
            </body>
        </html>
