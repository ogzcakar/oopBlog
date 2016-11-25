<?php require 'layout/header.php';?>

<div id="Genel">

    <div id="Sol">
        <?php
        foreach ($query as $row) {
            $image = assetUrl('images/post.png');
            $post = substr($row['post'],0,550).'...';
            $date = date('d-m-Y H:i:s' , strtotime($row['postTime']));
            $url = siteUrl('home/post/'). $row['postTitleSlug'];
            echo"
                     <div class='Makale'>
                        <h1><a href='$url'>$row[postTitle]</a></h1>
                        <img src='$image' alt='$row[postTitle]'/>
                        <p>$post</p>
                    </div>
                    <div class='EkBilgiler'>
                        <ul>
                            <li><div class='e_gonderen'>Admin</div></li>
                            <li><div class='e_kat'>$row[categoryName]</div></li>
                            <li><div class='e_tarih'>$date</div></li>
                        </ul>
                    </div>
                ";
        }
        ?>

        <div id="sayfalama">
            <ul>
                <?=$page?>
            </ul>
        </div>
    </div>

    <div id="Sag">
        <?php require 'layout/rightColumn.php';?>
    </div>
</div>

<div class="t"></div>

<?php require 'layout/footer.php';?>
