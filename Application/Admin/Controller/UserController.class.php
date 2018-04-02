<?php
namespace Admin\Controller;

class UserController extends AdminController
{
    public function index($name = null, $field = null, $status = null)
    {
        $this->checkUpdata();
        $where = array();

        if ($field && $name) {
            $where[$field] = $name;
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        $count = M('User')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('User')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['invit_1'] = M('User')->where(array('id' => $v['invit_1']))->getField('username');
            $list[$k]['invit_2'] = M('User')->where(array('id' => $v['invit_2']))->getField('username');
            $list[$k]['invit_3'] = M('User')->where(array('id' => $v['invit_3']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function edit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('User')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }
             if (empty($id)) {
                 $this->error('暂时不能新增用户，请前台注册');
            }

            if ($_POST['password']) {
                $_POST['password'] = md5($_POST['password']);
            } else {
                unset($_POST['password']);
            }

            if ($_POST['paypassword']) {
                $_POST['paypassword'] = md5($_POST['paypassword']);
            } else {
                unset($_POST['paypassword']);
            }

            $_POST['mobletime'] = strtotime($_POST['mobletime']);
            $_POST['Country']   = 'CN';
            $mo                 = M();
            for (; true;) {
                $tradeno = tradenoa();

                if (!M('User')->where(array('invit' => $tradeno))->find()) {
                    break;
                }
            }

            $rs   = array();
            $rs[] = $mo->table('movesay_user')->add(array('email' => $_POST['email'], 'idcard' => $_POST['idcard'], 'truename' => $_POST['truename'], 'mobletime' => $_POST['mobletime'], 'moble' => $_POST['moble'], 'Country' => 'CN', 'username' => $_POST['username'], 'paypassword' => $_POST['paypassword'], 'password' => $_POST['password'], 'invit' => $tradeno, 'tpwdsetting' => 1, 'invit_1' => 0, 'invit_2' => 0, 'invit_3' => 0, 'addip' => get_client_ip(), 'addr' => get_city_ip(), 'addtime' => time(), 'status' => $_POST['status']));
            $rs[] = $mo->table('movesay_user_coin')->add(array('userid' => $rs[0], 'integral' => 3000));

            if (check_arr($rs)) {
                $this->success('编辑成功！');
            } else {
                $this->success('编辑失败！');
            }
        }
    }

    public function status($id = null, $type = null, $moble = 'User')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function admin($name = null, $field = null, $status = null)
    {
        $DbFields = M('Admin')->getDbFields();

        if (!in_array('email', $DbFields)) {
            M()->execute('ALTER TABLE `movesay_admin` ADD COLUMN `email` VARCHAR(200)  NOT NULL   COMMENT \'\' AFTER `id`;');
        }

        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        $count = M('Admin')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('Admin')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function adminEdit()
    {
        if (empty($_POST)) {
            if (empty($_GET['id'])) {
                $this->data = null;
            } else {
                $this->data = M('Admin')->where(array('id' => trim($_GET['id'])))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $input = I('post.');

            if (!check($input['username'], 'username')) {
                $this->error('用户名格式错误！');
            }

            if ($input['nickname'] && !check($input['nickname'], 'A')) {
                $this->error('昵称格式错误！');
            }

            if ($input['password'] && !check($input['password'], 'password')) {
                $this->error('登录密码格式错误！');
            }

            if ($input['moble'] && !check($input['moble'], 'moble')) {
                $this->error('手机号码格式错误！');
            }

            if ($input['email'] && !check($input['email'], 'email')) {
                $this->error('邮箱格式错误！');
            }

            if ($input['password']) {
                $input['password'] = md5($input['password']);
            } else {
                unset($input['password']);
            }

            if ($_POST['id']) {
                $rs = M('Admin')->save($input);
            } else {
                $_POST['addtime'] = time();
                $rs               = M('Admin')->add($input);
            }

            if ($rs) {
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function adminStatus($id = null, $type = null, $moble = 'Admin')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function auth()
    {
        //$list = $this->lists('AuthGroup', array('module' => 'admin'), 'id asc');
        $authGroup           = M('AuthGroup');
        $condition['module'] = 'admin';
        $list                = $authGroup->order('id asc')->where($condition)->select();
        $list                = int_to_string($list);
        $this->assign('_list', $list);
        $this->assign('_use_tip', true);
        $this->meta_title = '权限管理';
        $this->display();
    }

    public function authEdit()
    {
        if (empty($_POST)) {
            if (empty($_GET['id'])) {
                $this->data = null;
            } else {
                $this->data = M('AuthGroup')->where(array('module' => 'admin', 'type' => \Common\Model\AuthGroupModel::TYPE_ADMIN))->find((int) $_GET['id']);
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            if (isset($_POST['rules'])) {
                sort($_POST['rules']);
                $_POST['rules'] = implode(',', array_unique($_POST['rules']));
            }

            $_POST['module'] = 'admin';
            $_POST['type']   = \Common\Model\AuthGroupModel::TYPE_ADMIN;
            $AuthGroup       = D('AuthGroup');
            $data            = $AuthGroup->create();

            if ($data) {
                if (empty($data['id'])) {
                    $r = $AuthGroup->add();
                } else {
                    $r = $AuthGroup->save();
                }

                if ($r === false) {
                    $this->error('操作失败' . $AuthGroup->getError());
                } else {
                    $this->success('操作成功!');
                }
            } else {
                $this->error('操作失败' . $AuthGroup->getError());
            }
        }
    }

    public function authStatus($id = null, $type = null, $moble = 'AuthGroup')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function authStart()
    {
        if (M('AuthRule')->where(array('status' => 1))->delete()) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function authAccess()
    {
        $this->updateRules();
        $auth_group = M('AuthGroup')->where(array(
            'status' => array('egt', '0'),
            'module' => 'admin',
            'type'   => \Common\Model\AuthGroupModel::TYPE_ADMIN,
        ))->getfield('id,id,title,rules');
        $node_list   = $this->returnNodes();
        $map         = array('module' => 'admin', 'type' => \Common\Model\AuthRuleModel::RULE_MAIN, 'status' => 1);
        $main_rules  = M('AuthRule')->where($map)->getField('name,id');
        $map         = array('module' => 'admin', 'type' => \Common\Model\AuthRuleModel::RULE_URL, 'status' => 1);
        $child_rules = M('AuthRule')->where($map)->getField('name,id');
        $this->assign('main_rules', $main_rules);
        $this->assign('auth_rules', $child_rules);
        $this->assign('node_list', $node_list);
        $this->assign('auth_group', $auth_group);
        $this->assign('this_group', $auth_group[(int) $_GET['group_id']]);
        $this->meta_title = '访问授权';
        $this->display();
    }

    protected function updateRules()
    {
        $nodes    = $this->returnNodes(false);
        $AuthRule = M('AuthRule');
        $map      = array(
            'module' => 'admin',
            'type'   => array('in', '1,2'),
        );
        $rules = $AuthRule->where($map)->order('name')->select();
        $data  = array();

        foreach ($nodes as $value) {
            $temp['name']   = $value['url'];
            $temp['title']  = $value['title'];
            $temp['module'] = 'admin';

            if (0 < $value['pid']) {
                $temp['type'] = \Common\Model\AuthRuleModel::RULE_URL;
            } else {
                $temp['type'] = \Common\Model\AuthRuleModel::RULE_MAIN;
            }

            $temp['status']                                                    = 1;
            $data[strtolower($temp['name'] . $temp['module'] . $temp['type'])] = $temp;
        }

        $update = array();
        $ids    = array();

        foreach ($rules as $index => $rule) {
            $key = strtolower($rule['name'] . $rule['module'] . $rule['type']);

            if (isset($data[$key])) {
                $data[$key]['id'] = $rule['id'];
                $update[]         = $data[$key];
                unset($data[$key]);
                unset($rules[$index]);
                unset($rule['condition']);
                $diff[$rule['id']] = $rule;
            } else if ($rule['status'] == 1) {
                $ids[] = $rule['id'];
            }
        }

        if (count($update)) {
            foreach ($update as $k => $row) {
                if ($row != $diff[$row['id']]) {
                    $AuthRule->where(array('id' => $row['id']))->save($row);
                }
            }
        }

        if (count($ids)) {
            $AuthRule->where(array(
                'id' => array('IN', implode(',', $ids)),
            ))->save(array('status' => -1));
        }

        if (count($data)) {
            $AuthRule->addAll(array_values($data));
        }

        if ($AuthRule->getDbError()) {
            trace('[' . 'Admin\\Controller\\UserController::updateRules' . ']:' . $AuthRule->getDbError());
            return false;
        } else {
            return true;
        }
    }

    public function authAccessUp()
    {
        if (isset($_POST['rules'])) {
            sort($_POST['rules']);
            $_POST['rules'] = implode(',', array_unique($_POST['rules']));
        }

        $_POST['module'] = 'admin';
        $_POST['type']   = \Common\Model\AuthGroupModel::TYPE_ADMIN;
        $AuthGroup       = D('AuthGroup');
        $data            = $AuthGroup->create();

        if ($data) {
            if (empty($data['id'])) {
                $r = $AuthGroup->add();
            } else {
                $r = $AuthGroup->save();
            }

            if ($r === false) {
                $this->error('操作失败' . $AuthGroup->getError());
            } else {
                $this->success('操作成功!');
            }
        } else {
            $this->error('操作失败' . $AuthGroup->getError());
        }
    }

    public function authUser($group_id)
    {
        if (empty($group_id)) {
            $this->error('参数错误');
        }

        $auth_group = M('AuthGroup')->where(array(
            'status' => array('egt', '0'),
            'module' => 'admin',
            'type'   => \Common\Model\AuthGroupModel::TYPE_ADMIN,
        ))->getfield('id,id,title,rules');
        $prefix   = C('DB_PREFIX');
        $l_table  = $prefix . \Common\Model\AuthGroupModel::MEMBER;
        $r_table  = $prefix . \Common\Model\AuthGroupModel::AUTH_GROUP_ACCESS;
        $model    = M()->table($l_table . ' m')->join($r_table . ' a ON m.id=a.uid');
        $_REQUEST = array();
        $list     = $this->lists($model, array(
            'a.group_id' => $group_id,
            'm.status'   => array('egt', 0),
        ), 'm.id asc', null, 'm.id,m.username,m.nickname,m.last_login_time,m.last_login_ip,m.status');
        int_to_string($list);
        $this->assign('_list', $list);
        $this->assign('auth_group', $auth_group);
        $this->assign('this_group', $auth_group[(int) $_GET['group_id']]);
        $this->meta_title = '成员授权';
        $this->display();
    }

    public function authUserAdd()
    {
        $uid = I('uid');

        if (empty($uid)) {
            $this->error('请输入后台成员信息');
        }

        if (!check($uid, 'd')) {
            $user = M('Admin')->where(array('username' => $uid))->find();

            if (!$user) {
                $user = M('Admin')->where(array('nickname' => $uid))->find();
            }

            if (!$user) {
                $user = M('Admin')->where(array('moble' => $uid))->find();
            }

            if (!$user) {
                $this->error('用户不存在(id 用户名 昵称 手机号均可)');
            }

            $uid = $user['id'];
        }

        $gid = I('group_id');

        if ($res = M('AuthGroupAccess')->where(array('uid' => $uid))->find()) {
            if ($res['group_id'] == $gid) {
                $this->error('已经存在,请勿重复添加');
            } else {
                $res = M('AuthGroup')->where(array('id' => $gid))->find();

                if (!$res) {
                    $this->error('当前组不存在');
                }

                $this->error('已经存在[' . $res['title'] . ']组,不可重复添加');
            }
        }

        $AuthGroup = D('AuthGroup');

        if (is_numeric($uid)) {
            if (is_administrator($uid)) {
                $this->error('该用户为超级管理员');
            }

            if (!M('Admin')->where(array('id' => $uid))->find()) {
                $this->error('管理员用户不存在');
            }
        }

        if ($gid && !$AuthGroup->checkGroupId($gid)) {
            $this->error($AuthGroup->error);
        }

        if ($AuthGroup->addToGroup($uid, $gid)) {
            $this->success('操作成功');
        } else {
            $this->error($AuthGroup->getError());
        }
    }

    public function authUserRemove()
    {
        $uid = I('uid');
        $gid = I('group_id');

        if ($uid == UID) {
            $this->error('不允许解除自身授权');
        }

        if (empty($uid) || empty($gid)) {
            $this->error('参数有误');
        }

        $AuthGroup = D('AuthGroup');

        if (!$AuthGroup->find($gid)) {
            $this->error('用户组不存在');
        }

        if ($AuthGroup->removeFromGroup($uid, $gid)) {
            $this->success('操作成功');
        } else {
            $this->error('操作失败');
        }
    }

    public function log($name = null, $field = null, $status = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        $count = M('UserLog')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('UserLog')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function logEdit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('UserLog')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $_POST['addtime'] = strtotime($_POST['addtime']);

            if (M('UserLog')->save($_POST)) {
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function logStatus($id = null, $type = null, $moble = 'UserLog')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function qianbao($name = null, $field = null, $coinname = null, $status = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        if ($coinname) {
            $where['coinname'] = trim($coinname);
        }

        $count = M('UserQianbao')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('UserQianbao')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function qianbaoEdit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('UserQianbao')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $_POST['addtime'] = strtotime($_POST['addtime']);

            if (M('UserQianbao')->save($_POST)) {
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function qianbaoStatus($id = null, $type = null, $moble = 'UserQianbao')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function bank($name = null, $field = null, $status = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        $count = M('UserBank')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('UserBank')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function bankEdit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('UserBank')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $_POST['addtime'] = strtotime($_POST['addtime']);

            if (M('UserBank')->save($_POST)) {
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function bankStatus($id = null, $type = null, $moble = 'UserBank')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function coin($name = null, $field = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        $count = M('UserCoin')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('UserCoin')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function coinlogs($name = null, $field = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        $count = M('user_coin_log')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('user_coin_log')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }
    public function coinEdit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('UserCoin')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {

            $btc = $_POST['btc'];
            $ltc = $_POST['ltc'];
            $ofc = $_POST['sgc'];
            $m   = M('UserCoin')->where(array('id' => trim($_POST['id'])))->find();

            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            if (M('UserCoin')->save($_POST)) {
                M('user_coin_log')->add(array('userid' => $m['userid'], 'sgcold' => $m['sgc'], 'sgcnew' => $ofc, 'addtime' => time(), 'adminid' => session('admin_id')));
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function coinLog($userid = null, $coinname = null)
    {
        $data['userid']      = $userid;
        $data['username']    = M('User')->where(array('id' => $userid))->getField('username');
        $data['coinname']    = $coinname;
        $data['zhengcheng']  = M('UserCoin')->where(array('userid' => $userid))->getField($coinname);
        $data['dongjie']     = M('UserCoin')->where(array('userid' => $userid))->getField($coinname . 'd');
        $data['zongji']      = $data['zhengcheng'] + $data['dongjie'];
        $data['chongzhicny'] = M('Mycz')->where(array(
            'userid' => $userid,
            'status' => array('neq', '0'),
        ))->sum('num');
        $data['tixiancny']  = M('Mytx')->where(array('userid' => $userid, 'status' => 1))->sum('num');
        $data['tixiancnyd'] = M('Mytx')->where(array('userid' => $userid, 'status' => 0))->sum('num');

        if ($coinname != 'cny') {
            $data['chongzhi'] = M('Myzr')->where(array(
                'userid' => $userid,
                'status' => array('neq', '0'),
            ))->sum('num');
            $data['tixian'] = M('Myzc')->where(array('userid' => $userid, 'status' => 1))->sum('num');
        }

        $this->assign('data', $data);
        $this->display();
    }

    public function goods($name = null, $field = null, $status = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        if ($status) {
            $where['status'] = $status - 1;
        }

        $count = M('UserGoods')->where($where)->count();
        $Page  = new \Think\Page($count, 15);
        $show  = $Page->show();
        $list  = M('UserGoods')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function goodsEdit($id = null)
    {
        if (empty($_POST)) {
            if (empty($id)) {
                $this->data = null;
            } else {
                $this->data = M('UserGoods')->where(array('id' => trim($id)))->find();
            }

            $this->display();
        } else {
            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $_POST['addtime'] = strtotime($_POST['addtime']);

            if (M('UserGoods')->save($_POST)) {
                $this->success('编辑成功！');
            } else {
                $this->error('编辑失败！');
            }
        }
    }

    public function goodsStatus($id = null, $type = null, $moble = 'UserGoods')
    {
        if (APP_DEMO) {
            $this->error('测试站暂时不能修改！');
        }

        if (empty($id)) {
            $this->error('参数错误！');
        }

        if (empty($type)) {
            $this->error('参数错误1！');
        }

        if (strpos(',', $id)) {
            $id = implode(',', $id);
        }

        $where['id'] = array('in', $id);

        switch (strtolower($type)) {
            case 'forbid':
                $data = array('status' => 0);
                break;

            case 'resume':
                $data = array('status' => 1);
                break;

            case 'repeal':
                $data = array('status' => 2, 'endtime' => time());
                break;

            case 'delete':
                $data = array('status' => -1);
                break;

            case 'del':
                if (M($moble)->where($where)->delete()) {
                    $this->success('操作成功！');
                } else {
                    $this->error('操作失败！');
                }

                break;

            default:
                $this->error('操作失败！');
        }

        if (M($moble)->where($where)->save($data)) {
            $this->success('操作成功！');
        } else {
            $this->error('操作失败！');
        }
    }

    public function setpwd()
    {
        if (IS_POST) {
            defined('APP_DEMO') || define('APP_DEMO', 0);

            if (APP_DEMO) {
                $this->error('测试站暂时不能修改！');
            }

            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['newpassword'];
            $repassword  = $_POST['repassword'];

            // if (!check($oldpassword, 'password')) {
            //     $this->error('旧密码格式错误！');
            // }

            if (md5($oldpassword) != session('admin_password')) {
                $this->error('旧密码错误！');
            }

            if (!check($newpassword, 'password')) {
                $this->error('新密码格式错误！');
            }

            if ($newpassword != $repassword) {
                $this->error('确认密码错误！');
            }

            if (D('Admin')->where(array('id' => session('admin_id')))->save(array('password' => md5($newpassword)))) {
                $this->success('登陆密码修改成功！', U('Login/loginout'));
            } else {
                $this->error('登陆密码修改失败！');
            }
        }

        $this->display();
    }

    public function checkAuth()
    {
    }

    public function checkUpdata()
    {
        if (!S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata')) {
            $list = M('Menu')->where(array(
                'url' => 'User/index',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/index', 'title' => '用户管理', 'pid' => 3, 'sort' => 1, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/index',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '用户管理', 'pid' => 3, 'sort' => 1, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/admin',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/admin', 'title' => '管理员管理', 'pid' => 3, 'sort' => 2, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/admin',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '管理员管理', 'pid' => 3, 'sort' => 2, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/auth',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/auth', 'title' => '权限列表', 'pid' => 3, 'sort' => 3, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '权限列表', 'pid' => 3, 'sort' => 3, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/log',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/log', 'title' => '登陆日志', 'pid' => 3, 'sort' => 4, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/log',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '登陆日志', 'pid' => 3, 'sort' => 4, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/qianbao',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/qianbao', 'title' => '用户钱包', 'pid' => 3, 'sort' => 5, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/qianbao',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '用户钱包', 'pid' => 3, 'sort' => 5, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/bank',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/bank', 'title' => '提现地址', 'pid' => 3, 'sort' => 6, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/bank',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '提现地址', 'pid' => 3, 'sort' => 6, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/coin',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/coin', 'title' => '用户财产', 'pid' => 3, 'sort' => 7, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/coin',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '用户财产', 'pid' => 3, 'sort' => 7, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/goods',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/goods', 'title' => '联系地址', 'pid' => 3, 'sort' => 8, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/goods',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '联系地址', 'pid' => 3, 'sort' => 8, 'hide' => 0, 'group' => '用户', 'ico_name' => 'user'));
            }

            $list = M('Menu')->where(array(
                'url' => 'User/edit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/index',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/edit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/edit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/status',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/index',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/status', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/status',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/adminEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/admin',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/adminEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/adminEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/adminStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/admin',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/adminStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/adminStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authStart',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authStart', 'title' => '重新初始化权限', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authStart',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '重新初始化权限', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authAccess',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authAccess', 'title' => '访问授权', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authAccess',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '访问授权', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authAccessUp',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authAccessUp', 'title' => '访问授权修改', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authAccessUp',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '访问授权修改', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authUser',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authUser', 'title' => '成员授权', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authUser',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '成员授权', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authUserAdd',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authUserAdd', 'title' => '成员授权增加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authUserAdd',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '成员授权增加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/authUserRemove',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/auth',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/authUserRemove', 'title' => '成员授权解除', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/authUserRemove',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '成员授权解除', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/logEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/log',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/logEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/logEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/logStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/log',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/logStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/logStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/qianbaoEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/qianbao',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/qianbaoEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/qianbaoEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/qianbaoStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/qianbao',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/qianbaoStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/qianbaoStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/bankEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/bank',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/bankEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/bankEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/bankStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/bank',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/bankStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/bankStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/coinEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/coin',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/coinEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/coinEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/coinLog',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/coin',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/coinLog', 'title' => '财产统计', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/coinLog',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '财产统计', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/goodsEdit',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/goods',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/goodsEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/goodsEdit',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/goodsStatus',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else {
                $pid = M('Menu')->where(array(
                    'url' => 'User/goods',
                    'pid' => array('neq', 0),
                ))->getField('id');

                if (!$list) {
                    M('Menu')->add(array('url' => 'User/goodsStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                } else {
                    M('Menu')->where(array(
                        'url' => 'User/goodsStatus',
                        'pid' => array('neq', 0),
                    ))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
                }
            }

            $list = M('Menu')->where(array(
                'url' => 'User/setpwd',
                'pid' => array('neq', 0),
            ))->select();

            if ($list[1]) {
                M('Menu')->where(array('id' => $list[1]['id']))->delete();
            } else if (!$list) {
                M('Menu')->add(array('url' => 'User/setpwd', 'title' => '修改管理员密码', 'pid' => 3, 'sort' => 0, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
            } else {
                M('Menu')->where(array(
                    'url' => 'User/setpwd',
                    'pid' => array('neq', 0),
                ))->save(array('title' => '修改管理员密码', 'pid' => 3, 'sort' => 0, 'hide' => 1, 'group' => '用户', 'ico_name' => 'home'));
            }

            if (M('Menu')->where(array('url' => 'AuthManager/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'User/adminUser'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'AdminUser/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'Userlog/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'Userqianbao/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'Userbank/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'Usercoin/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            if (M('Menu')->where(array('url' => 'Usergoods/index'))->delete()) {
                M('AuthRule')->where(array('status' => 1))->delete();
            }

            S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata', 1);
        }
    }

    public function coin_export($name = null, $field = null)
    {
        $where = array();

        if ($field && $name) {
            if ($field == 'username') {
                $where['userid'] = M('User')->where(array('username' => $name))->getField('id');
            } else {
                $where[$field] = $name;
            }
        }

        $list = M('UserCoin')->where($where)->order('id desc')->select();

        // 获取币种配置信息
        $coin_list = C('coin');
        $titles    = array(
            array(
                'title' => 'ID',
                'field' => 'id',
                'type'  => 'normal',
            ),
            array(
                'title' => '用户名',
                'field' => 'username',
                'type'  => 'normal',
            ),
        );
        foreach ($coin_list as $value) {
            $tmp = array(
                'title' => $value['title'],
                'field' => $value['name'],
                'type'  => 'coin',
            );
            array_push($titles, $tmp);
        }

        // 文件名
        $file_name = '用户财产' . date('_YmdHis');

        // 标题
        $cell_names = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');

        // 导出
        import('Org.Util.PHPExcel') or die('导出类引入失败');
        import('Org.Util.PHPExcel.Writer.Excel5');
        import('Org.Util.PHPExcel.IOFactory');
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $objActSheet = $objPHPExcel->getActiveSheet();

        $row        = 1;
        $cell_count = count($titles);
        // 写入标题
        for ($i = 0; $i < $cell_count; $i++) {
            $objActSheet->getColumnDimension($cell_names[$i])->setAutoSize(true);
            $objActSheet->setCellValue($cell_names[$i] . $row, $titles[$i]['title']);
        }
        $row++;

        // 写入内容
        foreach ($list as $key => $value) {
            $value['username'] = M('User')->where(array('id' => $value['userid']))->getField('username');
            for ($i = 0; $i < $cell_count; $i++) {
                $field_tmp = $titles[$i]['field'];
                $type_tmp  = $titles[$i]['type'];
                if ($type_tmp == 'coin') {
                    $coin_ky        = $value[$field_tmp] * 1;
                    $coin_dj        = $value[$field_tmp . 'd'] * 1;
                    $coin_zj        = $coin_ky + $coin_dj;
                    $cell_value_tmp = "可用 {$coin_ky}\n冻结 {$coin_dj}\n总计 {$coin_zj}";
                } else {
                    $cell_value_tmp = $value[$field_tmp];
                }

                $objActSheet->setCellValue($cell_names[$i] . $row, $cell_value_tmp);
                $objActSheet->getStyle($cell_names[$i] . $row)->getAlignment()->setWrapText(true);
            }

            $row++;
        }

        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename=' . $file_name . '.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        $objPHPExcel->disconnectWorksheets();
        exit();
    }
}
