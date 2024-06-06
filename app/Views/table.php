<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>User List</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>OTP</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($users) && is_array($users)): ?>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <!-- <td><?= esc($user['password']) ?></td> -->
                    <td><?= esc($user['otp']) ?></td>
                    <td><?= esc($user['status']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No users found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
