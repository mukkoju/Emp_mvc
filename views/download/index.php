<?php require 'views/header.php'; ?>


<h2>Download your pay slips <a href="">here</a></h2>

<table border="2" height="auto" width="400px">
    <tr><th>payslip</th>
        <th>download</th>
    </tr>
    <?php $row = $this->get_slips; ?>
    <?php for ($i = 0; $i < sizeof($row); $i++) { ?>
        <tr><td align="center"><?php echo $row[$i]['slip']; ?></td>
            <td align="center"><a href="/download/down_slips/<?php echo $row[$i]['slip']; ?>">Download</a></td>
        </tr>
    <?php } ?>
</table>
<?php require 'views/footer.php'; ?>