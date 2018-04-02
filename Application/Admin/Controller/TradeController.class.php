<?php
namespace Admin\Controller;

class TradeController extends AdminController
{
	public function index($field = NULL, $name = NULL, $market = NULL, $status = NULL)
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

		if ($market) {
			$where['market'] = $market;
		}

		if ($status) {
			$where['status'] = $status - 1;
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

		$count = M('Trade')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Trade')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function chexiao($id = NULL)
	{
		$rs = D('Trade')->chexiao($id);

		if ($rs[0]) {
			$this->success($rs[1]);
		}
		else {
			$this->error($rs[1]);
		}
	}

	public function log($field = NULL, $name = NULL, $market = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else if ($field == 'peername') {
				$where['peerid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($market) {
			$where['market'] = $market;
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

		$count = M('TradeLog')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('TradeLog')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
			$list[$k]['peername'] = M('User')->where(array('id' => $v['peerid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function chat($field = NULL, $name = NULL)
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

		$count = M('Chat')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Chat')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function chatStatus($id = NULL, $type = NULL, $moble = 'Chat')
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
			$this->error('操作失败！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败！');
		}
	}

	public function comment($field = NULL, $name = NULL, $coinname = NULL)
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

		$count = M('CoinComment')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('CoinComment')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function commentStatus($id = NULL, $type = NULL, $moble = 'CoinComment')
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
			$this->error('操作失败！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败！');
		}
	}

	public function market($field = NULL, $name = NULL)
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

		$count = M('Market')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Market')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function marketEdit($id = NULL)
	{
		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = array();
			}
			else {
				$this->data = M('Market')->where(array('id' => $id))->find();
			}

			$this->display();
		}
		else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			$round = array(0, 1, 2, 3, 4, 5, 6);

			if (!in_array($_POST['round'], $round)) {
				$this->error('小数位数格式错误！');
			}

			if ($_POST['id']) {
				$rs = M('Market')->save($_POST);
			}
			else {
				$_POST['name'] = $_POST['sellname'] . '_' . $_POST['buyname'];
				unset($_POST['buyname']);
				unset($_POST['sellname']);

				if (M('Market')->where(array('name' => $_POST['name']))->find()) {
					$this->error('市场存在！');
				}

				$rs = M('Market')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！');
			}
			else {
				$this->error('操作失败！');
			}
		}
	}

