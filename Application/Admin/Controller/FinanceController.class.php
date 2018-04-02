<?php
namespace Admin\Controller;

class FinanceController extends AdminController
{
	public function index($field = NULL, $name = NULL)
	{
		$this->checkUpdata();
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		$count = M('Mytx')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Mytx')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$name_list = array('mycz' => '人民币充值', 'mytx' => '人民币提现', 'trade' => '委托交易', 'tradelog' => '成功交易', 'issue' => '用户认购');
		$nameid_list = array('mycz' => U('Mycz/index'), 'mytx' => U('Mytx/index'), 'trade' => U('Trade/index'), 'tradelog' => U('Tradelog/index'), 'issue' => U('Issue/index'));

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
			$list[$k]['num_a'] = Num($v['num_a']);
			$list[$k]['num_b'] = Num($v['num_b']);
			$list[$k]['num'] = Num($v['num']);
			$list[$k]['fee'] = Num($v['fee']);
			$list[$k]['type'] = ($v['fee'] == 1 ? '收入' : '支出');
			$list[$k]['name'] = ($name_list[$v['name']] ? $name_list[$v['name']] : $v['name']);
			$list[$k]['nameid'] = ($name_list[$v['name']] ? $nameid_list[$v['name']] . '?id=' . $v['nameid'] : '');
			$list[$k]['mum_a'] = Num($v['mum_a']);
			$list[$k]['mum_b'] = Num($v['mum_b']);
			$list[$k]['mum'] = Num($v['mum']);
			$list[$k]['addtime'] = addtime($v['addtime']);
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function mycz($field = NULL, $name = NULL, $status = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($status) {
			$where['status'] = $status - 1;
		}

		$count = M('Mycz')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Mycz')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
			$list[$k]['type'] = M('MyczType')->where(array('name' => $v['type']))->getField('title');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function myczStatus($id = NULL, $type = NULL, $moble = 'Mycz')
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
			}
			else {
				$this->error('操作失败！');
			}

			break;

		default:
			$this->error('操作失败1！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败2！');
		}
	}

	public function myczQueren()
	{
		$id = $_GET['id'];

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		$mycz = M('Mycz')->where(array('id' => $id))->find();

		if (($mycz['status'] != 0) && ($mycz['status'] != 3)) {
			$this->error('已经处理，禁止再次操作！');
		}

		$mo = M();
		$mo->execute('set autocommit=0');
		$mo->execute('lock tables movesay_user_coin write,movesay_mycz write,movesay_finance write');
		$rs = array();
		$finance = $mo->table('movesay_finance')->where(array('userid' => $mycz['userid']))->order('id desc')->find();
		$finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $mycz['userid']))->find();
		$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $mycz['userid']))->setInc('cny', $mycz['num']);
		$rs[] = $mo->table('movesay_mycz')->where(array('id' => $mycz['id']))->save(array('status' => 2, 'mum' => $mycz['num'], 'endtime' => time()));
		$finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $mycz['userid']))->find();
		$finance_hash = md5($mycz['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mycz['num'] . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
		$finance_num = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

		if ($finance['mum'] < $finance_num) {
			$finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
		}
		else {
			$finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
		}

		$rs[] = $mo->table('movesay_finance')->add(array('userid' => $mycz['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mycz['num'], 'type' => 1, 'name' => 'mycz', 'nameid' => $mycz['id'], 'remark' => '人民币充值-人工到账', 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));

		if (check_arr($rs)) {
			$mo->execute('commit');
			$mo->execute('unlock tables');
			$this->success('操作成功！');
		}
		else {
			$mo->execute('rollback');
			$this->error('操作失败！');
		}
	}

	public function myczType()
	{
		$where = array();
		$count = M('MyczType')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('MyczType')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function myczTypeEdit($id = NULL)
	{
		if (empty($_POST)) {
			if ($id) {
				$this->data = M('MyczType')->where(array('id' => trim($id)))->find();
			}
			else {
				$this->data = null;
			}

			$this->display();
		}
		else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			if ($_POST['id']) {
				$rs = M('MyczType')->save($_POST);
			}
			else {
				$rs = M('MyczType')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！');
			}
			else {
				$this->error('操作失败！');
			}
		}
	}

	public function myczTypeImage()
	{
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath = './Upload/public/';
		$upload->autoSub = false;
		$info = $upload->upload();

		foreach ($info as $k => $v) {
			$path = $v['savepath'] . $v['savename'];
			echo $path;
			exit();
		}
	}

	public function myczTypeStatus($id = NULL, $type = NULL, $moble = 'MyczType')
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
			}
			else {
				$this->error('操作失败！');
			}

			break;

		default:
			$this->error('操作失败1！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败2！');
		}
	}

	public function mytx($field = NULL, $name = NULL, $status = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($status) {
			$where['status'] = $status - 1;
		}

		$count = M('Mytx')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Mytx')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function mytxStatus($id = NULL, $type = NULL, $moble = 'Mytx')
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
			}
			else {
				$this->error('操作失败！');
			}

			break;

		default:
			$this->error('操作失败1！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败2！');
		}
	}

	public function mytxChuli()
	{
		$id = $_GET['id'];

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		if (M('Mytx')->where(array('id' => $id))->save(array('status' => 3))) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败！');
		}
	}

	public function mytxChexiao()
	{
		$id = $_GET['id'];

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		$mytx = M('Mytx')->where(array('id' => trim($_GET['id'])))->find();
		$mo = M();
		$mo->execute('set autocommit=0');
		$mo->execute('lock tables movesay_user_coin write,movesay_mytx write,movesay_finance write');
		$rs = array();
		$finance = $mo->table('movesay_finance')->where(array('userid' => $mytx['userid']))->order('id desc')->find();
		$finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $mytx['userid']))->find();
		$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $mytx['userid']))->setInc('cny', $mytx['num']);
		$rs[] = $mo->table('movesay_mytx')->where(array('id' => $mytx['id']))->setField('status', 2);
		$finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $mytx['userid']))->find();
		$finance_hash = md5($mytx['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mytx['num'] . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
		$finance_num = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

		if ($finance['mum'] < $finance_num) {
			$finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
		}
		else {
			$finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
		}

		$rs[] = $mo->table('movesay_finance')->add(array('userid' => $mytx['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mytx['num'], 'type' => 1, 'name' => 'mytx', 'nameid' => $mytx['id'], 'remark' => '人民币提现-撤销提现', 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));

		if (check_arr($rs)) {
			$mo->execute('commit');
			$mo->execute('unlock tables');
			$this->success('操作成功！');
		}
		else {
			$mo->execute('rollback');
			$this->error('操作失败！');
		}
	}

	public function mytxQueren()
	{
		$id = $_GET['id'];

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		if (M('Mytx')->where(array('id' => $id))->save(array('status' => 1))) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败！');
		}
	}

	public function mytxExcel()
	{
		if (IS_POST) {
			$id = implode(',', $_POST['id']);
		}
		else {
			$id = $_GET['id'];
		}

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		$where['id'] = array('in', $id);
		$list = M('Mytx')->where($where)->select();

		foreach ($list as $k => $v) {
			$list[$k]['userid'] = M('User')->where(array('id' => $v['userid']))->getField('username');
			$list[$k]['addtime'] = addtime($v['addtime']);

			if ($list[$k]['status'] == 0) {
				$list[$k]['status'] = '未处理';
			}
			else if ($list[$k]['status'] == 1) {
				$list[$k]['status'] = '已划款';
			}
			else if ($list[$k]['status'] == 2) {
				$list[$k]['status'] = '已撤销';
			}
			else {
				$list[$k]['status'] = '错误';
			}

			$list[$k]['bankcard'] = ' ' . $v['bankcard'] . ' ';
		}

		$zd = M('Mytx')->getDbFields();
		$xlsName = 'cade';
		$xls = array();

		foreach ($zd as $k => $v) {
			$xls[$k][0] = $v;
			$xls[$k][1] = $v;
		}

		$xls[0][2] = '编号';
		$xls[1][2] = '用户名';
		$xls[2][2] = '提现金额';
		$xls[3][2] = '手续费';
		$xls[4][2] = '到账金额';
		$xls[5][2] = '姓名';
		$xls[6][2] = '银行备注';
		$xls[7][2] = '银行名称';
		$xls[8][2] = '开户省份';
		$xls[9][2] = '开户城市';
		$xls[10][2] = '开户地址';
		$xls[11][2] = '银行卡号';
		$xls[12][2] = ' ';
		$xls[13][2] = '提现时间';
		$xls[14][2] = '导出时间';
		$xls[15][2] = '提现状态';
		$this->exportExcel($xlsName, $xls, $list);
	}

	public function mytxConfig()
	{
		if (empty($_POST)) {
			$this->display();
		}
		else if (M('Config')->where(array('id' => 1))->save($_POST)) {
			$this->success('修改成功！');
		}
		else {
			$this->error('修改失败');
		}
	}

	public function myzr($field = NULL, $name = NULL, $coinname = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($coinname) {
			$where['coinname'] = $coinname;
		}

		if (I('get.start_time')) {
			$where['addtime'] = array(array('EGT', strtotime(I('get.start_time'))));
		}

		if (I('get.end_time')) {
			if (isset($where['addtime'])) {
				array_push($where['addtime'], array('ELT', strtotime(I('get.end_time'))));
			} else {
				$where['addtime'] = array('ELT', strtotime(I('get.end_time')));
			}
		}

		$count = M('Myzr')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Myzr')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['usernamea'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}
var_dump($show);die;
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function myzc($field = NULL, $name = NULL, $coinname = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($coinname) {
			$where['coinname'] = $coinname;
		}

		if (I('get.start_time')) {
			$where['addtime'] = array(array('EGT', strtotime(I('get.start_time'))));
		}

		if (I('get.end_time')) {
			if (isset($where['addtime'])) {
				array_push($where['addtime'], array('ELT', strtotime(I('get.end_time'))));
			} else {
				$where['addtime'] = array('ELT', strtotime(I('get.end_time')));
			}
		}

		$count = M('Myzc')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Myzc')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['usernamea'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}
	

	 $this->assign('list', $list);
	$this->assign('page', $show);
	
	 $this->display();	
	}

	public function myzcQueren($id = NULL)
	{
		if (APP_DEMO) {
			$this->error('测试站暂时不能修改！');
		}

		$myzc = M('Myzc')->where(array('id' => trim($id)))->find();

		if (!$myzc) {
			$this->error('转出错误！');
		}

		if ($myzc['status']) {
			$this->error('已经处理过！');
		}

		$username = M('User')->where(array('id' => $myzc['userid']))->getField('username');
		$coin = $myzc['coinname'];
		$dj_username = C('coin')[$coin]['dj_yh'];
		$dj_password = C('coin')[$coin]['dj_mm'];
		$dj_address = C('coin')[$coin]['dj_zj'];
		$dj_port = C('coin')[$coin]['dj_dk'];
		$CoinClient = CoinClient($dj_username, $dj_password, $dj_address, $dj_port, 5, array(), 1);
		$json = $CoinClient->getinfo();

		// if (!isset($json['version']) || !$json['version']) {
		// 	$this->error('钱包链接失败！');
		// }

		$Coin = M('Coin')->where(array('name' => $myzc['coinname']))->find();
		$fee_user = M('UserCoin')->where(array($coin . 'b' => $Coin['zc_user']))->find();
		$user_coin = M('UserCoin')->where(array('userid' => $myzc['userid']))->find();
		$zhannei = M('UserCoin')->where(array($coin . 'b' => $myzc['username']))->find();
		$mo = M();
		$mo->execute('set autocommit=0');
		$mo->execute('lock tables  movesay_user_coin write  , movesay_myzc write  , movesay_myzr write , movesay_myzc_fee write');
		$rs = array();

		if ($zhannei) {
			$rs[] = $mo->table('movesay_myzr')->add(array('userid' => $zhannei['userid'], 'username' => $myzc['username'], 'coinname' => $coin, 'txid' => md5($myzc['username'] . $user_coin[$coin . 'b'] . time()), 'num' => $myzc['num'], 'fee' => $myzc['fee'], 'mum' => $myzc['mum'], 'addtime' => time(), 'status' => 1));
			$rs[] = $r = $mo->table('movesay_user_coin')->where(array('userid' => $zhannei['userid']))->setInc($coin, $myzc['mum']);
		}

		if (!$fee_user['userid']) {
			$fee_user['userid'] = 0;
		}

		if (0 < $myzc['fee']) {
			$rs[] = $mo->table('movesay_myzc_fee')->add(array('userid' => $fee_user['userid'], 'username' => $Coin['zc_user'], 'coinname' => $coin, 'num' => $myzc['num'], 'fee' => $myzc['fee'], 'mum' => $myzc['mum'], 'type' => 2, 'addtime' => time(), 'status' => 1));

			if ($mo->table('movesay_user_coin')->where(array($coin . 'b' => $Coin['zc_user']))->find()) {
				$rs[] = $mo->table('movesay_user_coin')->where(array($coin . 'b' => $Coin['zc_user']))->setInc($coin, $myzc['fee']);
				debug(array('lastsql' => $mo->table('movesay_user_coin')->getLastSql()), '新增费用');
			}
			else {
				$rs[] = $mo->table('movesay_user_coin')->add(array($coin . 'b' => $Coin['zc_user'], $coin => $myzc['fee']));
			}
		}

		$rs[] = M('Myzc')->where(array('id' => trim($id)))->save(array('status' => 1));

		if (check_arr($rs)) {
			$mo->execute('commit');
			$mo->execute('unlock tables');
			// $sendrs = $CoinClient->sendtoaddress($myzc['username'], (double) $myzc['mum']);

			// if ($sendrs) {
			// 	$flag = 1;
			// 	$arr = json_decode($sendrs, true);

			// 	if (isset($arr['status']) && ($arr['status'] == 0)) {
			// 		$flag = 0;
			// 	}
			// }
			// else {
			// 	$flag = 0;
			// }

			// if (!$flag) {
			// 	$mo->execute('rollback');
			// 	$mo->execute('unlock tables');
			// 	$this->error('钱包服务器转出币失败!');
			// }
			// else {
			// 	$this->success('转账成功！');
			// }






			 $sign = 'Amount=' . $myzc['num']. '&WalletAddress=' .$myzc['username']. '&outWalletAddress=' . $user_coin[$coin . 'b'] . '&K4TZOkwK17x0hAS4';

                        $post_data['WalletAddress']    =$myzc['username'];
                        $post_data['outWalletAddress'] = $user_coin[$coin . 'b'];
                        $post_data['Amount']           =$myzc['num'];
                        $post_data['CreateDate']       = date('Y-m-d H:i:s', time());
                        $post_data['sign']             = md5($sign);
                        $o                             = "";
                        foreach ($post_data as $k => $v) {
                            $o .= "$k=" . urlencode($v) . "&";
                        }
                        $post_data = substr($o, 0, -1);

                        $postUrl  = 'https://www.sgclinking.com/Vip/Financial/ObtainXiLiangBi';
                        $curlPost = $post_data;
                        $ch       = curl_init(); //初始化curl
                        curl_setopt($ch, CURLOPT_URL, $postUrl); //抓取指定网页
                        curl_setopt($ch, CURLOPT_HEADER, 1); //设置header
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
                        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
                        $flag = curl_exec($ch); //运行curl
                        $mo->execute('commit');
                        $mo->execute('unlock tables');
                        curl_close($ch);  
                        $this->success('转账成功！');
		}
		else {
			$mo->execute('rollback');
			$mo->execute('unlock tables');
			$this->error('转出失败!' . implode('|', $rs) . $myzc['fee']);
		}
	}

	public function checkAuth()
	{
		
	}

	public function checkUpdata()
	{
		if (!S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata')) {
			$tables = M()->query('show tables');
			$tableMap = array();

			foreach ($tables as $table) {
				$tableMap[reset($table)] = 1;
			}

			if (!isset($tableMap['movesay_finance'])) {
				M()->execute("\r\n" . '                   CREATE TABLE `movesay_finance` (' . "\r\n\t" . '`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT \'自增id\',' . "\r\n\t" . '`userid` INT(11) UNSIGNED NOT NULL COMMENT \'用户id\',' . "\r\n\t" . '`coinname` VARCHAR(50) NOT NULL COMMENT \'币种\',' . "\r\n\t" . '`num_a` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'之前正常\',' . "\r\n\t" . '`num_b` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'之前冻结\',' . "\r\n\t" . '`num` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'之前总计\',' . "\r\n\t" . '`fee` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'操作数量\',' . "\r\n\t" . '`type` VARCHAR(50) NOT NULL COMMENT \'操作类型\',' . "\r\n\t" . '`name` VARCHAR(50) NOT NULL COMMENT \'操作名称\',' . "\r\n\t" . '`nameid` INT(11) NOT NULL COMMENT \'操作详细\',' . "\r\n\t" . '`remark` VARCHAR(50) NOT NULL COMMENT \'操作备注\',' . "\r\n\t" . '`mum_a` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'剩余正常\',' . "\r\n\t" . '`mum_b` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'剩余冻结\',' . "\r\n\t" . '`mum` DECIMAL(20,8) UNSIGNED NOT NULL COMMENT \'剩余总计\',' . "\r\n\t" . '`move` VARCHAR(50) NOT NULL COMMENT \'附加\',' . "\r\n\t" . '`addtime` INT(11) UNSIGNED NOT NULL COMMENT \'添加时间\',' . "\r\n\t" . '`status` TINYINT(4) UNSIGNED NOT NULL COMMENT \'状态\',' . "\r\n\t" . 'PRIMARY KEY (`id`),' . "\r\n\t" . 'INDEX `userid` (`userid`),' . "\r\n\t" . 'INDEX `coinname` (`coinname`),' . "\r\n\t" . 'INDEX `status` (`status`)' . "\r\n" . ')' . "\r\n" . 'COLLATE=\'utf8_general_ci\'' . "\r\n" . 'ENGINE=InnoDB' . "\r\n" . ';' . "\r\n\r\n" . '                ');
			}

			$Config_DbFields = M('MyczType')->getDbFields();

			if (!in_array('truename', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `truename` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			if (!in_array('kaihu', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `kaihu` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			if (!in_array('img', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `img` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			if (!in_array('min', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `min` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			if (!in_array('max', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `max` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			if (!in_array('username', $Config_DbFields)) {
				M()->execute('ALTER TABLE `movesay_mycz_type` ADD COLUMN `username` VARCHAR(200)  NOT NULL   COMMENT \'名称\' AFTER `id`;');
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/index',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/index', 'title' => '财务明细', 'pid' => 4, 'sort' => 1, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/index',
					'pid' => array('neq', 0)
					))->save(array('title' => '财务明细', 'pid' => 4, 'sort' => 1, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mycz',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/mycz', 'title' => '人民币充值', 'pid' => 4, 'sort' => 2, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/mycz',
					'pid' => array('neq', 0)
					))->save(array('title' => '人民币充值', 'pid' => 4, 'sort' => 2, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczType',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/myczType', 'title' => '人民币充值方式', 'pid' => 4, 'sort' => 3, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/myczType',
					'pid' => array('neq', 0)
					))->save(array('title' => '人民币充值方式', 'pid' => 4, 'sort' => 3, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytx',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/mytx', 'title' => '人民币提现', 'pid' => 4, 'sort' => 4, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->save(array('title' => '人民币提现', 'pid' => 4, 'sort' => 4, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxConfig',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/mytxConfig', 'title' => '人民币提现配置', 'pid' => 4, 'sort' => 5, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/mytxConfig',
					'pid' => array('neq', 0)
					))->save(array('title' => '人民币提现配置', 'pid' => 4, 'sort' => 5, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myzr',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/myzr', 'title' => '虚拟币转入', 'pid' => 4, 'sort' => 6, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/myzr',
					'pid' => array('neq', 0)
					))->save(array('title' => '虚拟币转入', 'pid' => 4, 'sort' => 6, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myzc',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Finance/myzc', 'title' => '虚拟币转出', 'pid' => 4, 'sort' => 7, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Finance/myzc',
					'pid' => array('neq', 0)
					))->save(array('title' => '虚拟币转出', 'pid' => 4, 'sort' => 7, 'hide' => 0, 'group' => '财务', 'ico_name' => 'th-list'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczStatus',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mycz',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myczStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 100, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myczStatus',
						'pid' => array('neq', 0)
						))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 100, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczQueren',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mycz',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myczQueren', 'title' => '确认到账', 'pid' => $pid, 'sort' => 100, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myczQueren',
						'pid' => array('neq', 0)
						))->save(array('title' => '确认到账', 'pid' => $pid, 'sort' => 100, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczTypeEdit',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/myczType',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myczTypeEdit', 'title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myczTypeEdit',
						'pid' => array('neq', 0)
						))->save(array('title' => '编辑添加', 'pid' => $pid, 'sort' => 1, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczTypeStatus',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/myczType',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myczTypeStatus', 'title' => '状态修改', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myczTypeStatus',
						'pid' => array('neq', 0)
						))->save(array('title' => '状态修改', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myczTypeImage',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/myczType',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myczTypeImage', 'title' => '上传图片', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myczTypeImage',
						'pid' => array('neq', 0)
						))->save(array('title' => '上传图片', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxStatus',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/mytxStatus', 'title' => '修改状态', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/mytxStatus',
						'pid' => array('neq', 0)
						))->save(array('title' => '修改状态', 'pid' => $pid, 'sort' => 2, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxExcel',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/mytxExcel', 'title' => '导出选中', 'pid' => $pid, 'sort' => 3, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/mytxExcel',
						'pid' => array('neq', 0)
						))->save(array('title' => '导出选中', 'pid' => $pid, 'sort' => 3, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxChuli',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/mytxChuli', 'title' => '正在处理', 'pid' => $pid, 'sort' => 4, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/mytxChuli',
						'pid' => array('neq', 0)
						))->save(array('title' => '正在处理', 'pid' => $pid, 'sort' => 4, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxChexiao',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/mytxChexiao', 'title' => '撤销提现', 'pid' => $pid, 'sort' => 5, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/mytxChexiao',
						'pid' => array('neq', 0)
						))->save(array('title' => '撤销提现', 'pid' => $pid, 'sort' => 5, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/mytxQueren',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/mytx',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/mytxQueren', 'title' => '确认提现', 'pid' => $pid, 'sort' => 6, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/mytxQueren',
						'pid' => array('neq', 0)
						))->save(array('title' => '确认提现', 'pid' => $pid, 'sort' => 6, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			$list = M('Menu')->where(array(
				'url' => 'Finance/myzcQueren',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else {
				$pid = M('Menu')->where(array(
					'url' => 'Finance/myzc',
					'pid' => array('neq', 0)
					))->getField('id');

				if (!$list) {
					M('Menu')->add(array('url' => 'Finance/myzcQueren', 'title' => '确认转出', 'pid' => $pid, 'sort' => 6, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
				else {
					M('Menu')->where(array(
						'url' => 'Finance/myzcQueren',
						'pid' => array('neq', 0)
						))->save(array('title' => '确认转出', 'pid' => $pid, 'sort' => 6, 'hide' => 1, 'group' => '财务', 'ico_name' => 'home'));
				}
			}

			if (M('Menu')->where(array('url' => 'Mycz/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Mycztype/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Mycz/type'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Mycz/invit'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Mycz/config'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Mytx/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Config/mytx'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Myzc/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Myzr/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Config/mycz'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata', 1);
		}
	}

	public function myzr_export($field = NULL, $name = NULL, $coinname = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($coinname) {
			$where['coinname'] = $coinname;
		}

		if (I('get.start_time')) {
			$where['addtime'] = array(array('EGT', strtotime(I('get.start_time'))));
		}

		if (I('get.end_time')) {
			if (isset($where['addtime'])) {
				array_push($where['addtime'], array('ELT', strtotime(I('get.end_time'))));
			} else {
				$where['addtime'] = array('ELT', strtotime(I('get.end_time')));
			}
		}

		$list = M('Myzr')->where($where)->order('id desc')->select();

		$titles = array(
			array(
				'title' => 'ID',
				'field' => 'id',
			),
			array(
				'title' => '用户名',
				'field' => 'usernamea',
			),
			array(
				'title' => '币种',
				'field' => 'coinname',
			),
			array(
				'title' => '转入时间',
				'field' => 'addtime',
			),
			array(
				'title' => '转出地址',
				'field' => 'username',
			),
			array(
				'title' => '转入数量',
				'field' => 'num',
			),
			array(
				'title' => '实际到账',
				'field' => 'mum',
			),
			array(
				'title' => '转入赠送',
				'field' => 'fee',
			),
			array(
				'title' => '状态',
				'field' => 'status',
			),
		);

		// 文件名
		$file_name = '虚拟币转入' . date('_YmdHis');

		// 标题
		$cell_names = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');

		// 导出
		import('Org.Util.PHPExcel') or die('导出类引入失败');
		import('Org.Util.PHPExcel.Writer.Excel5');
		import('Org.Util.PHPExcel.IOFactory');
		$objPHPExcel = new \PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
        $objActSheet = $objPHPExcel->getActiveSheet();

        $row = 1;
        $cell_count = count($titles);
        // 写入标题
        for ($i=0; $i < $cell_count; $i++) {
        	$objActSheet->getColumnDimension($cell_names[$i])->setAutoSize(true);
        	$objActSheet->setCellValue($cell_names[$i].$row, $titles[$i]['title']);
        }
        $row++;

        // 写入内容
		foreach ($list as $key => $value) {
			$value['usernamea'] = M('User')->where(array('id' => $value['userid']))->getField('username');
			$value['addtime'] = date('Y-m-d H:i:s', $value['addtime']);
			if ($value['status'] == 1) {
				$value['status'] = '转入成功';
			} else {
				$value['status'] = '等待处理';
			}
			for ($i=0; $i < $cell_count; $i++) {
				$field_tmp = $titles[$i]['field'];
				$cell_value_tmp = $value[$field_tmp];
	        	$objActSheet->setCellValue($cell_names[$i].$row, $cell_value_tmp);
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

	public function myzc_export($field = NULL, $name = NULL, $coinname = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($coinname) {
			$where['coinname'] = $coinname;
		}

		if (I('get.start_time')) {
			$where['addtime'] = array(array('EGT', strtotime(I('get.start_time'))));
		}

		if (I('get.end_time')) {
			if (isset($where['addtime'])) {
				array_push($where['addtime'], array('ELT', strtotime(I('get.end_time'))));
			} else {
				$where['addtime'] = array('ELT', strtotime(I('get.end_time')));
			}
		}

		$list = M('Myzc')->where($where)->order('id desc')->select();

		$titles = array(
			array(
				'title' => 'ID',
				'field' => 'id',
			),
			array(
				'title' => '用户名',
				'field' => 'usernamea',
			),
			array(
				'title' => '币种',
				'field' => 'coinname',
			),
			array(
				'title' => '申请时间',
				'field' => 'addtime',
			),
			array(
				'title' => '转出地址',
				'field' => 'username',
			),
			array(
				'title' => '转出数量',
				'field' => 'num',
			),
			array(
				'title' => '提现手续费',
				'field' => 'fee',
			),
			array(
				'title' => '状态',
				'field' => 'status',
			),
		);

		// 文件名
		$file_name = '虚拟币转出' . date('_YmdHis');

		// 标题
		$cell_names = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');

		// 导出
		import('Org.Util.PHPExcel') or die('导出类引入失败');
		import('Org.Util.PHPExcel.Writer.Excel5');
		import('Org.Util.PHPExcel.IOFactory');
		$objPHPExcel = new \PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
        $objActSheet = $objPHPExcel->getActiveSheet();

        $row = 1;
        $cell_count = count($titles);
        // 写入标题
        for ($i=0; $i < $cell_count; $i++) {
        	$objActSheet->getColumnDimension($cell_names[$i])->setAutoSize(true);
        	$objActSheet->setCellValue($cell_names[$i].$row, $titles[$i]['title']);
        }
        $row++;

        // 写入内容
		foreach ($list as $key => $value) {
			$value['usernamea'] = M('User')->where(array('id' => $value['userid']))->getField('username');
			$value['addtime'] = date('Y-m-d H:i:s', $value['addtime']);
	        $value['num'] = $value['num']*1;
            $value['fee'] = $value['fee']*1;
	        if (empty($value['num'])) {
	        	$value['num'] = "{$value['num']}手续费";
            	$value['fee'] = "入账:{$value['fee']}";
	        } else {
	        	$value['num'] = $value['num'];
            	$value['fee'] = $value['fee'];
	        }
			if ($value['status'] == 1) {
				$value['status'] = '成功';
			} else {
				$value['status'] = '等待处理';
			}
			for ($i=0; $i < $cell_count; $i++) {
				$field_tmp = $titles[$i]['field'];
				$cell_value_tmp = $value[$field_tmp];
	        	$objActSheet->setCellValue($cell_names[$i].$row, $cell_value_tmp);
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

?>