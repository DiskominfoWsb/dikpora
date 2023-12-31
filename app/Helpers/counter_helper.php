<?php

//need session
//need date and option helper
function doVisitation($db)
{
    $expired    = 86400;
    $today      = date('Y-m-d', now());
    $counterOpt = getOption('counter_visit', $db);
    $optionVal  = 1;

    if($counterOpt)
    {
        $counterOpt = (int)$counterOpt;
        $visitation = session()->visitation;
        if($visitation)
        {
            if($visitation == $today)
            {
                $optionVal = $counterOpt;
            }
            else
            {
                $optionVal = $counterOpt + 1;
            }
        }
        else
        {
            session()->setTempdata('visitation', $today, $expired);
            $optionVal = $counterOpt + 1;
        }
    }

    updateOption('counter_visit', $optionVal, $db);

}

//need date and option helper
function doView($db)
{
    $counterOpt = getOption('counter_view', $db);
    $counterOpt = intval($counterOpt);
    updateOption('counter_view', $counterOpt+1, $db);
}