	public function marketStatus($id = NULL, $type = NULL, $moble = 'Market')
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
			$this->error('操作失败！');
		}

		if (M($moble)->where($where)->save($data)) {
			$this->success('操作成功！');
		}
		else {
			$this->error('操作失败！');
		}
	}

	public function invit($field = NULL, $name = NULL)
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

		$count = M('Invit')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Invit')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
			$list[$k]['invit'] = M('User')->where(array('id' => $v['invit']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function checkAuth()
	{
	}

	public function checkUpdata()
	{
		if (!S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata')) {
			$list = M('Menu')->where(array(
				'url' => 'Trade/index',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/index', 'title' => '委托管理', 'pid' => 5, 'sort' => 1, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/index',
					'pid' => array('neq', 0)
					))->save(array('title' => '委托管理', 'pid' => 5, 'sort' => 1, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Trade/log',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/log', 'title' => '成交记录', 'pid' => 5, 'sort' => 2, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/log',
					'pid' => array('neq', 0)
					))->save(array('title' => '成交记录', 'pid' => 5, 'sort' => 2, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Trade/chat',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/chat', 'title' => '交易聊天', 'pid' => 5, 'sort' => 3, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/chat',
					'pid' => array('neq', 0)
					))->save(array('title' => '交易聊天', 'pid' => 5, 'sort' => 3, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Trade/comment',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/comment', 'title' => '币种评论', 'pid' => 5, 'sort' => 4, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/comment',
					'pid' => array('neq', 0)
					))->save(array('title' => '币种评论', 'pid' => 5, 'sort' => 4, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Trade/market',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/market', 'title' => '交易市场', 'pid' => 5, 'sort' => 5, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/market',
					'pid' => array('neq', 0)
					))->save(array('title' => '交易市场', 'pid' => 5, 'sort' => 5, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			$list = M('Menu')->where(array(
				'url' => 'Trade/invit',
				'pid' => array('neq', 0)
				))->select();

			if ($list[1]) {
				M('Menu')->where(array('id' => $list[1]['id']))->delete();
			}
			else if (!$list) {
				M('Menu')->add(array('url' => 'Trade/invit', 'title' => '交易推荐', 'pid' => 5, 'sort' => 6, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}
			else {
				M('Menu')->where(array(
					'url' => 'Trade/invit',
					'pid' => array('neq', 0)
					))->save(array('title' => '交易推荐', 'pid' => 5, 'sort' => 6, 'hide' => 0, 'group' => '交易', 'ico_name' => 'stats'));
			}

			if (M('Menu')->where(array('url' => 'Chat/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			if (M('Menu')->where(array('url' => 'Tradelog/index'))->delete()) {
				M('AuthRule')->where(array('status' => 1))->delete();
			}

			S(MODULE_NAME . CONTROLLER_NAME . 'checkUpdata', 1);
		}
	}

	public function index_export($field = NULL, $name = NULL, $market = NULL, $status = NULL)
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

		if ($market) {
			$where['market'] = $market;
		}

		if ($status) {
			$where['status'] = $status - 1;
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

		$list = M('Trade')->where($where)->order('id desc')->select();

		$titles = array(
			array(
				'title' => 'ID',
				'field' => 'id',
			),
			array(
				'title' => '用户名',
				'field' => 'username',
			),
			array(
				'title' => '市场',
				'field' => 'market',
			),
			array(
				'title' => '单价',
				'field' => 'price',
			),
			array(
				'title' => '数量',
				'field' => 'num',
			),
			array(
				'title' => '已成交',
				'field' => 'deal',
			),
			array(
				'title' => '总额',
				'field' => 'mum',
			),
			array(
				'title' => '类型',
				'field' => 'type',
			),
			array(
				'title' => '时间',
				'field' => 'addtime',
			),
			array(
				'title' => '状态',
				'field' => 'status',
			),
		);

		// 文件名
		$file_name = '委托管理' . date('_YmdHis');

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
			$value['username'] = M('User')->where(array('id' => $value['userid']))->getField('username');
			$value['addtime'] = date('Y-m-d H:i:s', $value['addtime']);
			if ($value['type'] == 1) {
				$value['type'] = '买入';
			} else {
				$value['type'] = '卖出';
			}
			if ($value['status'] == 1) {
				$value['status'] = '已成交';
			} elseif ($value['status'] == 0) {
				$value['status'] = '交易中';
			} elseif ($value['status'] == 2) {
				$value['status'] = '撤销';
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

	public function log_export($field = NULL, $name = NULL, $market = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else if ($field == 'peername') {
				$where['peerid'] = M('User')->where(array('username' => $name))->getField('id');
			}
			else {
				$where[$field] = $name;
			}
		}

		if ($market) {
			$where['market'] = $market;
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

		$list = M('TradeLog')->where($where)->order('id desc')->select();

		$titles = array(
			array(
				'title' => 'ID',
				'field' => 'id',
			),
			array(
				'title' => '买家',
				'field' => 'username',
			),
			array(
				'title' => '卖家',
				'field' => 'peername',
			),
			array(
				'title' => '市场',
				'field' => 'market',
			),
			array(
				'title' => '单价',
				'field' => 'price',
			),
			array(
				'title' => '数量',
				'field' => 'num',
			),
			array(
				'title' => '总额',
				'field' => 'mum',
			),
			array(
				'title' => '买家手续费',
				'field' => 'fee_buy',
			),
			array(
				'title' => '卖家手续费',
				'field' => 'fee_sell',
			),
			array(
				'title' => '交易类型',
				'field' => 'type',
			),
			array(
				'title' => '时间',
				'field' => 'addtime',
			),
		);

		// 文件名
		$file_name = '成交记录' . date('_YmdHis');

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
			$value['username'] = M('User')->where(array('id' => $value['userid']))->getField('username');
			$value['peername'] = M('User')->where(array('id' => $value['peerid']))->getField('username');
			$value['addtime'] = date('Y-m-d H:i:s', $value['addtime']);
			if ($value['type'] == 1) {
				$value['type'] = '买入';
			} else {
				$value['type'] = '卖出';
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
	
	public function Noofcfukuan($id)
	{
		 	
		
		
		// if (!userid()) {
			// $this->error(L('trade_please_login_first'));
		// }

		if (!check($id, 'd')) {
			$this->error(L('trade_select_commission_pay'));
		}

		$trade = M('Trade')->where(array('id' => $id))->find();
$trade1 = M('Trade')->where(array('id' => $trade['buyid'] ))->find();



		if (!$trade) {
			$this->error(L('trade_buy_parameter_error'));
		}
		
      $rs = array();

	    $rs[] = M('Trade')->where(array('id' => $id))->save(array('status1' => 1,'paytime'=>null));
		$rs[] = M('Trade')->where(array('id' => $trade['buyid'] ))->save(array('status1' => 1,'paytime'=>null));
		
		
if (check_arr($rs)) {
	
		
	   	$this->success('操作成功');
		
		}
		else {
			
		
			$this->error('操作失败！');
		}
		
	}
	 public function ofcbuy_chexiao($id)
	{
		$mo=M();
		$trade = M('Trade')->where(array('id' => $id))->find();
		
		
		//交易中的才能撤销
		if ($trade['status'] != 0) {
				$this->error('不是交易中的不能撤销！');
		}
		//已经付款的不能撤销
		if ($trade['status1'] == 2) {
			$this->error('已经付款的不能撤销！');
		}
		//状态改为已撤销
		$rs[] = $mo->table('movesay_trade')->where(array('id' => $id))->setField('status', 2);
		//修改匹配的记录
		$rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('status1', null);
        $rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('buyuserid', null);
        $rs = M('Trade')->where(array('id' => $trade['buyid']))->setField('buyid', null);
	
	
	   	  $finance = $mo->table('movesay_finance')->where(array('userid' => $trade['userid']))->order('id desc')->find();
			$finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $trade['userid']))->find();
			
			$finance_nameid = $trade['id'];
			$save_buy_rmb = $trade['num']* $trade['price'];
			$finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $trade['userid']))->find();
			$finance_hash = md5($trade['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $save_buy_rmb . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
			$finance_num = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

			if ($finance['mum'] < $finance_num) {
				$finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
			}
			else {
				$finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
			}

			$rs[] = $mo->table('movesay_finance')->add(array('userid' => $trade['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $save_buy_rmb, 'type' => 1, 'name' => 'trade', 'nameid' => $finance_nameid, 'remark' => '交易中心-管理员交易撤销买单' . $trade['market'], 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
		if (check_arr($rs)) {
		
	 	$this->success('操作成功');
			
		}
		else {
				$this->error('操作失败！');
			
		}
	}
	   public function upTrade2($paypassword = NULL, $id)
		{
			
			$t =  M()->table('movesay_trade')->where(array('id' => $id))->order('id desc')->find();
		    $this->match($t['market'], $t['buyid'],$id);
			
			$this->success('操作成功');
		
		}
		public function match($market = NULL,$buyid,$sellid)
	{
		
		// 防止重复提交
		$trade = M('Trade')->where(array('id' => $buyid))->find();
		if ($trade['status'] == 1) {
			$this->error('请不要重复提交');
		}
		$trade = M('Trade')->where(array('id' => $sellid))->find();
		if ($trade['status'] == 1) {
		$this->error('请不要重复提交');
		}
		
						
		
		
		
			$rs = array();
			$mo = M();
			
				$xnb = explode('_', $market)[0];
			$rmb = explode('_', $market)[1];
			
			$fee_buy = C('market')[$market]['fee_buy'];
		$fee_sell = C('market')[$market]['fee_sell'];
		$invit_buy = C('market')[$market]['invit_buy'];
		$invit_sell = C('market')[$market]['invit_sell'];
		$invit_1 = C('market')[$market]['invit_1'];
		$invit_2 = C('market')[$market]['invit_2'];
		$invit_3 = C('market')[$market]['invit_3'];
		
		
		
		
			
				$buy = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $buyid ,))->order('price desc,id asc')->find();
			    $sell = $mo->table('movesay_trade')->where(array('market' => $market, 'id' => $sellid ))->order('price asc,id asc')->find();
				
			    $amount = min(round($buy['num'] - $buy['deal'], 8 - C('market')[$market]['round']), round($sell['num'] - $sell['deal'], 8 - C('market')[$market]['round']));
				$amount = round($amount, 8 - C('market')[$market]['round']);
			    $mum = round($buy['price']  * $amount, 8);
				
				if ($fee_buy) {
					$buy_fee = round(($mum / 100) * $fee_buy, 8);
					$buy_save = round(($mum / 100) * (100 + $fee_buy), 8);
				}
				else {
					$buy_fee = 0;
					$buy_save = $mum;
				}
                    $buy_fee = 0;
					$buy_save = $mum;
				
				if ($fee_sell) {
					$sell_fee = round(($mum / 100) * $fee_sell, 8);
					$sell_save = round(($mum / 100) * (100 - $fee_sell), 8);
				}
				else {
					$sell_fee = 0;
					$sell_save = $mum;
				}
				
		
			    $mo->execute('set autocommit=0');
				$mo->execute('lock tables movesay_trade write ,movesay_trade_log write ,movesay_user write,movesay_user_coin write,movesay_invit write ,movesay_finance write');
				$rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setInc('deal', $buy['num']);
				$rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setInc('deal', $buy['num']);
				$rs[] = $finance_nameid = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' =>$buy['price'], 'num' =>$buy['num']  , 'mum' => $mum , 'type' =>1, 'fee_buy' => $fee_buy, 'fee_sell' =>$fee_sell , 'addtime' => time(), 'status' => 1));
			   //$rs[] = $finance_nameid = $mo->table('movesay_trade_log')->add(array('userid' => $buy['userid'], 'peerid' => $sell['userid'], 'market' => $market, 'price' => 1,          'num' => 1, 'mum' =>1, 'type' => 1, 'fee_buy' => 1, 'fee_sell' => 1, 'addtime' => time(), 'status' => 1));
			
				$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setInc($xnb, $buy['num']);
				$finance = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
				$finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
			//	$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->setDec($rmb . 'd', $save_buy_rmb);
				$finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $buy['userid']))->find();
				$finance_hash = md5($buy['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
				$finance_num = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

				if ($finance['mum'] < $finance_num) {
					$finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
				}
				else {
					$finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
				}

				$rs[] = $mo->table('movesay_finance')->add(array('userid' => $buy['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum , 'type' => 2, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功买入-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
				$finance = $mo->table('movesay_finance')->where(array('userid' => $buy['userid']))->order('id desc')->find();
				$finance_num_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
				//$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setInc($rmb, $sell_save);
				$finance_mum_user_coin = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->find();
				$finance_hash = md5($sell['userid'] . $finance_num_user_coin['cny'] . $finance_num_user_coin['cnyd'] . $mum . $finance_mum_user_coin['cny'] . $finance_mum_user_coin['cnyd'] . MSCODE . 'auth.meunite.com');
				$finance_num = $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'];

				if ($finance['mum'] < $finance_num) {
					$finance_status = (1 < ($finance_num - $finance['mum']) ? 0 : 1);
				}
				else {
					$finance_status = (1 < ($finance['mum'] - $finance_num) ? 0 : 1);
				}

				$rs[] = $mo->table('movesay_finance')->add(array('userid' => $sell['userid'], 'coinname' => 'cny', 'num_a' => $finance_num_user_coin['cny'], 'num_b' => $finance_num_user_coin['cnyd'], 'num' => $finance_num_user_coin['cny'] + $finance_num_user_coin['cnyd'], 'fee' => $mum, 'type' => 1, 'name' => 'tradelog', 'nameid' => $finance_nameid, 'remark' => '交易中心-成功卖出-市场' . $market, 'mum_a' => $finance_mum_user_coin['cny'], 'mum_b' => $finance_mum_user_coin['cnyd'], 'mum' => $finance_mum_user_coin['cny'] + $finance_mum_user_coin['cnyd'], 'move' => $finance_hash, 'addtime' => time(), 'status' => $finance_status));
				$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $sell['userid']))->setDec($xnb . 'd', $sell['num']+$sell['fee']);
			
			
						$rs[] = $mo->table('movesay_trade')->where(array('id' => $buy['id']))->setField('status', 1);
				

			

			
						$rs[] = $mo->table('movesay_trade')->where(array('id' => $sell['id']))->setField('status', 1);
					


			

				$invit_buy_user = $mo->table('movesay_user')->where(array('id' => $buy['userid']))->find();
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
								///	$rs[] = $mo->table('movesay_user_coin')->where(array('userid' => $invit_sell_user['invit_3']))->setInc($rmb, $invit_sell_save_3);
									$rs[] = $mo->table('movesay_invit')->add(array('userid' => $invit_sell_user['invit_3'], 'invit' => $sell['userid'], 'name' => '三代卖出赠送', 'type' => $market . '卖出交易赠送', 'num' => $amount, 'mum' => $mum, 'fee' => $invit_sell_save_3, 'addtime' => time(), 'status' => 1));
								}
							}
						}
					}
				}

				if (check_arr($rs)) {
					$mo->execute('commit');
					$mo->execute('unlock tables');
					
					
			$new_price = round(M('TradeLog')->where(array('market' => $market, 'status' => 1))->order('id desc')->getField('price'), 6);
			$buy_price = round(M('Trade')->where(array('type' => 1, 'market' => $market, 'status' => 0))->max('price'), 6);
			$sell_price = round(M('Trade')->where(array('type' => 2, 'market' => $market, 'status' => 0))->min('price'), 6);
			$min_price = round(M('TradeLog')->where(array(
				'market'  => $market,
				'addtime' => array('gt', time() - (60 * 60 * 24))
				))->min('price'), 6);
			$max_price = round(M('TradeLog')->where(array(
				'market'  => $market,
				'addtime' => array('gt', time() - (60 * 60 * 24))
				))->max('price'), 6);
			$volume = round(M('TradeLog')->where(array(
				'market'  => $market,
				'addtime' => array('gt', time() - (60 * 60 * 24))
				))->sum('num'), 6);
			$sta_price = round(M('TradeLog')->where(array(
				'market'  => $market,
				'status'  => 1,
				'addtime' => array('gt', time() - (60 * 60 * 24))
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

			$change = round((($new_price - $Cmarket['hou_price']) / $Cmarket['hou_price']) * 100, 2);
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
				}
				
				else {
					$mo->execute('rollback');
					$mo->execute('unlock tables');
				}
			
			
			
			
			
			
		
		
		
		
		
	}
	
	
		
	
}

?>