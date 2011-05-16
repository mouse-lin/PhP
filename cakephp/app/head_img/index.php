<?php
class AvatarUploader
{
	//  url
	private function getThisUrl()
	{
		$thisUrl = $_SERVER['SCRIPT_NAME'];
		$thisUrl = "http://{$_SERVER['HTTP_HOST']}{$thisUrl}";
		return $thisUrl;
	}

	// base-url
	private function getBaseUrl()
	{
		$baseUrl = $this->getThisUrl();
		$baseUrl = substr( $baseUrl, 0, strrpos( $baseUrl, '/' ) + 1 );
		return $baseUrl;
	}

	// ���ڴ洢�ı����ļ��У�β����һ�� DIRECTORY_SEPARATOR��
	private function getBasePath()
	{
		$basePath = $_SERVER['SCRIPT_FILENAME'];
		$basePath = substr( $basePath, 0, strrpos($basePath, '/' ) + 1 );
		$basePath = str_replace( '/', DIRECTORY_SEPARATOR, $basePath );
		return $basePath;
	}

	// �ϴ�ԭʼͼƬ�ļ�
	private function uploadAvatar( $uid )
	{
		// ����ϴ��ļ�����Ч��
		if ( empty($_FILES['Filedata']) ) {
			return -3; // No photograph be upload!
		}

		// ������ʱ�洢λ��
		$tmpPath = $this->getBasePath() . "data" . DIRECTORY_SEPARATOR . "{$uid}";

		// �����ʱ�洢���ļ��в����ڣ��ȴ�����
		$dir = dirname( $tmpPath );
		if ( !file_exists( $dir ) ) {
			@mkdir( $dir, 0777, true );
		}

		// ���ͬ������ʱ�ļ��Ѿ����ڣ���ɾ����
		if ( file_exists($tmpPath) ) {
			@unlink($tmpPath);
		}

		// ���ϴ���ͼƬ�ļ����浽Ԥ��λ��
		if ( @copy($_FILES['Filedata']['tmp_name'], $tmpPath) || @move_uploaded_file($_FILES['Filedata']['tmp_name'], $tmpPath)) {
			@unlink($_FILES['Filedata']['tmp_name']);
			list($width, $height, $type, $attr) = getimagesize($tmpPath);
			if ( $width < 10 || $height < 10 || $width > 3000 || $height > 3000 || $type == 4 ) {
				@unlink($tmpPath);
				return -2; // Invalid photograph!
			}
		} else {
			@unlink($_FILES['Filedata']['tmp_name']);
			return -4; // Can not write to the data/tmp folder!
		}

		// ���ڷ�����ʱͼƬ�ļ��� url
		$tmpUrl = $this->getBaseUrl() . "data/{$uid}";
		return $tmpUrl;
	}

	private function flashdata_decode($s) {
		$r = '';
		$l = strlen($s);
		for($i=0; $i<$l; $i=$i+2) {
			$k1 = ord($s[$i]) - 48;
			$k1 -= $k1 > 9 ? 7 : 0;
			$k2 = ord($s[$i+1]) - 48;
			$k2 -= $k2 > 9 ? 7 : 0;
			$r .= chr($k1 << 4 | $k2);
		}
		return $r;
	}

