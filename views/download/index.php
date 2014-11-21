<?php require 'views/header.php'; ?>
<div id="main">
    <div class="container all-content">
        <div class="main-content">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" 
                        aria-hidden="true">
                    &times;
                </button>
                <span><b>Notice:</b> Thank you everyone for making #Changemakers such a wonderful event.</span>
                <span class="alert-desc" style="display: block"></span>
            </div>
            <div class="span8 left-cntnt">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="active item">
                            <img src="/images/item1.jpg" alt="Slide1" />
                        </div>
                        <div class="item">
                            <img src="/images/item2.jpg" alt="Slide2" />
                        </div>
                        <div class="item">
                            <img src="/images/item3.jpg" alt="Slide3" />
                        </div>
                    </div>
                    <a class="carousel-control left " href="#myCarousel" data-slide="prev">
                        <i class="icon-chevron-left-sign"></i></a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <i class="icon-chevron-right-sign"></i>
                    </a>

                </div>
            </div>
            <div class="span5 overflow">
            <div class="tbl-hdr"><h2>Download Payslips</h2></div>
            <table border="2" class="table table-hover table-condensed table-bordered">
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
            </div>
        </div>
    </div>
</div>
    <?php require 'views/footer.php'; ?>