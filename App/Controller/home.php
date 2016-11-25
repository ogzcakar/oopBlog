<?php

class home
{

    public function index()
    {
        global $db;
        $totalRecord = $db->select('posts')
            ->from('count(postId) as total')
            ->total();
        $pageLimit = 3;
        $pageParam = 'page';
        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->select('posts')
            ->join('categorys', '%s.categoryId = %s.categoryId', 'left')
            ->orderby('postId', 'desc')
            ->limit($pagination['start'], $pagination['limit'])
            ->run();
        $categorysComment = $this->categoryListLastComment();
        $page = $db->showPagination(url.'home?'.$pageParam.'=[page]');
        require  view('index');
    }

    public function post()
    {
        global $db;
        global $urlParameters;

        $query = $db->select('posts')
            ->where('postTitleSlug', $urlParameters[2])
            ->run(true);
        // Join hatası giderilecek.
        $queryCommentSelect = $db->select('comments')
            ->where('postId', $query['postId'])
            ->run();

        if(post('submit')){
            $data['comment'] = post('comment');
            $data['postId'] = $query['postId'];

            if(!empty($data['comment']))
            {
                $queryComment = $db->insert('comments')
                    ->set($data);
                if($queryComment){
                    header("Refresh: 0;");
                }
            }else{
                echo '<script type="text/javascript">alert("Yorumunuzu Giriniz");</script>';
            }
        }

        $categorysComment = $this->categoryListLastComment();
        require  view('post');
    }

    public function category()
    {
        global $db;
        global $urlParameters;

        $totalRecord = $db->select('posts')
            ->from('count(postId) as total')
            ->join('categorys', '%s.categoryId = %s.categoryId', 'left')
            ->where('categoryNameSlug' , $urlParameters[2])
            ->total();
        $pageLimit = 3;
        $pageParam = 'page';
        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->select('categorys')
            ->join('posts', '%s.categoryId = %s.categoryId', 'left')
            ->where('categoryNameSlug' , $urlParameters[2])
            ->limit($pagination['start'], $pagination['limit'])
            ->orderby('postId', 'desc')
            ->run();
        $page = $db->showPagination(url.'home/category/'.$urlParameters[2].'?'.$pageParam.'=[page]');
        $categorysComment = $this->categoryListLastComment();
        require  view('index');
    }

    public function categoryListLastComment()
    {
        global $db;
        $query['category'] = $db->select('categorys')->run();
        $query['lastComment'] = $db->select('comments')
            ->join('posts', '%s.postId = %s.postId', 'left')
            ->orderby('commentId', 'desc')
            ->limit(0, 7)
            ->run();
        return $query;
    }

    public function notFound()
    {
        $categorysComment = $this->categoryListLastComment();
        require  view('404');
    }

}
