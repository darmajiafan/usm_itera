<?php 

	function encrypt_param($param){
		$CI =& get_instance();
		return strtr($CI->encrypt->encode($param), '+/', '-_');
	}

	function get_random_number(){
			//22 04 13 
			//2204121 13141 aGl9wu

			$characters = '123456789';
			$charactersLength = strlen($characters);
			$randstring = '';
			for ($i = 0; $i < 5; $i++) {
				$randstring .= $characters[rand(0, $charactersLength - 1)];
			}

			$characters2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength2 = strlen($characters2);
			$randstring2 = '';
			for ($i = 0; $i < 6; $i++) {
				$randstring2 .= $characters2[rand(0, $charactersLength2 - 1)];
			}

			return date('ym').'121'.$randstring.$randstring2;
	}

	function decrypt_param($param){
		$CI =& get_instance();
		$param = strtr($param, '-_', '+/');
		$param = $CI->encrypt->decode($param);
		return $param;
	}
	function bank($a){
        $databank["bsi"]="Bank Syariah Indonesia";
        $databank["bm"]="Bank Mandiri";
        $databank["bri"]="Bank Rakyat Indonesia";
        $databank["bni"]="Bank Nasional Indonesia";
        // var_dump($databank[$a]);
        return $databank[$a];
    }
	function active_url(){
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
			$link = "https"; 
		else
			$link = "http"; 
		
		// Here append the common URL characters. 
		$link .= "://"; 
		
		// Append the host(domain name, ip) to the URL. 
		$link .= $_SERVER['HTTP_HOST']; 
		
		// Append the requested resource location to the URL 
		$link .= $_SERVER['REQUEST_URI']; 
			
		// Print the link 
		return $link; 
	}
	function ribuan($angka)
	{
		return number_format($angka, "0", ",", ".");
	}
	function menghitung_selisih($awal, $akhir){
		// $awal  = new DateTime('2017-09-06'); //Waktu awal

		// $akhir = new DateTime(); // Waktu sekarang atau akhir

		$diff  = $awal->diff($akhir);

		// return $diff->y . ' tahun, '. $diff->m . ' bulan, '. $diff->d . ' hari, '. $diff->h . ' jam, '. $diff->i . ' menit, '. $diff->s . ' detik ';
		return $diff->y . ' tahun, '. $diff->m . ' bulan, '. $diff->d . ' hari';

	}

	function disable_active_button($id_ref_status_jabfung){
		// $param = array('1', '3', '6', '9', '12', '15');
		$param = array('1', '3', '6', '9');
		$cek = in_array($id_ref_status_jabfung, $param);
		if($cek){
			return true;
		}else{
			return false;
		}
	}

	function get_status_ditolak($id_ref_status_jabfung){
		$param = array('12', '15');
		$cek = in_array($id_ref_status_jabfung, $param);
		if($cek){
			return true;
		}else{
			return false;
		}
	}

	function allow_kepegawaian($id_ref_status_jabfung){
		$param = array('11', '13', '14', '16', '17', '18');
		$cek = in_array($id_ref_status_jabfung, $param);
		if($cek){
			return true;
		}else{
			return false;
		}
	}

	function enable_dosen_submit($id_ref_status_jabfung){
		$param = array('1', '3', '6', '9');
		$cek = in_array($id_ref_status_jabfung, $param);
		if($cek){
			return true;
		}else{
			return false;
		}
	}

	function get_total_waktu($id=''){
		$CI=& get_instance();
		
		$cek_riwayat =  $CI->db->get_where('tb_data_pengajuan_nomor_induk_riwayat', array('id_data_pengajuan_nomor_induk' => $id));
		if($cek_riwayat->num_rows() != 0){
			$awal_1 = $CI->db->query("SELECT * from tb_data_pengajuan_nomor_induk_riwayat where id_data_pengajuan_nomor_induk = '$id' order by id_data_pengajuan_nomor_induk_riwayat ASC limit 1");
			$awal = new DateTime($awal_1->row()->tgl_create); //Waktu awal

			$akhir_1 = $CI->db->query("SELECT * from tb_data_pengajuan_nomor_induk_riwayat where id_data_pengajuan_nomor_induk = '$id' and id_data_pengajuan_nomor_induk_riwayat='18' order by id_data_pengajuan_nomor_induk_riwayat  DESC limit 1");
			if($akhir_1->num_rows() != 0){
				$akhir = new DateTime($akhir_1->row()->tgl_create); //Waktu akhir
			}else{
				$akhir = new DateTime(date('Y-m-d H:i:s')); //Waktu akhir
			}
			// var_dump($akhir);exit();
			$track = menghitung_selisih($awal, $akhir);
		}else{
			$track = 'belum ada';
		}
		return $track;
	}



	//helper untuk dim
	function get_wilayah($id=''){
		$CI=& get_instance();
		$cek_wilayah = $CI->db->get_where('wilayah', array('id_wil' => $id));
		// $cek_wilayah=$CI->db->query('SELECT coalesce(nm_wil,"-") as nm_wil from wilayah where id_wil="$id" limit 1');
		// var_dump($cek_wilayah->row()->nm_wil);
		// die();
		
		if($cek_wilayah->num_rows()>0){
			$nama_wilayah=$cek_wilayah->row()->nm_wil;
		}else{
			$nama_wilayah="";
		}
		
		return $nama_wilayah;
	}
	function angka($integer)
	{
		if ($integer == '') return null;
		else return number_format($integer, 0, '.', ',');
	}
	function get_pekerjaan($id=''){
		$CI=& get_instance();
		$cek_pekerjaan = $CI->db->get_where('pekerjaan', array('kd_pekerjaan' => $id));
		if($cek_pekerjaan->num_rows()>0){
			$nama_pekerjaan=$cek_pekerjaan->row()->nama_pekerjaan;
		}else{
			$nama_pekerjaan="";
		}
		// $nama_pekerjaan=$cek_pekerjaan->row()->nama_pekerjaan;
		return $nama_pekerjaan;
	}

	function get_pendidikan($id=''){
		$CI=& get_instance();
		$cek_pendidikan = $CI->db->get_where('pendidikan', array('kd_pendidikan' => $id));
		if($cek_pendidikan->num_rows()>0){
			$nama_pendidikan=$cek_pendidikan->row()->nama_pendidikan;
		}else{
			$nama_pendidikan="";
		}
		// $nama_pendidikan=$cek_pendidikan->row()->nama_pendidikan;
		return $nama_pendidikan;
	}

	function get_agama($id=''){
		$CI=& get_instance();
		$cek_agama = $CI->db->get_where('agama', array('id_agama' => $id));
		if($cek_agama->num_rows()>0){
			$nama_agama=$cek_agama->row()->nm_agama;
		}else{
			$nama_agama="";
		}
		// $nama_agama=$cek_agama->row()->nama_agama;
		return $nama_agama;
	}
	
	function get_jurusan($id=''){
		$CI=& get_instance();
		$cek_jurusan = $CI->db->get_where('jurusan', array('kd_jurusan' => $id));
		if($cek_jurusan->num_rows()>0){
			$nama_jurusan=$cek_jurusan->row()->nama_jurusan;
		}else{
			$nama_jurusan="";
		}
		// $nama_jurusan=$cek_jurusan->row()->nama_jurusan;
		return $nama_jurusan;
	}

	function get_jenis_tinggal($id=''){
		$CI=& get_instance();
		$cek_jenis_tinggal = $CI->db->get_where('jenis_tinggal', array('id_jns_tinggal' => $id));
		if($cek_jenis_tinggal->num_rows()>0){
			$nama_jenis_tinggal=$cek_jenis_tinggal->row()->nm_jns_tinggal;
		}else{
			$nama_jenis_tinggal="";
		}
		// $nama_jenis_tinggal=$cek_jenis_tinggal->row()->nama_jenis_tinggal;
		return $nama_jenis_tinggal;
	}

	function get_grade_sekolah($no_sbmptn='',$grade=''){
		$CI=& get_instance();
		// select no_sbmptn,count(*) as jumlah from tanggungan where pendidikan ='BELUM SEKOLAH' group by no_sbmptn
		$cek_tanggungan = $CI->db->select('count(*) as jumlah')->from('tanggungan')->where(array('pendidikan' => $grade,'no_sbmptn'=>$no_sbmptn))->get();
		
		if($cek_tanggungan->num_rows()>0){
			$nama_tanggungan=$cek_tanggungan->row()->jumlah;
		}else{
			$nama_tanggungan="";
		}
		// $nama_tanggungan=$cek_tanggungan->row()->nama_tanggungan;
		return $nama_tanggungan;
	}
	
	function get_tagihan($no_sbmptn="",$tipe=""){
		$CI=& get_instance();
		// select no_sbmptn,count(*) as jumlah from tanggungan where pendidikan ='BELUM SEKOLAH' group by no_sbmptn
		$cek_tagihan = $CI->db->select('no_sbmptn,sum(nilai) as total')->from('upload')->where(array('tipe' => $tipe,'no_sbmptn'=>$no_sbmptn))->get();
		
		if($cek_tagihan->num_rows()>0){
			$nama_tagihan=$cek_tagihan->row()->total;
		}else{
			$nama_tagihan="";
		}
		// $nama_tagihan=$cek_tagihan->row()->nama_tagihan;
		return $nama_tagihan;
	}
?>