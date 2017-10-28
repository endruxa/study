<?php
    if(isPost()){
        $email      = getRequest('email');
        $msg        = getRequest('msg');
        $photoName  = time() . '_' . $_FILES['photo']['name'];
        $from       = $_FILES['photo']['tmp_name'];
        $error      = $_FILES['photo']['error'];
        $extension  = ['jpg', 'png', 'jpeg'];
        $fileExt    = pathinfo($photoName, PATHINFO_EXTENSION);
        $flashData  = [
            'title' => 'О боже мой',
            'message' => 'Не удалось разместить ваш пост',
            'type' => 'error'
        ];

        if(0 === $error and in_array($fileExt, $extension)){
            $dirName = createUploadDirIfNotExists();
            $path = $dirName . '/' . $photoName;
            if(move_uploaded_file($from, $path)){
                $data = [
                    $email, $msg, $path, time()
                ];
                $data = serialize($data);
                file_put_contents(INSTA_FILE, $data . "\n", FILE_APPEND);

                $flashData  = [
                    'title' => 'Крутяк',
                    'message' => 'Ваш пост будет опубликован',
                    'type' => 'success'
                ];
            }
        }

        setFlash('noty', $flashData);
        goBack();
    }
?>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="email">Email адрес</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="msg">Ваше послание</label>
        <textarea name="msg" placeholder="Ваше послание" class="form-control" id="msg" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="photo" class="form-control-file">
    </div>
    <input type="submit" class="btn btn-primary" value="Запостить">
</form>
<hr>
<?php
    if (is_file(INSTA_FILE)){
        $posts = file(INSTA_FILE);
    }
?>

<?php if(is_array($posts) and count($posts)): ?>
    <?php $posts = array_reverse($posts); ?>
    <?php foreach($posts as $post): ?>
        <?php list($email, $msg, $path, $time) = unserialize($post) ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h3 class="display-3"><?= $email ?></h3>
                <img width="200px" src="<?= $path ?>" alt="<?= $email ?>">
                <p class="lead"><?= $msg ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
