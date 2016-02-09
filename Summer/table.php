<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body {padding: 20px;}
input {margin-bottom: 5px; padding: 2px 3px; width: 209px;}
td {padding: 4px; border: 1px #CCC solid; width: 100px;}
</style>
<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
</head>

<body>
<input type="text" id="search" placeholder="Type to search"><br>
<button class="category">Hybrid</button> <button class="category">Online</button>

<table id="table">
   <tr>
      <td>Class</td>
      <td>Format</td>
   </tr>
   <tr>
      <td>ENGL 101</td>
      <td>Online</td>
   </tr>
   <tr>
      <td>HIST 102</td>
      <td>In-Person</td>
   </tr>
   <tr>
      <td>SCI 200</td>
      <td>Hybrid</td>
   </tr>
</table>
</body>

<script>
var $rows = $('#table tr:not(:first)');
$('#search').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});

$(function(){
    $('.category').live('click', function() {
        $("#search").val($(this).html());
				$("#search").trigger(e);
    });
});

var e = jQuery.Event("keyup");
e.which = 13; // # Some key code value

$('td:nth-child(2)').hide();
</script>

</html>