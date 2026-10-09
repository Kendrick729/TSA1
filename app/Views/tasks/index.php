<?= view('templates/header') ?>

<h1>Task List</h1>
<p>Below is the complete list of tasks, ordered by date.</p>

<table>
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Task Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc(date('F j, Y', strtotime($task['task_date']))) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?= view('templates/footer') ?>
