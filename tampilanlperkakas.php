<html>
<head>
</head>
<body onload="window.print()">
		<center>
          <b> Perkakas </b> <br> <br>
        </center>
        <table border="3" class="table table-hover" align="center">    
          <tr>
              <th style="text-align:center"> Nama </th>
			  <th style="text-align:center"> Baik </th>
			  <th style="text-align:center"> Rusak Ringan </th>
			  <th style="text-align:center"> Rusak Berat </th>
              <th style="text-align:center"> Total</th>
          </tr>
		  <?php
		  include 'database.php';
		  
		  if(isset($_GET['pesan']))
			{
				echo"$_GET[isi]";
			}
			
		  $result = mysql_query ('select peralatan.peralatan_id ,peralatan.peralatan_nama,peralatan.jenis_peralatan_id,peralatan.Baik,peralatan.Rusak_ringan,peralatan.Rusak_berat,peralatan.total,peralatan.Catatan from peralatan where peralatan.jenis_peralatan_id=1 ');
			if (! $result)
			{
				echo "query gagal" ;
			}
			else
			{}
			
		  while($row = mysql_fetch_assoc($result))
                    {
                            echo "<tr>";
                            echo "	<td>".$row["peralatan_nama"]."</td>";
                            echo "	<td style='text-align:center'>".$row["Baik"]."</td>";
                            echo "	<td style='text-align:center'> ".$row["Rusak_ringan"]."</td>"; 
                            echo "	<td style='text-align:center'>".$row["Rusak_berat"]."</td>";
                            echo "	<td style='text-align:center'>".$row["total"]."</td>";
							echo "</tr>";
					}		
			?>				

		  </table>
</body>
</html>