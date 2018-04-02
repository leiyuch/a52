<?php
namespace Home\Controller;

class TradeController extends HomeController
{
    public function file_type($filename)
    {

        $file = fopen($_SERVER['DOCUMENT_ROOT'] . $filename, "rb");
        if (!$file) {
            $this->error(0);
        }
        $bin = fread($file, 2); //只读2字节
        fclose($file);
        $strInfo  = @unpack("C2chars", $bin);
        $typeCode = intval($strInfo['chars1'] . $strInfo['chars2']);
        $fileType = 0;
        switch ($typeCode) {
            case 7790:
                $fileType = 0;
                break;
            case 7784:
                $fileType = 0;
                break;
            case 8297:
                $fileType = 0;
                break;
            case 8075:
                $fileType = 0;
                break;
            case 255216:
                $fileType = 1;
                break;
            case 7173:
                $fileType = 1;
                break;
            case 6677:
                $fileType = 1;
                break;
            case 13780:
                $fileType = 1;
                break;
            default:
                $fileType = 0;
        }

        //Fix
        if ($strInfo['chars1'] == '-1' and $strInfo['chars2'] == '-40') {
            $fileType = 1;
        }

        if ($strInfo['chars1'] == '-119' and $strInfo['chars2'] == '80') {
            $fileType = 1;
        }

        $this->error($fileType);
    }
    public function index($market = null)
    {

        if (!userid()) {
        }

        check_server();

        if (!$market) {
            $market = C('market_mr');
        }
        // TODO: SEPARATE
        // TODO: SEPARATE

        $this->assign('market', $market);
        $this->assign('xnb', explode('_', $market)[0]);
        $this->assign('rmb', explode('_', $market)[1]);
        $this->display();
    }

    public function chart($market = null)
    {
        if (!userid()) {
        }

        check_server();

        if (!$market) {
            $market = C('market_mr');
        }
        // TODO: SEPARATE
        // TODO: SEPARATE

        $this->assign('market', $market);
        $this->assign('xnb', explode('_', $market)[0]);
        $this->assign('rmb', explode('_', $market)[1]);
        $this->display();
    }

    public function info($market = null)
    {
        if (!userid()) {
        }

        check_server();

        if (!$market) {
            $market = C('market_mr');
        }
        // TODO: SEPARATE
        // TODO: SEPARATE

        $this->assign('market', $market);
        $this->assign('xnb', explode('_', $market)[0]);
        $this->assign('rmb', explode('_', $market)[1]);
        $this->display();
    }

    public function comment($market = null)
    {
        if (!userid()) {
        }

        check_server();

        if (!$market) {
            $market = C('market_mr');
        }

        if (!$market) {
            $market = C('market_mr');
        }
        // TODO: SEPARATE
        // TODO: SEPARATE

        $this->assign('market', $market);
        $this->assign('xnb', explode('_', $market)[0]);
        $this->assign('rmb', explode('_', $market)[1]);
        $where['coinname'] = explode('_', $market)[0];
        $Moble             = M('CoinComment');
        $count             = $Moble->where($where)->count();
        $Page              = new \Think\Page($count, 15);
        $show              = $Page->show();
        $list              = $Moble->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
            $list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
        }

        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function ordinary($market = null)
    {
        if (!$market) {
            $market = C('market_mr');
        }

        $this->assign('market', $market);
        $this->display();
    }

    public function specialty($market = null)
    {
        if (!$market) {
            $market = C('market_mr');
        }

        $this->assign('market', $market);
        $this->display();
    }

    // $type=1 买入 $type=2 卖出

    public function upTrade($paypassword = null, $market = null, $price, $num, $type)
    {





        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }
        $moble = M('User')->where(array('id' => userid()))->getField('moble');

        //$this->assign('moble', $moble)

        if ($market == 'sgc_cny') {
            //判断是否被锁定
            $s = M('User')->where(array('id' => userid()))->getField('status');

            //账号被冻结
            if ($s == 2) {
                $this->error(L('User_Locked'));

            }
            //账号需要实名审核
            if ($s == 3) {
                $this->error(L('User_audit'));

            }
            if ($moble) {
                $moble = substr_replace($moble, '****', 3, 4);
            } else {
                $this->error('147');
                //$this->error(L('trade_please_perfect_bank_info_first'),U('Home/User/moble'));
            }

            $UserBank = M('UserBank')->where(array('userid' => userid(), 'status' => 1))->order('id desc')->limit(1)->select();
            if (!$UserBank) {

                $this->error(L('trade_please_perfect_bank_info_first'));
            }

            $yiyounum = M('user_coin')->where(array('userid' => userid()))->find();

            $pp       = $yiyounum['sgc'] + $yiyounum['sgcd'];
            $trade111 = M('trade')->where(array('userid' => userid(), 'type' => 1, 'status' => 0, 'market' => 'sgc_cny'))->count();
            if ($trade111 == 0) {

                $trade = 0;
            } else {

                $trade = M('trade')->where(array('userid' => userid(), 'type' => 1, 'status' => 0, 'market' => 'sgc_cny'))->sum('num');
            }

            if ($type == 1) {

                // $nn = 30000;

                // $coin = M('coin')->where(array('id' => 1))->find();
                // if ($coin["max_leiji"] > 1) {
                //     $nn = $coin["max_leiji"];
                // }

                // if ($pp + $trade > $nn) {
                //     $this->error(L('trade_holding_amount_than') . $nn . L('trade_thousand_not_allowed_to_buy'));

                // } else {

                //     if ($pp + $trade + $num > $nn) {
                //         $m  = $pp + $trade;
                //         $m1 = $pp + $trade + $num - $nn;
                //         $this->error(L('trade_current_holding_amount_and_buy') . $m . L('trade_can_also_buy') . $m1);

                //     }

                // }

            }
            if ($type == 2) {


                //卖单，每次挂卖量不能超过信用积分40%；
                $u_coin = M('UserCoin')->where(array('userid' => userid()))->find();
                $coin   = M('coin')->where(array('id' => 10))->find();

                //积分
                $uintegral = $u_coin['integral'];
                if ($num > ($uintegral * $coin["max_meitian"] / 100)) {

                    $this->error('您的积分不足本次交易');
                }
                $ttc = 3;
                if ($coin["max_leiji"]) {
                    $ttc = $coin["max_leiji"];
                }
                 $y = date("Y");

                //获取当天的月份
                $m = date("m");

                //获取当天的号数
                $d = date("d");

                //将今天开始的年月日时分秒，转换成unix时间戳(开始示例：2015-10-12 00:00:00)
                $todayTime1 = mktime(0, 0, 0, $m, $d, $y);
                $todayTime2 = mktime(23, 59, 59, $m, $d, $y);

                //卖单，最多每天可挂卖3次，必须上一挂卖单成交后才可挂卖下一单；【处理中】
                $t = M('trade')->where(' userid=' . userid() . ' and  type=2  and market=\'sgc_cny \' and addtime between  ' . $todayTime1 . ' and ' . $todayTime2)->count();
                if ($t >= $ttc) {
                    $this->error('最多每天可挂卖'.$ttc.'次,您今天不可以在挂卖了');
                } else {

                    $t = M('trade')->where(' userid=' . userid() . ' and  type=2  AND (status=0 ) and market=\'sgc_cny \' and addtime between  ' . $todayTime1 . ' and ' . $todayTime2)->count();
                    if ($t >= 1) {
                        $this->error('您上一单们还没有成交，成交后在继续挂卖');
                    }

                }


                // $nmm = 3000;

                // $coin = M('coin')->where(array('id' => 1))->find();
                // if ($coin["max_meitian"] > 1) {
                //     $nmm = $coin["max_meitian"];
                // }

                // if ($num > $nmm) {
                //     $this->error(L('trade_daily_maximum_amount') . $nmm);

                // }

               

                //$trade2=M('trade')->where(' userid='.userid().' and  type=2  and market=\'ofc_cny \' AND (status=0 or status=1 ) and addtime between  '.$todayTime1.' and '.$todayTime2)->sum('num');

                // $t = M('trade')->where(' userid=' . userid() . ' and  type=2  and market=\'sgc_cny \' AND (status=0 or status=1 ) and addtime between  ' . $todayTime1 . ' and ' . $todayTime2)->count();

                // if ($t == 0) {

                //     $trade2 = 0;
                // } else {

                //     $trade2 = M('trade')->where(' userid=' . userid() . ' and  type=2  and market=\'sgc_cny \' AND (status=0 or status=1 ) and addtime between  ' . $todayTime1 . ' and ' . $todayTime2)->sum('num');

                // }
                // if ($trade2 >= $nmm) {
                //     $this->error(L('trade_daily_maximum_amount') . $nmm . L('trade_today_can_not_sell'));
                //     return;
                // } else {

                //     if ($num + $trade2 > $nmm) {
                //         $b = $nmm - $trade2;
                //         $this->error(L('trade_volume_shall_not_exceed') . $nmm . L('trade_you_can_also_sell') . $b);
                //         return;
                //     }

                // }

            }

        }

        if (!check($price, 'double')) {
            $this->error(L('trade_price_format_error'));
        }

        if (!check($num, 'double')) {
            $this->error(L('trade_amount_format_error'));
        }

        if (($type != 1) && ($type != 2)) {
            $this->error(L('trade_type_format_error'));
        }

        $user = M('User')->where(array('id' => userid()))->find();

        if ($user['tpwdsetting'] == 3) {
        }

        if ($user['tpwdsetting'] == 2) {
            if (md5($paypassword) != $user['paypassword']) {
                $this->error(L('trade_password_error'));
            }
        }

