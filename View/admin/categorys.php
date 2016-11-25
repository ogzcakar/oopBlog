<?php require 'layout/navSidebar.php';
require 'layout/header.php';?>


<div class="content">

    <div class="box-">
        <h1>
            Kategoriler
            <a href="<?=siteUrl('admin/categoryAdd')?>">Kategori Ekle</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kategori Id</th>
                <th class="hide">Kategori Adı</th>
                <th class="hide">Kategori Link</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ( $query ){
                foreach ( $query as $row ){
                    $updateUrl = siteUrl('admin/categoryUpdate/'.$row['categoryId']);
                    $deleteUrl = siteUrl('admin/categoryDelete/'.$row['categoryId']);
                    echo"
                         <tr>
                           <td class='hide'>
                                $row[categoryId]
                            </td>
                            <td>
                                <a href='#' class='title'>
                                    $row[categoryName]
                                </a>
                                <div class='magic-links'>
                                    <a href='$updateUrl'>Güncelle</a> | 
                                    <a href='$deleteUrl' class='trash'>Sil</a> 
                                </div>
                            </td>
                            <td class='hide'>
                                $row[categoryNameSlug]
                            </td>
                        </tr>
                    ";
                }
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<?php require 'layout/footer.php';?>
