<?php component('head'); ?>
<div class="container col-md-6">
    <?php component('header'); ?>
    <h1>Contacts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $contact): ?>
            <tr>
                <td><?= $contact['name']; ?></td>
                <td><?= $contact['email']; ?></td>
                <td><?= $contact['phone']; ?></td>
                <td><a href="/contacts/edit/<?= $contact['id']; ?>" class="btn btn-outline-primary">Edit</a></td>
                <td><button form="delete<?= $contact['id']; ?>" class="btn btn-outline-danger">Delete</button></td>
            </tr>
            <form action="/contacts/destroy/<?= $contact['id']; ?>" id="delete<?= $contact['id']; ?>"
                  method="post"></form>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php component('footer'); ?>
