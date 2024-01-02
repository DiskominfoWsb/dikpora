<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $article->title; ?></title>
    <meta name="title" content="<?php echo $article->title; ?>">
    <meta name="description" content="<?php echo str_replace("\n"," ",trim(substr(strip_tags(strip_image_tags($article->content)),0,150))); ?>">
    <meta name="keywords" content="<?php echo $article->tags; ?>">
    <meta name="author" content="Disdikpora Kabupaten Wonosobo">
    <!-- Socials share -->
    <meta property="og:site_name"   content="Disdikpora Kabupaten Wonosobo">
    <meta property="og:url"         content="<?php echo current_url(); ?>">
    <meta property="og:locale"      content="id_ID">
    <meta property="og:type"        content="article">
    <meta property="og:title"       content="<?php echo $article->title; ?>">
    <meta property="og:description" content="<?php echo str_replace("\n"," ",trim(substr(strip_tags(strip_image_tags($article->content)),0,150))); ?>">
    <meta property="og:image"       content="<?php if(@$article->featured_image){echo $article->featured_image;}else{echo base_url('assets/dikpora_logobulet.png');} ?>">
    <meta name="twitter:site"           content="@Disdikpora Kabupaten Wonosobo">
    <meta name="twitter:card"           content="summary">
    <meta name="twitter:title"          content="<?php echo $article->title; ?>">
    <meta name="twitter:description"    content="<?php echo str_replace("\n"," ",trim(substr(strip_tags(strip_image_tags($article->content)),0,150))); ?>">
    <meta name="twitter:creator"        content="@Disdikpora Kabupaten Wonosobo">
    <meta name="twitter:image"          content="<?php if(@$article->featured_image){echo $article->featured_image;}else{echo base_url('assets/dikpora_logobulet.png');} ?>">
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/dikpora_logobulet.png">
    <!-- Bootstrap CSS Only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Inconsolata|Nunito|Mukta|Dosis|Exo+2">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/styles.css?<?php echo now(); ?>">
    <style type="text/css">
        body {
            background-color: #ebebeb;
        }
        article {

        }
        img[alt='img-float-left'] {
            margin-top: 7px;
            margin-right: 8px;
        }
        img[alt='img-float-right'] {
            margin-top: 7px;
            margin-left: 8px;
        }
        img[alt='img-align-center'] {
            display: block;
            margin: auto;
            text-align: center;
        }

        #sidebar {
            margin: 0 1.25rem 0 1.25rem;
            border-radius: .75rem;
        }
        #sidebar .sidebar-header {
            background-color: #fc4a1a;
            opacity: .95;
        }
        #sidebar .sidebar-news {

        }
        #sidebar .sidebar-news .sidebar-header {
            border-top-left-radius: .75rem;
            border-top-right-radius: .75rem;
        }
        #sidebar .sidebar-news .sidebar-body {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        #sidebar .sidebar-news .sidebar-body .sidebar-image {
            height: 125px;
            border-top-left-radius: .75rem;
            border-top-right-radius: .75rem;
            background-size: cover;
            background-position: center;
        }
        #sidebar .sidebar-news .sidebar-body .sidebar-title {
            background-image: url('<?php echo base_url(); ?>/assets/bg_berita2.png');
            background-size: cover;
            background-position: center center;
            border-bottom-left-radius: .75rem;
            border-bottom-right-radius: .75rem;
        }
        #sidebar .sidebar-tags .sidebar-header{
            border-bottom-left-radius: .75rem;
            border-bottom-right-radius: .75rem;
        }

        #article h1 {
            font-size: 26.5px;
        }
        #article article p {
            line-height: 1.5;
            font-size: 15.5px;
        }
    </style>
</head>

