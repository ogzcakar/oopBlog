<?php require 'layout/navSidebar.php';
require 'layout/header.php';?>

    <div class="content">

        <div class="box-">
            <h1>Kategori Güncelle</h1>
        </div>

        <div class="box-container post-content">
            <div class="box-">

                <form action="#" method="post" class="form">
                    <ul>
                        <li>
                            <input type="text" name="categoryName" id="categoryName" value="<?=$query['categoryName']?>" >
                        </li>
                    </ul>

                    <div class="publish-content">
                        <button type="submit" name="submit" value="Güncelle">Güncelle</button>
                    </div>
                </form>

            </div>
        </div>

        <?php
            if($error){
                echo "
                    <div class='message error box-'>
                        $error
                    </div>
                ";
            }

        ?>

    </div>
<?php require 'layout/footer.php';?>