<?php

class Home_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getUserDetails($em) {
        $sth = $this->db->prepare("SELECT * FROM user WHERE email = :email");
        $sth->execute(array(
            ':email' => $em));
        $row = $sth->rowCount();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getLeavesDeatils($em) {
        $date = date("j-n-Y");


        $sth6 = $this->db->prepare("SELECT * FROM leaves ORDER BY apply_date DESC");
        $sth6->execute(array(
            ':date' => $date));
        // print_r($sth6->errorInfo());
        $row = $sth6->rowCount();
        $res = $sth6->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getLeavesDeatilsByHr($em) {
        $date = date("j-n-Y");


        $sth6 = $this->db->prepare("SELECT * FROM leaves WHERE manager_status = 'Approved' ORDER BY apply_date DESC");
        $sth6->execute();
        // print_r($sth6->errorInfo());
        $row = $sth6->rowCount();
        $res = $sth6->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function register() {

        $sth8 = $this->db->prepare("INSERT INTO new_emp(emp_name, emp_id, emp_email, password, phone_no, dob, fathername, mothername, age, bloodgroup, address, "
                . "            gender, spousename, emr_name, emr_relation, emr_phone, emr_email, designation, department, bank_account, pf_account, pan, ifsc_code, basic_salarie) "
                . "                VALUE(:emp_name, :emp_id, :emp_email, :password, :phone_no, :dob, :fathername, :mothername,"
                . "                      :age, :bloodgroup, :address, :gender, :spousename, :emr_name, :emr_relation, :emr_phone,"
                . "                      :emr_email, :designation, :department, :bank_acc, :pf_acc, :pan, :ifsc, :basic_sal)");
        $insert = $sth8->execute(array(':emp_name' => $_POST['emp_name'],
            ':emp_id' => $_POST['emp_id'],
            ':emp_email' => $_POST['emp_email'],
            ':password' => trim(md5($_POST['password'])),
            ':phone_no' => $_POST['emp_phno'],
            ':dob' => $_POST['dob'],
            ':fathername' => $_POST['fathername'],
            ':mothername' => $_POST['mothername'],
            ':age' => $_POST['age'],
            ':bloodgroup' => $_POST['bloodgroup'],
            ':address' => $_POST['address'],
            ':gender' => $_POST['gender'],
            ':spousename' => $_POST['spousename'],
            ':emr_name' => $_POST['emr_name'],
            ':emr_relation' => $_POST['emr_relation'],
            ':emr_phone' => $_POST['emr_phone'],
            ':emr_email' => $_POST['emr_email'],
            ':designation' => $_POST['designation'],
            ':department' => $_POST['department'],
            ':bank_acc' => $_POST['bank_acc'],
            ':pf_acc' => $_POST['pf_acc'],
            ':pan' => $_POST['pan'],
            ':ifsc' => $_POST['ifsc'],
            ':basic_sal' => $_POST['basic_sal']
        ));
        if ($insert == true) {
            $status = "Registerd sucessfully";
        } else {
            $status = "Somthiong wrong EMP adding failed";
            print_r($sth8->errorInfo());
        }
        return $status;
    }

    public function pdf() {

        require 'controllers/phpToPDF.php';

        $html = '<HTML><h2>PDF from HTML using phpToPDF</h2></HTML>';
        $folder = "/var/www/emp_mvc/uploads/kkk@gmail.com";
        $pdf_options = array("source_type" => 'html',
            "source" => $html,
            "action" => 'save',
            "save_directory" => $folder,
            "file_name" => 'my_filename1.pdf');

        $phptopdf = phptopdf($pdf_options);

        if ($phptopdf == true) {
            echo "ok";
        } else {
            echo "errrr";
        }
    }

    public function mpdf($em) {

        include 'mpdf/mpdf.php';


        $mpdf = new mPDF();
        $post = $_POST["slctd_emp"];
        //echo sizeof($post);
        for ($i = 0; $i < sizeof($post); $i++) {

            $email = $post[$i]['mail'];
            //$email = $_POST['mail'];
            // echo "hai $email"; 
            $file_name = $post[$i]['file_name'];
            $month = $post[$i]['month_slip'];
            $year = $post[$i]['year_slip'];

            $folder = "/var/www/Emp_mvc/uploads/$email";
            // $file = "/var/www/emp_mvc/uploads/$file_name";

            $html = '<html><div style="background-image: url(https://localhost:8811/images/letter_head.png); background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;">
        <div style="padding-top: 25%;
    padding-bottom: 25%;"><h5 align="center">"Payslip for the month of ' . $month . ' ' . $year . '</h5><h5 align="center">Financial Period 2013-' . $date = date("Y") . '</h5>
    <table align="center" border="1">
        <tr><th colspan="4">Associate Information</th></tr>
        <tr><td>Name</td>
            <td>' . ($post[$i]['emp_name']) . '</td>
            <td>PAN</td>
            <td>' . ($post[$i]['pan']) . '</td></tr>
        <tr><td>Designation</td>
            <td>' . ($post[$i]['designation']) . '</td>
            <td>Bank A/C</td>
            <td>' . ($post[$i]['bank_a/c']) . '</td></tr>
        <tr><td>Gender</td>
            <td>' . ($post[$i]['gender']) . '</td>
            <td>IFSC Code</td>
            <td>' . ($post[$i]['ifsc']) . '</td></tr>
        <tr><td>Date Of Joining</td>
            <td>' . ($post[$i]['doj']) . '</td>
            <td>Available Calender Days</td>
            <td>' . ($post[$i]['available_days']) . '</td></tr>
        <tr><td>Date Of Birth</td>
            <td>' . ($post[$i]['dob']) . '</td>
            <td>Paid Days</td>
            <td>' . ($post[$i]['paid_days']) . '</td></tr>
        <tr><td>PF A/C</td>
            <td>' . ($post[$i]['pf_a/c']) . '</td>
            <td>Loss Of Days</td>
            <td>' . ($post[$i]['loss_of_days']) . '</td></tr>
    </table><br/>

    <table align="center" border="1" >
        <tr><th>Earnings</th>
            <th>Amount</th>
            <th>Deductions</th>
            <th>Amount</th></tr>
        <tr><td>Basic</td>
            <td>basic</td>
            <td>TDS</td>
            <td>' . ($post[$i]['tds']) . '</td></tr>
        <tr><td>HRA</td>
            <td>' . ($post[$i]['hra']) . '</td>
            <td>PF</td>
            <td>' . ($post[$i]['pf']) . '</td></tr>
        <tr><td>Conveyance Allowance</td>
            <td>' . ($post[$i]['conveyance_allowance']) . '</td>
            <td>PT</td>
            <td>' . ($post[$i]['pt']) . '</td></tr>
        <tr><td>Special Allowance</td>
            <td>' . ($post[$i]['Spcl_allowance']) . '</td>
            <td></td>
            <td></td></tr>
        <tr><td><b>(A) Total Earnings</b></td>
            <td>' . ($post[$i]['a']) . '</td>
            <td><b>(B) Total Deductions</b></td>
            <td>' . ($post[$i]['b']) . '</td></tr>
        <tr><td colspan="3" align="right"><b>Net Salary=(A)-(B)</b></td>

            <td>' . ($post[$i]['net']) . '</td></tr>
    </table></div></div></html>';

            $mpdf->WriteHTML($html);

            if (!file_exists($folder)) {
                mkdir($folder, 0777);
                // echo "Directory sucs";
            } else {
                // echo "Directory creation faild";
            }
            $final = "$folder/$file_name";
            $mpdf->output($final, 'F');
            $month_slip = trim($post[$i]['month_slip']);
            $year_slip = $post[$i]['year_slip'];

            $payslip_month_y = strtotime("1 $month_slip $year_slip");

            $d = new DateTime();

            $d->setTimestamp($payslip_month_y);
            $d->format('U = Y-m-d H:i:s') . "\n";


            $sth11 = $this->db->prepare("INSERT INTO slips(email, slip, month_of_payslip, time) VALUES (:useremail, :slip_name, :payslip_month_year, :time)");
            $insert = $sth11->execute(array(':slip_name' => $post[$i]['file_name'],
                ':useremail' => $email,
                ':payslip_month_year' => "$month_slip$year_slip",
                ':time' => strtotime("now")));
        }
        if ($insert == true) {
            $status = "Pay slip(s) genrated and its uploded to employee(s) desk";
            return $status;
        } else {
            $status = "Please select max one employe to genrate payslip";
            return $status;
        }
    }

    public function paid_deatils($em) {
        $year = $_POST['year'];
        $month = $_POST['month'];
        $payslip_month_y = strtotime("1 $month $year");
        $d = new DateTime();

        $d->setTimestamp($payslip_month_y);
        $d->format('U = Y-m-d H:i:s') . "\n";
        $sth_paid_deatils = $this->db->prepare("SELECT * FROM new_emp WHERE emp_email NOT IN (SELECT email FROM slips WHERE month_of_payslip = :payslip_month_y)");
        $insert = $sth_paid_deatils->execute(array(':payslip_month_y' => "$month$year"));
        $res = $sth_paid_deatils->fetchAll(PDO::FETCH_ASSOC);

        //$result = print_r($res);
        // return $payslip_month_y;
        return $res;

        // array('payslip_date:'=> $_POST['month'].$_POST['year'])
    }

    //    public function mpdf($em) {
    //
    //        include 'mpdf/mpdf.php';
    //
    //
    //        $mpdf = new mPDF();
    //        
    //        $email = $_POST["slctd_emp"][0]['mail'];
    //        //$email = $_POST['mail'];
    //        $file_name = $_POST['file_name'];
    //        $date = date("F Y");
    //        
    //
    //        $folder = "/var/www/emp_mvc/uploads/$email";
    //        // $file = "/var/www/emp_mvc/uploads/$file_name";
    //
    //        $html = '<html><div style="background-image: url(https://localhost:8811/images/letter_head.png); background-position: center;
    //background-repeat: no-repeat;
    //background-size: 100% 100%;">
    //    <div style="padding-top: 25%;
    //padding-bottom: 25%;"><h5 align="center">Payslip for the month of ' . $date . '</h5><h5 align="center">Financial Period 2013-' . $date = date("Y") . '</h5>
    //<table align="center" border="1">
    //    <tr><th colspan="4">Associate Information</th></tr>
    //    <tr><td>Name</td>
    //        <td>' . ($_POST['emp_name']) . '</td>
    //        <td>PAN</td>
    //        <td>' . ($_POST['pan']) . '</td></tr>
    //    <tr><td>Designation</td>
    //        <td>' . ($_POST['designation']) . '</td>
    //        <td>Bank A/C</td>
    //        <td>' . ($_POST['bank_a/c']) . '</td></tr>
    //    <tr><td>Gender</td>
    //        <td>' . ($_POST['gender']) . '</td>
    //        <td>IFSC Code</td>
    //        <td>' . ($_POST['ifsc']) . '</td></tr>
    //    <tr><td>Date Of Joining</td>
    //        <td>' . ($_POST['doj']) . '</td>
    //        <td>Available Calender Days</td>
    //        <td>' . ($_POST['available_days']) . '</td></tr>
    //    <tr><td>Date Of Birth</td>
    //        <td>' . ($_POST['dob']) . '</td>
    //        <td>Paid Days</td>
    //        <td>' . ($_POST['paid_days']) . '</td></tr>
    //    <tr><td>PF A/C</td>
    //        <td>' . ($_POST['pf_a/c']) . '</td>
    //        <td>Loss Of Days</td>
    //        <td>' . ($_POST['loss_of_days']) . '</td></tr>
    //</table><br/>
    //
    //<table align="center" border="1" >
    //    <tr><th>Earnings</th>
    //        <th>Amount</th>
    //        <th>Deductions</th>
    //        <th>Amount</th></tr>
    //    <tr><td>Basic</td>
    //        <td>basic</td>
    //        <td>TDS</td>
    //        <td>' . ($_POST['tds']) . '</td></tr>
    //    <tr><td>HRA</td>
    //        <td>' . ($_POST['hra']) . '</td>
    //        <td>PF</td>
    //        <td>' . ($_POST['pf']) . '</td></tr>
    //    <tr><td>Conveyance Allowance</td>
    //        <td>' . ($_POST['conveyance_allowance']) . '</td>
    //        <td>PT</td>
    //        <td>' . ($_POST['pt']) . '</td></tr>
    //    <tr><td>Special Allowance</td>
    //        <td>' . ($_POST['Spcl_allowance']) . '</td>
    //        <td></td>
    //        <td></td></tr>
    //    <tr><td><b>(A) Total Earnings</b></td>
    //        <td>' . ($_POST['a']) . '</td>
    //        <td><b>(B) Total Deductions</b></td>
    //        <td>' . ($_POST['b']) . '</td></tr>
    //    <tr><td colspan="3" align="right"><b>Net Salary=(A)-(B)</b></td>
    //        
    //        <td>' . ($_POST['net']) . '</td></tr>
    //</table></div></div></html>';
    //        
    //        $mpdf->WriteHTML($html);
    //        
    //        if(!file_exists($folder)) {
    //            mkdir($folder, 0777);
    //            echo "Directory sucs";
    //                    }else{
    //                        echo "Directory creation faild";
    //                    }
    //        $final = "$folder/$file_name";
    //        $mpdf->output($final, 'F');
    //        $sth11 = $this->db->prepare("INSERT INTO slips(email, slip) VALUES (:useremail, :slip_name)");
    //        $insert = $sth11->execute(array(':slip_name' => $_POST['file_name'],
    //            ':useremail' => $_POST['mail']));
    //        if ($insert == true) {
    //            $status = "Pay slip genrated and its uploded to employee desk";
    //            return $status;
    //        } else {
    //            $status = "Somthing wrong While uploading a pay slip";
    //            return $status;
    //        }
    //    }
}
