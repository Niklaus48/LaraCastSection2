<?php require base_path('view/partial/head.php') ?>
<?php require base_path('view/partial/nav.php') ?>
<?php require base_path('view/partial/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <form method="post" action="/note">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?=$note['id']?>">
                <label for="body"> Body </label>

                <div>
                    <textarea id="body" name="body" required><?=$note['body']?></textarea

                    <?php if(isset($errors['body'])) :  ?>
                        <p class="text-red-500 mt-2"> <?= $errors['body'] ?> </p>
                    <?php endif; ?>
                </div>


                <div class="flex justify-start mt-5 gap-x-4">
                    <a href="/notes" class="text-red-500"> Cancel </a>
                    <button type="submit"> Update </button>
                </div>





            </form>

        </div>
    </main>
</div>

</body>
</html>