        if ($user['tpwdsetting'] == 3) {
            if (!session(userid() . 'tpwdsetting')) {
                if (md5($paypassword) != $user['paypassword']) {
                    $this->error(L('trade_password_error'));
                } else {
                    session(userid() . 'tpwdsetting', 1);
                }
            }
        }

        if (!C('market')[$market]) {
            $this->error(L('trade_market_error'));
        } else {
            $xnb = explode('_', $market)[0];
            $rmb = explode('_', $market)[1];
        }

        if (!C('market')[$market]['trade']) {
            $this->error(L('trade_current_market_forbid_trade'));
        }
        // TODO: SEPARATE

        $price = round(floatval($price), C('market')[$market]['round']);

        if (!$price) {
            $this->error(L('trade_price_error') . $price);
        }

        $num = round($num, 8 - C('market')[$market]['round']);

        if (!check($num, 'double')) {
            $this->error(L('trade_amount_error'));
        }

        if ($type == 1) {
            $min_price = (C('market')[$market]['buy_min'] ? C('market')[$market]['buy_min'] : 1.0E-8);
            $max_price = (C('market')[$market]['buy_max'] ? C('market')[$market]['buy_max'] : 10000000);
        } else if ($type == 2) {
            $min_price = (C('market')[$market]['sell_min'] ? C('market')[$market]['sell_min'] : 1.0E-8);
            $max_price = (C('market')[$market]['sell_max'] ? C('market')[$market]['sell_max'] : 10000000);
        } else {
            $this->error(L('trade_type_error'));
        }

        if ($max_price < $price) {
            $this->error(L('trade_price_maximum_limit'));
        }

        if ($price < $min_price) {
            $this->error(L('trade_price_minimum_limit'));
        }

        $hou_price = C('market')[$market]['hou_price'];


        if ($hou_price) {
            // if (C('market')[$market]['zhang']) {
                // TODO: SEPARATE
                $zhang_price = round(($hou_price / 100) * (100 + C('market')[$market]['zhang']), C('market')[$market]['round']);

                if ($zhang_price < $price) {
                    $this->error(L('trade_price_increase_limit'));
                }
            //}

            // if (C('market')[$market]['die']) {
                // TODO: SEPARATE
                $die_price = round(($hou_price / 100) * (100 - C('market')[$market]['die']), C('market')[$market]['round']);

                if ($price < $die_price) {
                    $this->error(L('trade_price_drop_limit'));
                }
           // }
        }

        $user_coin = M('UserCoin')->where(array('userid' => userid()))->find();

        if ($type == 1) {
            $trade_fee = C('market')[$market]['fee_buy'];

            if ($trade_fee) {
                $fee = round((($num * $price) / 100) * $trade_fee, 8);
                $mum = round((($num * $price) / 100) * (100 + $trade_fee), 8);
            } else {
                $fee = 0;
                $mum = round($num * $price, 8);
            }

            if ($user_coin[$rmb] < $mum) {
                $this->error(C('coin')[$rmb]['title'] . L('trade_balance_is_not_enough'));
            }
        } else if ($type == 2) {
            $trade_fee = C('market')[$market]['fee_sell'];

            if ($trade_fee) {
                $fee = round((($num * $price) / 100) * $trade_fee, 8);
                if ($market == 'sgc_cny') {
                    $mum = round($num * $price, 8);
                } else {

                    $mum = round((($num * $price) / 100) * (100 - $trade_fee), 8);
                }

            } else {
                $fee = 0;
                $mum = round($num * $price, 8);
            }

            if ($user_coin[$xnb] < $num) {
                $this->error(C('coin')[$xnb]['title'] . L('trade_balance_is_not_enough'));
            }
        } else {
            $this->error(L('trade_type_error'));
        }

        if (C('coin')[$xnb]['fee_bili']) {
            if ($type == 2) {
                // TODO: SEPARATE
                $bili_user = round($user_coin[$xnb] + $user_coin[$xnb . 'd'], C('market')[$market]['round']);

                if ($bili_user) {
                    // TODO: SEPARATE
                    $bili_keyi = round(($bili_user / 100) * C('coin')[$xnb]['fee_bili'], C('market')[$market]['round']);

                    if ($bili_keyi) {
                        $bili_zheng = M()->query('select id,price,sum(num-deal)as nums from movesay_trade where userid=' . userid() . ' and status=0 and type=2 and market like \'%' . $xnb . '%\' ;');

                        if (!$bili_zheng[0]['nums']) {
                            $bili_zheng[0]['nums'] = 0;
                        }

                        $bili_kegua = $bili_keyi - $bili_zheng[0]['nums'];

                        if ($bili_kegua < 0) {
                            $bili_kegua = 0;
                        }

                        if ($bili_kegua < $num) {
                            $this->error(L('trade_sell_amount_limit') . C('coin')[$xnb]['title'] . $bili_user . L('trade_have_selling') . $bili_zheng[0]['nums'] . L('trade_can_selling') . $bili_kegua, '', 5);
                        }
                    } else {
                        $this->error(L('trade_can_amount_error'));
                    }
                }
            }
        }


        if (C('coin')[$xnb]['fee_meitian']) {
            if ($type == 2) {
                $bili_user = round($user_coin[$xnb] + $user_coin[$xnb . 'd'], 8);

                if ($bili_user < 0) {
                    $this->error(L('trade_can_amount_error'));
                }

                $kemai_bili = ($bili_user / 100) * C('coin')[$xnb]['fee_meitian'];

                if ($kemai_bili < 0) {
                    $this->error(L('trade_can_sell_today') . C('coin')[$xnb]['title'] . 0 . '个', '', 5);
                }

                $kaishi_time  = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                $jintian_sell = M('Trade')->where(array(
                    'userid'  => userid(),
                    'addtime' => array('egt', $kaishi_time),
                    'type'    => 2,
                    'status'  => array('neq', 2),
                    'market'  => array('like', '%' . $xnb . '%'),
                ))->sum('num');

                if ($jintian_sell) {
                    $kemai = $kemai_bili - $jintian_sell;
                } else {
                    $kemai = $kemai_bili;
                }

                if ($kemai < $num) {
                    if ($kemai < 0) {
                        $kemai = 0;
                    }

                    $this->error(L('trade_sell_amount_limit_1') . C('coin')[$xnb]['title'] . $kemai . '个', '', 5);
                }
            }
        }

        if (C('market')[$market]['trade_min']) {
            if ($mum < C('market')[$market]['trade_min']) {
                $this->error(L('trade_amount_not_less_than') . C('market')[$market]['trade_min']);
            }
        }

        if (C('market')[$market]['trade_max']) {
            if (C('market')[$market]['trade_max'] < $mum) {
                $this->error(L('trade_amount_not_more_than') . C('market')[$market]['trade_max']);
            }
        }

        if (!$rmb) {
            $this->error(L('trade_data_error'));
        }

        if (!$xnb) {
            $this->error(L('trade_data_error'));
        }

        if (!$market) {
            $this->error(L('trade_data_error'));
        }

        if (!$price) {
            $this->error(L('trade_data_error'));
        }

        if (!$num) {
            $this->error(L('trade_data_error'));
        }

        if (!$mum) {
            $this->error(L('trade_data_error'));
        }

        if (!$type) {
            $this->error(L('trade_data_error'));
        }

        $mo = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_trade write ,movesay_user_coin write ,movesay_finance write');
        $rs        = array();
        $user_coin = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->find();

