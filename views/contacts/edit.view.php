<?php component('head'); ?>

<div class="container  col-md-6">
    <?php component('header'); ?>
    <div class="row justify-content-center">
        <h1>Edit contact</h1>
        <form action="/contacts/update/<?= $data['contact']['id']; ?>" method="post">
            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"
                       value="<?= $data['contact']['name']; ?>" required>
            </div>
            <div class="form-group my-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                       value="<?= $data['contact']['email']; ?>" required>
            </div>
            <div class="form-group my-2">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone"
                       value="<?= $data['contact']['phone']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
</div>
<?php component('footer'); ?>
