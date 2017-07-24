<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Ajax Example</title>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<ul id="info1">
		<li>Put anything in the field below.</li>
	</ul>
	<form id="form1">
		<input type="text" name="field1" id="field1">
		<input type="submit" name="submit" id="submit" value="Submit Form">
	</form>
	<div id="info">Загрузка...</div> 
	<script>
	$('#form1').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ajax.php',
			data: $(this).serialize(),
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#info1').html(data.msg);
			}
		});
	});
	console.log(data);
	</script>
	
	<script>  
        function json_example()  
        {  
            $.getJSON('ajax.php', function(data) {  
                s  = "";  
                $.each(data, function(key, val) {   
                    s = s + key+' => ' + val + '<br/>'   
                });  
                $("#info").html(s);  
            });  
        }  
        setInterval(json_example, 1000);  
    </script>  
	<?var_dump(data);?>
</body>
</html>