<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6
                            text-gray-900">Title:</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title" autocomplete="title" class="block
                                    flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900
                                    placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="   Write you new title here" required value="<?= $note['title'] ?>">
                                </div>
                                <?php if(isset($errors['title'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">New
                                note:</label>
                            <div class="mt-2">
                                <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5
                                 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
                                 focus:ring-2 focus:ring-inset fsocus:ring-indigo-600 sm:text-sm sm:leading-6"
                                          placeholder="Write here you note" required><?= $note['body'] ?></textarea>
                                <?php if(isset($errors['body'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/note?id=<?= $note['id'] ?>" class="mt-06 text-grey-500 underline">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
<!--                <form method="POST">-->
<!--                    <input type="hidden" name="_method" value="DELETE">-->
<!--                    <input type="hidden" value="--><?php //= $note['id']; ?><!--" name="id" class="hidden">-->
<!--                    <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>-->
<!--                </form>-->

                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </form>
    </div>
</main>


<?php require base_path('views/partials/footer.php') ?>