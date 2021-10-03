<HTML>
<HEAD>
<TITLE> Contoh Skrip PHP </TITLE>
<BODY>
<?php
	$nilai = 85;
	$nama = "Amir" ;
	if ($nilai >= 80)
		{
			echo $nama. " Mendapat Nilai A" ;
		}
	elseif ($nilai >= 70)
		{
			echo $nama. " Mendapat Nilai B" ;
		}
	elseif ($nilai >= 60)
		{
			echo $nama. " Mendapat Nilai CC" ;
		}
	else
		{
			echo $nama. " Mendapat Nilai D" ;
		}
			
?>
</BODY>
</HTML>