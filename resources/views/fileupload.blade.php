<h3>UPLOAD FILE</h3>
<form action="POST" action="fileupload" enctype="multipart/form-data">
@csrf
<input type="file" name="file" multiple>
<button class="upload">Upload</button>
</form>