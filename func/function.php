<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];


class Function_Web {

	/* Function Library*/
  function antiinjeksi($text){

  $safetext = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($text,ENT_QUOTES))));
  return $safetext;
}

  // Function Sensor Kata
Function Replace($isi_pesan){
	
	$isi_pesan  = str_replace("anjing","a****g", $isi_pesan);
	$isi_pesan	= str_replace("goblok","g****k", $isi_pesan);
	$isi_pesan	= str_replace("tai","t*i", $isi_pesan);
	$isi_pesan  = str_replace("monyet", "mo***t", $isi_pesan);
	$isi_pesan  = str_replace("babi", "b*bi", $isi_pesan);
	$isi_pesan  = str_replace("bego", "b*go", $isi_pesan);
	$isi_pesan  = str_replace("bangsat", "b*****t", $isi_pesan);
	$isi_pesan  = str_replace("brengsek", "b******k", $isi_pesan);
	$isi_pesan	= str_replace("porno", "po**o",$isi_pesan);
	$isi_pesan  = str_replace("sex", "s*x", $isi_pesan);
	$isi_pesan  = str_replace("bokep", "bo**p", $isi_pesan);
	$isi_pesan  = str_replace("jav", "j*v", $isi_pesan);
	$isi_pesan  = str_replace("bugil", "bu**l", $isi_pesan);

	return $isi_pesan;
 }

 function get_client_ip_env() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
  else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
  else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
  else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
  else
    $ipaddress = 'UNKNOWN IP Address';

  return $ipaddress;
}

function get_os(){ 
  global $user_agent;
    

    $os_platform    =   "Unknown OS Platform";
    $daftar_os      =   array(
              '/windows nt 6.2/i'     =>  'Windows 8',
              '/windows nt 6.1/i'     =>  'Windows 7',
              '/windows nt 6.0/i'     =>  'Windows Vista',
              '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
              '/windows nt 5.1/i'     =>  'Windows XP',
              '/windows xp/i'         =>  'Windows XP',
              '/windows nt 5.0/i'     =>  'Windows 2000',
              '/windows me/i'         =>  'Windows ME',
              '/win98/i'              =>  'Windows 98',
              '/win95/i'              =>  'Windows 95',
              '/win16/i'              =>  'Windows 3.11',
              '/macintosh|mac os x/i' =>  'Mac OS X',
              '/mac_powerpc/i'        =>  'Mac OS 9',
              '/linux/i'              =>  'Linux',
              '/ubuntu/i'             =>  'Ubuntu',
              '/iphone/i'             =>  'iPhone',
              '/ipod/i'               =>  'iPod',
              '/ipad/i'               =>  'iPad',
              '/android/i'            =>  'Android',
              '/blackberry/i'         =>  'BlackBerry',
              '/webos/i'              =>  'Mobile'
                        );

    foreach ($daftar_os as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

function getting_browser(){
  global $user_agent;
    
  $browser        =   "Unknown Browser";
    $daftar_browser  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($daftar_browser as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}

function change_date() {

date_default_timezone_set("Asia/Jakarta");

//Tanggal Kemarin
$kemarin = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));
 
//Tanggal Besok
$besok = date('d F Y', strtotime("+1 day", strtotime(date("d F Y"))));

//Tanggal Hari Ini
$date = date("d / m / Y / H:i:s:A");
$date1 = date("d / m / Y");

//Tanggal n Hari Kebelakang dari Tanggal Tertentu
$tanggal = "2015-05-19";
$hari = 3;
$minggu_lalu = date('Y-m-d', strtotime('-$hari day', strtotime($tanggal)));

//Tanggal Minggu Lalu dari Tanggal Tertentu
$tanggal = "2015-05-19";
$minggu_lalu = date('Y-m-d', strtotime('-1 week', strtotime($tanggal)));

//Tanggal Minggu Depan dari Tanggal Tertentu
$tanggal = "2015-05-19";
$minggu_lalu = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));

//Fungsi Jam

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=04) {
echo $date;
}
elseif($hour>=05 && $hour <=06){
	echo $date;
}
elseif($hour>=07 && $hour <=11) {
	echo $date;
}
elseif ($hour >=12 && $hour<=14){
	echo $date;
}
elseif ($hour >=15 && $hour<=16)
{
	echo $date;
}
elseif ($hour >=17 && $hour<=20)
{
	echo $date;
}
elseif ($hour >=21 && $hour<=23)
{
	echo $besok;
}

}
function tgl_indonesia($tgl){
   $nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    
  $tanggal = substr($tgl,8,2);
  $bulan = $nama_bulan[(int)substr($tgl,5,2)];
  $tahun = substr($tgl,0,4);
  
  return $tanggal.' '.$bulan.' '.$tahun;     
} 
}


function anti_injection($input) {
    // Kode atau kata Dilarang
    $aforbidden = array ("insert", "select", "update", "delete", "truncate", "replace", "drop", "or", ";", "#", "=", "<", ">", "/", "{", "}", "'", "+");
        
    $breturn=true;
    foreach($aforbidden as $cforbidden) {
        if (strpos($input, $cforbidden) == TRUE || $input == $cforbidden){
            $breturn=false;
            break;
        }
    }
    return $breturn;
}


?>
