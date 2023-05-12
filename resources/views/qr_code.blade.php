
@php
$file='https://ouwssb.okcl.co.in/uploads/icard/sign/OD_JSP_UW_03_2021.pdf';
@endphp
{{QrCode::generate($file)}}