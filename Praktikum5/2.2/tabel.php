<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-sm table-hover">
				<thead>
					<tr>
                        <th>No</th>
                        <th>No Account</th>
                        <th>Pemilik</th>
                        <th>Saldo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
                        require_once 'class_account.php';
                        $ab1 = new AccountBank(123, 5000000, 'Ian');
                        $ab2 = new AccountBank(456, 9000000, 'Anna');
                        $ab3 = new AccountBank(789, 1000000, 'Inem');
                        ?>
                        <td>1</td>
                        <td><?php echo $ab1->no; ?></td>
                        <td><?php echo $ab1->saldo; ?></td>
                        <td><?php echo $ab1->customer; ?></td>
					</tr>
					<tr>
						<td>2</td>
                        <td><?php echo $ab2->no; ?></td>
                        <td><?php echo $ab2->saldo; ?></td>
                        <td><?php echo $ab2->customer; ?></td>
					</tr>
					<tr>
						<td>3</td>
                        <td><?php echo $ab3->no; ?></td>
                        <td><?php echo $ab3->saldo; ?></td>
                        <td><?php echo $ab3->customer; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>