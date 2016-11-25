<?php require 'layout/navSidebar.php';
require 'layout/header.php';?>

    <div class="content">

        <div class="box-">
            <h1>Kategori Ekle</h1>
        </div>

        <div class="box-container post-content">
            <div class="box-">

                <form action="#" method="post" class="form">
                    <ul>
                        <li>
                            <input type="text" name="postTitle" id="postTitle" placeholder="Başlık" >
                        </li>
                        <li>
                            <textarea name="editor1" id="editor" rows="10" cols="80"></textarea>
                        </li>

                        <li>
                            <select name="category" id="category" style="width: 100%;">
                                <?php
                                    foreach ($categorys as $category)
                                    {
                                        echo"<option value='$category[categoryId]'>$category[categoryName]</option>";
                                    }
                                ?>
                            </select>
                        </li>
                        <li>
                            <input type="text" name="downloadLink" id="downloadLink" placeholder="Download link (http://www.example.com)" >
                        </li>
                        <li>
                            <input type="text" name="demoLink" id="demoLink" placeholder="Demo link (http://www.example.com)" >
                        </li>
                    </ul>

                    <div class="publish-content">
                        <button type="submit" name="submit" value="Kaydet">Kaydet</button>
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