<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace OSS\Model;

class UploadInfo
{
	private $key = '';
	private $uploadId = '';
	private $initiated = '';

	public function __construct($key, $uploadId, $initiated)
	{
		$this->key = $key;
		$this->uploadId = $uploadId;
		$this->initiated = $initiated;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function getUploadId()
	{
		return $this->uploadId;
	}

	public function getInitiated()
	{
		return $this->initiated;
	}
}


?>
