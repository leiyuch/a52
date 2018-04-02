<?php
namespace Home\Controller;

class LoginController extends HomeController
{
    public function register()
    {
        $this->display();
    }

    public function userRegister($username,$password,$repassword,$code,$invit)
    {
        
        // if (!check($email, 'email')) {
        //     $this->error(L('Email_error'));
        // }

        // if (!check($password, 'password')) {
        //     $this->error(L('login_password_format_error'));
        // }
        // $secode = session('code'.$email);
        // if($secode != $code){
        //     $this->error("验证码不正确"); 
        // }
       
        if (!check($username, 'username')) {
            $this->error(L('user_name_format_error'));
        }

        if (!check($password, 'password')) {
            $this->error(L('login_password_format_error'));
        }

        if ($password != $repassword) {
            $this->error(L('confirm_password_format_error'));
        }

        if (M('User')->where(array('username' => $username))->find()) {
            $this->error(L('user_name_already_exists'));
        }

        if (!$invit) {
            $invit = session('invit');
        }

        $invituser = M('User')->where(array('invit' => $invit))->find();

        if (!$invituser) {
            $invituser = M('User')->where(array('id' => $invit))->find();
        }

        if (!$invituser) {
            $invituser = M('User')->where(array('username' => $invit))->find();
        }

        if (!$invituser) {
            $invituser = M('User')->where(array('moble' => $invit))->find();
        }

        if ($invituser) {
            $invit_1 = $invituser['id'];
            $invit_2 = $invituser['invit_1'];
            $invit_3 = $invituser['invit_2'];
        } else {
            $invit_1 = 0;
            $invit_2 = 0;
            $invit_3 = 0;
        }

        for (; true;) {
            $tradeno = tradenoa();

            if (!M('User')->where(array('invit' => $tradeno))->find()) {
                break;
            }
        }
        $mo = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_user write , movesay_user_coin write ');
        $rs   = array();
        $rs[] = $mo->table('movesay_user')->add(array('Country' => $usercountry, 'username' => $username, 'password' => md5($password), 'invit' => $tradeno, 'tpwdsetting' => 1, 'invit_1' => $invit_1, 'invit_2' => $invit_2, 'invit_3' => $invit_3, 'addip' => get_client_ip(), 'addr' => get_city_ip(), 'addtime' => time(), 'status' => 1));
        $rs[] = $mo->table('movesay_user_coin')->add(array('userid' => $rs[0]));

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');
            session('reguserId', $rs[0]);
            $this->success(L('register_succeed'));
        } else {
            $mo->execute('rollback');
            $this->error(L('register_failed'));
        }
    }



    public function upregister($usercountry, $username, $password, $repassword, $verify, $invit)
    {
        if (!check_verify(strtoupper($verify))) {
            $this->error(L('image_captcha_error'));
        }

        if (!check($username, 'username')) {
            $this->error(L('user_name_format_error'));
        }

        if (!check($password, 'password')) {
            $this->error(L('login_password_format_error'));
        }

        if ($password != $repassword) {
            $this->error(L('confirm_password_format_error'));
        }

        if (M('User')->where(array('username' => $username))->find()) {
            $this->error(L('user_name_already_exists'));
        }

        if (!$invit) {
            $invit = session('invit');
        }

        $invituser = M('User')->where(array('invit' => $invit))->find();

        if (!$invituser) {
            $invituser = M('User')->where(array('id' => $invit))->find();
        }

        if (!$invituser) {
            $invituser = M('User')->where(array('username' => $invit))->find();
        }

        if (!$invituser) {
            $invituser = M('User')->where(array('moble' => $invit))->find();
        }

        if ($invituser) {
            $invit_1 = $invituser['id'];
            $invit_2 = $invituser['invit_1'];
            $invit_3 = $invituser['invit_2'];
        } else {
            $invit_1 = 0;
            $invit_2 = 0;
            $invit_3 = 0;
        }

        for (; true;) {
            $tradeno = tradenoa();

            if (!M('User')->where(array('invit' => $tradeno))->find()) {
                break;
            }
        }

        $mo = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_user write , movesay_user_coin write ');
        $rs   = array();
        $rs[] = $mo->table('movesay_user')->add(array('Country' => $usercountry, 'username' => $username, 'password' => md5($password), 'invit' => $tradeno, 'tpwdsetting' => 1, 'invit_1' => $invit_1, 'invit_2' => $invit_2, 'invit_3' => $invit_3, 'addip' => get_client_ip(), 'addr' => get_city_ip(), 'addtime' => time(), 'status' => 1));
        $rs[] = $mo->table('movesay_user_coin')->add(array('userid' => $rs[0]));

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');
            session('reguserId', $rs[0]);
            $this->success(L('register_succeed'));
        } else {
            $mo->execute('rollback');
            $this->error(L('register_failed'));
        }
    }

    public function register2()
    {
        $this->display();
    }

    public function upregister2($paypassword, $repaypassword)
    {
        if (!check($paypassword, 'password')) {
            $this->error(L('trade_password_format_error'));
        }

        if ($paypassword != $repaypassword) {
            $this->error(L('confirm_password_error'));
        }

        if (!session('reguserId')) {
            $this->error(L('illegal_access'));
        }

        if (M('User')->where(array('id' => session('reguserId'), 'password' => md5($paypassword)))->find()) {
            $this->error(L('trade_login_not_be_same'));
        }

        if (M('User')->where(array('id' => session('reguserId')))->save(array('paypassword' => md5($paypassword)))) {
            $this->success(L('succeed'));
        } else {
            $this->error(L('failed'));
        }
    }

    public function register3()
    {
        $this->display();
    }

    // public function upregister3($truename, $idcard)
    // {
    // if (!check($truename, 'truename')) {
    // $this->error(L('ture_name_format_error'));
    // }

    // if (!check($idcard, 'idcard')) {
    // $this->error(L('id_number_format_error'));
    // }

    // if (!session('reguserId')) {
    // $this->error(L('illegal_access'));
    // }

    // if (M('User')->where(array('id' => session('reguserId')))->save(array('truename' => $truename, 'idcard' => $idcard))) {
    // $this->success(L('succeed'));
    // }
    // else {
    // $this->error(L('failed'));
    // }
    // }
    public function upregister3($truename, $idcard, $email)
    {
        if (!check($truename, 'truename')) {
            $this->error(L('ture_name_format_error'));
        }

        if (!check($idcard, 'idcard')) {
            $this->error(L('id_number_format_error'));
        }
        if (!check($email, 'email')) {
            $this->error(L('Email_error'));
        }

        $url  = 'http://op.juhe.cn/idcard/query?key=029e0017536fa83a674b32972a85331a&idcard=' . $idcard . '&realname=' . urlencode($truename);
        $html = file_get_contents($url);
        $obj  = json_decode($html);
        if ($obj->result->res != 1) {
            $this->error('您输入的身份证号与姓名不匹配，请重新输入');
        }

        if (!session('reguserId')) {
            $this->error(L('illegal_access'));
        }
        // if (M('User')->where(array('email' => $email))->find()) {
        //     $this->error(L('Email_already_exists'));
        // }
        $user = M('User')->where(array('id' => session('reguserId')))->find();
        // if ($user['truename'] == '') {

            if (M('User')->where(array('id' => session('reguserId')))->save(array('truename' => $truename, 'idcard' => $idcard, 'email' => $email))) {

                // 注册送3000 积分
                M('user_coin')->where(array('userid' => session('reguserId')))->save(array('integral' => 3000));
                $this->success(L('succeed'));
            } else {
                $this->error(L('failed'));
            }
        // } else {
        //     $this->error(L('illegal_access'));
        // }

    }
    public function register4()
    {
        $user = M('User')->where(array('id' => session('reguserId')))->find();
        session('userId', $user['id']);
        session('userName', $user['username']);
        $this->assign('user', $user);
        $this->display();
    }

    public function chkUser($username)
    {
        if (!check($username, 'username')) {
            $this->error(L('user_name_format_error'));
        }

        if (M('User')->where(array('username' => $username))->find()) {
            $this->error(L('user_name_already_exists'));
        }

        $this->success('');
    }

    public function submit($username, $password, $verify = null, $mverify = null)
    {
        // if (C('login_verify')) {
        //     if (!check_verify(strtoupper($verify))) {
        //         $this->error(L('image_captcha_error'));
        //     }
        // }


        // if ($mverify!=session('lm_verify')) {
        //      $this->error('短信验证码错误');
        //     }

        if (check($username, 'email')) {
            $user      = M('User')->where(array('email' => $username))->find();
            $remark    = '通过邮箱登录';
            $en_remark = 'Login by email';
        }

        if (!$user && check($username, 'moble')) {
            $user      = M('User')->where(array('moble' => $username))->find();
            $remark    = '通过手机号登录';
            $en_remark = 'Login by phone';
        }

        if (!$user) {
            $user      = M('User')->where(array('username' => $username))->find();
            $remark    = '通过用户名登录';
            $en_remark = 'Login by account';
        }

        if (!$user) {
            $this->error(L('user_does_not_exist'));
        }

        if (!check($password, 'password')) {
            $this->error(L('login_password_format_error'));
        }

        if (md5($password) != $user['password']) {
            $this->error(L('login_password_is_error'));
        }

        if ($user['status'] == 0) {
            $this->error(L('account_freeze'));
        }

        $login_addr = get_city_ip();
        if ($login_addr == '未分配或者内网IP') {
            $login_en_addr = 'Not assigned or within the network IP';
        } else {
            $login_en_addr = $login_addr;
        }
        $mo = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_user write , movesay_user_log write ');
        $rs   = array();
        $rs[] = $mo->table('movesay_user')->where(array('id' => $user['id']))->setInc('logins', 1);
        $rs[] = $mo->table('movesay_user_log')->add(array('userid' => $user['id'], 'type' => '登录', 'remark' => $remark, 'addtime' => time(), 'addip' => get_client_ip(), 'addr' => $login_addr, 'status' => 1, 'en_type' => 'Login', 'en_remark' => $en_remark, 'en_addr' => $login_en_addr));

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');

            if (!$user['invit']) {
                for (; true;) {
                    $tradeno = tradenoa();

                    if (!M('User')->where(array('invit' => $tradeno))->find()) {
                        break;
                    }
                }

                M('User')->where(array('id' => $user['id']))->setField('invit', $tradeno);
            }

            session('userId', $user['id']);
            session('userName', $user['username']);

            if (!$user['paypassword']) {
                session('regpaypassword', $rs[0]);
                session('reguserId', $user['id']);
            }

            if (!$user['truename']) {
                session('regtruename', $rs[0]);
                session('reguserId', $user['id']);
            }

            $this->success(L('login_succeed'));
        } else {
            $mo->execute('rollback');
            $this->error(L('login_failed'));
        }
    }
       public function sendcode($username,  $verify = null)
    {

        if (C('login_verify')) {
            if (!check_verify(strtoupper($verify))) {
                $this->error(L('image_captcha_error'));
            }
        }

        $user      = M('User')->where(array('username' => $username))->find();

        if (!$user) {
            $this->error(L('user_does_not_exist'));
        }
        if (!$user['moble']) {
               $this->error('未绑定手机号!');
          }  
  

        $mobile=$user['moble'];
        $code = rand(111111, 999999);
        session('lm_verify', $code);
        $content = '您正在进行交易平台登录，您的验证码是' . $code;

        $cc=send_moble($mobile, $content);
        if (0 <   $cc) {
            $this->success('短信发送成功!');
        }
        else {
            $this->error('短信发送失败!'.$cc);
        }

        


        
    }

    public function loginout()
    {
        session(null);
        redirect('/');
    }

    public function findpwd()
    {
        if (IS_POST) {
            $input = I('post.');

            if (!check_verify(strtoupper($input['verify']))) {
                $this->error(L('image_captcha_error'));
            }

            if (!check($input['username'], 'username')) {
                $this->error(L('user_name_format_error'));
            }

            if (!check($input['moble'], 'moble')) {
                $this->error(L('phone_format_error'));
            }

            if (!check($input['moble_verify'], 'd')) {
                $this->error(L('sms_code_format_error'));
            }

            if ($input['moble_verify'] != session('findpwd_verify')) {
                $this->error(L('sms_code_error'));
            }

            $user = M('User')->where(array('username' => $input['username']))->find();

            if (!$user) {
                $this->error(L('user_name_does_not_exist'));
            }

            if ($user['moble'] != $input['moble']) {
                $this->error(L('phone_or_account_error'));
            }

            if (!check($input['password'], 'password')) {
                $this->error(L('new_login_password_format_error'));
            }

            if ($input['password'] != $input['repassword']) {
                $this->error(L('confirm_password_error'));
            }

            $mo = M();
            $mo->execute('set autocommit=0');
            $mo->execute('lock tables movesay_user write , movesay_user_log write ');
            $rs   = array();
            $rs[] = $mo->table('movesay_user')->where(array('id' => $user['id']))->save(array('password' => md5($input['password'])));

            if (check_arr($rs)) {
                $mo->execute('commit');
                $mo->execute('unlock tables');
                $this->success(L('modify_succeed'));
            } else {
                $mo->execute('rollback');
                $this->error(L('modify_failed'));
            }
        } else {
            $this->display();
        }
    }
    public function findpwdbyemail()
    {
        if (IS_POST) {
            $input = I('post.');

            if (!check_verify(strtoupper($input['verify']))) {
                $this->error(L('image_captcha_error'));
            }

            if (!check($input['username'], 'username')) {
                $this->error(L('user_name_format_error'));
            }

            if (!check($input['moble'], 'email')) {
                $this->error(L('phone_format_error'));
            }

            if (!check($input['moble_verify'], 'd')) {
                $this->error(L('sms_code_format_error'));
            }

            if ($input['moble_verify'] != session('findpwd_verify')) {
                $this->error(L('sms_code_error'));
            }

            $user = M('User')->where(array('username' => $input['username']))->find();

            if (!$user) {
                $this->error(L('user_name_does_not_exist'));
            }

            if ($user['email'] != $input['moble']) {
                $this->error(L('phone_or_account_error'));
            }

            if (!check($input['password'], 'password')) {
                $this->error(L('new_login_password_format_error'));
            }

            if ($input['password'] != $input['repassword']) {
                $this->error(L('confirm_password_error'));
            }

            $mo = M();
            $mo->execute('set autocommit=0');
            $mo->execute('lock tables movesay_user write , movesay_user_log write ');
            $rs   = array();
            $rs[] = $mo->table('movesay_user')->where(array('id' => $user['id']))->save(array('password' => md5($input['password'])));

            if (check_arr($rs)) {
                $mo->execute('commit');
                $mo->execute('unlock tables');
                $this->success(L('modify_succeed'));
            } else {
                $mo->execute('rollback');
                $this->error(L('modify_failed'));
            }
        } else {
            $this->display();
        }
    }

    public function findpaypwd()
    {
        if (IS_POST) {
            $input = I('post.');

            if (!check($input['username'], 'username')) {
                $this->error(L('user_name_format_error'));
            }

            if (!check($input['moble'], 'moble')) {
                $this->error(L('phone_format_error'));
            }

            if (!check($input['moble_verify'], 'd')) {
                $this->error(L('sms_code_format_error'));
            }

            if ($input['moble_verify'] != session('findpaypwd_verify')) {
                $this->error(L('sms_code_error'));
            }

            $user = M('User')->where(array('username' => $input['username']))->find();

            if (!$user) {
                $this->error(L('user_name_does_not_exist'));
            }

            if ($user['moble'] != $input['moble']) {
                $this->error(L('phone_or_account_error'));
            }

            if (!check($input['password'], 'password')) {
                $this->error(L('new_trade_password_format_error'));
            }

            if ($input['password'] != $input['repassword']) {
                $this->error(L('confirm_password_error'));
            }

            $mo = M();
            $mo->execute('set autocommit=0');
            $mo->execute('lock tables movesay_user write , movesay_user_log write ');
            $rs   = array();
            $rs[] = $mo->table('movesay_user')->where(array('id' => $user['id']))->save(array('paypassword' => md5($input['password'])));

            if (check_arr($rs)) {
                $mo->execute('commit');
                $mo->execute('unlock tables');
                $this->success(L('modify_succeed'));
            } else {
                $mo->execute('rollback');
                $this->error(L('modify_failed') . $mo->table('movesay_user')->getLastSql());
            }
        } else {
            $this->display();
        }
    }
}
