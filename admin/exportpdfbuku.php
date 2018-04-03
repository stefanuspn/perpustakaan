<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
    
}
ob_start();
    
   $content = '<style>
        .tabel {
            border-collapse:collapse;
        }
        .tabel th{
            padding: 8px 5px;
            background-color:#cccccc;
        }
        .tabel td{
            padding: 8px 5px;
            
        }
   </style>';

    $content .= '
    <page>
        <h2>Laporan Data Buku</h2>
        <table width="100%" style="width: 330px" class="tabel" border="1">
            <tr class="header">
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Jumlah Buku</th>
                <th>Lokasi</th>
            </tr>';
            $no=1;
            foreach($db->ShowBuku() as $data){

             $content.='
             
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$data['judul'].'</td>
                    <td>'.$data['pengarang'].'</td>
                    <td>'.date('d F Y',strtotime($data['tahun_terbit'])).'</td>
                    <td>'.$data['penerbit'].'</td>
                    <td>'.$data['jumlahbuku'].'</td>
                    <td>'.$data['lokasi'].'</td>
                </tr>';    
                }
            $content.='</table>    
    </page>
    ';

require '../assets/html2pdf/html2pdf.class.php';
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Example.pdf'); ?>
