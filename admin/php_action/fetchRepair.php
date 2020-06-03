<?php

require_once 'core.php';

$sql = "SELECT repair_report.repair_id, repair_report.product_code, product.product_style, repair_report.repair_who_create,
                repair_report.repair_detail, repair_report.repair_status
                FROM repair_report
                INNER JOIN product ON repair_report.product_code = product.product_code";

$result = $connect->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $repairId = $row[0];
        $ProductCode = $row[1];
        $pStyle = $row[2];
        $fullname = $row[3];
        $repair_detail = $row[4];

        if ($row[5] == 0) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#660000;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>แจ้งซ่อม</span>";
        } elseif ($row[5] == 1) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#120eeb;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>รอดำเนินการ</label>";
        } elseif ($row[5] == 2) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#d940ff;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>รออะไหล่</label>";
        } elseif ($row[5] == 3) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#06d628;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>ซ่อมสำเร็จ</label>";
        } elseif ($row[5] == 4) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#ff0000;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>ซ่อมไม่สำเร็จ</label>";
        } elseif ($row[5] == 5) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#ff6ff0;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>ยกเลิกการซ่อม</label>";
        } elseif ($row[5] == 6) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#ff6ff0;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>ส่งมอบเรียบร้อย</label>";
        } elseif ($row[5] == 7) {
            $status = "<span style='font-size:11px;font-weight: normal; background:#ff6ff0;padding: .2em .6em .3em;display: inline;border-radius: .25em;color: #ffffff;'>ส่งซ่อมศูนย์</label>";
        }

        $button = '<!-- Single button -->
	 <div class="btn-group" role="group">
	 <button type="button" class="btn btn-warning" data-toggle="modal" id="editCategoriesModalBtn" data-target="#editCategoriesModal" onclick="editCategories(' . $repairId . ')"> <i class="glyphicon glyphicon-edit"></i> แก้ไข</button>
	 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeCategoriesModal" id="removeCategoriesModalBtn" onclick="removeCategories(' . $repairId . ')"> <i class="glyphicon glyphicon-trash"></i> ลบ</button>
	
	</div>
	';

        $output['data'][] = array(
            $ProductCode,
            $pStyle,
            $fullname,
            $repair_detail,
            $status,
            $button
        );
    } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);