<body id="_top">
<!-- Page header with logo and tagline-->
<header id="header-article" class="sticky-top">
    <!-- Navbar brand collapsed-->
    <nav id="navku" class="navbar">
        <div class="container">
            <a class="d-block a-normal text-dark" href="<?php echo base_url(); ?>">
                <div id="brandku" class="d-flex justify-content-start align-items-start">
                    <div class="pe-2">
                        <img src="<?php echo base_url(); ?>/assets/logo-kabupaten-wonosobo-min.png" height="35" width="auto">
                    </div>
                    <div class="pe-4">
                        <small class="fw-bolder" style="line-height: 0;">PEMERINTAH DAERAH<br>KAB. WONOSOBO</small>
                    </div>
                    <div class="pe-2 cursor-pointer">
                        <img src="<?php echo base_url(); ?>/assets/dikpora_logobulet.png" height="35" width="auto">
                    </div>
                    <div class="mt-1 cursor-pointer">
                        <small class="fw-bolder">
                            <strong>DISDIKPORA</strong>
                            <span><br>KAB. WONOSOBO</span>
                        </small>
                    </div>
                </div>
            </a>
            <div class="d-flex justify-content-end align-items-center">
                <ul class="navbarku">
                    <li><a href="<?php echo base_url(); ?>" class="a-normal text-light">Beranda</a></li>
                    <?php $menu1 = $navMenu1; ?>
                    <li>
                        <a href="javascript:void(0)<?php //echo base_url('halaman/'.$menu1['nav_slug']);?>" class="a-normal text-light">
                            <?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?>
                        </a>
                        <table border="0" style="margin-left: -8%;">
                            <tr>
                                <th colspan="2"><small>&nbsp;</small></th>
                            </tr>
                            <tr>
                                <td style="background-image: url('<?php echo $menu1['page'][$menu1['menu']['menu_ID']]['featured_image'];?>'); background-size: cover;">
                                    <div class="d-block">
                                        <h5 class="pt-2 mb-0"><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?></h5>
                                        <p><small><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['content'];?></small></p>
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <?php for($i=0; $i<count($menu1['menu']['menu_child']); $i++): ?>
                                            <li<?php if($menu1['menu']['menu_child'][$i]['menu_child']) echo ' class="induk-semang"'; ?>>
                                                <a href="<?php echo base_url('halaman/'.$menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                    <?php echo $menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['title']; ?>
                                                    <?php if($menu1['menu']['menu_child'][$i]['menu_child']) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                </a>
                                                <?php
                                                if($menu1['menu']['menu_child'][$i]['menu_child'])
                                                {
                                                    $childs = $menu1['menu']['menu_child'][$i]['menu_child'];
                                                    echo '<ul class="anak-semang">';
                                                    for($j=0;$j<count($childs);$j++)
                                                    {
                                                        $punyaAnak1 = ($childs[$j]['menu_child']) ? true : false;
                                                        $li1 = ($punyaAnak1) ? '<li class="induk-semang">' : '<li>';
                                                        echo $li1;
                                                        ?>
                                                        <a href="<?php echo base_url('halaman/'.$menu1['page'][$childs[$j]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                            <?php echo $menu1['page'][$childs[$j]['menu_ID']]['title']; ?>
                                                            <?php if($punyaAnak1) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                        </a>
                                                        <?php
                                                        if($childs[$j]['menu_child'])
                                                        {
                                                            $childz = $childs[$j]['menu_child'];
                                                            echo '<ul class="anak-semang">';
                                                            for($k=0;$k<count($childz);$k++)
                                                            {
                                                                $punyaAnak2 = ($childz[$k]['menu_child']) ? true : false;
                                                                $li2 = ($punyaAnak2) ? '<li class="induk-semang">' : '<li>';
                                                                echo $li2;
                                                                ?>
                                                                <a href="<?php echo base_url('halaman/'.$menu1['page'][$childz[$k]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                                    <?php echo $menu1['page'][$childz[$k]['menu_ID']]['title']; ?>
                                                                    <?php if($punyaAnak2) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                                </a>
                                                                <?php
                                                                echo '</li>';
                                                            }
                                                            echo '</ul>';
                                                        }
                                                        echo '</li>';
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <!-- /$navMenu1 -->
                    <?php $menu1 = $navMenu2; ?>
                    <li>
                        <a href="javascript:void(0)<?php //echo base_url('halaman/'.$menu1['nav_slug']);?>" class="a-normal text-light">
                            <?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?>
                        </a>
                        <table border="0" style="margin-left: -11%;">
                            <tr>
                                <th colspan="2"><small>&nbsp;</small></th>
                            </tr>
                            <tr>
                                <td style="background-image: url('<?php echo $menu1['page'][$menu1['menu']['menu_ID']]['featured_image'];?>'); background-size: cover;">
                                    <div class="d-block">
                                        <h5 class="pt-2"><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?></h5>
                                        <p><small><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['content'];?></small></p>
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>/dip" class="a-normal text-dark">DIP</a>
                                        </li>
                                        <?php for($i=0; $i<count($menu1['menu']['menu_child']); $i++): ?>
                                            <li<?php if($menu1['menu']['menu_child'][$i]['menu_child']) echo ' class="induk-semang"'; ?>>
                                                <a href="<?php echo base_url('halaman/'.$menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                    <?php echo $menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['title']; ?>
                                                    <?php if($menu1['menu']['menu_child'][$i]['menu_child']) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                </a>
                                                <?php
                                                if($menu1['menu']['menu_child'][$i]['menu_child'])
                                                {
                                                    $childs = $menu1['menu']['menu_child'][$i]['menu_child'];
                                                    echo '<ul class="anak-semang">';
                                                    for($j=0;$j<count($childs);$j++)
                                                    {
                                                        $punyaAnak1 = ($childs[$j]['menu_child']) ? true : false;
                                                        $li1 = ($punyaAnak1) ? '<li class="induk-semang">' : '<li>';
                                                        echo $li1;
                                                        ?>
                                                        <a href="<?php echo base_url('halaman/'.$menu1['page'][$childs[$j]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                            <?php echo $menu1['page'][$childs[$j]['menu_ID']]['title']; ?>
                                                            <?php if($punyaAnak1) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                        </a>
                                                        <?php
                                                        if($childs[$j]['menu_child'])
                                                        {
                                                            $childz = $childs[$j]['menu_child'];
                                                            echo '<ul class="anak-semang">';
                                                            for($k=0;$k<count($childz);$k++)
                                                            {
                                                                $punyaAnak2 = ($childz[$k]['menu_child']) ? true : false;
                                                                $li2 = ($punyaAnak2) ? '<li class="induk-semang">' : '<li>';
                                                                echo $li2;
                                                                ?>
                                                                <a href="<?php echo base_url('halaman/'.$menu1['page'][$childz[$k]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                                    <?php echo $menu1['page'][$childz[$k]['menu_ID']]['title']; ?>
                                                                    <?php if($punyaAnak2) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                                </a>
                                                                <?php
                                                                echo '</li>';
                                                            }
                                                            echo '</ul>';
                                                        }
                                                        echo '</li>';
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <!-- $navMenu2 -->
                    <li><a href="<?php echo base_url(); ?>/transparansi-anggaran" class="a-normal text-light">Transparansi</a></li>
                    <?php $menu1 = $navMenu3; ?>
                    <li>
                        <a href="javascript:void(0)<?php //echo base_url('halaman/'.$menu1['nav_slug']);?>" class="a-normal text-light">
                            <?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?>
                        </a>
                        <table border="0" style="margin-left: -11%;">
                            <tr>
                                <th colspan="2"><small>&nbsp;</small></th>
                            </tr>
                            <tr>
                                <td style="background-image: url('<?php echo $menu1['page'][$menu1['menu']['menu_ID']]['featured_image'];?>'); background-size: cover;">
                                    <div class="d-block">
                                        <h5 class="pt-2"><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['title'];?></h5>
                                        <p><small><?php echo $menu1['page'][$menu1['menu']['menu_ID']]['content'];?></small></p>
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>/layanan-pengaduan-masyarakat" class="a-normal text-dark">
                                                Pengaduan Masyarakat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>/layanan-permohonan-informasi" class="a-normal text-dark">
                                                Permohonan Informasi
                                            </a>
                                        </li>
                                        <?php for($i=0; $i<count($menu1['menu']['menu_child']); $i++): ?>
                                            <li<?php if($menu1['menu']['menu_child'][$i]['menu_child']) echo ' class="induk-semang"'; ?>>
                                                <a href="<?php echo base_url('halaman/'.($menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['slug']??"")); ?>" class="a-normal text-dark">
                                                    <?php echo $menu1['page'][$menu1['menu']['menu_child'][$i]['menu_ID']]['title']??""; ?>
                                                    <?php if($menu1['menu']['menu_child'][$i]['menu_child']??"") echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                </a>
                                                <?php
                                                if($menu1['menu']['menu_child'][$i]['menu_child'])
                                                {
                                                    $childs = $menu1['menu']['menu_child'][$i]['menu_child'];
                                                    echo '<ul class="anak-semang">';
                                                    for($j=0;$j<count($childs);$j++)
                                                    {
                                                        $punyaAnak1 = ($childs[$j]['menu_child']) ? true : false;
                                                        $li1 = ($punyaAnak1) ? '<li class="induk-semang">' : '<li>';
                                                        echo $li1;
                                                        ?>
                                                        <a href="<?php echo base_url('halaman/'.$menu1['page'][$childs[$j]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                            <?php echo $menu1['page'][$childs[$j]['menu_ID']]['title']; ?>
                                                            <?php if($punyaAnak1) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                        </a>
                                                        <?php
                                                        if($childs[$j]['menu_child'])
                                                        {
                                                            $childz = $childs[$j]['menu_child'];
                                                            echo '<ul class="anak-semang">';
                                                            for($k=0;$k<count($childz);$k++)
                                                            {
                                                                $punyaAnak2 = ($childz[$k]['menu_child']) ? true : false;
                                                                $li2 = ($punyaAnak2) ? '<li class="induk-semang">' : '<li>';
                                                                echo $li2;
                                                                ?>
                                                                <a href="<?php echo base_url('halaman/'.$menu1['page'][$childz[$k]['menu_ID']]['slug']); ?>" class="a-normal text-dark">
                                                                    <?php echo $menu1['page'][$childz[$k]['menu_ID']]['title']; ?>
                                                                    <?php if($punyaAnak2) echo ' <i class="bi bi-chevron-right"></i>'; ?>
                                                                </a>
                                                                <?php
                                                                echo '</li>';
                                                            }
                                                            echo '</ul>';
                                                        }
                                                        echo '</li>';
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <!-- /$navMenu3 -->
                    <li><a href="<?php echo base_url(); ?>/download-area" class="a-normal text-light">Download</a></li>
                    <li>
                        <a href="<?php echo base_url('login'); ?>" class="py-1 px-3 text-light a-normal signup-light">
                            <small class="d-block">sign in</small>
                        </a>
                    </li>
                </ul>
                <a href="javascript:void(0)" class="menu-toggler">
                    <i class="bi bi-list text-light fs-1 fw-bold"></i>
                </a>
            </div>
        </div>
    </nav>
</header>
