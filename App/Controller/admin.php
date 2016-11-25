<?php

session_start();
class admin
{

    public function index()
    {
        $this->checkLogin();
        global $db;
        $query = $db->select('posts')
            ->join('categorys', '%s.categoryId = %s.categoryId', 'left')
            ->orderby('postId', 'desc')
            ->run();

        require  view('admin/index');
    }

    public function postAdd()
    {
        $this->checkLogin();
        $error = "";

        if(post('submit'))
        {
            $data['postTitle'] = post('postTitle');
            $data['post'] = post('editor1');
            $data['categoryId'] = post('category');
            $data['postTitleSlug'] = permalink($data['postTitle']);
            $data['downloadLink'] = post('downloadLink');
            $data['demoLink'] = post('demoLink');
            if(!empty($data['postTitle']) && !empty($data['post']) && !empty($data['categoryId'])){
                global $db;
                $query = $db->insert('posts')
                    ->set($data);

                if($query){
                    header('Location: index');
                }
            }else{
                $error = "Başlık , İçerik ve Kategori Seçmek Zorundasınız.";
            }
        }

        $categorys = $this->categorysSelect();
        require  view('admin/postAdd');
    }

    public function postUpdate()
    {
        $this->checkLogin();
        $error = "";
        global $urlParameters;
        global $db;

        if(post('submit'))
        {
            $data['postTitle'] = post('postTitle');
            $data['post'] = post('editor1');
            $data['categoryId'] = post('category');
            $data['postTitleSlug'] = permalink($data['postTitle']);
            $data['downloadLink'] = post('downloadLink');
            $data['demoLink'] = post('demoLink');
            if(!empty($data['postTitle']) && !empty($data['post']) && !empty($data['categoryId'])){
                $query = $db->update('posts')
                    ->where('postId', $urlParameters[2])
                    ->set($data);
                if ( $query ){
                    header('Location: ../index');
                }
            }else{
                $error = "Başlık , İçerik ve Kategori Seçmek Zorundasınız.";
            }
        }
        $query = $db->select('posts')
            ->where('postId' , $urlParameters[2])
            ->join('categorys', '%s.categoryId = %s.categoryId', 'left')
            ->run(true);
        $categorys = $this->categorysSelect();
        require  view('admin/postUpdate');
    }

    public function postDelete()
    {
        $this->checkLogin();
        global $urlParameters;
        global $db;

        $query = $db->delete('posts')
            ->where('postId', $urlParameters[2])
            ->done();

        if ( $query ){
            header('Location: ../index');
        }
    }

    public function categorysSelect()
    {
        global $db;
        $query = $db->select('categorys')
            ->run();
        return $query;
    }

    public function categorys()
    {
        $query = $this->categorysSelect();
        require  view('admin/categorys');

    }

    public function categoryAdd()
    {
        $this->checkLogin();
        $error = "";
        if(post('submit'))
        {
            $data['categoryName'] = post('categoryName');
            $data['categoryNameSlug'] = permalink($data['categoryName']);
            if(!empty($data['categoryName']))
            {
                global $db;
                $query = $db->insert('categorys')
                    ->set($data);

                if($query){
                    header('Location: categorys');
                }

            }else{
                $error = "Kategori Adını Gir";
            }
        }

        require view('admin/categoryAdd');
    }

    public function categoryUpdate()
    {
        $this->checkLogin();
        $error = "";
        global $urlParameters;
        global $db;
        if(post('submit'))
        {
            $data['categoryName'] = post('categoryName');
            $data['categoryNameSlug'] = permalink($data['categoryName']);
            if(!empty($data['categoryName']))
            {
                $query = $db->update('categorys')
                    ->where('categoryId', $urlParameters[2])
                    ->set($data);
                if ( $query ){
                    header('Location: ../categorys');
                }
            }else{
                $error = "Kategori Adını Gir";
            }
        }
        $query = $db->select('categorys')
            ->where('categoryId' , $urlParameters[2])
            ->run(true);
        require view('admin/categoryUpdate');
    }

    public function categoryDelete()
    {
        $this->checkLogin();
        global $urlParameters;
        global $db;

        $query = $db->delete('categorys')
            ->where('categoryId', $urlParameters[2])
            ->done();

        if ( $query ){
            header('Location: ../categorys');
        }
    }

    public function comments()
    {
        $this->checkLogin();
        global $db;
        $query = $db->select('comments')
            ->join('posts', '%s.postId = %s.postId', 'left')
            ->run();
        require view('admin/comments');
    }

    public function commentDelete()
    {
        $this->checkLogin();
        global $urlParameters;
        global $db;

        $query = $db->delete('comments')
            ->where('commentId', $urlParameters[2])
            ->done();

        if ( $query ){
            header('Location: ../comments');
        }
    }

    public function checkLogin()
    {
        if(!isset($_SESSION['userId']))
            header('Location: admin/login');
    }

    public function login()
    {
        $error = "";
        if(post('submit'))
        {
            $userName = post('userName');
            $userPassword = post('userPassword');

            if(!empty($userName) && !empty($userPassword)){

                global $db;
                $query = $db->select('users')->where('userName', $userName)->run(true);

                if ($query ){
                    if($query['userPassword'] == $userPassword)
                    {
                        $_SESSION['userId'] = $query['userId'];
                        header('Location: index');
                    }else{
                        $error = "Şifre Yanlış";
                    }
                }else{
                    $error = "Kullanıcı Adı Yanlış";
                }
            }else{
                $error = "Tüm Alanları Doldurun.";
            }
        }

        require  view('admin/login');
    }

    public function logout()
    {
        session_destroy();
        header('Location: ../index');
    }

    public function notFound()
    {
        header('Location: index');
    }

}