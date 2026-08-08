# Robot Control Pad 🤖

A simple web-based remote control panel for a robot. The web page sends movement commands to a MySQL database through a PHP backend, so any robot with internet access can poll the database and read the latest command.

**Live demo:** [tala.kesug.com/tables](https://tala.kesug.com/tables/)

![Control pad in action](./control-pad-screenshot.jpeg)

## How it works

1. The user opens the control page and taps a button (forward, backward, left, right, stop).
2. The browser sends that command to `update_command.php`, which stores it in a MySQL table.
3. `get_state.php` returns the latest stored command as JSON, so it can be read by any client.

The database acts as a simple message relay — the web page and the robot never talk to each other directly.

## Tech stack

- **Frontend:** HTML, CSS, vanilla JavaScript
- **Backend:** PHP (`mysqli`)
- **Database:** MySQL
- **Hosting:** InfinityFree (free PHP/MySQL hosting)

## Project structure

```
├── index.html            # Control pad UI
├── update_command.php    # Receives a command and saves it to the database
├── get_state.php         # Returns the latest stored command as JSON
├── db.php                # Database connection credentials
└── setup.sql             # One-time SQL script to create the robot_state table
```

## Command mapping

| Button   | Stored value |
|----------|--------------|
| forward  | `f`          |
| backward | `b`          |
| left     | `l`          |
| right    | `r`          |
| stop     | `S`          |

## Setup

1. Create a MySQL database on your hosting provider.
2. Run `setup.sql` once in phpMyAdmin to create the `robot_state` table.
3. Fill in your real database credentials in `db.php`.
4. Upload `index.html`, `db.php`, `update_command.php`, and `get_state.php` to the same folder on your server.
5. Open `index.html` in a browser, tap a button, and confirm the status message updates.
