<!DOCTYPE html>
<html>
<head>
	<title>GST Tax Calculaton Software</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
	@media screen and (max-width: 1200px) {
 	.container{
 		width: 100%!important;
 	}
  }
</style>
</head>
<body>
<div class="container" style="width: 50%">
	<div class="card">
		<div class="card-header bg-info text-white">
			GST Calculaton Software
		</div>
	<div class="row ml-1 mr-1">
		<div class="col-sm-12">
			<label>Source State</label>
			<select class="custom-select" id="sou" onchange="check1(this)">
				<option value="">--Select State--</option>
				<option value="1">Andaman and Nicobar Islands</option>
				<option value="2">Andhra Pradesh</option>
				<option value="3">Arunachal Pradesh</option>
				<option value="4">Assam</option>
				<option value="5">Bihar</option>
				<option value="6">Chandigarh</option>
				<option value="7">Chhattisgarh</option>
				<option value="8">Dadra and Nagar Haveli and Daman and Diu</option>
				<option value="9">Delhi</option>
				<option value="10">Goa</option>
				<option value="11">Gujarat</option>
				<option value="12">Haryana</option>
				<option value="13">Himachal Pradesh</option>
				<option value="14">Jammu and Kashmir</option>
				<option value="15">Jharkhand</option>
				<option value="16">Karnataka</option>
				<option value="17">Kerala</option>
				<option value="18">Ladakh</option>
				<option value="19">Lakshadweep</option>
				<option value="20">Madhya Pradesh</option>
				<option value="21">Maharashtra</option>
				<option value="22">Manipur</option>
				<option value="23">Meghalaya</option>
				<option value="24">Mizoram</option>
				<option value="25">Nagaland</option>
				<option value="26">Odisha</option>
				<option value="27">Puducherry</option>
				<option value="28">Punjab</option>
				<option value="29">Rajasthan</option>
				<option value="30">Sikkim</option>
				<option value="31">Tamil Nadu</option>
				<option value="32">Telangana</option>
				<option value="33">Tripura</option>
				<option value="34">Uttar Pradesh</option>
				<option value="35">Uttarakhand</option>
				<option value="36">West Bengal</option>
			</select>
		</div>

		<div class="col-sm-12">
			<label>Destination State</label>
			<select class="custom-select" id="des" onchange="check2(this)">
				<option value="">--Select State--</option>
				<option value="1">Andaman and Nicobar Islands</option>
				<option value="2">Andhra Pradesh</option>
				<option value="3">Arunachal Pradesh</option>
				<option value="4">Assam</option>
				<option value="5">Bihar</option>
				<option value="6">Chandigarh</option>
				<option value="7">Chhattisgarh</option>
				<option value="8">Dadra and Nagar Haveli and Daman and Diu</option>
				<option value="9">Delhi</option>
				<option value="10">Goa</option>
				<option value="11">Gujarat</option>
				<option value="12">Haryana</option>
				<option value="13">Himachal Pradesh</option>
				<option value="14">Jammu and Kashmir</option>
				<option value="15">Jharkhand</option>
				<option value="16">Karnataka</option>
				<option value="17">Kerala</option>
				<option value="18">Ladakh</option>
				<option value="19">Lakshadweep</option>
				<option value="20">Madhya Pradesh</option>
				<option value="21">Maharashtra</option>
				<option value="22">Manipur</option>
				<option value="23">Meghalaya</option>
				<option value="24">Mizoram</option>
				<option value="25">Nagaland</option>
				<option value="26">Odisha</option>
				<option value="27">Puducherry</option>
				<option value="28">Punjab</option>
				<option value="29">Rajasthan</option>
				<option value="30">Sikkim</option>
				<option value="31">Tamil Nadu</option>
				<option value="32">Telangana</option>
				<option value="33">Tripura</option>
				<option value="34">Uttar Pradesh</option>
				<option value="35">Uttarakhand</option>
				<option value="36">West Bengal</option>
			</select>
		</div>

		<div class="col-sm-12">
			<label>Types of Goods</label>
			<select class="form-control" id="good" onchange="check3(this)">
				<option value="">--Select Goods--</option>
				<option value="1">Books</option>
				<option value="2">Glosary</option>
				<option value="3">Toys</option>
				<option value="4">Medicine</option>
				<option value="5">Beauty</option>
				<option value="6">Fashion</option>
				<option value="7">Mobile & Laptops</option>
				<option value="8">Furniture</option>
				<option value="9">Home Appliances</option>
				<option value="10">Luxury</option>
			</select>
		</div>
		<div class="col-sm-12">
			<label>Enter Amount</label>
			<input type="text" name="amt" id="amt" placeholder="Enter Amount" class="form-control" onkeyup="check4(this)">
		</div>

		<div class="col-sm-6">
			<label>Tax Amount</label>
			<input type="text" name="amt" id="tamt" placeholder="Tax Amount" class="form-control" readonly="">
		</div>
		<div class="col-sm-6">
			<label>Tax %</label>
			<input type="text" name="amt" id="tax0" placeholder="Tax %" class="form-control" readonly="">
		</div>

		<div class="col-sm-12">
			<label>Total Amount</label>
			<input type="text" name="amt" id="famt" placeholder="Total Amount" class="form-control" readonly="">
		</div>
		<div class="col-sm-12">
			<label>Type of GST</label>
			<input type="text" name="amt" id="gst" placeholder="Type of GST" class="form-control" readonly="">
		</div>


	</div>
	</div>
