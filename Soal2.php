<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tes";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

        $sql = "SELECT m.mhs_nim, m.mhs_nama, mk.mk_kode, mk.mk_nama, n.nilai FROM tb_mahasiswa_nilai n JOIN tb_mahasiswa m ON m.mhs_id = n.mhs_nilai_id JOIN tb_matakuliah mk ON mk.mk_id = n.mk_id WHERE mk.mk_kode = 'MK303' ORDER BY `n`.`nilai` DESC ";
        $result = $conn->query($sql);

            // output data of each row

        if ($result->num_rows > 0) {
          echo "<div class='w3-container'> <table class='w3-table-all w3-centered  w3-hoverable w3-reponsive w3-card-4'>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>". $row["mhs_nim"]."</td>
                <td>".$row["mhs_nama"]."</td>
                <td>".$row["mk_kode"]."</td>
                <td>". $row["mk_nama"]."</td>
                <td>". $row["nilai"]."</td>
                </tr>";
            }

            echo "</table></div>";
        }
?>