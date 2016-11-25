<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    ogzcakar OOP Blog
                </span>
            </a>
        </li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-->
<div class="sidebar">

    <ul>
        <li>
            <a href="#">
                <span class="fa fa-tachometer"></span>
                <span class="title">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="active">
            <a href="<?=siteUrl('admin/index')?>">
                <span class="fa fa-thumb-tack"></span>
                <span class="title">
                    Yazılar
                </span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?=siteUrl('admin/index')?>">
                        Yazılar
                    </a>
                </li>
                <li>
                    <a href="<?=siteUrl('admin/postAdd')?>">
                        Yazı Ekle
                    </a>
                </li>
            </ul>
        </li>

        <li class="active">
            <a href="<?=siteUrl('admin/categorys')?>">
                <span class="fa fa-thumb-tack"></span>
                <span class="title">
                    Kategoriler
                </span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?=siteUrl('admin/categorys')?>">
                        Kategoriler
                    </a>
                </li>
                <li>
                    <a href="<?=siteUrl('admin/categoryAdd')?>">
                        Kategori Ekle
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?=siteUrl('admin/comments')?>">
                <span class="fa fa-thumb-tack"></span>
                <span class="title">
                    Yorumlar
                </span>
            </a>
        </li>

        <li>
            <a href="<?=siteUrl('admin/logout')?>">
                <span class="fa fa-cog"></span>
                <span class="title">
                    Çıkış Yap
                </span>
            </a>
        </li>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>