<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <style {csp-style-nonce}>
        table {
            border-spacing: 0;
            mso-cellspacing: 0;
        }

        th {
            padding: 5px;
        }
        td, th {
            border: 1px solid #000;
            padding: 5px 8px;
        }

        .operation-col {
            cursor: pointer;
        }
    </style>
</head>
<body>
<table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tr>
        <td></td>
        <td colspan="3">
            <form action="/impeltest/public/index.php/insert" method="post">
                <input type="text" name="name" placeholder="Название" autocomplete="off" id="name">
            </form>
        </td>
    </tr>
    <?php $i = 0; ?>
    <?php foreach ($products as $row) { ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td class="operation-col edit" name="<?php echo $row["name"]; ?>" id="<?php echo $row["id"]; ?>">Ред</td>
            <td class="operation-col"><form action="/impeltest/public/index.php/delete/<?php echo $row["id"] ?>" method="post"><button>Удалить</button></form></td>
        </tr>
    <?php } ?>
</table>

<!-- SCRIPTS -->
<script src="http://localhost/impeltest/js/functions.js"></script>

<!-- -->
</body>
</html>
