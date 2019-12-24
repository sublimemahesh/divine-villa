<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $FACILITY_PHOTO = new FacilityPhoto($_POST['id']);

    unlink(Helper::getSitePath() . "upload/facility/gallery/" . $FACILITY_PHOTO->image_name);
    unlink(Helper::getSitePath() . "upload/facility/gallery/thumb/" . $FACILITY_PHOTO->image_name);

    $result = $FACILITY_PHOTO->delete();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}