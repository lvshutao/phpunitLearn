<?php 
class DependsTest extends PHPUnit_Framework_TestCase{
	public function testPlant(){
		$Foods = array();//ʳ��
		$this->assertEmpty($Foods);//ʳ�ﲻ��Ҫ��
		array_push($Foods,'fruit');//������ˮ��
		return $Foods;
	}
	/**
	 * @depends testPlant
	 */
	public function testPerson(array $Food){
		//����ǲ�����ˮ�����Գ�
		$this->assertEquals(array_pop($Food),'fruit');
		//����ˮ������XX���ٰ�XX�ӳ�ȥ
		array_push($Food,'XX');
		return $Food;
	}
	/**
	 * @depends testPerson
	 */
	public function testDog(array $Foods){
		$this->assertEquals(array_pop($Foods),'XX');
		//����ǲ��ǳ�����
		$this->assertEmpty($Foods);
	}
}