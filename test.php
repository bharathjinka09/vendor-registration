<html>
<head>
<style>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</style>

</head>
<body>
  <table id="countTable">
    <thead>
      <tr><th>Count</th></tr>
    </thead>
    <tbody>
      <tr><td>5</td></tr>
      <tr><td>4</td></tr>
      <tr><td>3</td></tr>
      <tr><td>2</td></tr>
      <tr><td>1</td></tr>
      <tr><td>10</td></tr>
      <tr><td>9</td></tr>
      <tr><td>8</td></tr>
      <tr><td>7</td></tr>
      <tr><td>6</td></tr>
      <tr><td>15</td></tr>
      <tr><td>14</td></tr>
      <tr><td>13</td></tr>
      <tr><td>12</td></tr>
      <tr><td>11</td></tr>

</tbody>
  </table>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript"  src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#countTable").dataTable();

})
  </script>
</body>
</html>