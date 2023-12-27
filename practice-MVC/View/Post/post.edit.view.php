<?php
require "partials/head.php";
require "partials/nav.php";
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="#" method="post">
            <input type="hidden" value="<?= $post['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="title" class="form-control" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"><?= $post['description'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php 

    // endif;
    require "partials/footer.php" 
?>