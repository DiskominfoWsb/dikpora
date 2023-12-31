<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $data = [];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        helper([
            'date', 'my_date', 'text', 'security', 'page',
            'option','menu','category','service', 'comment',
            'text',
        ]);

        $this->data['controller'] = 'dashboard';

        //nav menu badge
        $this->data['unapproveService'] = unapproveServiceCount($this->db);
        $this->data['unapproveComment'] = unapproveCommentCount($this->db);

        //option
        //$this->data['navMenu'] = getOption('nav_menu', $this->db);
    }

    public function index()
    {
        //always check authentication
        if(!session()->ID) return redirect()->to('login');

        //count posts
        $builder = $this->db->table('post');
        $builder->selectCount('ID');
        $builder->where('status', '1');
        $result = $builder->get()->getRow();
        $this->data['postsCount'] = $result->ID;

        //count pages
        $builder->resetQuery();
        $builder = $this->db->table('page');
        $builder->selectCount('ID');
        $builder->where('status', '1');
        $result = $builder->get()->getRow();
        $this->data['pagesCount'] = $result->ID;

        //count comments
        $builder->resetQuery();
        $builder = $this->db->table('comment');
        $builder->selectCount('ID');
        $result = $builder->get()->getRow();
        $this->data['commentsCount'] = $result->ID;

        //count services
        $builder->resetQuery();
        $builder = $this->db->table('service');
        $builder->selectCount('ID');
        $result = $builder->get()->getRow();
        $this->data['servicesCount'] = $result->ID;

        echo view('admin-header', $this->data);
        echo view('dashboard');
        echo view('admin-footer');
    }

    public function research($password)
    {
        if($password != 'risetku') return redirect()->to('dashboard');
        echo view('research');
    }

}