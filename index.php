<!DOCTYPE html>
<html>
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data"> 
            <!-- enctype="multipart/form-data". It specifies which content-type to use when submitting the form -->
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </body>
</html>