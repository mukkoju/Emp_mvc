<?php require 'views/header.php'; ?>

<div class="salaries span16 table-responsive">
    <table class="table table-hover table-bordered">
        <tr><th>Select</th>
            <th>Name</th>
            <th>Max-payable</th>
            <th>#Leaves</th>
            <th>Net-payable</th>
            <th>Status</th>
            <th>Add</th>
            
        </tr>
        <?php $row = $this->all_user_details; ?>
        <?php for ($i = 0; $i < sizeof($row); $i++) { ?>
        <tr>
            <td><input type="checkbox" name="checkbox" value="1" class="checkbox"></td>
            <td  class="sal-name"><?php echo $row[$i]['emp_name']; ?></td>
            <td id=""><input type="text"  class="max-pay" value="20000" style="border: none; height: 50px; width: 95px; margin-top: 0px; outline: none;"></td>
            <td id=""><input type="text"  class="mtnh-leavs" style="border: none; height: 50px; width: 95px; margin-top: 0px; outline: none;"></td>
            <td contenteditable="true"  class="tol-pay  "><?php ?>19000</td>
            <td hidden><input type="text" name="" value="<?php echo $row[$i]['emp_email']; ?>" class="email"></td>
            <input type="hidden" name="" value="Payslip-<?php echo $date = date("F-Y"); ?>.pdf" class="payslip-name">
            <input type="hidden" name="" value="<?php echo $row[$i]['designation']; ?>" class="desigination">
            <input type="hidden" name="" value="<?php echo $row[$i]['gender']; ?>" class="gender">
            <input type="hidden" name="" value="date of joing" class="doj">
            <input type="hidden" name="" value="<?php echo $row[$i]['dob']; ?>" class="dob">
            <input type="hidden" name="" value="pf account no not in db" class="pf_ac">
            <input type="hidden" name="" value="PAN not in DB" class="pan">
            <input type="hidden" name="" value="BANK ac" class="bank">
            <input type="hidden" name="" value="ifsc code" class="ifsc">
            <input type="hidden" name="" value="avible days" class="avilble_days">
            <input type="hidden" name="" value="paid days" class="paid_days">
            <input type="hidden" name="" value="loss of days" class="loss-days">
            <input type="hidden" name="" value="basic" class="basic">
            <input type="hidden" name="" value="hra" class="hra">
            <input type="hidden" name="" value="conveyance_allowance" class="conveyance">
            <input type="hidden" name="" value="Spcl_allowance" class="Spcl_allowance">
            <input type="hidden" name="" value="(A) Total Earnings" class="a">
            <input type="hidden" name="" value="TDS" class="tds">
            <input type="hidden" name="" value="PF" class="pf">
            <input type="hidden" name="" value="PT" class="pt">
            <input type="hidden" name="" value="(B) Total Deductions" class="b">
            <input type="hidden" name="" value="Net Salary=(A)-(B)" class="a-b">
            <td>No</td>
            <td><input type="button" value="add"  class="add"></td>
        </tr>
            <?php  }?>
</table>
    <input type="button" id="process" class="btn btn-info" value="Process"name="textarea_hidden" style="color: black;">
</div>
<div style="float: left">
 <ol id="addhereform">
<li></li>
</ol>
</div>
<?php require 'views/footer.php'; ?>