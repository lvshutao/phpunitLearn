<?php 
class Iphone6Test extends PHPUnit_Framework_TestCase{
	public function testA(){
		return 2000;
	}
	public function testB(){
		return 2500;
	}
	public function testC(){
		return 499;
	}
	/**
	 * depends testA
	 * depends testB
	 * depends testC
	 */
	public function testAll(){
		//���Ժ�����ǰ������������Ҫ��ֵ����������ʵ�ϵ�ֵ
		$this->assertEquals(array(2000,2500,499),func_get_args());
		$this->assertGreaterThanOrEqual(5000,array_sum(func_get_args()));
	}
}