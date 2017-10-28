<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print_r($_FILES); die;
        $iteration = count($_FILES['photo']['name']);
        for($i = 0; $i < $iteration; $i++) {
            $error = $_FILES['photo']['error'][$i];
            $fileName = time() . '_' . $_FILES['photo']['name'][$i];
            $from = $_FILES['photo']['tmp_name'][$i];

            if ($error === 0) {
                $dirName = createUploadDirIfNotExists();

                move_uploaded_file($from, $dirName . '/' . $fileName);
            }
        }
    }

function createUploadDirIfNotExists($dirName = 'upload')
{
    if(! is_dir($dirName)){
        mkdir($dirName);
    }

    return $dirName;
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="message">
    <input type="file" name="photo[]" multiple>
    <input type="submit">
</form>