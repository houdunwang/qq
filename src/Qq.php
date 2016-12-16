<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\qq;

use houdunwang\qq\org\QC;

class Qq {

	private $Qc;

	//构造函数
	public function __construct( $config ) {
		$this->Qc = new QC( $config );
	}

	public function __call( $method, $args ) {
		return call_user_func_array( [ $this->Qc, $method ], $args );
	}
}