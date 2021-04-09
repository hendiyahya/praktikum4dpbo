<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function insert($data){
		$tname = $data['tname'];
		$tdetails = $data['tdetails'];
		$tsubject = $data['tsubject'];
		$priority = $data['tpriority'];
		$tdeadline = $data['tdeadline'];
		$tstatus = "Belum";

		// Query mysql insert ke db
		$query = "INSERT INTO tb_to_do (name_td,details_td,subject_td,priority_td,deadline_td,status_td) VALUES ('$tname','$tdetails','$tsubject','$priority','$tdeadline','$tstatus')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($data){
		$id = $data['id_hapus'];

		// Query mysql insert ke db
		$query = "DELETE FROM tb_to_do WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function status($data){
		$id = $data['id_status'];

		// Query mysql insert ke db
		$query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

}



?>