	//�ϴ��ָ�������ͼƬ
	private function rectAvatar( $uid )
	{
		// �� $_POST ����ȡ������ͼƬ����
		$bigavatar    = $this->flashdata_decode( $_POST['avatar1'] );
		$middleavatar = $this->flashdata_decode( $_POST['avatar2'] );
		$smallavatar  = $this->flashdata_decode( $_POST['avatar3'] );
		if ( !$bigavatar || !$middleavatar || !$smallavatar ) {
			return '<root><message type="error" value="-2" /></root>';
		}

		// ����ΪͼƬ�ļ�
		$bigavatarfile    = $this->getBasePath() . "data" . DIRECTORY_SEPARATOR . "{$uid}_big.jpg";
		$middleavatarfile = $this->getBasePath() . "data" . DIRECTORY_SEPARATOR . "{$uid}_middle.jpg";
		$smallavatarfile  = $this->getBasePath() . "data" . DIRECTORY_SEPARATOR . "{$uid}_small.jpg";

		$success = 1;
		$fp = @fopen($bigavatarfile, 'wb');
		@fwrite($fp, $bigavatar);
		@fclose($fp);

		$fp = @fopen($middleavatarfile, 'wb');
		@fwrite($fp, $middleavatar);
		@fclose($fp);

		$fp = @fopen($smallavatarfile, 'wb');
		@fwrite($fp, $smallavatar);
		@fclose($fp);

		// ��֤
		$biginfo    = @getimagesize($bigavatarfile);
		$middleinfo = @getimagesize($middleavatarfile);
		$smallinfo  = @getimagesize($smallavatarfile);
		if ( !$biginfo || !$middleinfo || !$smallinfo || $biginfo[2] == 4 || $middleinfo[2] == 4 || $smallinfo[2] == 4 ) {
			file_exists($bigavatarfile) && unlink($bigavatarfile);
			file_exists($middleavatarfile) && unlink($middleavatarfile);
			file_exists($smallavatarfile) && unlink($smallavatarfile);
			$success = 0;
		}

		// ɾ��
		$tmpPath = $this->getBasePath() . "data" . DIRECTORY_SEPARATOR . "{$uid}";
		@unlink($tmpPath);

		return '<?xml version="1.0" ?><root><face success="' . $success . '"/></root>';
	}

	// �ӿͻ��˷���ͷ��ͼƬ�� url
	public function getAvatarUrl( $uid, $size='middle' )
	{
		return $this->getBaseUrl() . "data/{$uid}_{$size}.jpg";
	}


	// ����ֵ������ǿ�ʶ��� request������󷵻� true�����򷵻� false��
	public function processRequest()
	{
		// �� input ����������Զ������
		$arr = array();
		parse_str( $_GET['input'], $arr );
		$uid = intval($arr['uid']);

		if ( $_GET['a'] == 'uploadavatar') {

			// �ϴ�ԭʼͼƬ�ļ�
			echo $this->uploadAvatar( $uid );
			return true;

		} else if ( $_GET['a'] == 'rectavatar') {
		
			// �ϴ��ָ�������ͼƬ������
			echo $this->rectAvatar( $uid );
			return true;
		}

		return false;
	}

	public function renderHtml( $uid )
	{
		// ����Ҫ�ش����Զ����������װ�� input ��
		$input = urlencode( "uid={$uid}" );

		$baseUrl = $this->getBaseUrl();
		$uc_api = urlencode( $this->getThisUrl() );
		$urlCameraFlash = "{$baseUrl}camera.swf?ucapi={$uc_api}&input={$input}";
		$urlCameraFlash = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="447" height="477" id="mycamera" align="middle">
				<param name="allowScriptAccess" value="always" />
				<param name="scale" value="exactfit" />
				<param name="wmode" value="transparent" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="movie" value="'.$urlCameraFlash.'" />
				<param name="menu" value="false" />
				<embed src="'.$urlCameraFlash.'" quality="high" bgcolor="#ffffff" width="447" height="477" name="mycamera" align="middle" allowScriptAccess="always" allowFullScreen="false" scale="exactfit"  wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>';
		return $urlCameraFlash;
	}
}

header("Expires: 0");
header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", FALSE);
header("Pragma: no-cache");
header("Cache-Control:no-cache");

$au = new AvatarUploader();
if ( $au->processRequest() ) {
	exit();
}

// ��ʾ�༭ҳ�棬ҳ���а��� camera.swf
$uid = intval($_GET['uid']);
$urlAvatarBig    = $au->getAvatarUrl( $uid, 'big' );
$urlAvatarMiddle = $au->getAvatarUrl( $uid, 'middle' );
$urlAvatarSmall  = $au->getAvatarUrl( $uid, 'small' );
$urlCameraFlash = $au->renderHtml( $uid );
?>
<script type="text/javascript">
function updateavatar() {
	window.location.reload();
}
</script>

<img src="<?= $urlAvatarBig ?>">
<img src="<?= $urlAvatarMiddle ?>">
<img src="<?= $urlAvatarSmall ?>">

<?= $urlCameraFlash ?>