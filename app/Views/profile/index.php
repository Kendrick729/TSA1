<?= view('templates/header') ?>

<h1>User Profile</h1>

<?php if (! empty($user)): ?>
    <table>
        <tr>
            <th>Username</th>
            <td><?= esc($user['username']) ?></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><?= esc($user['full_name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= esc($user['email']) ?></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></td>
        </tr>
    </table>
<?php else: ?>
    <p>No user record found.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
