<?php require 'layout/header.php';?>

    <div id="Genel">

        <div id="Sol">
            <div id="makale-oku">
                <div class="myazi">
                    <h1> <?=$query['postTitle']?> </h1>
                    <?=$query['post']?>
                </div>
            </div>

            <div id="makale_yorumlari">

                <div class="yorumyap">
                    <h1>Yorum Yap !</h1>
                    <form action="#" method="post">
                        <textarea name="comment" id ="comment" class="yorumyap_t"></textarea>
                        <input type="submit" name="submit" value="Yorumu Gönder"/>
                    </form>
                </div>

                <?php
                $image = assetUrl('images/site/avatar.jpg');

                foreach ($queryCommentSelect as $row){
                    $date = date('d-m-Y H:i:s' , strtotime($row['commentDate']));
                    echo "
                    <div class='yorumlistele'>
                        <span class='userimg'><img src='$image' height='40px' width='40px' alt=''></span>
                        <div class='yooorrum'>
                            <div class='y_gonderen'>
                                <h5>Anonim <span>$date</span></h5>
                                <div class='i_begen'>
                                    <span class='like_count'>()</span>
                                    <span class='like' onclick='notDone();'></span>
                                    <span class='dislike_count'>()</span>
                                    <span class='dislike' onclick='notDone();'></span>
                                </div>
                            </div>
                            <p>$row[comment]</p>
                            <div class='t'></div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>

        <div id="Sag">
            <div class="Sag_Kapla" style="text-align:center;font-weight:bold;cursor:pointer"><a href="<?=$query['downloadLink']?>" target="_blank">Dosyaları İndir</a></div>
            <div class="Sag_Kapla" style="text-align:center;font-weight:bold"><a href="<?=$query['demoLink']?>"target="_blank">DEMOYU GÖRÜNTÜLE</a></div>
            <div class="Sag_Kapla" style="text-align:center;font-weight:bold;cursor:pointer;color:#c84e4e" onclick="notDone();">HATA / SORUN BİLDİR</div>
            <?php require 'layout/rightColumn.php';?>
        </div>


    </div>


    <div class="t"></div>



<?php require 'layout/footer.php';?>