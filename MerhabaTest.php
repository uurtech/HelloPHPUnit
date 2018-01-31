<?php

require "vendor/autoload.php";
require "Merhaba.php";

class MerhabaTest extends \PHPUnit\Framework\TestCase{

	protected $merhabaa;

	//burası malum setup,
	//her test fonksiyonu için tekrar tekrar instance oluşturmak yerine
	//setUp fonksiyonu zaten her test çalıştırıldığında
	//çalıştırılacağından
	//setUp içerisinde instance oluşturuyoruz.
	public function setUp(){
		$this->merhabaa = new MerhabaSinif();
		$this->merhabaa->setMesaj("Bu yeni mesaj");
	}


	//ÇOK ÖNEMLİ
	//eğer fonksiyon test ismi ile bağlamaz ise
	//phpunit size hangi test pampiş
	//diye uyarı verir
	public function testKonus(){

		$beklenen = "Bu yeni mesaj";

		$suanOlan = $this->merhabaa->konus();

		$this->assertEquals($beklenen, $suanOlan);
	}


	//burası da alaşağı etme kodu :) 
	protected function tearDown() {
        unset($this->user);
    }

}


?>