</div>	
</body>
<script type="text/javascript">
	function check1(cal)
	{
     var sou=$('#sou').val().trim();
     var des=$('#des').val().trim();
     if(sou==''){
     	$('#sou').focus();
     	$('#sou').addClass('is-invalid');
     	$('#gst').val("");
     }
     else{
     	$('#sou').removeClass('is-invalid');
         $('#sou').addClass('is-valid');
     }
     if(sou=='' || des=='')
     {
     $('#gst').val("");
     }
     else if(sou==des)
     {
     	$('#gst').val("C-GST + S-GST");
     }
     else{
     	$('#gst').val("I-GST");
     }
	}
	function check2(cal)
	{
     var sou=$('#sou').val().trim();
     var des=$('#des').val().trim();
     if(des==''){
     	$('#des').focus();
     	$('#des').addClass('is-invalid');
     	$('#gst').val("");
     }
     else{
     	$('#des').removeClass('is-invalid');
         $('#des').addClass('is-valid');
     }
     if(sou=='' || des=='')
     {
     $('#gst').val("");
     }
     else if(sou==des)
     {
     	$('#gst').val("C-GST + S-GST");
     }
     else{
     	$('#gst').val("I-GST");
     }
	}
	function check3(cal)
	{
     var good=$('#good').val().trim();
     if(good==''){
     	$('#good').focus();
     	$('#good').addClass('is-invalid');
     }
     else{
     	$('#good').removeClass('is-invalid');
         $('#good').addClass('is-valid');
     }
	}
	function check4(cal)
	{
     var good=$('#good').val().trim();
      var des=$('#des').val().trim();
      var sou=$('#sou').val().trim();
     if(amt==''){
     	$('#amt').focus();
     	$('#amt').addClass('is-invalid');
     }
     else{
         $('#amt').addClass('is-valid');
     }
     if(good==5 || good==6 || good==7)
     {
     var tax=$('#tamt').val($('#amt').val()*18/100);
    $('#tamt').val($('#amt').val()*18/100);
    $('#famt').val(parseInt($('#tamt').val())+parseInt($('#amt').val()));
    $('#tax0').val("18%");
    
      }
      
      else if(good==8 || good==9 || good==10)
     {
     var tax=$('#tamt').val($('#amt').val()*28/100);
    $('#tamt').val($('#amt').val()*28/100);
    $('#famt').val(parseInt($('#tamt').val())+parseInt($('#amt').val()));
    $('#tax0').val("28%");
      }
       else if(good==3 || good==4)
     {
     var tax=$('#tamt').val($('#amt').val()*12/100);
    $('#tamt').val($('#amt').val()*12/100);
    $('#famt').val(parseInt($('#tamt').val())+parseInt($('#amt').val()));
    $('#tax0').val("12%");
      }
       else if(good==2)
     {
     var tax=$('#tamt').val($('#amt').val()*5/100);
    $('#tamt').val($('#amt').val()*5/100);
    $('#famt').val(parseInt($('#tamt').val())+parseInt($('#amt').val()));
    $('#tax0').val("5%");
      }
     else if(good==1)
     {
     var tax=$('#tamt').val($('#amt').val()*18/100);
    $('#tamt').val('0');
    $('#famt').val(parseInt($('#tamt').val())+parseInt($('#amt').val()));
    $('#tax0').val("0%");
      }
	}

</script>
</html>