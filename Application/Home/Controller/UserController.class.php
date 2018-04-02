<?php
namespace Home\Controller;

class UserController extends HomeController
{
    public function index()
    {
        if (!userid()) {
            // redirect('/#login');
            $this->redirect('Login/index');
        }

        $user = M('User')->where(array('id' => userid()))->find();
        $this->assign('user', $user);
        $this->assign('prompt_text', D('Text')->get_content('user_index'));
        $this->display();
    }

    public function nameauth()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $user = M('User')->where(array('id' => userid()))->find();

        if ($user['idcard']) {
            $user['idcard'] = substr_replace($user['idcard'], '********', 6, 8);
        }

        $this->assign('user', $user);
        $this->assign('prompt_text', D('Text')->get_content('user_nameauth'));
        $this->display();
    }

    public function password()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $this->assign('prompt_text', D('Text')->get_content('user_password'));
        $this->display();
    }

    public function uppassword($oldpassword, $newpassword, $repassword)
    {
        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($oldpassword, 'password')) {
            $this->error(L('user_old_login_password_format_error'));
        }

        if (!check($newpassword, 'password')) {
            $this->error(L('new_login_password_format_error'));
        }

        if ($newpassword != $repassword) {
            $this->error(L('user_new_confirm_password_error'));
        }

        $password = M('User')->where(array('id' => userid()))->getField('password');

        if (md5($oldpassword) != $password) {
            $this->error(L('user_old_login_password_error'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('password' => md5($newpassword)));

        if ($rs) {
            $this->success(L('modify_succeed'));
        } else {
            $this->error(L('modify_failed'));
        }
    }

    public function paypassword()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $this->assign('prompt_text', D('Text')->get_content('user_paypassword'));
        $this->display();
    }

    public function uppaypassword($oldpaypassword, $newpaypassword, $repaypassword)
    {
        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($oldpaypassword, 'password')) {
            $this->error(L('user_old_trade_password_format_error'));
        }

        if (!check($newpaypassword, 'password')) {
            $this->error(L('new_trade_password_format_error'));
        }

        if ($newpaypassword != $repaypassword) {
            $this->error(L('user_new_confirm_password_error'));
        }

        $user = M('User')->where(array('id' => userid()))->find();

        if (md5($oldpaypassword) != $user['paypassword']) {
            $this->error(L('user_old_trade_password_error'));
        }

        if (md5($newpaypassword) == $user['password']) {
            $this->error(L('trade_login_not_be_same'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('paypassword' => md5($newpaypassword)));

        if ($rs) {
            $this->success(L('modify_succeed'));
        } else {
            $this->error(L('modify_failed'));
        }
    }

    public function ga()
    {
        if (empty($_POST)) {
            if (!userid()) {
                redirect('/#login');
            }

            $this->assign('prompt_text', D('Text')->get_content('user_ga'));
            $user  = M('User')->where(array('id' => userid()))->find();
            $is_ga = ($user['ga'] ? 1 : 0);
            $this->assign('is_ga', $is_ga);

            if (!$is_ga) {
                $ga     = new \Common\Ext\GoogleAuthenticator();
                $secret = $ga->createSecret();
                session('secret', $secret);
                $this->assign('Asecret', $secret);
                $qrCodeUrl = $ga->getQRCodeGoogleUrl($user['username'] . '%20-%20' . $_SERVER['HTTP_HOST'], $secret);
                $this->assign('qrCodeUrl', $qrCodeUrl);
                $this->display();
            } else {
                $arr = explode('|', $user['ga']);
                $this->assign('ga_login', $arr[1]);
                $this->assign('ga_transfer', $arr[2]);
                $this->display();
            }
        } else {
            if (!userid()) {
                $this->error(L('user_please_login_again'));
            }

            $delete      = '';
            $gacode      = trim(I('ga'));
            $type        = trim(I('type'));
            $ga_login    = (I('ga_login') == false ? 0 : 1);
            $ga_transfer = (I('ga_transfer') == false ? 0 : 1);

            if (!$gacode) {
                $this->error(L('enter_captcha'));
            }

            if ($type == 'add') {
                $secret = session('secret');

                if (!$secret) {
                    $this->error(L('user_captcha_has_failed'));
                }
            } else if (($type == 'update') || ($type == 'delete')) {
                $user = M('User')->where('id = ' . userid())->find();

                if (!$user['ga']) {
                    $this->error(L('user_no_google_captcha'));
                }

                $arr    = explode('|', $user['ga']);
                $secret = $arr[0];
                $delete = ($type == 'delete' ? 1 : 0);
            } else {
                $this->error(L('user_operation_not_defined'));
            }

            $ga = new \Common\Ext\GoogleAuthenticator();

            if ($ga->verifyCode($secret, $gacode, 1)) {
                $ga_val = ($delete == '' ? $secret . '|' . $ga_login . '|' . $ga_transfer : '');
                //M('User')->save(array('id' => userid(), 'ga' => $ga_val));
                $this->success(L('operate_succeed'));
            } else {
                $this->error(L('user_authentication_Failed'));
            }
        }
    }

    public function moble()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $user = M('User')->where(array('id' => userid()))->find();

        if ($user['moble']) {
            $user['moble'] = substr_replace($user['moble'], '****', 3, 4);
        }

        $this->assign('user', $user);
        $this->assign('prompt_text', D('Text')->get_content('user_moble'));
        $this->display();
    }

    public function upmoble($moble, $moble_verify)
    {
        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($moble, 'moble')) {
            $this->error(L('phone_format_error'));
        }

        if (!check($moble_verify, 'd')) {
            $this->error(L('sms_code_format_error'));
        }

        if ($moble_verify != session('real_verify')) {
            $this->error(L('sms_code_error'));
        }

        if (M('User')->where(array('moble' => $moble))->find()) {
            $this->error(L('user_phone_number_already_exists'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('moble' => $moble, 'mobletime' => time()));

        if ($rs) {
            $this->success(L('user_bound_phone_succeed'));
        } else {
            $this->error(L('user_bound_phone_failed'));
        }
    }
    public function upmoblebyverify($moble, $moble_verify)
    {

        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($moble, 'number1')) {
            $this->error(L('phone_format_error'));
        }
        if (!check_verify(strtoupper($moble_verify))) {
            $this->error(L('image_captcha_error'));
        }
        if (M('User')->where(array('moble' => $moble))->find()) {
            $this->error(L('user_phone_number_already_exists'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('moble' => $moble, 'mobletime' => time()));

        if ($rs) {
            $this->success(L('user_bound_phone_succeed'));
        } else {
            $this->error(L('user_bound_phone_failed'));
        }
    }
    public function alipay()
    {
        if (!userid()) {
            redirect('/#login');
        }

        D('User')->check_update();
        $this->assign('prompt_text', D('Text')->get_content('user_alipay'));
        $user = M('User')->where(array('id' => userid()))->find();
        $this->assign('user', $user);
        $this->display();
    }

    public function upalipay($alipay = null, $paypassword = null)
    {
        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($alipay, 'moble')) {
            if (!check($alipay, 'email')) {
                $this->error(L('user_alipay_format_error'));
            }
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        $user = M('User')->where(array('id' => userid()))->find();

        if (md5($paypassword) != $user['paypassword']) {
            $this->error(L('user_trade_password_error'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('alipay' => $alipay));

        if ($rs) {
            $this->success(L('user_bound_alipay_succeed'));
        } else {
            $this->error(L('user_bound_alipay_failed'));
        }
    }

    public function tpwdset()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $user = M('User')->where(array('id' => userid()))->find();
        $this->assign('prompt_text', D('Text')->get_content('user_tpwdset'));
        $this->assign('user', $user);
        $this->display();
    }

    public function tpwdsetting()
    {
        if (userid()) {
            $tpwdsetting = M('User')->where(array('id' => userid()))->getField('tpwdsetting');
            exit($tpwdsetting);
        }
    }

    public function uptpwdsetting($paypassword, $tpwdsetting)
    {
        if (!userid()) {
            $this->error(L('user_please_login_first'));
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        if (($tpwdsetting != 1) && ($tpwdsetting != 2) && ($tpwdsetting != 3)) {
            $this->error(L('user_option_error') . $tpwdsetting);
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        $rs = M('User')->where(array('id' => userid()))->save(array('tpwdsetting' => $tpwdsetting));

        if ($rs) {
            $this->success(L('succeed'));
        } else {
            $this->error(L('failed'));
        }
    }

    public function bank()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $UserBankType = M('UserBankType')->where(array('status' => 1))->order('id desc')->select();
        $this->assign('UserBankType', $UserBankType);
        $truename = M('User')->where(array('id' => userid()))->getField('truename');
        $this->assign('truename', $truename);
        $UserBank = M('UserBank')->where(array('userid' => userid(), 'status' => 1))->order('id desc')->select();
        $this->assign('UserBank', $UserBank);
        $this->assign('prompt_text', D('Text')->get_content('user_bank'));
        $this->display();
    }

    public function upbank($name, $bank, $bankprov, $bankcity, $bankaddr, $bankcard, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }
        if (!check($name, 'a')) {
            $this->error(L('user_note_name_format_error'));
        }

        if (!check($bank, 'a')) {
            $this->error(L('user_open_bank_format_error'));
        }

        if (!check($bankprov, 'c')) {
            $this->error(L('user_open_province_format_error'));
        }

        if (!check($bankcity, 'c')) {
            $this->error(L('user_open_province_format_error2'));
        }

        if (!check($bankaddr, 'a')) {
            $this->error(L('user_open_address_format_error'));
        }

        if (!check($bankcard, 'd')) {
            $this->error(L('user_bank_account_fomart_error'));
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        if (!M('UserBankType')->where(array('title' => $bank))->find()) {
            $this->error(L('user_open_bank_error'));
        }

        $userBank = M('UserBank')->where(array('userid' => userid()))->select();

        foreach ($userBank as $k => $v) {
            if ($v['name'] == $name) {
                $this->error(L('user_do_not_use_same_name'));
            }

            if ($v['bankcard'] == $bankcard) {
                $this->error(L('user_bank_number_already_exists'));
            }
        }

        if (10 <= count($userBank)) {
            $this->error(L('user_address_max_add'));
        }

        if (M('UserBank')->add(array('userid' => userid(), 'name' => $name, 'bank' => $bank, 'bankprov' => $bankprov, 'bankcity' => $bankcity, 'bankaddr' => $bankaddr, 'bankcard' => $bankcard, 'addtime' => time(), 'status' => 1))) {
            $this->success(L('user_add_succeed'));
        } else {
            $this->error(L('user_add_failed'));
        }
    }

    public function delbank($id, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        if (!check($id, 'd')) {
            $this->error(L('parameter_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        if (!M('UserBank')->where(array('userid' => userid(), 'id' => $id))->find()) {
            $this->error(L('illegal_access'));
        } else if (M('UserBank')->where(array('userid' => userid(), 'id' => $id))->delete()) {
            $this->success(L('delete_succeed'));
        } else {
            $this->error(L('delete_failed'));
        }
    }

    public function qianbao($coin = null)
    {
        if (!userid()) {
            redirect('/#login');
        }

        $Coin = M('Coin')->where(array(
            'status' => 1,
            'name'   => array('neq', 'cny'),
        ))->select();

        if (!$coin) {
            $coin = $Coin[0]['name'];
        }

        $this->assign('xnb', $coin);

        foreach ($Coin as $k => $v) {
            $coin_list[$v['name']] = $v;
        }

        $this->assign('coin_list', $coin_list);
        $userQianbaoList = M('UserQianbao')->where(array('userid' => userid(), 'status' => 1, 'coinname' => $coin))->order('id desc')->select();
        $this->assign('userQianbaoList', $userQianbaoList);
        $this->assign('prompt_text', D('Text')->get_content('user_qianbao'));
        $this->display();
    }

    public function upqianbao($coin, $name, $addr, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }

        if (!check($name, 'a')) {
            $this->error(L('user_note_name_format_error'));
        }

        if (!check($addr, 'dw')) {
            $this->error(L('user_wallet_address_format_error'));
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        if (!M('Coin')->where(array('name' => $coin))->find()) {
            $this->error(L('user_currency_error'));
        }

        $userQianbao = M('UserQianbao')->where(array('userid' => userid(), 'coinname' => $coin))->select();

        foreach ($userQianbao as $k => $v) {
            if ($v['name'] == $name) {
                $this->error(L('user_do_not_use_same_wallet'));
            }

            if ($v['addr'] == $addr) {
                $this->error(L('user_wallet_address_already_exists'));
            }
        }

        if (10 <= count($userQianbao)) {
            $this->error(L('user_address_max_add'));
        }

        if (M('UserQianbao')->add(array('userid' => userid(), 'name' => $name, 'addr' => $addr, 'coinname' => $coin, 'addtime' => time(), 'status' => 1))) {
            $this->success(L('user_add_succeed'));
        } else {
            $this->error(L('user_add_failed'));
        }
    }

    public function delqianbao($id, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        if (!check($id, 'd')) {
            $this->error(L('parameter_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        if (!M('UserQianbao')->where(array('userid' => userid(), 'id' => $id))->find()) {
            $this->error(L('illegal_access'));
        } else if (M('UserQianbao')->where(array('userid' => userid(), 'id' => $id))->delete()) {
            $this->success(L('delete_succeed'));
        } else {
            $this->error(L('delete_failed'));
        }
    }

    public function goods()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $userGoodsList = M('UserGoods')->where(array('userid' => userid(), 'status' => 1))->order('id desc')->select();

        foreach ($userGoodsList as $k => $v) {
            $userGoodsList[$k]['moble']  = substr_replace($v['moble'], '****', 3, 4);
            $userGoodsList[$k]['idcard'] = substr_replace($v['idcard'], '********', 6, 8);
        }

        $this->assign('userGoodsList', $userGoodsList);
        $this->assign('prompt_text', D('Text')->get_content('user_goods'));
        $this->display();
    }

    public function upgoods($name, $truename, $idcard, $moble, $addr, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }

        if (!check($name, 'a')) {
            $this->error(L('user_note_name_format_error'));
        }

        if (!check($truename, 'truename')) {
            $this->error(L('user_contact_name_format_error'));
        }

        if (!check($idcard, 'idcard')) {
            $this->error(L('id_number_format_error'));
        }

        if (!check($moble, 'moble')) {
            $this->error(L('user_contact_tel_format_error'));
        }

        if (!check($addr, 'a')) {
            $this->error(L('user_contact_address_format_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        $userGoods = M('UserGoods')->where(array('userid' => userid()))->select();

        foreach ($userGoods as $k => $v) {
            if ($v['name'] == $name) {
                $this->error(L('user_address_already_exists'));
            }
        }

        if (10 <= count($userGoods)) {
            $this->error(L('user_address_max_add'));
        }

        if (M('UserGoods')->add(array('userid' => userid(), 'name' => $name, 'addr' => $addr, 'idcard' => $idcard, 'truename' => $truename, 'moble' => $moble, 'addtime' => time(), 'status' => 1))) {
            $this->success(L('user_add_succeed'));
        } else {
            $this->error(L('user_add_failed'));
        }
    }

    public function delgoods($id, $paypassword)
    {
        if (!userid()) {
            redirect('/#login');
        }

        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        if (!check($id, 'd')) {
            $this->error(L('parameter_error'));
        }

        $user_paypassword = M('User')->where(array('id' => userid()))->getField('paypassword');

        if (md5($paypassword) != $user_paypassword) {
            $this->error(L('user_trade_password_error'));
        }

        if (!M('UserGoods')->where(array('userid' => userid(), 'id' => $id))->find()) {
            $this->error(L('illegal_access'));
        } else if (M('UserGoods')->where(array('userid' => userid(), 'id' => $id))->delete()) {
            $this->success(L('delete_succeed'));
        } else {
            $this->error(L('delete_failed'));
        }
    }

    public function log()
    {
        if (!userid()) {
            redirect('/#login');
        }

        $where['status'] = array('egt', 0);
        $where['userid'] = userid();
        $Model           = M('UserLog');
        $count           = $Model->where($where)->count();
        $Page            = new \Think\Page($count, 10);
        $show            = $Page->show();
        $list            = $Model->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->assign('prompt_text', D('Text')->get_content('user_log'));
        $this->display();
    }

    public function install()
    {
    }

    public function check()
    {
        if ((S('CLOUDTIME') + (60 * 60)) < time()) {
            S('CLOUD', null);
            S('CLOUD_IP', null);
            S('CLOUD_HOME', null);
            S('CLOUD_DAOQI', null);
            S('CLOUD_GAME', null);
            S('CLOUDTIME', time());
        }

        $CLOUD       = S('CLOUD');
        $CLOUD_IP    = S('CLOUD_IP');
        $CLOUD_HOME  = S('CLOUD_HOME');
        $CLOUD_DAOQI = S('CLOUD_DAOQI');
        $CLOUD_GAME  = S('CLOUD_GAME');

        if (!$CLOUD) {
            foreach (C('__CLOUD__') as $k => $v) {
                if (getUrl($v . '/Auth/text') == 1) {
                    $CLOUD = $v;
                    break;
                }
            }

            if (!$CLOUD) {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_license_server_failed') . '"></a>';
                exit();
            } else {
                S('CLOUD', $CLOUD);
            }
        }

        if (!$CLOUD_DAOQI) {
            $CLOUD_DAOQI = getUrl($CLOUD . '/Auth/daoqi?mscode=' . MSCODE);

            if ($CLOUD_DAOQI) {
                S('CLOUD_DAOQI', $CLOUD_DAOQI);
            } else {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_license_due_time_failed') . '"></a>';
                exit();
            }
        }

        if (strtotime($CLOUD_DAOQI) < time()) {
            S('CLOUDTIME', time() - (60 * 60 * 24));
            echo '<a title="' . L('user_license_has_expired') . '"></a>';
            exit();
        }

        if (!$CLOUD_IP) {
            $CLOUD_IP = getUrl($CLOUD . '/Auth/ip?mscode=' . MSCODE);

            if (!$CLOUD_IP) {
                S('CLOUD_IP', 1);
            } else {
                S('CLOUD_IP', $CLOUD_IP);
            }
        }

        if ($CLOUD_IP && ($CLOUD_IP != 1)) {
            $ip_arr = explode('|', $CLOUD_IP);

            if ('/' == DIRECTORY_SEPARATOR) {
                $ip_a = $_SERVER['SERVER_ADDR'];
            } else {
                $ip_a = @(gethostbyname($_SERVER['SERVER_NAME']));
            }

            if (!$ip_a) {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_failed_to_get_local_ip') . '"></a>';
                exit();
            }

            if (!in_array($ip_a, $ip_arr)) {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_match_local_ip_failed') . '"></a>';
                exit();
            }
        }

        if (!$CLOUD_HOME) {
            $CLOUD_HOME = getUrl($CLOUD . '/Auth/home?mscode=' . MSCODE);

            if (!$CLOUD_HOME) {
                S('CLOUD_HOME', 1);
            } else {
                S('CLOUD_HOME', $CLOUD_HOME);
            }
        }

        if ($CLOUD_HOME && ($CLOUD_HOME != 1)) {
            $home_arr = explode('|', $CLOUD_HOME);
            $home_a   = $_SERVER['SERVER_NAME'];

            if (!$home_a) {
                $home_a = $_SERVER['HTTP_HOST'];
            }

            if (!$home_a) {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_get_local_domain_error') . '"></a>';
                exit();
            }

            if (!in_array($home_a, $home_arr)) {
                S('CLOUDTIME', time() - (60 * 60 * 24));
                echo '<a title="' . L('user_match_license_domain_error') . '"></a>';
                exit();
            }
        }
    }
}
