<?php  
	trait Waktu{
		public function TanggalIndonesia($tahun,$bulan,$tanggal){
			return "Sekarang tanggal $tanggal bulan $bulan tahun $tahun";
		}
	}

	trait Pesan{
		public function berhasil($pesan){
			echo "Proses Berhasil -> $pesan ";
		}
	}

	trait link{
		public function linkSelanjutnya($kataKunci, $url){
			echo "<a href='$url'>$kataKunci";
		}
	}

	class Pembelian
	{
		use Waktu,Pesan,link;
		public function tampilkanTanggal($tahun,$bulan,$tanggal){
			echo $this->TanggalIndonesia($tahun,$bulan,$tanggal);
		}

	}

	$pembelian=New Pembelian();	
	$pembelian->tampilkanTanggal(2000,11,22);
	echo;
	echo $pembelian->TanggalIndonesia(2000,11,22);
	echo;
	$pembelian->berhasil("Penambahan Data Baru");
	echo;
	$pembelian->linkSelanjutnya("Web ","https//:google.com");
?>