<?php
/**
 * Created by PhpStorm.
 * User: yuzi
 * Date: 2019/3/24
 * Time: 16:44
 */

namespace Lib\J2EE\MVC;


class UserController
{

    /**
     * 获取用户的api
     */
    public function getUser()
    {
        $model = new UserModel();
        $user = $model->getUserFromDb();
        $this->renderView($user['id'], $user['name']);
    }


    /**
     * 渲染模板
     * @param $id
     * @param $name
     */
    private function renderView($id, $name)
    {
        $view = new UserView();
        $view->showInfo($id, $name);
    }

}