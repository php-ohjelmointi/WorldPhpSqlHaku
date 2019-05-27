<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Citys</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 20px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
 </style>
</head>
<body>
<ul>
  <li><a href="city.php">Kaupungit</a></li>
  <li><a class="active" href="valtiot.php">Valtiot</a></li>
  <li><a href="kielet.php">Kielet</a></li>
 
</ul>
<br>
 <table>
 <tr>
  <th>Koodi</th>
  <th>Nimi</th> 
  <th>Maanosa</th> 
  <th>Pinta-ala</th>
  <th>Väkiluku</th>
  <th>Hallintomuoto</th>
  <th>Hallitsija</th>
  <th>Kaupunkeja</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "world");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Code,Name, Continent,SurfaceArea,Population, GovernmentForm,HeadOfState,Capital FROM country";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Code"]. 
    "</td><td>" . $row["Name"]. 
    "</td><td>" . $row["Continent"] . 
    "</td><td>" . $row["SurfaceArea"] . 
    "</td><td>" . $row["Population"] . 
    "</td><td>" . $row["GovernmentForm"] . 
    "</td><td>" . $row["HeadOfState"] . 
    "</td><td>" . $row["Capital"] . 
    "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>