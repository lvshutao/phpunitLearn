<?php 
class ProviderTest extends PHPUnit_Framework_TestCase{
	//������дһ���������������ķ�������Ϊ���ݹ���������Ϊ����Ҫ�����ԣ����Բ���Ҫ��test��ͷ��
	public function dataProvider(){
		return array(
			array(2,4,6),
			array(7,15,22),
			array(9,7,16)
		);
	}
	/**
	 * @dataProvider dataProvider
	 */
	public function testSum($a,$b,$sum){
		$this->assertEquals($a + $b,$sum);
	}
	
	public function testNothing(){
		echo __CLASS__;
	}
}