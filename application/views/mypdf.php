
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aur Kuch PDF</title>
</head>
<body  style="background: linear-gradient(45deg,rgba(72,44,191,1) 0%,rgba(106,198,240,1) 100%);" onload="getQRCode(<?=$reward_id?>)">
<div >
<div style="margin:10px; background: white; padding: 20px 0px; border-bottom-left-radius:350px 120px; border-bottom-right-radius:350px 120px;">
    <h1 style="color: rgba(72,44,191,1); text-align:center; font-size: 50px;">Aur Kuch</h1>
    <h2 style=" text-align:center">Scan this QR Code to get the Reward</h2>
    <div id="showqr" style="color:red; text-align:center"></div>
    <input type="hidden" name="reward_qr" id="reward_qr" >
</div>
<div>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="width:25%"><div id="appqr" style="color:red; text-align:right"></div></td>
                <td style="width:40%"><img src="<?=base_url()?>assets/image-low.png" style="width:40%"></img></td>
                <td><h1 style="color: white;  font-size: 40px;">Aur Kuch</h1></td>
            </tr>
        </tbody>
    </table>
</div>
<div>
</div>
</div>
<script src="<?=base_url()?>assets/cms_layout/js/jquery.js"></script>
<script type="text/javascript">
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
    function getQRCode(value){
            // Selecting the input element and get its value 
            
            var reward_id = value;
                    // Shufle the $str_result and returns substring 
                        // of specified length 
            //var inputVal =  
            // Displaying the value
            //document.getElementById("myInput").value=inputVal;
            //alert(inputVal);
            $.post("<?php echo base_url(); ?>function_control/getQRimage",{reward_id}, function( data ) {
                var obj = JSON.parse(data);
                //alert(obj);
            //location.reload();
            $("#showqr").html(obj.reward_qr); 
            $("#appqr").html(obj.app_qr); 
            $('#reward_qr').val(data);	
                 
            });



        }
</script>
</body>
</html>