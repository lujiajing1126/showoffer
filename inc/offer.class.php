<?php
class Offer {
	private $width = 1200;
	private $height = 800;
	private $img = null;
	private $font_path = './assets/fonts/FelixTitling.ttf';
	private $font_path_zhcn = './assets/fonts/msyh.ttf';
	private $font_size = 20;
	private $color = null;
	private $token = null;
	private $logos = array();
	private $img_locations = array(
		array(52,60),
		array(670,60),
		array(52,210),
		array(670,210),
		array(52,360),
		array(670,360),
		array(52,510),
		array(670,510),
		array(52,660),
		array(670,660),
	);
	private $caption = array(
		array(195,70),
		array(813,70),
		array(195,220),
		array(813,220),
		array(195,370),
		array(813,370),
		array(195,520),
		array(813,520),
		array(195,670),
		array(813,670)
	);
	private $username = null;
	public function __construct($token,array $schools,$username="小灰灰") {
		$bgi = rand(2,4);
		$this->img = imagecreatefromjpeg("./assets/images/${bgi}.jpg");
		$this->color = imagecolorallocate($this->img,75,53,53);
		$this->token = $token;
		$this->logos = $schools;
		$this->username = $username;
	}
	public function test(array $logos) {
		if(md5(implode('-',$logos)) == $this->token) {
			$logo1 = imagecreatefrompng(getPath("California Institute of Technology"));
			imagecopy($this->img,$logo1,$this->img_locations[0]['x'],$this->img_locations[0]['y'],0,0,100,100);
			imagettftextjustified($this->img,$this->font_size,0,$this->caption[0]['x'],$this->caption[0]['y'],$this->color,$this->font_path,'California Institute of Technology',350,3,2);
			$this->addname("小灰灰");
			imagedestroy($logo1);
			$this->export();
		}
	}
	private function addname() {
		imagettftext($this->img, 20, 0, 20, 35, $this->color, $this->font_path_zhcn, $this->username."的Offer墙");
	}
	public function render_images() {
		foreach($this->logos as $k => $v) {
			$logo1 = imagecreatefrompng(getPath($v));
			imagecopy($this->img,$logo1,$this->img_locations[$k][0],$this->img_locations[$k][1],0,0,100,100);
			imagettftextjustified($this->img,$this->font_size,0,$this->caption[$k][0],$this->caption[$k][1],$this->color,$this->font_path,$v,350,3,2);
			imagedestroy($logo1);
		}
		$this->addname();
		$this->export();
	}
	private function export() {
		header('Content-Type: image/png');
		imagepng($this->img);
		imagedestroy($this->img);
	}
}