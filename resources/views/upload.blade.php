<html>
<head>

</head>
<body>

upload!
<br>
<br>

<form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="hh" value="upload frm">
    <input type="file" name="attachFile">
    <input type="submit" value="파일 업로드">
</form>


</body>
</html>

