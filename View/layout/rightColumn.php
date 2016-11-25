
<!-- Sosyal Medya -->
<div class="Sag_Kapla">
    <div class="sosyalmedya">
        <a href="<?=facebookUrl?>" class="facebook" target="_blank">Facebook</a>
        <a href="<?=twitterUrl?>" class="twitter" target="_blank">Twitter</a>
        <a href="<?=youtubeUrl?>" class="youtube" target="_blank">Youtube</a>
    </div>
</div>
<!-- Kategoriler -->
<div class="Sag_Kapla">
    <div id="Kategoriler">
        <ul>
            <li>
                <?php
                foreach ($categorysComment['category'] as $category){
                    $url = siteUrl('home/category/'). $category['categoryNameSlug'];
                    echo "<a href='$url'>$category[categoryName]</a>";
                }
                ?>
            </li>
        </ul>
        <div class="t"></div>
    </div>
</div>
<!-- Son Yorumlar -->
<div class="Sag_Kapla">
    <div id="Yorumlar">
        <?php
        $image = assetUrl('images/site/avatar.jpg');
        foreach ($categorysComment['lastComment'] as $lastComment) {
            $comment = substr($lastComment['comment'],0,100).'...';
            $url = siteUrl('home/post/'). $lastComment['postTitleSlug'];
            echo "
            <div class='yorumlar' style='margin-top:0px'>
                <img src='$image' alt=''/>
                <span>Anonim</span>
                <p><a href='$url'> $comment </a></p>
                <div class='t'></div>
            </div>
        ";
        }
        ?>
    </div>
</div>

