<?php
//use App\Models\Transaction;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Lease Agreement</title>
    <link rel="stylesheet" href="{{ public_path('css/test.css') }}" type="text/css" media="all">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

        .table {
            border-collapse: collapse;
        }

        body {
            font-family: 'Open Sans', sans-serif;

        }

        .sssize {
            font-size: 10px;
        }

        .smsize {
            font-size: 12px;
        }

        .mdsize {
            font-size: 14px;
        }

        .page-break {
            page-break-after: always;
        }

        .bigheading {
            font-size: 18;
            font-weight: 400;
        }

    </style>
</head>

<body>



	<table width="100%" cellspacing="0" cellpadding="0" border="0" class="smsize">
		<tr>
			<td style="padding:0px;" align="center">
				<img width="120" height="100" style="margin:0;padding:0"
					src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo.png'))) }}">

			</td>
			
		</tr>

	</table>

    <table width="100%" cellspacing="" cellpadding="0" border="0" class="smsize">
        <tr>
            <td  style="padding:0px;padding:10px;font-size:20;font-weight:bold" align="center">
				<p>THE FOUNTAIN OF LIFE MINISTRY TRAINING ACADEMY</p>
            </td>
        </tr>
	</table>
	

    <table width="100%" cellspacing="" cellpadding="0" border="0" class="smsize">
        <tr>
            <td class="mdsize" style="padding:0px;" align="left">
				<p>Dear {{ ucwords($data->name)}},</p>
            </td>
        </tr>
	</table>


	<table width="100%" cellspacing="" cellpadding="0" border="0" class="smsize">
        <tr>
            <td  style="padding:0px;padding:10px;font-size:20;font-weight:bold" align="center">
				<p>LETTER OF ADMISSION</p>
            </td>
        </tr>
	</table>

    <table width="100%" cellspacing="" cellpadding="0" border="0" class="mdsize">
        <tr>
            <td  style="padding:0px;" align="left">
				<p>Calvary greetings,</p>
                <p>The Board of TFOLC Training Academy is glad to offer admission into our: </p>
                <p> <strong>{{$course->course}}.</strong></p>
				<p>The training is on Saturdays and shall be through virtual interactions for <strong>{{ strtoupper($course->duration) }}</strong> 8pm Nigeria time.</p>
				<p>The login details and the Schedule will be sent to you when training fees are paid.</p>
				<p>To accept this offer you are required to pay the Sum of <strong>N{{ number_format($course->price,2)}}</strong>  ONLY.</p>
				<p>We look forward to having this wonderful experience together.</p>
				<p></p>
				<p>Thank you.</p>
				<p>	<img width="80" height="80" style="margin:0;padding:0"
					src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/sign.jpg'))) }}"></p>
				<p>Pastor Ebenezer Kayode Ph.D</p>
            </td>
        </tr>
	</table>















</body>

</html>