        if ($type == 1) {
            if ($user_coin[$rmb] < $mum) {
                $this->error(C('coin')[$rmb]['title'] . L('trade_balance_is_not_enough'));
            }

            $finance               = $mo->table('movesay_finance')->where(array('userid' => userid()))->order('id desc')->find();
            $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->find();
            $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setDec($rmb, $mum);
            $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setInc($rmb . 'd', $mum);
            $rs[]                  = $finance_nameid                  = $mo->table('movesay_trade')->add(array('userid' => userid(), 'market' => $market, 'price' => $price, 'num' => $num, 'mum' => $mum, 'fee' => $fee, 'type' => 1, 'addtime' => time(), 'status' => 0));
            $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->find();
            $finance_hash          = md5(userid() . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
            $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

            if ($finance['mum'] < $finance_num) {
                $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
            } else {
                $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
            }

            $rs[] = $mo->table('movesay_finance')->add(array('userid' => userid(), 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 2, 'name' => 'trade', 'nameid' => $finance_nameid, 'remark' => '交易中心-委托买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
        } else if ($type == 2) {

            if ($market == 'sgc_cny') {

                $num1 = round((($num) / 100) * (100 + $trade_fee), 8);
                if ($user_coin[$xnb] < $num1) {
                    $this->error(C('coin')[$xnb]['title'] . L('trade_balance_is_not_enough'));
                }
                $fee  = round((($num) / 100) * $trade_fee, 8);
                $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setDec($xnb, $num1);
                $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setInc($xnb . 'd', $num1);
                $rs[] = $mo->table('movesay_trade')->add(array('userid' => userid(), 'market' => $market, 'price' => $price, 'num' => $num, 'mum' => $mum, 'fee' => $fee, 'type' => 2, 'addtime' => time(), 'status' => 0));

            } else {

                if ($user_coin[$xnb] < $num) {
                    $this->error(C('coin')[$xnb]['title'] . L('trade_balance_is_not_enough'));
                }

                $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setDec($xnb, $num);
                $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->setInc($xnb . 'd', $num);
                $rs[] = $mo->table('movesay_trade')->add(array('userid' => userid(), 'market' => $market, 'price' => $price, 'num' => $num, 'mum' => $mum, 'fee' => $fee, 'type' => 2, 'addtime' => time(), 'status' => 0));
            }
        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');
            $this->error(L('trade_type_error'));
        }

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');
            S('getDepth', null);
            if ($market == 'sgc_cny') {

            } else {
                $this->matchingTrade($market);
            }

            $this->success(L('trade_succeed'));
        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');
            $this->error(L('trade_failed'));
        }
    }

    public function upTrade2($paypassword = null, $id)
    {
        $mo    = M();
        $t     = M()->table('movesay_trade')->where(array('id' => $id))->order('id desc')->find();
        $tt    = time() - 3600 * 48;
        $List1 = $mo->table('movesay_trade')->where("market='sgc_cny' and status=0 and userid=" . $t['userid'] . " and  status1=2 and  paytime< " . $tt)->count();

        if ($List1 <= 1) {

            //修改买的交易状态为已撤销
            $rs[] = $mo->table('movesay_user')->where(array('id' => $t['userid']))->setField('status', 1);

        }

        $this->match($t['market'], $t['buyid'], $id);

        $this->success(L('trade_succeed'));

    }

    public function upTrade1($paypassword = null, $id)
    {

        $t      = M()->table('movesay_trade')->where(array('id' => $id))->order('id desc')->find();
        $uid    = $t['buyuserid'];
        $market = $t['market'];
        $price  = $t['price'];
        $num    = $t['num'];
        $type   = 1;

        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }

        if (!check($price, 'double')) {
            $this->error(L('trade_price_format_error'));
        }

        if (!check($num, 'double')) {
            $this->error(L('trade_amount_format_error'));
        }

        if (($type != 1) && ($type != 2)) {
            $this->error(L('trade_type_format_error'));
        }

        if (!C('market')[$market]) {
            $this->error(L('trade_market_error'));
        } else {
            $xnb = explode('_', $market)[0];
            $rmb = explode('_', $market)[1];
        }

        if (!C('market')[$market]['trade']) {
            $this->error(L('trade_current_market_forbid_trade'));
        }
        // TODO: SEPARATE

        $price = round(floatval($price), C('market')[$market]['round']);

        if (!$price) {
            $this->error(L('trade_price_error') . $price);
        }

        $num = round($num, 8 - C('market')[$market]['round']);

        if (!check($num, 'double')) {
            $this->error(L('trade_amount_error'));
        }

        if ($type == 1) {
            $min_price = (C('market')[$market]['buy_min'] ? C('market')[$market]['buy_min'] : 1.0E-8);
            $max_price = (C('market')[$market]['buy_max'] ? C('market')[$market]['buy_max'] : 10000000);
        } else if ($type == 2) {
            $min_price = (C('market')[$market]['sell_min'] ? C('market')[$market]['sell_min'] : 1.0E-8);
            $max_price = (C('market')[$market]['sell_max'] ? C('market')[$market]['sell_max'] : 10000000);
        } else {
            $this->error(L('trade_type_error'));
        }

        if ($max_price < $price) {
            $this->error(L('trade_price_maximum_limit'));
        }

        if ($price < $min_price) {
            $this->error(L('trade_price_minimum_limit'));
        }

        $hou_price = C('market')[$market]['hou_price'];

        if ($hou_price) {
            if (C('market')[$market]['zhang']) {
                // TODO: SEPARATE
                $zhang_price = round(($hou_price / 100) * (100 + C('market')[$market]['zhang']), C('market')[$market]['round']);

                if ($zhang_price < $price) {
                    $this->error(L('trade_price_increase_limit'));
                }
            }

            if (C('market')[$market]['die']) {
                // TODO: SEPARATE
                $die_price = round(($hou_price / 100) * (100 - C('market')[$market]['die']), C('market')[$market]['round']);

                if ($price < $die_price) {
                    $this->error(L('trade_price_drop_limit'));
                }
            }
        }

        $user_coin = M('UserCoin')->where(array('userid' => userid()))->find();

        if ($type == 1) {
            $trade_fee = C('market')[$market]['fee_buy'];

            if ($trade_fee) {
                $fee = round((($num * $price) / 100) * $trade_fee, 8);
                $mum = round((($num * $price) / 100) * (100 + $trade_fee), 8);
            } else {
                $fee = 0;
                $mum = round($num * $price, 8);
            }

        } else if ($type == 2) {
        } else {
            $this->error(L('trade_type_error'));
        }

        if (C('market')[$market]['trade_min']) {
            if ($mum < C('market')[$market]['trade_min']) {
                $this->error(L('trade_amount_not_less_than') . C('market')[$market]['trade_min']);
            }
        }

        if (C('market')[$market]['trade_max']) {
            if (C('market')[$market]['trade_max'] < $mum) {
                $this->error(L('trade_amount_not_more_than') . C('market')[$market]['trade_max']);
            }
        }

        if (!$rmb) {
            $this->error(L('trade_data_error'));
        }

        if (!$xnb) {
            $this->error(L('trade_data_error'));
        }

        if (!$market) {
            $this->error(L('trade_data_error'));
        }

        if (!$price) {
            $this->error(L('trade_data_error'));
        }

        if (!$num) {
            $this->error(L('trade_data_error'));
        }

        if (!$mum) {
            $this->error(L('trade_data_error'));
        }

        if (!$type) {
            $this->error(L('trade_data_error'));
        }

        $mo = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_trade write ,movesay_user_coin write ,movesay_finance write');
        $rs        = array();
        $user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $uid))->find();

        if ($type == 1) {

            $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $uid))->find();
            // $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $uid)))->setDec($rmb, $mum);
            // $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $uid)))->setInc($rmb . 'd', $mum);
            $finance_nameid = $mo->table('movesay_trade')->add(array('userid' => $uid, 'market' => $market, 'price' => $price, 'num' => $num, 'mum' => $mum, 'fee' => $fee, 'type' => 1, 'addtime' => time(), 'status' => 0));
            //$this->error($finance_nameid );
            $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $uid))->find();
            $finance_hash          = md5(userid() . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
            $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

            if ($finance['mum'] < $finance_num) {
                $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
            } else {
                $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
            }

            $rs[] = $mo->table('movesay_finance')->add(array('userid' => $uid, 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 2, 'name' => 'trade', 'nameid' => $finance_nameid, 'remark' => '交易中心-委托买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
        } else if ($type == 2) {
        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');
            $this->error(L('trade_type_error'));
        }

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');
            S('getDepth', null);

            $this->match($market, $finance_nameid, $id);

            $this->success(L('trade_succeed'));
        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');
            $this->error(L('trade_failed'));
        }
    }

    public function match($market = null, $buyid, $sellid)
    {

        // 防止重复提交
        $trade = M('Trade')->where(array('id' => $buyid))->find();
        if ($trade['status'] == 1) {
            $this->error(L('trade_not_repeat'));
        }
        $trade = M('Trade')->where(array('id' => $sellid))->find();
        if ($trade['status'] == 1) {
            $this->error(L('trade_not_repeat'));
        }

        $rs = array();
        $mo = M();

        $xnb = explode('_', $market)[0];
        $rmb = explode('_', $market)[1];

        $fee_buy    = C('market')[$market]['fee_buy'];
        $fee_sell   = C('market')[$market]['fee_sell'];
        $invit_buy  = C('market')[$market]['invit_buy'];
        $invit_sell = C('market')[$market]['invit_sell'];
        $invit_1    = C('market')[$market]['invit_1'];
        $invit_2    = C('market')[$market]['invit_2'];
        $invit_3    = C('market')[$market]['invit_3'];

        $buy  = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $buyid))->order('price desc,id asc')->find();
        $sell = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $sellid))->order('price asc,id asc')->find();

        $amount = min(round($buy['num'] - $buy['deal'], 8 - C('market')[$market]['round']), round($sell['num'] - $sell['deal'], 8 - C('market')[$market]['round']));
        $amount = round($amount, 8 - C('market')[$market]['round']);
        $mum    = round($buy['price'] * $amount, 8);

        if ($fee_buy) {
            $buy_fee  = round(($mum / 100) * $fee_buy, 8);
            $buy_save = round(($mum / 100) * (100 + $fee_buy), 8);
        } else {
            $buy_fee  = 0;
            $buy_save = $mum;
        }
        $buy_fee  = 0;
        $buy_save = $mum;

        if ($fee_sell) {
            $sell_fee  = round(($mum / 100) * $fee_sell, 8);
            $sell_save = round(($mum / 100) * (100 - $fee_sell), 8);
        } else {
            $sell_fee  = 0;
            $sell_save = $mum;
        }

        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_trade write ,movesay_trade_log write ,movesay_user write,movesay_user_coin write,movesay_invit write ,movesay_finance write');
        $rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setInc('deal', $buy['num']);
        $rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setInc('deal', $buy['num']);
        $rs[] = $finance_nameid = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' => $buy['price'], 'num' => $buy['num'], 'mum' => $mum, 'type' => 1, 'fee_buy' => $fee_buy, 'fee_sell' => $fee_sell, 'addtime' => time(), 'status' => 1));
        //$rs[] = $finance_nameid = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' => 1,          'num' => 1, 'mum' =>1, 'type' => 1, 'fee_buy' => 1, 'fee_sell' => 1, 'addtime' => time(), 'status' => 1));

        $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($xnb, $buy['num']);
        $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
        $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
        //    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $save_buy_rmb);
        $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
        $finance_hash          = md5($buy['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
        $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

        if ($finance['mum'] < $finance_num) {
            $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
        } else {
            $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
        }

        $rs[]                  = $mo->table('movesay_finance')->add(array('userid' => $buy['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 2, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
        $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
        $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
        //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $sell_save);
        $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
        $finance_hash          = md5($sell['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
        $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

        if ($finance['mum'] < $finance_num) {
            $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
        } else {
            $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
        }

        $rs[] = $mo->table('movesay_finance')->add(array('userid' => $sell['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 1, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功卖出-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setDec($xnb . 'd', $sell['num'] + $sell['fee']);

        $rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setField('status', 1);

        $rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setField('status', 1);

        $invit_buy_user  = $mo->table('movesay_user')->where(array('id' => $buy['userid']))->find();
        $invit_sell_user = $mo->table('movesay_user')->where(array('id' => $sell['userid']))->find();

        if ($invit_buy) {
            if ($invit_1) {
                if ($buy_fee) {
                    if ($invit_buy_user['invit_1']) {
                        $invit_buy_save_1 = round(($buy_fee / 100) * $invit_1, 6);

                        if ($invit_buy_save_1) {
                            //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_1']))->setInc($rmb, $invit_buy_save_1);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_1'], 'invit' => $buy['userid'], 'name' => '一代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_1, 'addtime' => time(), 'status' => 1));
                        }
                    }

                    if ($invit_buy_user['invit_2']) {
                        $invit_buy_save_2 = round(($buy_fee / 100) * $invit_2, 6);

                        if ($invit_buy_save_2) {
                            //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_2']))->setInc($rmb, $invit_buy_save_2);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_2'], 'invit' => $buy['userid'], 'name' => '二代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_2, 'addtime' => time(), 'status' => 1));
                        }
                    }

                    if ($invit_buy_user['invit_3']) {
                        $invit_buy_save_3 = round(($buy_fee / 100) * $invit_3, 6);

                        if ($invit_buy_save_3) {
                            //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_3']))->setInc($rmb, $invit_buy_save_3);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_3'], 'invit' => $buy['userid'], 'name' => '三代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_3, 'addtime' => time(), 'status' => 1));
                        }
                    }
                }
            }

            if ($invit_sell) {
                if ($sell_fee) {
                    if ($invit_sell_user['invit_1']) {
                        $invit_sell_save_1 = round(($sell_fee / 100) * $invit_1, 6);

                        if ($invit_sell_save_1) {
                            //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_1']))->setInc($rmb, $invit_sell_save_1);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_1'], 'invit' => $sell['userid'], 'name' => '一代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_1, 'addtime' => time(), 'status' => 1));
                        }
                    }

                    if ($invit_sell_user['invit_2']) {
                        $invit_sell_save_2 = round(($sell_fee / 100) * $invit_2, 6);

                        if ($invit_sell_save_2) {
                            //$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_2']))->setInc($rmb, $invit_sell_save_2);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_2'], 'invit' => $sell['userid'], 'name' => '二代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_2, 'addtime' => time(), 'status' => 1));
                        }
                    }

                    if ($invit_sell_user['invit_3']) {
                        $invit_sell_save_3 = round(($sell_fee / 100) * $invit_3, 6);

                        if ($invit_sell_save_3) {
                            ///    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_3']))->setInc($rmb, $invit_sell_save_3);
                            $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_3'], 'invit' => $sell['userid'], 'name' => '三代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_3, 'addtime' => time(), 'status' => 1));
                        }
                    }
                }
            }
        }

        if (check_arr($rs)) {
            $mo->execute('commit');
            $mo->execute('unlock tables');

            //赠送卖买双方10%的交易积分
            $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc('integral', $mum * 0.1);
            $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc('integral', $mum * 0.1);

            $new_price  = round(M('TradeLog')->where(array('market' => $market, 'status' => 1))->order('id desc')->getField('price'), 6);
            $buy_price  = round(M('Trade')->where(array('type' => 1, 'market' => $market, 'status' => 0))->max('price'), 6);
            $sell_price = round(M('Trade')->where(array('type' => 2, 'market' => $market, 'status' => 0))->min('price'), 6);
            $min_price  = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->min('price'), 6);
            $max_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->max('price'), 6);
            $volume = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->sum('num'), 6);
            $sta_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'status'  => 1,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->order('id asc')->getField('price'), 6);
            $Cmarket = M('Market')->where(array('name' => $market))->find();

            if ($Cmarket['new_price'] != $new_price) {
                $upCoinData['new_price'] = $new_price;
            }

            if ($Cmarket['buy_price'] != $buy_price) {
                $upCoinData['buy_price'] = $buy_price;
            }

            if ($Cmarket['sell_price'] != $sell_price) {
                $upCoinData['sell_price'] = $sell_price;
            }

            if ($Cmarket['min_price'] != $min_price) {
                $upCoinData['min_price'] = $min_price;
            }

            if ($Cmarket['max_price'] != $max_price) {
                $upCoinData['max_price'] = $max_price;
            }

            if ($Cmarket['volume'] != $volume) {
                $upCoinData['volume'] = $volume;
            }

            $change               = round((($new_price - $Cmarket['hou_price']) / $Cmarket['hou_price']) * 100, 2);
            $upCoinData['change'] = $change;

            if ($upCoinData) {
                M('Market')->where(array('name' => $market))->save($upCoinData);
                M('Market')->execute('commit');
                S('home_market', null);
            }

            $coin = $xnb;
            S('allsum', null);
            S('getJsonTop' . $market, null);
            S('getTradelog' . $market, null);
            S('getDepth' . $market . '1', null);
            S('getDepth' . $market . '3', null);
            S('getDepth' . $market . '4', null);
            S('ChartgetJsonData' . $market, null);
            S('allcoin', null);
            S('trends', null);
        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');
        }

    }

    public function matchingTrade1($market = null, $buyid, $sellid)
    {

        if (!$market) {
            return false;
        } else {
            $xnb = explode('_', $market)[0];
            $rmb = explode('_', $market)[1];
        }

        $fee_buy           = C('market')[$market]['fee_buy'];
        $fee_sell          = C('market')[$market]['fee_sell'];
        $invit_buy         = C('market')[$market]['invit_buy'];
        $invit_sell        = C('market')[$market]['invit_sell'];
        $invit_1           = C('market')[$market]['invit_1'];
        $invit_2           = C('market')[$market]['invit_2'];
        $invit_3           = C('market')[$market]['invit_3'];
        $mo                = M();
        $new_trade_movesay = 0;

        for (; true;) {
            $buy  = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $buyid))->order('price desc,id asc')->find();
            $sell = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $sellid))->order('price asc,id asc')->find();

            if ($sell['id'] < $buy['id']) {
                $type = 1;
            } else {
                $type = 2;
            }

            if ($buy && $sell && (0 <= floatval($buy['price']) - floatval($sell['price']))) {
                $rs = array();

                if ($buy['num'] <= $buy['deal']) {
                }

                if ($sell['num'] <= $sell['deal']) {
                }

                $amount = min(round($buy['num'] - $buy['deal'], 8 - C('market')[$market]['round']), round($sell['num'] - $sell['deal'], 8 - C('market')[$market]['round']));
                $amount = round($amount, 8 - C('market')[$market]['round']);

                if ($amount <= 0) {
                    $log = '错误1交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . "\n";
                    $log .= 'ERR: 成交数量出错，数量是' . $amount;
                    M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    break;
                }

                if ($type == 1) {
                    $price = $sell['price'];
                } else if ($type == 2) {
                    $price = $buy['price'];
                } else {
                    break;
                }

                if (!$price) {
                    $log = '错误2交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . "\n";
                    $log .= 'ERR: 成交价格出错，价格是' . $price;
                    break;
                } else {
                    // TODO: SEPARATE
                    $price = round($price, C('market')[$market]['round']);
                }

                $mum = round($price * $amount, 8);

                if (!$mum) {
                    $log = '错误3交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . "\n";
                    $log .= 'ERR: 成交总额出错，总额是' . $mum;
                    mlog($log);
                    break;
                } else {
                    $mum = round($mum, 8);
                }

                if ($fee_buy) {
                    $buy_fee  = round(($mum / 100) * $fee_buy, 8);
                    $buy_save = round(($mum / 100) * (100 + $fee_buy), 8);
                } else {
                    $buy_fee  = 0;
                    $buy_save = $mum;
                }

                if (!$buy_save) {
                    $log = '错误4交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新数量出错，更新数量是' . $buy_save;
                    mlog($log);
                    break;
                }

                if ($fee_sell) {
                    $sell_fee  = round(($mum / 100) * $fee_sell, 8);
                    $sell_save = round(($mum / 100) * (100 - $fee_sell), 8);
                } else {
                    $sell_fee  = 0;
                    $sell_save = $mum;
                }

                if (!$sell_save) {
                    $log = '错误5交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家更新数量出错，更新数量是' . $sell_save;
                    mlog($log);
                    break;
                }

                $user_buy = M('UserCoin')->where(array('userid' => $buy['userid']))->find();

                if (!$user_buy[$rmb . 'd']) {
                    $log = '错误6交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家财产错误，冻结财产是' . $user_buy[$rmb . 'd'];
                    mlog($log);
                    break;
                }

                $user_sell = M('UserCoin')->where(array('userid' => $sell['userid']))->find();

                if (!$user_sell[$xnb . 'd']) {
                    $log = '错误7交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家财产错误，冻结财产是' . $user_sell[$xnb . 'd'];
                    mlog($log);
                    break;
                }

                // if ($user_buy[$rmb . 'd'] < 1.0E-8) {
                // $log = '错误88交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                // $log .= 'ERR: 买家更新冻结人民币出现错误,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '进行错误处理';
                // mlog($log);
                // M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                // break;
                // }

                if ($buy_save <= round($user_buy[$rmb . 'd'], 8)) {
                    $save_buy_rmb = $buy_save;
                } else if ($buy_save <= round($user_buy[$rmb . 'd'], 8) + 1) {
                    // $save_buy_rmb = $user_buy[$rmb . 'd'];
                    // $log = '错误8交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    // $log .= 'ERR: 买家更新冻结人民币出现误差,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '实际更新' . $save_buy_rmb;
                    // mlog($log);
                } else {
                    // $log = '错误9交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    // $log .= 'ERR: 买家更新冻结人民币出现错误,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '进行错误处理';
                    // mlog($log);
                    // M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    // break;
                }
                // TODO: SEPARATE

                if ($amount <= round($user_sell[$xnb . 'd'], C('market')[$market]['round'])) {
                    $save_sell_xnb = $amount;
                } else {
                    // TODO: SEPARATE

                    if ($amount <= round($user_sell[$xnb . 'd'], C('market')[$market]['round']) + 1) {
                        $save_sell_xnb = $user_sell[$xnb . 'd'];
                        $log           = '错误10交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                        $log .= 'ERR: 卖家更新冻结虚拟币出现误差,应该更新' . $amount . '账号余额' . $user_sell[$xnb . 'd'] . '实际更新' . $save_sell_xnb;
                        mlog($log);
                    } else {
                        $log = '错误11交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                        $log .= 'ERR: 卖家更新冻结虚拟币出现错误,应该更新' . $amount . '账号余额' . $user_sell[$xnb . 'd'] . '进行错误处理';
                        mlog($log);
                        M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                        break;
                    }
                }

                if (!$save_buy_rmb) {
                    // $log = '错误12交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    // $log .= 'ERR: 买家更新数量出错错误,更新数量是' . $save_buy_rmb;
                    // mlog($log);
                    // M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    // break;
                }

                if (!$save_sell_xnb) {
                    $log = '错误13交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家更新数量出错错误,更新数量是' . $save_sell_xnb;
                    mlog($log);
                    M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    break;
                }

                $mo->execute('set autocommit=0');
                $mo->execute('lock tables movesay_trade write ,movesay_trade_log write ,movesay_user write,movesay_user_coin write,movesay_invit write ,movesay_finance write');
                $rs[]                  = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setInc('deal', $amount);
                $rs[]                  = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setInc('deal', $amount);
                $rs[]                  = $finance_nameid                  = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' => $price, 'num' => $amount, 'mum' => $mum, 'type' => $type, 'fee_buy' => $buy_fee, 'fee_sell' => $sell_fee, 'addtime' => time(), 'status' => 1));
                $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($xnb, $amount);
                $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
                $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
                //    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $save_buy_rmb);
                $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
                $finance_hash          = md5($buy['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
                $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

                if ($finance['mum'] < $finance_num) {
                    $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
                } else {
                    $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
                }

                $rs[]                  = $mo->table('movesay_finance')->add(array('userid' => $buy['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 2, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
                $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
                $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
                $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $sell_save);
                $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
                $finance_hash          = md5($sell['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
                $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

                if ($finance['mum'] < $finance_num) {
                    $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
                } else {
                    $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
                }

                $rs[]     = $mo->table('movesay_finance')->add(array('userid' => $sell['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 1, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功卖出-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
                $rs[]     = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setDec($xnb . 'd', $save_sell_xnb);
                $buy_list = $mo->table('movesay_trade')->where(array('id' => $buy['id'], 'status' => 0))->find();

                if ($buy_list) {
                    if ($buy_list['num'] <= $buy_list['deal']) {
                        $rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    }
                }

                $sell_list = $mo->table('movesay_trade')->where(array('id' => $sell['id'], 'status' => 0))->find();

                if ($sell_list) {
                    if ($sell_list['num'] <= $sell_list['deal']) {
                        $rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    }
                }

                if ($price < $buy['price']) {
                    $chajia_dong  = round((($amount * $buy['price']) / 100) * (100 + $fee_buy), 8);
                    $chajia_shiji = round((($amount * $price) / 100) * (100 + $fee_buy), 8);
                    $chajia       = round($chajia_dong - $chajia_shiji, 8);

                    if ($chajia) {
                        $chajia_user_buy = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();

                        if ($chajia <= round($chajia_user_buy[$rmb . 'd'], 8)) {
                            $chajia_save_buy_rmb = $chajia;
                        } else if ($chajia <= round($chajia_user_buy[$rmb . 'd'], 8) + 1) {
                            $chajia_save_buy_rmb = $chajia_user_buy[$rmb . 'd'];
                            mlog('错误91交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount, '成交价格' . $price . '成交总额' . $mum . "\n");
                            mlog('交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '成交数量' . $amount . '交易方式：' . $type . '卖家更新冻结虚拟币出现误差,应该更新' . $chajia . '账号余额' . $chajia_user_buy[$rmb . 'd'] . '实际更新' . $chajia_save_buy_rmb);
                        } else {
                            mlog('错误92交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount, '成交价格' . $price . '成交总额' . $mum . "\n");
                            mlog('交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '成交数量' . $amount . '交易方式：' . $type . '卖家更新冻结虚拟币出现错误,应该更新' . $chajia . '账号余额' . $chajia_user_buy[$rmb . 'd'] . '进行错误处理');
                            $mo->execute('rollback');
                            $mo->execute('unlock tables');
                            M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                            M('Trade')->execute('commit');
                            break;
                        }

                        if ($chajia_save_buy_rmb) {
                            $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $chajia_save_buy_rmb);
                            $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($rmb, $chajia_save_buy_rmb);
                        }
                    }
                }

                $you_buy = $mo->table('movesay_trade')->where(array(
                    'market' => array('like', '%' . $rmb . '%'),
                    'status' => 0,
                    'userid' => $buy['userid'],
                ))->find();
                $you_sell = $mo->table('movesay_trade')->where(array(
                    'market' => array('like', '%' . $xnb . '%'),
                    'status' => 0,
                    'userid' => $sell['userid'],
                ))->find();

                if (!$you_buy) {
                    $you_user_buy = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();

                    if (0 < $you_user_buy[$rmb . 'd']) {
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setField($rmb . 'd', 0);
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($rmb, $you_user_buy[$rmb . 'd']);
                    }
                }

                if (!$you_sell) {
                    $you_user_sell = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();

                    if (0 < $you_user_sell[$xnb . 'd']) {
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setField($xnb . 'd', 0);
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $you_user_sell[$xnb . 'd']);
                    }
                }

                $invit_buy_user  = $mo->table('movesay_user')->where(array('id' => $buy['userid']))->find();
                $invit_sell_user = $mo->table('movesay_user')->where(array('id' => $sell['userid']))->find();

                if ($invit_buy) {
                    if ($invit_1) {
                        if ($buy_fee) {
                            if ($invit_buy_user['invit_1']) {
                                $invit_buy_save_1 = round(($buy_fee / 100) * $invit_1, 6);

                                if ($invit_buy_save_1) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_1']))->setInc($rmb, $invit_buy_save_1);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_1'], 'invit' => $buy['userid'], 'name' => '一代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_1, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_buy_user['invit_2']) {
                                $invit_buy_save_2 = round(($buy_fee / 100) * $invit_2, 6);

                                if ($invit_buy_save_2) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_2']))->setInc($rmb, $invit_buy_save_2);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_2'], 'invit' => $buy['userid'], 'name' => '二代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_2, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_buy_user['invit_3']) {
                                $invit_buy_save_3 = round(($buy_fee / 100) * $invit_3, 6);

                                if ($invit_buy_save_3) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_3']))->setInc($rmb, $invit_buy_save_3);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_3'], 'invit' => $buy['userid'], 'name' => '三代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_3, 'addtime' => time(), 'status' => 1));
                                }
                            }
                        }
                    }

                    if ($invit_sell) {
                        if ($sell_fee) {
                            if ($invit_sell_user['invit_1']) {
                                $invit_sell_save_1 = round(($sell_fee / 100) * $invit_1, 6);

                                if ($invit_sell_save_1) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_1']))->setInc($rmb, $invit_sell_save_1);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_1'], 'invit' => $sell['userid'], 'name' => '一代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_1, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_sell_user['invit_2']) {
                                $invit_sell_save_2 = round(($sell_fee / 100) * $invit_2, 6);

                                if ($invit_sell_save_2) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_2']))->setInc($rmb, $invit_sell_save_2);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_2'], 'invit' => $sell['userid'], 'name' => '二代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_2, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_sell_user['invit_3']) {
                                $invit_sell_save_3 = round(($sell_fee / 100) * $invit_3, 6);

                                if ($invit_sell_save_3) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_3']))->setInc($rmb, $invit_sell_save_3);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_3'], 'invit' => $sell['userid'], 'name' => '三代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_3, 'addtime' => time(), 'status' => 1));
                                }
                            }
                        }
                    }
                }

                if (check_arr($rs)) {
                    $mo->execute('commit');
                    $mo->execute('unlock tables');
                    $new_trade_movesay = 1;
                    $coin              = $xnb;
                    S('allsum', null);
                    S('getJsonTop' . $market, null);
                    S('getTradelog' . $market, null);
                    S('getDepth' . $market . '1', null);
                    S('getDepth' . $market . '3', null);
                    S('getDepth' . $market . '4', null);
                    S('ChartgetJsonData' . $market, null);
                    S('allcoin', null);
                    S('trends', null);
                } else {
                    $mo->execute('rollback');
                    $mo->execute('unlock tables');
                }
            } else {
                break;
            }

            unset($rs);
            break;
        }

        if ($new_trade_movesay) {
            $new_price  = round(M('TradeLog')->where(array('market' => $market, 'status' => 1))->order('id desc')->getField('price'), 6);
            $buy_price  = round(M('Trade')->where(array('type' => 1, 'market' => $market, 'status' => 0))->max('price'), 6);
            $sell_price = round(M('Trade')->where(array('type' => 2, 'market' => $market, 'status' => 0))->min('price'), 6);
            $min_price  = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->min('price'), 6);
            $max_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->max('price'), 6);
            $volume = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->sum('num'), 6);
            $sta_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'status'  => 1,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->order('id asc')->getField('price'), 6);
            $Cmarket = M('Market')->where(array('name' => $market))->find();

            if ($Cmarket['new_price'] != $new_price) {
                $upCoinData['new_price'] = $new_price;
            }

            if ($Cmarket['buy_price'] != $buy_price) {
                $upCoinData['buy_price'] = $buy_price;
            }

            if ($Cmarket['sell_price'] != $sell_price) {
                $upCoinData['sell_price'] = $sell_price;
            }

            if ($Cmarket['min_price'] != $min_price) {
                $upCoinData['min_price'] = $min_price;
            }

            if ($Cmarket['max_price'] != $max_price) {
                $upCoinData['max_price'] = $max_price;
            }

            if ($Cmarket['volume'] != $volume) {
                $upCoinData['volume'] = $volume;
            }

            $change               = round((($new_price - $Cmarket['hou_price']) / $Cmarket['hou_price']) * 100, 2);
            $upCoinData['change'] = $change;

            if ($upCoinData) {
                M('Market')->where(array('name' => $market))->save($upCoinData);
                M('Market')->execute('commit');
                S('home_market', null);
            }
        }
    }

    public function matchingTrade($market = null)
    {
        if (!$market) {
            return false;
        } else {
            $xnb = explode('_', $market)[0];
            $rmb = explode('_', $market)[1];
        }

        $fee_buy           = C('market')[$market]['fee_buy'];
        $fee_sell          = C('market')[$market]['fee_sell'];
        $invit_buy         = C('market')[$market]['invit_buy'];
        $invit_sell        = C('market')[$market]['invit_sell'];
        $invit_1           = C('market')[$market]['invit_1'];
        $invit_2           = C('market')[$market]['invit_2'];
        $invit_3           = C('market')[$market]['invit_3'];
        $mo                = M();
        $new_trade_movesay = 0;

        for (; true;) {
            $buy  = $mo->table('movesay_trade')->where(array('market' => $market, 'type' => 1, 'status' => 0))->order('price desc,id asc')->find();
            $sell = $mo->table('movesay_trade')->where(array('market' => $market, 'type' => 2, 'status' => 0))->order('price asc,id asc')->find();

            if ($sell['id'] < $buy['id']) {
                $type = 1;
            } else {
                $type = 2;
            }

            if ($buy && $sell && (0 <= floatval($buy['price']) - floatval($sell['price']))) {
                $rs = array();

                if ($buy['num'] <= $buy['deal']) {
                }

                if ($sell['num'] <= $sell['deal']) {
                }

                $amount = min(round($buy['num'] - $buy['deal'], 8 - C('market')[$market]['round']), round($sell['num'] - $sell['deal'], 8 - C('market')[$market]['round']));
                $amount = round($amount, 8 - C('market')[$market]['round']);

                if ($amount <= 0) {
                    $log = '错误1交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . "\n";
                    $log .= 'ERR: 成交数量出错，数量是' . $amount;
                    M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    break;
                }

                if ($type == 1) {
                    $price = $sell['price'];
                } else if ($type == 2) {
                    $price = $buy['price'];
                } else {
                    break;
                }

                if (!$price) {
                    $log = '错误2交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . "\n";
                    $log .= 'ERR: 成交价格出错，价格是' . $price;
                    break;
                } else {
                    // TODO: SEPARATE
                    $price = round($price, C('market')[$market]['round']);
                }

                $mum = round($price * $amount, 8);

                if (!$mum) {
                    $log = '错误3交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . "\n";
                    $log .= 'ERR: 成交总额出错，总额是' . $mum;
                    mlog($log);
                    break;
                } else {
                    $mum = round($mum, 8);
                }

                if ($fee_buy) {
                    $buy_fee  = round(($mum / 100) * $fee_buy, 8);
                    $buy_save = round(($mum / 100) * (100 + $fee_buy), 8);
                } else {
                    $buy_fee  = 0;
                    $buy_save = $mum;
                }

                if (!$buy_save) {
                    $log = '错误4交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新数量出错，更新数量是' . $buy_save;
                    mlog($log);
                    break;
                }

                if ($fee_sell) {
                    $sell_fee  = round(($mum / 100) * $fee_sell, 8);
                    $sell_save = round(($mum / 100) * (100 - $fee_sell), 8);
                } else {
                    $sell_fee  = 0;
                    $sell_save = $mum;
                }

                if (!$sell_save) {
                    $log = '错误5交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家更新数量出错，更新数量是' . $sell_save;
                    mlog($log);
                    break;
                }

                $user_buy = M('UserCoin')->where(array('userid' => $buy['userid']))->find();

                if (!$user_buy[$rmb . 'd']) {
                    $log = '错误6交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家财产错误，冻结财产是' . $user_buy[$rmb . 'd'];
                    mlog($log);
                    break;
                }

                $user_sell = M('UserCoin')->where(array('userid' => $sell['userid']))->find();

                if (!$user_sell[$xnb . 'd']) {
                    $log = '错误7交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家财产错误，冻结财产是' . $user_sell[$xnb . 'd'];
                    mlog($log);
                    break;
                }

                if ($user_buy[$rmb . 'd'] < 1.0E-8) {
                    $log = '错误88交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新冻结人民币出现错误,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '进行错误处理';
                    mlog($log);
                    M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    break;
                }

                if ($buy_save <= round($user_buy[$rmb . 'd'], 8)) {
                    $save_buy_rmb = $buy_save;
                } else if ($buy_save <= round($user_buy[$rmb . 'd'], 8) + 1) {
                    $save_buy_rmb = $user_buy[$rmb . 'd'];
                    $log          = '错误8交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新冻结人民币出现误差,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '实际更新' . $save_buy_rmb;
                    mlog($log);
                } else {
                    $log = '错误9交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新冻结人民币出现错误,应该更新' . $buy_save . '账号余额' . $user_buy[$rmb . 'd'] . '进行错误处理';
                    mlog($log);
                    M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    break;
                }
                // TODO: SEPARATE

                if ($amount <= round($user_sell[$xnb . 'd'], C('market')[$market]['round'])) {
                    $save_sell_xnb = $amount;
                } else {
                    // TODO: SEPARATE

                    if ($amount <= round($user_sell[$xnb . 'd'], C('market')[$market]['round']) + 1) {
                        $save_sell_xnb = $user_sell[$xnb . 'd'];
                        $log           = '错误10交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                        $log .= 'ERR: 卖家更新冻结虚拟币出现误差,应该更新' . $amount . '账号余额' . $user_sell[$xnb . 'd'] . '实际更新' . $save_sell_xnb;
                        mlog($log);
                    } else {
                        $log = '错误11交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                        $log .= 'ERR: 卖家更新冻结虚拟币出现错误,应该更新' . $amount . '账号余额' . $user_sell[$xnb . 'd'] . '进行错误处理';
                        mlog($log);
                        M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                        break;
                    }
                }

                if (!$save_buy_rmb) {
                    $log = '错误12交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 买家更新数量出错错误,更新数量是' . $save_buy_rmb;
                    mlog($log);
                    M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    break;
                }

                if (!$save_sell_xnb) {
                    $log = '错误13交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount . '成交价格' . $price . '成交总额' . $mum . "\n";
                    $log .= 'ERR: 卖家更新数量出错错误,更新数量是' . $save_sell_xnb;
                    mlog($log);
                    M('Trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    break;
                }

                $mo->execute('set autocommit=0');
                $mo->execute('lock tables movesay_trade write ,movesay_trade_log write ,movesay_user write,movesay_user_coin write,movesay_invit write ,movesay_finance write');
                $rs[]                  = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setInc('deal', $amount);
                $rs[]                  = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setInc('deal', $amount);
                $rs[]                  = $finance_nameid                  = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' => $price, 'num' => $amount, 'mum' => $mum, 'type' => $type, 'fee_buy' => $buy_fee, 'fee_sell' => $sell_fee, 'addtime' => time(), 'status' => 1));
                $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($xnb, $amount);
                $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
                $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
                $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $save_buy_rmb);
                $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
                $finance_hash          = md5($buy['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
                $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

                if ($finance['mum'] < $finance_num) {
                    $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
                } else {
                    $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
                }

                $rs[]                  = $mo->table('movesay_finance')->add(array('userid' => $buy['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 2, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
                $finance               = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
                $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
                $rs[]                  = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $sell_save);
                $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
                $finance_hash          = md5($sell['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
                $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

                if ($finance['mum'] < $finance_num) {
                    $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
                } else {
                    $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
                }

                $rs[]     = $mo->table('movesay_finance')->add(array('userid' => $sell['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 1, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功卖出-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
                $rs[]     = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setDec($xnb . 'd', $save_sell_xnb);
                $buy_list = $mo->table('movesay_trade')->where(array('id' => $buy['id'], 'status' => 0))->find();

                if ($buy_list) {
                    if ($buy_list['num'] <= $buy_list['deal']) {
                        $rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setField('status', 1);
                    }
                }

                $sell_list = $mo->table('movesay_trade')->where(array('id' => $sell['id'], 'status' => 0))->find();

                if ($sell_list) {
                    if ($sell_list['num'] <= $sell_list['deal']) {
                        $rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setField('status', 1);
                    }
                }

                if ($price < $buy['price']) {
                    $chajia_dong  = round((($amount * $buy['price']) / 100) * (100 + $fee_buy), 8);
                    $chajia_shiji = round((($amount * $price) / 100) * (100 + $fee_buy), 8);
                    $chajia       = round($chajia_dong - $chajia_shiji, 8);

                    if ($chajia) {
                        $chajia_user_buy = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();

                        if ($chajia <= round($chajia_user_buy[$rmb . 'd'], 8)) {
                            $chajia_save_buy_rmb = $chajia;
                        } else if ($chajia <= round($chajia_user_buy[$rmb . 'd'], 8) + 1) {
                            $chajia_save_buy_rmb = $chajia_user_buy[$rmb . 'd'];
                            mlog('错误91交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount, '成交价格' . $price . '成交总额' . $mum . "\n");
                            mlog('交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '成交数量' . $amount . '交易方式：' . $type . '卖家更新冻结虚拟币出现误差,应该更新' . $chajia . '账号余额' . $chajia_user_buy[$rmb . 'd'] . '实际更新' . $chajia_save_buy_rmb);
                        } else {
                            mlog('错误92交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '交易方式：' . $type . '成交数量' . $amount, '成交价格' . $price . '成交总额' . $mum . "\n");
                            mlog('交易市场' . $market . '出错：买入订单:' . $buy['id'] . '卖出订单：' . $sell['id'] . '成交数量' . $amount . '交易方式：' . $type . '卖家更新冻结虚拟币出现错误,应该更新' . $chajia . '账号余额' . $chajia_user_buy[$rmb . 'd'] . '进行错误处理');
                            $mo->execute('rollback');
                            $mo->execute('unlock tables');
                            M('Trade')->where(array('id' => $buy['id']))->setField('status', 1);
                            M('Trade')->execute('commit');
                            break;
                        }

                        if ($chajia_save_buy_rmb) {
                            $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $chajia_save_buy_rmb);
                            $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($rmb, $chajia_save_buy_rmb);
                        }
                    }
                }

                $you_buy = $mo->table('movesay_trade')->where(array(
                    'market' => array('like', '%' . $rmb . '%'),
                    'status' => 0,
                    'userid' => $buy['userid'],
                ))->find();
                $you_sell = $mo->table('movesay_trade')->where(array(
                    'market' => array('like', '%' . $xnb . '%'),
                    'status' => 0,
                    'userid' => $sell['userid'],
                ))->find();

                if (!$you_buy) {
                    $you_user_buy = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();

                    if (0 < $you_user_buy[$rmb . 'd']) {
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setField($rmb . 'd', 0);
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($rmb, $you_user_buy[$rmb . 'd']);
                    }
                }

                if (!$you_sell) {
                    $you_user_sell = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();

                    if (0 < $you_user_sell[$xnb . 'd']) {
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setField($xnb . 'd', 0);
                        $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $you_user_sell[$xnb . 'd']);
                    }
                }

                $invit_buy_user  = $mo->table('movesay_user')->where(array('id' => $buy['userid']))->find();
                $invit_sell_user = $mo->table('movesay_user')->where(array('id' => $sell['userid']))->find();

                if ($invit_buy) {
                    if ($invit_1) {
                        if ($buy_fee) {
                            if ($invit_buy_user['invit_1']) {
                                $invit_buy_save_1 = round(($buy_fee / 100) * $invit_1, 6);

                                if ($invit_buy_save_1) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_1']))->setInc($rmb, $invit_buy_save_1);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_1'], 'invit' => $buy['userid'], 'name' => '一代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_1, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_buy_user['invit_2']) {
                                $invit_buy_save_2 = round(($buy_fee / 100) * $invit_2, 6);

                                if ($invit_buy_save_2) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_2']))->setInc($rmb, $invit_buy_save_2);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_2'], 'invit' => $buy['userid'], 'name' => '二代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_2, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_buy_user['invit_3']) {
                                $invit_buy_save_3 = round(($buy_fee / 100) * $invit_3, 6);

                                if ($invit_buy_save_3) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_buy_user['invit_3']))->setInc($rmb, $invit_buy_save_3);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_buy_user['invit_3'], 'invit' => $buy['userid'], 'name' => '三代买入赠送', 'type' => $market . '买入交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_buy_save_3, 'addtime' => time(), 'status' => 1));
                                }
                            }
                        }
                    }

                    if ($invit_sell) {
                        if ($sell_fee) {
                            if ($invit_sell_user['invit_1']) {
                                $invit_sell_save_1 = round(($sell_fee / 100) * $invit_1, 6);

                                if ($invit_sell_save_1) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_1']))->setInc($rmb, $invit_sell_save_1);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_1'], 'invit' => $sell['userid'], 'name' => '一代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_1, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_sell_user['invit_2']) {
                                $invit_sell_save_2 = round(($sell_fee / 100) * $invit_2, 6);

                                if ($invit_sell_save_2) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_2']))->setInc($rmb, $invit_sell_save_2);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_2'], 'invit' => $sell['userid'], 'name' => '二代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_2, 'addtime' => time(), 'status' => 1));
                                }
                            }

                            if ($invit_sell_user['invit_3']) {
                                $invit_sell_save_3 = round(($sell_fee / 100) * $invit_3, 6);

                                if ($invit_sell_save_3) {
                                    $rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_3']))->setInc($rmb, $invit_sell_save_3);
                                    $rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_3'], 'invit' => $sell['userid'], 'name' => '三代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_3, 'addtime' => time(), 'status' => 1));
                                }
                            }
                        }
                    }
                }

                if (check_arr($rs)) {
                    $mo->execute('commit');
                    $mo->execute('unlock tables');
                    $new_trade_movesay = 1;
                    $coin              = $xnb;
                    S('allsum', null);
                    S('getJsonTop' . $market, null);
                    S('getTradelog' . $market, null);
                    S('getDepth' . $market . '1', null);
                    S('getDepth' . $market . '3', null);
                    S('getDepth' . $market . '4', null);
                    S('ChartgetJsonData' . $market, null);
                    S('allcoin', null);
                    S('trends', null);
                } else {
                    $mo->execute('rollback');
                    $mo->execute('unlock tables');
                }
            } else {
                break;
            }

            unset($rs);
        }

        if ($new_trade_movesay) {
            $new_price  = round(M('TradeLog')->where(array('market' => $market, 'status' => 1))->order('id desc')->getField('price'), 6);
            $buy_price  = round(M('Trade')->where(array('type' => 1, 'market' => $market, 'status' => 0))->max('price'), 6);
            $sell_price = round(M('Trade')->where(array('type' => 2, 'market' => $market, 'status' => 0))->min('price'), 6);
            $min_price  = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->min('price'), 6);
            $max_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->max('price'), 6);
            $volume = round(M('TradeLog')->where(array(
                'market'  => $market,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->sum('num'), 6);
            $sta_price = round(M('TradeLog')->where(array(
                'market'  => $market,
                'status'  => 1,
                'addtime' => array('gt', time() - (60 * 60 * 24)),
            ))->order('id asc')->getField('price'), 6);
            $Cmarket = M('Market')->where(array('name' => $market))->find();

            if ($Cmarket['new_price'] != $new_price) {
                $upCoinData['new_price'] = $new_price;
            }

            if ($Cmarket['buy_price'] != $buy_price) {
                $upCoinData['buy_price'] = $buy_price;
            }

            if ($Cmarket['sell_price'] != $sell_price) {
                $upCoinData['sell_price'] = $sell_price;
            }

            if ($Cmarket['min_price'] != $min_price) {
                $upCoinData['min_price'] = $min_price;
            }

            if ($Cmarket['max_price'] != $max_price) {
                $upCoinData['max_price'] = $max_price;
            }

            if ($Cmarket['volume'] != $volume) {
                $upCoinData['volume'] = $volume;
            }

            $change               = round((($new_price - $Cmarket['hou_price']) / $Cmarket['hou_price']) * 100, 2);
            $upCoinData['change'] = $change;

            if ($upCoinData) {
                M('Market')->where(array('name' => $market))->save($upCoinData);
                M('Market')->execute('commit');
                S('home_market', null);
            }
        }
    }

    public function chexiao($id)
    {

        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }

        if (!check($id, 'd')) {
            $this->error(L('trade_select_delegate_revoked'));
        }

        $trade = M('Trade')->where(array('id' => $id))->find();

        if ($trade['market'] == 'sgc_cny') {

            if ($trade['status'] == 1) {
                $this->error(L('trade_completed_not_allowed'));

            }
            if ($trade['status1'] == 2) {
                $this->error(L('trade_paid_not_allowed'));

            }

            if ($trade['status1'] == 1) {
                $this->error(L('trade_matching_success_not_allowed'));

                // $buyid=$trade['buyid'];
                // $rs = M('Trade')->where(array('id' => $trade['id']))->setField('status1', NULL);
                // $rs = M('Trade')->where(array('id' => $trade['id']))->setField('buyuserid', NULL);
                // $rs = M('Trade')->where(array('id' => $trade['id']))->setField('buyid', NULL);
                // $rs = M('Trade')->where(array('id' =>$buyid))->setField('status1', NULL);
                // $rs = M('Trade')->where(array('id' => $buyid))->setField('buyuserid', NULL);
                // $rs = M('Trade')->where(array('id' =>$buyid))->setField('buyid', NULL);
            }

        }

        if (!$trade) {
            $this->error(L('trade_delegate_parameter_error'));
        }

        if ($trade['userid'] != userid()) {
            $this->error(L('trade_invalid_parameter'));
        }

        $this->show(D('Trade')->chexiao($id));
    }

    public function ofcfukuan($id)
    {

        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }

        if (!check($id, 'd')) {
            $this->error(L('trade_select_commission_pay'));
        }

        $trade  = M('Trade')->where(array('id' => $id))->find();
        $trade1 = M('Trade')->where(array('id' => $trade['buyid']))->find();

        if (!$trade) {
            $this->error(L('trade_buy_parameter_error'));
        }

        $rs = array();

        $rs[] = M('Trade')->where(array('id' => $id))->save(array('status1' => 2, 'paytime' => time()));
        $rs[] = M('Trade')->where(array('id' => $trade['buyid']))->save(array('status1' => 2, 'paytime' => time()));

        if (check_arr($rs)) {

            //给卖家发送短信
            $t = M('Trade')->where(array('id' => $trade['buyid']))->find();

            $moble   = M('User')->where(array('id' => $t['userid']))->getField('moble');
            $content = L('trade_Buy_moble') . date("Y-m-d H:i:s");
            send_moble($moble, $content);
            $this->show(array('1', L('trade_waiting_seller_confirm')));

        } else {

            $this->show(array('0', L('trade_buy_failed') . '|' . implode('|', $rs)));
        }

    }
    public function Noofcfukuan($id)
    {

        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }

        if (!check($id, 'd')) {
            $this->error(L('trade_select_commission_pay'));
        }

        $trade  = M('Trade')->where(array('id' => $id))->find();
        $trade1 = M('Trade')->where(array('id' => $trade['buyid']))->find();

        if (!$trade) {
            $this->error(L('trade_buy_parameter_error'));
        }

        $rs = array();

        $rs[] = M('Trade')->where(array('id' => $id))->save(array('status1' => 1, 'paytime' => null));
        $rs[] = M('Trade')->where(array('id' => $trade['buyid']))->save(array('status1' => 1, 'paytime' => null));

        if (check_arr($rs)) {

            $this->show(array('1', '设置成功'));

        } else {

            $this->show(array('0', '设置失败|' . implode('|', $rs)));
        }

    }
    public function tradeImage()
    {
        $upload           = new \Think\Upload();
        $upload->maxSize  = 3145728;
        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Upload/trade/';
        $upload->autoSub  = false;
        $info             = $upload->upload();

        foreach ($info as $k => $v) {
            $path = '/Upload/trade/' . $v['savename'];
            echo $path;
            exit();
        }
    }
    public function ofcupimg($id, $url)
    {

        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }

        if (!check($id, 'd')) {
            $this->error(L('trade_select_commission_pay'));
        }

        $trade  = M('Trade')->where(array('id' => $id))->find();
        $trade1 = M('Trade')->where(array('id' => $trade['buyid']))->find();

        if (!$trade) {
            $this->error(L('trade_buy_parameter_error'));
        }

        $rs = array();

        $rs[] = M('Trade')->where(array('id' => $id))->setField('imgurl', $url);
        $rs[] = M('Trade')->where(array('id' => $trade['buyid']))->setField('imgurl', $url);

        if (check_arr($rs)) {
            $this->show(array('1', L('trade_document_upload_succeed')));

        } else {

            $this->show(array('0', L('trade_document_upload_failed') . '|' . implode('|', $rs)));
        }

    }

    public function ofcbuy($id)
    {
        if (!userid()) {
            $this->error(L('trade_please_login_first'));
        }
        //判断是否被锁定
        $s = M('User')->where(array('id' => userid()))->getField('status');

        if ($s == 2) {
            $this->error(L('User_Locked'));

        }
        //账号需要实名审核
        if ($s == 3) {
            $this->error(L('User_audit'));

        }
        $moble = M('User')->where(array('id' => userid()))->getField('moble');

        if ($moble) {

        } else {
            $this->error('147');
            //$this->error(L('trade_please_perfect_bank_info_first'),U('Home/User/moble'));
        }
        if (!check($id, 'd')) {
            $this->error(L('trade_select_sell_revoked'));
        }

        $trade = M('Trade')->where(array('id' => $id))->find();

        if (!$trade) {
            $this->error(L('trade_buy_parameter_error'));
        }

        $yiyounum = M('user_coin')->where(array('userid' => userid()))->find();

        $pp       = $yiyounum['sgc'] + $yiyounum['sgcd'];
        $trade111 = M('trade')->where(array('userid' => userid(), 'type' => 1, 'status' => 0, 'market' => 'sgc_cny'))->count();
        if ($trade111 >= 3) {

            $this->error(L('trade_buy_beyond3'));
        }
        if ($trade111 == 0) {

            $trade1 = 0;
        } else {

            $trade1 = M('trade')->where(array('userid' => userid(), 'type' => 1, 'status' => 0, 'market' => 'sgc_cny'))->sum('num');
        }

        $nn = 30000;

        $coin = M('coin')->where(array('id' => 1))->find();
        if ($coin["max_leiji"] > 1) {
            $nn = $coin["max_leiji"];
        }

        if ($pp + $trade1 > $nn) {
            $this->error(L('trade_holding_amount_than') . $nn . L('trade_thousand_not_allowed_to_buy'));

        } else {

            if ($pp + $trade1 + $trade['num'] > $nn) {
                $m  = $pp + $trade1;
                $m1 = $nn - $pp - $trade1;
                $this->error(L('trade_current_holding_amount_and_buy') . $m . L('trade_can_also_buy') . $m1+'个');

            }

        }

        $rs = array();

        $trade_fee = C('market')[$trade['market']]['fee_buy'];

        if ($trade_fee) {
            $fee = round((($trade['num'] * $trade['price']) / 100) * $trade_fee, 8);
            $mum = round((($trade['num'] * $trade['price']) / 100) * (100), 8);
        } else {
            $fee = 0;
            $mum = round($trade['num'] * $trade['price'], 8);
        }
        // 防止重复提交
        if ($trade['status1'] != null) {
            $this->error(L('trade_not_repeat'));
        }
        $fee = 0;
        $mo  = M();
        $mo->execute('set autocommit=0');
        $mo->execute('lock tables movesay_finance write,movesay_user_coin write,movesay_trade write');

        $finance               = $mo->table('movesay_finance')->where(array('userid' => userid()))->order('id desc')->find();
        $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->find();

        $rs[]                  = $finance_nameid                  = $mo->table('movesay_trade')->add(array('userid' => userid(), 'market' => $trade['market'], 'price' => $trade['price'], 'num' => $trade['num'], 'mum' => $mum, 'fee' => $fee, 'type' => 1, 'addtime' => time(), 'status' => 0, 'status1' => 1, 'buyid' => $id, 'buyuserid' => $trade['userid']));
        $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => userid()))->find();
        $finance_hash          = md5(userid() . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
        $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

        if ($finance['mum'] < $finance_num) {
            $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
        } else {
            $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
        }

        $rs[] = $mo->table('movesay_finance')->add(array('userid' => userid(), 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 2, 'name' => 'trade', 'nameid' => $finance_nameid, 'remark' => '交易中心-委托买入-市场' . $trade['market'], 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));

        $rs[] = $mo->table('movesay_trade')->where(array('id' => $trade['id']))->setField('status1', 1);
        $rs[] = $mo->table('movesay_trade')->where(array('id' => $trade['id']))->setField('buyuserid', userid());
        $rs[] = $mo->table('movesay_trade')->where(array('id' => $trade['id']))->setField('buyid', $finance_nameid);

        if (check_arr($rs)) {

            $mo->execute('commit');

            $mo->execute('unlock tables');

            $this->show(array('1', L('trade_buy_failed_cotact')));

        } else {
            $mo->execute('rollback');
            $mo->execute('unlock tables');

            $this->show(array('0', L('trade_buy_failed') . '|' . implode('|', $rs)));
        }

    }

    public function ofcbuy_chexiao($id)
    {
        $mo    = M();
        $trade = M('Trade')->where(array('id' => $id))->find();

        //交易中的才能撤销
        if ($trade['status'] != 0) {
            $this->error(L('trade_not_repeat'));
        }
        //已经付款的不能撤销
        if ($trade['status1'] == 2) {
            $this->error(L('trade_not_repeat'));
        }
        //状态改为已撤销
        $rs[] = $mo->table('movesay_trade')->where(array('id' => $id))->setField('status', 2);
        //修改匹配的记录
        $rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('status1', null);
        $rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('buyuserid', null);
        $rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('buyid', null);

        $finance               = $mo->table('movesay_finance')->where(array('userid' => $trade['userid']))->order('id desc')->find();
        $finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $trade['userid']))->find();

        $finance_nameid        = $trade['id'];
        $save_buy_rmb          = $trade['num'] * $trade['price'];
        $finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $trade['userid']))->find();
        $finance_hash          = md5($trade['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $save_buy_rmb . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
        $finance_num           = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

        if ($finance['mum'] < $finance_num) {
            $finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
        } else {
            $finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
        }

        $rs[] = $mo->table('movesay_finance')->add(array('userid' => $trade['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 1, 'name' => 'trade', 'nameid' => $finance_nameid, 'remark' => '交易中心-交易撤销' . $trade['market'], 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
        if (check_arr($rs)) {

            $this->show(array('1', L('trade_cancel_succeed')));

        } else {
            $this->show(array('0', L('trade_cancel_failed')));

        }
    }

    public function show($rs = array())
    {
        if ($rs[0]) {
            $this->success($rs[1]);
        } else {
            $this->error($rs[1]);
        }
    }

    public function install()
    {
    }
}
