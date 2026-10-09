# IT0049 Tasks for Today Management System

This CodeIgniter 4 application displays a daily task dashboard, the full task list, and a demo profile using a MySQL database and Query Builder-backed Models.

## Setup

1. Start Apache and MySQL in XAMPP.
2. Create the database and sample records using `database/it0049_pos.sql` in phpMyAdmin, or use the migration and seeder commands below.
3. Confirm the values in `.env` match your local XAMPP setup. The default configuration uses `root` with no password.
4. Open `http://localhost/TSA1/public/`.

## Migration and seeding

From the project directory, run:

```text
php spark migrate
php spark db:seed PosSeeder
```

The migration creates the `tasks` and `users` tables required by the activity. The seeder inserts eight sample task records spanning multiple dates, plus one demo user.

## Pages

- `/` - welcome page showing tasks for today only
- `/tasks` - complete task list ordered by date
- `/profile` - demo user profile
- `/about` - developer information
