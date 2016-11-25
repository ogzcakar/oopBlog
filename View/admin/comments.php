<?php require 'layout/navSidebar.php';
require 'layout/header.php';?>


<div class="content">

    <div class="box-">
        <h1>
            Yorumlar
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th class="hide">Yorum</th>
                <th class="hide">Konu</th>
                <th class="hide">Tarih - Saat</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ( $query ){
                foreach ($query as $row) {
                    $deleteUrl = siteUrl('admin/commentDelete/'.$row['commentId']);
                    $date = date('d-m-Y H:i:s' , strtotime($row['commentDate']));
                    echo"
                         <tr>
                           <td class='hide'>
                                $row[commentId]
                            </td>
                            <td>
                                <a href='#' class='title'>
                                    $row[comment]
                                </a>
                                <div class='magic-links'>
                                    <a href='$deleteUrl' class='trash'>Sil</a> 
                                </div>
                            </td>
                            <td class='hide'>
                                $row[postTitle]
                            </td>
                            <td class='hide'>
                                $date
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
