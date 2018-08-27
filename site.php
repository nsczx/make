<?php
/**
 * dingku_shop模块微站定义
 *
 * @author xiaoyaossdlh
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Xaj extends WeModuleSite {
	
	public function doWebGoods() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	
	public function doMobileIndex() {
		// 手机端应用入口

		
		global $_W;

        $url = $_W['siteroot'] . 'addons/' . $_W['current_module']['name'] . '/core/mobile';
        
        if( file_exists(__DIR__ . '/core/public/index.php') ){
            header('Location: ' . $url);
            exit;
        }
	}

}

