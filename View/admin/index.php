<?php require 'layout/navSidebar.php';?>
<?php require 'layout/header.php';?>


<div class="content">

    <div class="box-">
        <h1>
            Yazılar
            <a href="<?=siteUrl('admin/postAdd')?>">Yazı Ekle</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Blog Id</th>
                <th class="hide">Blog Başlık</th>
                <th class="hide">Kategori</th>
                <th class="hide">İndirme Linki</th>
                <th class="hide">Demo Linki</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ( $query ){
                foreach ( $query as $row ){
                    $updateUrl = siteUrl('admin/postUpdate/'.$row['postId']);
                    $deleteUrl = siteUrl('admin/postDelete/'.$row['postId']);
                    echo "
                        <tr>
                            <td class='hide'>
                                <a href='#'>$row[postId]</a>
                            </td>
                            <td>
                                <a href='#' class='title'>
                                  $row[postTitle]
                                </a>
                                <div class='magic-links'>
                                    <a href='$updateUrl'>Güncelle</a> |
                                     <a href='$deleteUrl' class='trash'>Sil</a>
                                </div>
                            </td>
                            <td class='hide'>
                                $row[categoryName]
                            </td>
                            <td class='hide'>
                                $row[downloadLink]
                            </td>
                            <td class='hide'>
                                $row[demoLink]
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
