<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload GIS</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<input type="file" id="file-selector" required><br>
  <select name="tambang" required>
    <option value="">--Pilih</option>
    <option value="1">Kontak Karya</option>
    <option value="2">IUP Logam</option>
    <option value="3">Non Logam</option>

  </select>
	<p id="viewer"></p>
<script>
  document.getElementById("file-selector")
  .addEventListener("change", function () {
    var fr = new FileReader();
    fr.readAsText(this.files[0]);
    fr.onload = function () {
      console.table(fr.result);
    };  
  });
</script>
</body>
</html>