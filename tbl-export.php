<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>HTML Table Export</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <!-- link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" / -->







<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        

</head>
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

	

<style>
div.disclaimer
{
  position:absolute;
   width:100%;

   background:#ababab;
   text-align:center;
   font-size:small;
   
}
</style>

    <script type="text/javascript" src="tableExport.js"></script>
	<script type="text/javascript" src="jquery.base64.js"></script>
	<script type="text/javascript" src="html2canvas.js"></script>
	<script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="jspdf/jspdf.js"></script>
	<script type="text/javascript" src="jspdf/libs/base64.js"></script>
	


<body style="margin: 2em;">

<h2>Demo</h2>	
													
<h3> Export Table Data</h3>
							<dl>
								
								
								<dt><a href="#" onClick ="$('#company').tableExport({type:'png',escape:'false'});"> PNG</a></li>
								<dt><a href="#" onClick ="$('#company').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> PDF</a></dt>
								<dt><a href="#" onClick ="$('#company').tableExport({type:'sql'});"> SQL</a></li>
								
							</dl>
						</div>								
                                   
                                   <p>&nbsp;</p>
                                   <table id="company" class="table table-striped" >
				<thead>			
					<tr class='info'>
						<th>Company</th>
						<th>Name</th>
						<th>Address</th>
						<th>Country</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ABC Learning</td>
						<td>Jerry Smith</td>
						<td>509 Collins Street Melbourne VIC 3000</td>
						<td>Australia</td>
					</tr>
					<tr>
						<td>ABC Broadcasting Inc.</td>
						<td>John Martin</td>
						<td>50 George Street Sydney NSW 2000</td>
						<td>Australia</td>
					</tr>
					<tr>
						<td>贸易合作发展中心</td>
						<td>黄文广</td>
						<td>上海静安区愚园路418号8楼 </td>
						<td>中国上海</td>
					</tr>
					<tr>
						<td>Kelly International </td>
						<td>Andrew Van</td>
						<td> Flat C, 18/F Chong Hing Square 501 Nathan Road, Mongkok</td>
						<td>Hang Kong</td>
					</tr>
					<tr>
						<td>Ausmate Trade</td>
						<td>Xong Lee</td>
						<td>200 Wattletree Rd, Malvern VIC 3144</td>
						<td>Australia</td>
					</tr>
				</tbody>
</table> 
			<div>

</body>
</html>