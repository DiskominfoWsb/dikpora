<?php

function getNavMenu($index = 0, $db)
{
    $navMenu = getOption('nav_menu', $db);
    $navMenu = unserialize($navMenu);
    $navMenu = $navMenu[$index];

    $pageIDs = [$navMenu['menu_ID']];
    $childs  = $navMenu['menu_child'];
    for($i=0; $i<count($childs); $i++)
    {
        array_push($pageIDs, $childs[$i]['menu_ID']);
        $childz = $childs[$i]['menu_child'];
        for($j=0; $j<count($childz); $j++)
        {
            array_push($pageIDs, $childz[$j]['menu_ID']);
            $childx = $childz[$j]['menu_child'];
            for($k=0; $k<count($childx); $k++)
            {
                array_push($pageIDs, $childx[$k]['menu_ID']);
                $child0 = $childx[$k]['menu_child'];
                for($l=0; $l<count($child0); $l++)
                {
                    array_push($pageIDs, $child0[$l]['menu_ID']);
                }
            }
        }
    }

    $builder = $db->table('page');
    $builder->select('ID,ID_page,title,slug,content,featured_image');
    $builder->whereIn('ID', $pageIDs);
    $result = $builder->get()->getResultArray();
    $realPages = [];
    foreach($result as $res)
    {
        $realPages[$res['ID']] = $res;
    }

    return [
        'menu'  => $navMenu,
        'page'  => $realPages,
    ];
}