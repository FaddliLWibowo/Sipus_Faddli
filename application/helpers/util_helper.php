<?php

function umur($usia) {     
    $year = date("Y", strtotime($usia));
    $month = date("m", strtotime($usia));
    $day = date("d", strtotime($usia));
    $birthday = strtotime($year.'-'.$month.'-'.$day);
    $current_time = time();
    $curr['month'] = date('n', $current_time);
    $curr['lastmonth'] = $curr['month'] - 1;
    $curr['year'] = date('Y', $current_time);
    $curr['lastyear'] = $curr['year'] - 1;
    $curr['day'] = date('j', $current_time);

    $diff = $current_time - $birthday;
    $age['years'] = intval($diff/31556926);
    $diff = $diff - (31556926 * $age['years']);
    if($curr['month'] > $month) {
    	$age['months'] = $curr['month'] - $month;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    } elseif($curr['month'] == $month) {
    if($curr['day'] >= $day) {
    	$age['months'] = 0;
    } else {
    	$age['months'] = 11;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    	$diff = $current_time - $month_temp;
    }
    } else {
    	$age['months'] = $curr['month'] - $month + 12;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    }

    $age['days'] = intval($diff/86400);
    $diff = $diff - (86400 * $age['days']);

    $age['hours'] = intval($diff/3600);
    $diff = $diff - (3600 * $age['hours']);

    $age['minutes'] = intval($diff/60);
    $diff = $diff - (60 * $age['minutes']);

    $age['seconds'] = $diff;

    return $age['years'];

}

function to_pdf($html, $filename='', $stream=TRUE) 
{
    require_once(APPPATH."libraries/dompdf/dompdf_config.inc.php");
    
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
}

function cetak_report($html,$out)
{
	if ($out=='pdf')
		to_pdf($html,'Report'.rand(100,1000));
	else
		echo $html;

}

function nomor_pasien($id)
{
	return sprintf("%05d",$id); 
}

function nama_bulan($i)
{
	$bulan = array(
		'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
	);

	return $bulan[$i-1];
}

function tanggal($tanggal)
{
return date('d',strtotime($tanggal)).'  '.nama_bulan(date('m',strtotime($tanggal))).' '.date('Y',strtotime($tanggal));
	  			
}

function t($v)
{
    if ((int)$v==0)
        return "-";
    return (int)$v;

}

function tahun_akademik($str){
	$r = substr($str, -1);
	$t = substr($str,0, -1);
	if($r==1)
		return $t.' - GANJIL';
	else
		return $t.' - GENAP';

}
function rupiah($str){
    return 'Rp '.number_format($str, 0, ",", ".") .'&nbsp'.',-';
}

function number_to_words($number)
    {
        $before_comma = trim(to_word($number));
        $after_comma = trim(comma($number));
        return ucwords($results = $before_comma.' koma '.$after_comma);
    }

    function to_word($number)
    {
        $words = "";
        $arr_number = array(
        "",
        "satu",
        "dua",
        "tiga",
        "empat",
        "lima",
        "enam",
        "tujuh",
        "delapan",
        "sembilan",
        "sepuluh",
        "sebelas");

        if($number<12)
        {
            $words = " ".$arr_number[$number];
        }
        else if($number<20)
        {
            $words = to_word($number-10)." belas";
        }
        else if($number<100)
        {
            $words = to_word($number/10)." puluh ".to_word($number%10);
        }
        else if($number<200)
        {
            $words = "seratus ".to_word($number-100);
        }
        else if($number<1000)
        {
            $words = to_word($number/100)." ratus ".to_word($number%100);
        }
        else if($number<2000)
        {
            $words = "seribu ".to_word($number-1000);
        }
        else if($number<1000000)
        {
            $words = to_word($number/1000)." ribu ".to_word($number%1000);
        }
        else if($number<1000000000)
        {
            $words = to_word($number/1000000)." juta ".to_word($number%1000000);
        }
        else
        {
            $words = "undefined";
        }
        return $words;
    }

    function comma($number)
    {
        $after_comma = stristr($number,',');
        $arr_number = array(
        "nol",
        "satu",
        "dua",
        "tiga",
        "empat",
        "lima",
        "enam",
        "tujuh",
        "delapan",
        "sembilan");

        $results = "";
        $length = strlen($after_comma);
        $i = 1;
        while($i<$length)
        {
            $get = substr($after_comma,$i,1);
            $results .= " ".$arr_number[$get];
            $i++;
        }
        return $results;
    }
function sessions($name)
{
        $CI =& get_instance();
        if ($CI->session)
                return $CI->session->userdata($name);
}    