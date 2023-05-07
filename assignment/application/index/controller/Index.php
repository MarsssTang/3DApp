<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\IndexModel;

class Index  extends Controller
{
    public function index()
    {

        return $this->fetch();
    }

    public function about()
    {
        return $this->fetch();
    }

    public function originalStatement()
    {
        return $this->fetch();
    }

    public function reference()
    {
        return $this->fetch();
    }

    public function gitHubLink()
    {
        return $this->fetch();
    }

    public function cocaCola()
    {
        return $this->fetch();
    }

}
