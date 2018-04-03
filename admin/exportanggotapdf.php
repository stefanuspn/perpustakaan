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
        <h2>Laporan Data Anggota</h2>
        <table width="100%" style="width: 330px" class="tabel" border="1">
            <tr class="header">
                <th>No</th>
                <th>Id Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                 <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
            </tr>';
            $no=1;
            foreach($db->ShowAnggota() as $data){

             $content.='
             
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$data['id_anggota'].'</td>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['jk'].'</td>
                    <td>'.$data['tempatlahir'].','.date('d F Y',strtotime($data['tanggal_lahir'])).'</td>
                    <td>'.$data['alamat'].'</td>
                    <td>'.$data['nohp'].'</td>
                </tr>';    
                }
            $content.='</table>    
    </page>
    ';

require '../assets/html2pdf/html2pdf.class.php';
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Example.pdf'); ?>
