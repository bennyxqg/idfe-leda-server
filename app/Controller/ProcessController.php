<?php
APP::uses('FrontController', 'Controller');
APP::uses('OnlineController', 'Controller');
App::uses('Sanitize', 'Utility');
class ProcessController extends OnlineController
{
	var $name = 'Process';
	
	//public $components = array('Session');
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    //var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    //public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint');

	/**
	 * 苍穹变公会抽奖接口
	 */
	public function cqb_sociaty_activity()
	{
		$this->layout="";
		$this->autoRender=false;
		$prefix='cqbgh_';
		$key_prize_id_zset=$prefix.'preze_id_zset';
		$action=$this->request->data["action"];
		if(empty($action))
		{
			$this->request->data=$_GET;
			$action=$this->request->data["action"];
		}
		switch($action)
		{
			case 'start_lotto':
				
				$serial=strtoupper($this->request->data["serial"]);
				$score=intval($this->Redis->zscore($key_prize_id_zset,$serial));
				if($score == 0)
				{
					echo json_encode(array('ret'=>1,'desc'=>'invalid serial'));
					return;
				}
				
				if($score > 1000)
				{
					echo json_encode(array('ret'=>2,'desc'=>'cdkey has already used'));
					return;
				}
				
				$this->Redis->zadd($key_prize_id_zset,$serial,$score+1000);
				
				echo json_encode(array('ret'=>0,'desc'=>'success','prize'=>array('id'=>$score)));
				return;
				break;
			case 'extra_create':
				$password=$this->request->data["password"];
				if(strcmp('AObUXCXjRAu2YhiFXs8CtWChGrAeJd',$password) != 0)
					return;
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX0',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX1',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX2',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX3',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX4',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX5',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX6',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX7',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX8',7);
				$this->Redis->zadd($key_prize_id_zset,'XXXXXXX9',7);
				break;
			
			case 'create_prize':
				$password=$this->request->data["password"];
				if(strcmp('AObUXCXjRAu2YhiFXs8CtWChGrAeJd',$password) != 0)
					return;
				
				$this->Redis->zadd($key_prize_id_zset,'5077A9FB',1);
				$this->Redis->zadd($key_prize_id_zset,'FCD47D9E',1);
				$this->Redis->zadd($key_prize_id_zset,'F40AF442',1);
				$this->Redis->zadd($key_prize_id_zset,'5799F411',1);
				$this->Redis->zadd($key_prize_id_zset,'EC55B151',1);
				$this->Redis->zadd($key_prize_id_zset,'53083272',1);
				$this->Redis->zadd($key_prize_id_zset,'011DB842',1);
				$this->Redis->zadd($key_prize_id_zset,'CDAB724B',1);
				$this->Redis->zadd($key_prize_id_zset,'A6A97DB8',2);
				$this->Redis->zadd($key_prize_id_zset,'9F240475',2);
				$this->Redis->zadd($key_prize_id_zset,'57BB431D',2);
				$this->Redis->zadd($key_prize_id_zset,'A39809D8',3);
				$this->Redis->zadd($key_prize_id_zset,'2F6E78DA',3);
				$this->Redis->zadd($key_prize_id_zset,'3DBA25C4',3);
				$this->Redis->zadd($key_prize_id_zset,'6623B69E',3);
				$this->Redis->zadd($key_prize_id_zset,'DA4C4840',3);
				$this->Redis->zadd($key_prize_id_zset,'C703DFEE',3);
				$this->Redis->zadd($key_prize_id_zset,'F75AA088',3);
				$this->Redis->zadd($key_prize_id_zset,'6F0F66F5',3);
				$this->Redis->zadd($key_prize_id_zset,'6FE5EECD',3);
				$this->Redis->zadd($key_prize_id_zset,'802E9F53',3);
				$this->Redis->zadd($key_prize_id_zset,'B89A6072',4);
				$this->Redis->zadd($key_prize_id_zset,'862DB075',4);
				$this->Redis->zadd($key_prize_id_zset,'E42AF8B5',4);
				$this->Redis->zadd($key_prize_id_zset,'57B4055C',4);
				$this->Redis->zadd($key_prize_id_zset,'986B0F09',4);
				$this->Redis->zadd($key_prize_id_zset,'446E48BF',4);
				$this->Redis->zadd($key_prize_id_zset,'CE68ABF7',4);
				$this->Redis->zadd($key_prize_id_zset,'3C2B9A98',4);
				$this->Redis->zadd($key_prize_id_zset,'B97D8D4B',4);
				$this->Redis->zadd($key_prize_id_zset,'15890597',4);
				$this->Redis->zadd($key_prize_id_zset,'D6DFC00D',5);
				$this->Redis->zadd($key_prize_id_zset,'F85FA2B9',5);
				$this->Redis->zadd($key_prize_id_zset,'B9910F67',5);
				$this->Redis->zadd($key_prize_id_zset,'E0A1EDA3',5);
				$this->Redis->zadd($key_prize_id_zset,'3B174F85',5);
				$this->Redis->zadd($key_prize_id_zset,'CBF2F4B0',5);
				$this->Redis->zadd($key_prize_id_zset,'40D7E218',5);
				$this->Redis->zadd($key_prize_id_zset,'18D3DB60',5);
				$this->Redis->zadd($key_prize_id_zset,'D69EC7FE',5);
				$this->Redis->zadd($key_prize_id_zset,'A5DA53D8',5);
				$this->Redis->zadd($key_prize_id_zset,'78BE9031',5);
				$this->Redis->zadd($key_prize_id_zset,'6C9E0ED0',5);
				$this->Redis->zadd($key_prize_id_zset,'3FCB39F1',5);
				$this->Redis->zadd($key_prize_id_zset,'BAE5E274',5);
				$this->Redis->zadd($key_prize_id_zset,'1F65B07B',5);
				$this->Redis->zadd($key_prize_id_zset,'09947502',5);
				$this->Redis->zadd($key_prize_id_zset,'75EE4FF0',5);
				$this->Redis->zadd($key_prize_id_zset,'1B8BC4BF',5);
				$this->Redis->zadd($key_prize_id_zset,'C0068BE8',5);
				$this->Redis->zadd($key_prize_id_zset,'5A657A85',5);
				$this->Redis->zadd($key_prize_id_zset,'EBA9C70F',5);
				$this->Redis->zadd($key_prize_id_zset,'44776606',5);
				$this->Redis->zadd($key_prize_id_zset,'4F4260B6',5);
				$this->Redis->zadd($key_prize_id_zset,'D1E5F838',5);
				$this->Redis->zadd($key_prize_id_zset,'CE205261',5);
				$this->Redis->zadd($key_prize_id_zset,'476707E2',5);
				$this->Redis->zadd($key_prize_id_zset,'94BD7ADE',5);
				$this->Redis->zadd($key_prize_id_zset,'1B4FC7AA',5);
				$this->Redis->zadd($key_prize_id_zset,'BE150C3B',5);
				$this->Redis->zadd($key_prize_id_zset,'35859ECA',5);
				$this->Redis->zadd($key_prize_id_zset,'F8328B17',5);
				$this->Redis->zadd($key_prize_id_zset,'F2435D65',5);
				$this->Redis->zadd($key_prize_id_zset,'CECAD2FA',5);
				$this->Redis->zadd($key_prize_id_zset,'D63684B2',5);
				$this->Redis->zadd($key_prize_id_zset,'07838DD3',5);
				$this->Redis->zadd($key_prize_id_zset,'B816D60F',5);
				$this->Redis->zadd($key_prize_id_zset,'541CE0BA',5);
				$this->Redis->zadd($key_prize_id_zset,'55B65ED0',5);
				$this->Redis->zadd($key_prize_id_zset,'9C6845D3',5);
				$this->Redis->zadd($key_prize_id_zset,'B3743D51',5);
				$this->Redis->zadd($key_prize_id_zset,'B9DF2480',5);
				$this->Redis->zadd($key_prize_id_zset,'F586A597',5);
				$this->Redis->zadd($key_prize_id_zset,'A66499C3',5);
				$this->Redis->zadd($key_prize_id_zset,'F1B99EC8',5);
				$this->Redis->zadd($key_prize_id_zset,'D3F91515',5);
				$this->Redis->zadd($key_prize_id_zset,'BFB1CED7',5);
				$this->Redis->zadd($key_prize_id_zset,'D1C3104A',5);
				$this->Redis->zadd($key_prize_id_zset,'146B5AC9',5);
				$this->Redis->zadd($key_prize_id_zset,'CAFFB499',5);
				$this->Redis->zadd($key_prize_id_zset,'3D0398E4',5);
				$this->Redis->zadd($key_prize_id_zset,'2511F284',5);
				$this->Redis->zadd($key_prize_id_zset,'911B0856',5);
				$this->Redis->zadd($key_prize_id_zset,'DB224C6A',5);
				$this->Redis->zadd($key_prize_id_zset,'ACDB72BE',5);
				$this->Redis->zadd($key_prize_id_zset,'B5F8FED8',5);
				$this->Redis->zadd($key_prize_id_zset,'3FAD1C13',5);
				$this->Redis->zadd($key_prize_id_zset,'DC731365',5);
				$this->Redis->zadd($key_prize_id_zset,'FF6BDF3A',5);
				$this->Redis->zadd($key_prize_id_zset,'6A4EB90B',5);
				$this->Redis->zadd($key_prize_id_zset,'D66F3B11',5);
				$this->Redis->zadd($key_prize_id_zset,'64B02B8E',5);
				$this->Redis->zadd($key_prize_id_zset,'A16B48FE',5);
				$this->Redis->zadd($key_prize_id_zset,'2ECF6DF2',5);
				$this->Redis->zadd($key_prize_id_zset,'77DF99A5',5);
				$this->Redis->zadd($key_prize_id_zset,'0DDA2E8A',5);
				$this->Redis->zadd($key_prize_id_zset,'BF6DE649',5);
				$this->Redis->zadd($key_prize_id_zset,'F098819C',5);
				$this->Redis->zadd($key_prize_id_zset,'1D4A420C',5);
				$this->Redis->zadd($key_prize_id_zset,'D3933C18',5);
				$this->Redis->zadd($key_prize_id_zset,'F479FDED',5);
				$this->Redis->zadd($key_prize_id_zset,'DB1EC886',6);
				$this->Redis->zadd($key_prize_id_zset,'D374FC63',6);
				$this->Redis->zadd($key_prize_id_zset,'CE03F44F',6);
				$this->Redis->zadd($key_prize_id_zset,'D271A52B',6);
				$this->Redis->zadd($key_prize_id_zset,'A057E5C3',6);
				$this->Redis->zadd($key_prize_id_zset,'ED50B439',6);
				$this->Redis->zadd($key_prize_id_zset,'88217CA0',6);
				$this->Redis->zadd($key_prize_id_zset,'D2398B20',6);
				$this->Redis->zadd($key_prize_id_zset,'38905CC6',6);
				$this->Redis->zadd($key_prize_id_zset,'22585933',6);
				$this->Redis->zadd($key_prize_id_zset,'A950F938',6);
				$this->Redis->zadd($key_prize_id_zset,'698D5306',6);
				$this->Redis->zadd($key_prize_id_zset,'EA3FCAB0',6);
				$this->Redis->zadd($key_prize_id_zset,'5A3EBDAA',6);
				$this->Redis->zadd($key_prize_id_zset,'F4E10E86',6);
				$this->Redis->zadd($key_prize_id_zset,'7E968E1A',6);
				$this->Redis->zadd($key_prize_id_zset,'6FEC6BA8',6);
				$this->Redis->zadd($key_prize_id_zset,'3465120F',6);
				$this->Redis->zadd($key_prize_id_zset,'676D10E7',6);
				$this->Redis->zadd($key_prize_id_zset,'181E91BE',6);
				$this->Redis->zadd($key_prize_id_zset,'E8703069',6);
				$this->Redis->zadd($key_prize_id_zset,'33367547',6);
				$this->Redis->zadd($key_prize_id_zset,'EDDBCD61',6);
				$this->Redis->zadd($key_prize_id_zset,'14E182F3',6);
				$this->Redis->zadd($key_prize_id_zset,'5DDEB4AC',6);
				$this->Redis->zadd($key_prize_id_zset,'6310DEB2',6);
				$this->Redis->zadd($key_prize_id_zset,'A82BA27F',6);
				$this->Redis->zadd($key_prize_id_zset,'CE54AC08',6);
				$this->Redis->zadd($key_prize_id_zset,'C9E29278',6);
				$this->Redis->zadd($key_prize_id_zset,'B3E85E22',6);
				$this->Redis->zadd($key_prize_id_zset,'75065615',6);
				$this->Redis->zadd($key_prize_id_zset,'2A1EFF9F',6);
				$this->Redis->zadd($key_prize_id_zset,'3DADB7A7',6);
				$this->Redis->zadd($key_prize_id_zset,'11D84ACD',6);
				$this->Redis->zadd($key_prize_id_zset,'88D8256E',6);
				$this->Redis->zadd($key_prize_id_zset,'F9EF6088',6);
				$this->Redis->zadd($key_prize_id_zset,'9D8D75D7',6);
				$this->Redis->zadd($key_prize_id_zset,'06D9F8C4',6);
				$this->Redis->zadd($key_prize_id_zset,'601659C6',6);
				$this->Redis->zadd($key_prize_id_zset,'73BE886B',6);
				$this->Redis->zadd($key_prize_id_zset,'F9B1969C',6);
				$this->Redis->zadd($key_prize_id_zset,'CC850CBF',6);
				$this->Redis->zadd($key_prize_id_zset,'1B4C56F8',6);
				$this->Redis->zadd($key_prize_id_zset,'F8B1FDB5',6);
				$this->Redis->zadd($key_prize_id_zset,'F3703B81',6);
				$this->Redis->zadd($key_prize_id_zset,'59E4217C',6);
				$this->Redis->zadd($key_prize_id_zset,'293AACF7',6);
				$this->Redis->zadd($key_prize_id_zset,'828AD059',6);
				$this->Redis->zadd($key_prize_id_zset,'4E57FC1F',6);
				$this->Redis->zadd($key_prize_id_zset,'04DA57DA',6);
				$this->Redis->zadd($key_prize_id_zset,'710B0941',6);
				$this->Redis->zadd($key_prize_id_zset,'974AE486',6);
				$this->Redis->zadd($key_prize_id_zset,'E8066EB5',6);
				$this->Redis->zadd($key_prize_id_zset,'EEE44BF7',6);
				$this->Redis->zadd($key_prize_id_zset,'0154E3B7',6);
				$this->Redis->zadd($key_prize_id_zset,'D91770AE',6);
				$this->Redis->zadd($key_prize_id_zset,'FC6C39F9',6);
				$this->Redis->zadd($key_prize_id_zset,'BA57D8B1',6);
				$this->Redis->zadd($key_prize_id_zset,'917FB137',6);
				$this->Redis->zadd($key_prize_id_zset,'E57F9CDC',6);
				$this->Redis->zadd($key_prize_id_zset,'0B1A1DE0',6);
				$this->Redis->zadd($key_prize_id_zset,'B5DB390D',6);
				$this->Redis->zadd($key_prize_id_zset,'05C6599E',6);
				$this->Redis->zadd($key_prize_id_zset,'489088C5',6);
				$this->Redis->zadd($key_prize_id_zset,'1B7D6825',6);
				$this->Redis->zadd($key_prize_id_zset,'B93896F2',6);
				$this->Redis->zadd($key_prize_id_zset,'41C7BD52',6);
				$this->Redis->zadd($key_prize_id_zset,'C4E111C9',6);
				$this->Redis->zadd($key_prize_id_zset,'EC47891B',6);
				$this->Redis->zadd($key_prize_id_zset,'4CDCE5CF',6);
				$this->Redis->zadd($key_prize_id_zset,'8C987EA4',7);
				$this->Redis->zadd($key_prize_id_zset,'D7404FCF',7);
				$this->Redis->zadd($key_prize_id_zset,'437F30B3',7);
				$this->Redis->zadd($key_prize_id_zset,'9FFD493C',7);
				$this->Redis->zadd($key_prize_id_zset,'C2E3B1CA',7);
				$this->Redis->zadd($key_prize_id_zset,'38415249',7);
				$this->Redis->zadd($key_prize_id_zset,'0BB00A18',7);
				$this->Redis->zadd($key_prize_id_zset,'693C454F',7);
				$this->Redis->zadd($key_prize_id_zset,'E2A92781',7);
				$this->Redis->zadd($key_prize_id_zset,'2594745E',7);
				$this->Redis->zadd($key_prize_id_zset,'7B96B4A0',7);
				$this->Redis->zadd($key_prize_id_zset,'C7A0AFD2',7);
				$this->Redis->zadd($key_prize_id_zset,'976E9304',7);
				$this->Redis->zadd($key_prize_id_zset,'0F3C509C',7);
				$this->Redis->zadd($key_prize_id_zset,'E937ED45',7);
				$this->Redis->zadd($key_prize_id_zset,'208495E4',7);
				$this->Redis->zadd($key_prize_id_zset,'8A60F843',7);
				$this->Redis->zadd($key_prize_id_zset,'6B1B1446',7);
				$this->Redis->zadd($key_prize_id_zset,'0B295420',7);
				$this->Redis->zadd($key_prize_id_zset,'B06305BD',7);
				$this->Redis->zadd($key_prize_id_zset,'B90205FB',7);
				$this->Redis->zadd($key_prize_id_zset,'F72202C7',7);
				$this->Redis->zadd($key_prize_id_zset,'6CBB84D9',7);
				$this->Redis->zadd($key_prize_id_zset,'EA796D9E',7);
				$this->Redis->zadd($key_prize_id_zset,'B4457889',7);
				$this->Redis->zadd($key_prize_id_zset,'B6673DFF',7);
				$this->Redis->zadd($key_prize_id_zset,'E241CBAB',7);
				$this->Redis->zadd($key_prize_id_zset,'747B85EA',7);
				$this->Redis->zadd($key_prize_id_zset,'674FA7E8',7);
				$this->Redis->zadd($key_prize_id_zset,'240EF0CE',7);
				$this->Redis->zadd($key_prize_id_zset,'4B2C8DE0',7);
				$this->Redis->zadd($key_prize_id_zset,'34AAC171',7);
				$this->Redis->zadd($key_prize_id_zset,'D84D844E',7);
				$this->Redis->zadd($key_prize_id_zset,'639FB35B',7);
				$this->Redis->zadd($key_prize_id_zset,'DB88FDF6',7);
				$this->Redis->zadd($key_prize_id_zset,'9BE30EAF',7);
				$this->Redis->zadd($key_prize_id_zset,'641F6D0A',7);
				$this->Redis->zadd($key_prize_id_zset,'F05A84C5',7);
				$this->Redis->zadd($key_prize_id_zset,'46E7CC4D',7);
				$this->Redis->zadd($key_prize_id_zset,'17FC6254',7);
				$this->Redis->zadd($key_prize_id_zset,'AD0163EF',7);
				$this->Redis->zadd($key_prize_id_zset,'D22536F6',7);
				$this->Redis->zadd($key_prize_id_zset,'07FF267A',7);
				$this->Redis->zadd($key_prize_id_zset,'A222F741',7);
				$this->Redis->zadd($key_prize_id_zset,'776071A7',7);
				$this->Redis->zadd($key_prize_id_zset,'5B876220',7);
				$this->Redis->zadd($key_prize_id_zset,'01F2989F',7);
				$this->Redis->zadd($key_prize_id_zset,'E063FD30',7);
				$this->Redis->zadd($key_prize_id_zset,'82FEBF90',7);
				$this->Redis->zadd($key_prize_id_zset,'E77C78E2',7);
				$this->Redis->zadd($key_prize_id_zset,'32482627',7);
				$this->Redis->zadd($key_prize_id_zset,'4F3BFEB0',7);
				$this->Redis->zadd($key_prize_id_zset,'0BA59893',7);
				$this->Redis->zadd($key_prize_id_zset,'76566871',7);
				$this->Redis->zadd($key_prize_id_zset,'F62E6F17',7);
				$this->Redis->zadd($key_prize_id_zset,'392EA44D',7);
				$this->Redis->zadd($key_prize_id_zset,'B7A11852',7);
				$this->Redis->zadd($key_prize_id_zset,'CED0B0C9',7);
				$this->Redis->zadd($key_prize_id_zset,'B923D886',7);
				$this->Redis->zadd($key_prize_id_zset,'62D4B02A',7);
				$this->Redis->zadd($key_prize_id_zset,'FAAD47ED',8);
				$this->Redis->zadd($key_prize_id_zset,'FAA30BCB',8);
				$this->Redis->zadd($key_prize_id_zset,'A62562F6',8);
				$this->Redis->zadd($key_prize_id_zset,'810EB6F0',8);
				$this->Redis->zadd($key_prize_id_zset,'DFB30F47',8);
				$this->Redis->zadd($key_prize_id_zset,'821EB658',8);
				$this->Redis->zadd($key_prize_id_zset,'94365FCD',8);
				$this->Redis->zadd($key_prize_id_zset,'113CC80D',8);
				$this->Redis->zadd($key_prize_id_zset,'2F29DB6F',8);
				$this->Redis->zadd($key_prize_id_zset,'65DB4240',8);
				$this->Redis->zadd($key_prize_id_zset,'0B56BF47',8);
				$this->Redis->zadd($key_prize_id_zset,'4EE4AE4A',8);
				$this->Redis->zadd($key_prize_id_zset,'5D4731B8',8);
				$this->Redis->zadd($key_prize_id_zset,'6F68E0AC',8);
				$this->Redis->zadd($key_prize_id_zset,'DE1F5BD9',8);
				$this->Redis->zadd($key_prize_id_zset,'17547C0E',8);
				$this->Redis->zadd($key_prize_id_zset,'9C78D3E1',8);
				$this->Redis->zadd($key_prize_id_zset,'7A9B9B26',8);
				$this->Redis->zadd($key_prize_id_zset,'A58A75B2',8);
				$this->Redis->zadd($key_prize_id_zset,'C7DAA343',8);
				$this->Redis->zadd($key_prize_id_zset,'CDA45960',8);
				$this->Redis->zadd($key_prize_id_zset,'C9510D5D',8);
				$this->Redis->zadd($key_prize_id_zset,'CCB2ED28',8);
				$this->Redis->zadd($key_prize_id_zset,'48845D91',8);
				$this->Redis->zadd($key_prize_id_zset,'0CDC67DF',8);
				$this->Redis->zadd($key_prize_id_zset,'9B3D5EA5',8);
				$this->Redis->zadd($key_prize_id_zset,'927F5020',8);
				$this->Redis->zadd($key_prize_id_zset,'21FEC047',8);
				$this->Redis->zadd($key_prize_id_zset,'7200253C',8);
				$this->Redis->zadd($key_prize_id_zset,'855AFCA0',8);
				$this->Redis->zadd($key_prize_id_zset,'BE7BCCA1',9);
				$this->Redis->zadd($key_prize_id_zset,'6D377A85',9);
				$this->Redis->zadd($key_prize_id_zset,'F187FA30',9);
				$this->Redis->zadd($key_prize_id_zset,'0A679CAE',9);
				$this->Redis->zadd($key_prize_id_zset,'89CA8F07',9);
				$this->Redis->zadd($key_prize_id_zset,'B43A4425',9);
				$this->Redis->zadd($key_prize_id_zset,'0BA9E40B',9);
				$this->Redis->zadd($key_prize_id_zset,'4E6BB645',9);
				$this->Redis->zadd($key_prize_id_zset,'14E063E2',9);
				$this->Redis->zadd($key_prize_id_zset,'896179C4',9);
				$this->Redis->zadd($key_prize_id_zset,'58A19673',9);
				$this->Redis->zadd($key_prize_id_zset,'4BB3A21A',9);
				$this->Redis->zadd($key_prize_id_zset,'01F7089B',9);
				$this->Redis->zadd($key_prize_id_zset,'9582D913',9);
				$this->Redis->zadd($key_prize_id_zset,'AF5C4024',9);
				$this->Redis->zadd($key_prize_id_zset,'B5B043A1',9);
				$this->Redis->zadd($key_prize_id_zset,'6F16A76B',9);
				$this->Redis->zadd($key_prize_id_zset,'152B0ED2',9);
				$this->Redis->zadd($key_prize_id_zset,'D8E8162C',9);
				$this->Redis->zadd($key_prize_id_zset,'353427FB',9);
				$this->Redis->zadd($key_prize_id_zset,'BFAD75E7',10);
				$this->Redis->zadd($key_prize_id_zset,'488C3D4F',10);
				$this->Redis->zadd($key_prize_id_zset,'25677CB2',10);
				$this->Redis->zadd($key_prize_id_zset,'4E1466D9',10);
				$this->Redis->zadd($key_prize_id_zset,'3B6B4932',10);
				
				break;
			case 'print_prize':
				$password=$this->request->data["password"];
				if(strcmp('AObUXCXjRAu2YhiFXs8CtWChGrAeJd',$password) != 0)
					return;
				/*
				1	线下狂欢VIP大礼包
				2	苍穹变定制手柄
				3	歪歪小孽真人抱枕
				4	限量版纯银纳戒
				5	家族礼包
				6	家族礼包
				7	家族礼包
				8	小说限量先行本礼包
				9	苍穹变限量金卡
				10	天蚕土豆签名小说
				*/
				$prizeinfo=array(
					1=>'线下狂欢VIP大礼包',
					2=>	'苍穹变定制手柄',
					3=>	'歪歪小孽真人抱枕',
					4=>	'限量版纯银纳戒',
					5=>	'家族礼包',
					6=>	'家族礼包',
					7=>	'家族礼包',
					8=>	'小说限量先行本礼包',
					9=>	'苍穹变限量金卡',
					10=> '天蚕土豆签名小说',
				);
				echo <<<_HTML
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
_HTML;
				
				$allprize=$this->Redis->zrange($key_prize_id_zset,0,-1,true);

				foreach($allprize as $cdkey => $score)
				{
					
					if($score > 1000)
					{
						echo '<div style="color:#660000;">'.$cdkey.' : ';
						echo $prizeinfo[$score-1000].',已经使用</div>';
					}
					else 
					{
						echo '<div style="color:#000000;">'.$cdkey.' : ';
						echo $prizeinfo[$score].',未使用</div>';
					}
				}
				echo <<<_HTML
</body>
</html>
_HTML;
				break;
		}
	}
	
	
	/**
	 * 乱斗之王搜集QQ
	 */
	public function ld_collect_qq()
	{
		$zone_info=mysql_escape_string(trim($this->request->data["zone_info"]));
		$verify_code=strtoupper(mysql_escape_string(trim($this->request->data["verify_code"])));
		$qq_num=trim($this->request->data["qq_num"]);
		
		
		//$zone_info=$_GET['zone_info'];
		//$verify_code=$_GET['verify_code'];
		//$qq_num=$_GET['qq_num'];
		
		
		$pattern='/[0123456789]+/';
		$ret=preg_match($pattern,$qq_num);
		if($ret == 0)
		{
			echo json_encode(array('ret'=>1,'desc'=>'qq num error'));
			exit();
		}
		$ret=$this->CodeDetail->query("select qq_num from ld_collect_qq where zone_info='".$zone_info."' and verify_code='".$verify_code."'");
		
		if(!$ret)
		{
			echo json_encode(array('ret'=>1,'desc'=>'verify code error'));
			exit();
		}
		$qq=trim($ret[0]['ld_collect_qq']['qq_num']);
		if(strlen($qq) > 0)
		{
			echo json_encode(array('ret'=>2,'desc'=>'already register'));
			exit();
		}
		
		$this->CodeDetail->query("update ld_collect_qq set qq_num='".$qq_num."',update_time=NULL where zone_info='".$zone_info."' and verify_code='".$verify_code."'");
		
		echo json_encode(array('ret'=>0,'desc'=>'success'));
		exit();
	}
	
	/**
	 * 搜集苍穹变满月专题抽奖信息
	 * 
	 */
	public function collect_cqb_plenilune_info()
	{
		//echo "collect_cqb_plenilune_info";
		$this->layout="";
		$this->autoRender=false;
		$prefix='cqb_';
		$key_prize_id_list=$prefix.'prize_id_list';
		$key_prize_phone_set=$prefix.'prize_phone_set';
		$key_prize_info_list=$prefix.'prize_info_list';
		
		//$this->request->data=$_GET;
		$action=$this->request->data["action"];
		if(empty($action))
		{
			$this->request->data=$_GET;
			$action=$this->request->data["action"];
		}
		switch($action)
		{
			case 'create_prize_list':
				$password=$this->request->data["password"];
				if(strcmp('AObUXCXjRAu2YhiFXs8CtWChGrAeJd',$password) != 0)
					return;
				
				$this->Redis->delete($key_prize_id_list);
				$this->Redis->delete($key_prize_phone_set);
				$this->Redis->delete($key_prize_info_list);
				
				$prizes=array(
					1=>1,//一等奖
					2=>1,//二等奖
					3=>30,//三等奖
					4=>100,//四等奖
					5=>100,//五等奖
						
					6=>500,//六等奖
					7=>500,
						
					8=>500,//七等奖
					9=>500,
					10=>500,
						
					11=>500,//8等奖
					12=>500,
					13=>500,
					14=>500,
						
					15=>625,//9等
					16=>625,
					17=>625,
					18=>625,
					19=>625,
					20=>625,
					21=>625,
					22=>625,
						
					23=>1250,//10等
					24=>1250,
					25=>1250,
					26=>1250,
					27=>1250,
					28=>1250,
					29=>1250,
					30=>1250,
						//no prize

						31=>1250,//11等
						32=>1250,
						33=>1250,
						34=>1250,
						35=>1250,
						36=>1250,
						37=>1250,
						38=>1250,
						
						39=>1250,//12等
						40=>1250,
						41=>1250,
						42=>1250,
						43=>1250,
						44=>1250,
						45=>1250,
						46=>1250,
						
						47=>1250,//13等
						48=>1250,
						49=>1250,
						50=>1250,
						51=>1250,
						52=>1250,
						53=>1250,
						54=>1250,
					

				);
				$prizemap=array(
					1=>1,
					2=>2,
					3=>3,
					4=>4,
					5=>5,
					6=>6,7=>6,
					8=>7,9=>7,10=>7,
					11=>8,12=>8,13=>8,14=>8,
					15=>9,16=>9,17=>9,18=>9,19=>9,20=>9,21=>9,22=>9,
					23=>10,24=>10,25=>10,26=>10,27=>10,28=>10,29=>10,30=>10,
						31=>11,32=>11,33=>11,34=>11,35=>11,36=>11,37=>11,38=>11,
						39=>12,40=>12,41=>12,42=>12,43=>12,44=>12,45=>12,46=>12,
						47=>13,48=>13,49=>13,50=>13,51=>13,52=>13,53=>13,54=>13,
				);
				
				$prizeids=array();
				for($i=1;$i<=54;$i++)
					array_push($prizeids,$i);
				
				$total=0;
				foreach($prizes as $key => $val)
				{
					$total+=$val;
				}
				
				echo "Total prize count=".$total."<br/>";
				
				for($i=0;$i<$total;$i++)
				{
					if($i < 30000)
					{
						$index=rand(3,count($prizeids)-1);
					}
					else
					{
						$index=rand(0,count($prizeids)-1);
					}
					
					$getprizeid=$prizeids[$index];

					$realprizeid=$prizemap[$getprizeid];
					
					$this->Redis->rpush($key_prize_id_list,$realprizeid);
					echo "push |$realprizeid|<br/>";
					$prizes[$getprizeid]--;
					if($prizes[$getprizeid] <= 0)
					{
						echo "delete ".$prizeids[$index]."<br/>";
						unset($prizeids[$index]);
						$prizeids=array_values($prizeids);
						print_r($prizeids);
					}
				}
				
				break;
			case 'print_prize_list':
				$password=$this->request->data["password"];
				if(strcmp('AObUXCXjRAu2YhiFXs8CtWChGrAeJd',$password) != 0)
					return;
				
				
				$prizes=array();
				$prizerate=0;
				$tmparr=array();
				$listsize=$this->Redis->lsize($key_prize_id_list);
				for($i=0;$i<$listsize;$i++)
				//while(intval($this->Redis->lsize($key_prize_id_list)) > 0)
				{
					$prizeid=$this->Redis->getInstance()->lGet($key_prize_id_list,$i);
					//echo $prizeid."&nbsp;";
					if($prizeid < 11)
					{
						array_push($tmparr,$prizerate);
						$prizerate=0;
					}
					else
					{
						$prizerate++;
					}
					
					$prizes[$prizeid]++;
				} 
				echo "<pre>";
				print_r($prizes);
				print_r($tmparr);
				echo "</pre>";
				break;
			case 'start_lotto':
				
				$phone=$this->request->data["phone"];
				
				//验证手机号
				if(!preg_match("/1[34578]{1}\d{9}$/",$phone)){
					echo json_encode(array('ret'=>1,'desc'=>'invalid phone'));
					return;
				}
				
				
				$device_info=base64_decode($this->request->data["device_info"]);
				$server_info=base64_decode($this->request->data["server_info"]);
				$role_name=base64_decode($this->request->data["role_name"]);
				$bless_info=base64_decode($this->request->data["bless_info"]);
				
				if(empty($phone))
				{
					echo json_encode(array('ret'=>1,'desc'=>'empty phone'));
					return;
				}
				
				if($this->Redis->scontains($key_prize_phone_set,$phone))
				{
					echo json_encode(array('ret'=>1,'desc'=>'you have joined this activity'));
					return;
				}
				
				$prizeid=intval($this->Redis->lpop($key_prize_id_list));
				
				if($prizeid <= 0)
				{
					echo json_encode(array('ret'=>1,'desc'=>'the prizes are sent'));
					return;
				}
				
				// 屏蔽大奖
				if($prizeid == 1 || $prizeid == 2)
					$prizeid=12;
				
				if(strlen(trim($bless_info)) > 0)
					$this->Redis->lpush($key_prize_info_list,$role_name.'#####'.trim($bless_info));
				$this->Redis->sadd($key_prize_phone_set,$phone);
				
				$phone=Sanitize::escape($phone);
				$server_info=Sanitize::escape($server_info);
				$role_name=Sanitize::escape($role_name);
				$bless_info=Sanitize::escape($bless_info);
				$site_id = $this->site_id;

				$this->CodeCheck->query("insert into collect_cqb_plenilune_info values(NULL,'$phone',".$this->site_id.",'$device_info','$server_info','$role_name','$prizeid','','','','','$bless_info',NULL)");
				//echo json_encode(array("desc"=>"insert into collect_cqb_plenilune_info values(NULL,'$phone',".$this->site_id.",'$device_info','$server_info','$role_name','$prizeid','','','','','$bless_info',NULL)"));
				echo json_encode(array('ret'=>0,'desc'=>'success','prize'=>array('id'=>$prizeid)));
				return;
				break;
			case 'get_info':
				$list_size=$this->Redis->lsize($key_prize_info_list);
				$this->Redis->getInstance()->lTrim($key_prize_info_list,0,500);
				
				$count=intval($this->request->data["count"]);
				if($count <= 0)
					$count=10;
				
				if($count > $list_size)
					$count=$list_size;
				$response=array('ret'=>0);
				$response['record']=array();
				for($i=0;$i<$count;$i++)
				{
					$raw=$this->Redis->getInstance()->lGet($key_prize_info_list,$i);
					$parts=explode('#####',$raw);
					if(strlen(trim($parts[1])) > 0)
						array_push($response['record'],array('role_name'=>base64_encode($parts[0]),'bless_info'=>base64_encode($parts[1])));
					else
						$this->Redis->getInstance()->lRem($key_prize_info_list,$raw,1);
				}
				echo json_encode($response);
				return;
				
				break;
			case 'collect_info':
				$phone=$this->request->data["phone"];
				$device_info=base64_decode($this->request->data["device_info"]);
				$server_info=base64_decode($this->request->data["server_info"]);
				$role_name=base64_decode($this->request->data["role_name"]);

				$phone=Sanitize::escape($phone);
				$server_info=Sanitize::escape($server_info);
				$role_name=Sanitize::escape($role_name);

				$this->CodeCheck->query("insert into collect_cqb_plenilune_info_ext values(NULL,'$phone',".$this->site_id.",'$device_info','$server_info','$role_name',NULL)");
				echo json_encode(array('ret'=>0,'desc'=>'成功'));
				break;
				
				
		}
	}
	
    /**
     * 发送短信内容
     */
    public function send_code_by_sm()
    {
    	$this->layout="";
    	$this->autoRender=false;
    	try{
    		$site_id = $this->site_id;
    		$code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
    		$phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
    		
    		if(empty($phone)){
    			$this->json_format(array("ret"=>2));
    		}
    		$tel_result=preg_match("/1[3,4,5,8]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
    		if($tel_result == 0){
    			$this->json_format(array("ret"=>3));
    		}
    		
    		$verify=trim($this->request->data["verify"]);
    		if(strlen($verify) <= 0)
    		{
    			$this->json_format(array("ret"=>10));
    		}
    		
    		if(strcasecmp('img',$this->request->data['mode']) == 0)
    		{
    			$v=$this->Session->read('captcha');
    			
    			if(strcasecmp($v, $verify) != 0)
    				$this->json_format(array("ret"=>10));
    		}
    		else if(strcasecmp('sm',$this->request->data['mode']) == 0)
    		{
    			$code=$verify;
    			
    			
    			$conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"code"=>$code,"status"=>0));
    			$result=$this->CodeCheck->find("first",$conditions);
    			if(empty($result)){
    				$this->json_format(array("ret"=>10));
    			}
    			$id=$result["CodeCheck"]["id"];
    			$this->CodeCheck->id=$id;
    			if(!$this->CodeCheck->saveField("status",1)){
    				$this->json_format(array("ret"=>11));
    			}
    		}
    		else
    		{
    			$this->json_format(array("ret"=>1));
    		}
    		

    		$code_id=intval($code_id);
    		//如果发送过 直接发送给用户
    		$result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
    		if($result){
    			$code=$result["Phone"]["code"];
    			$this->json_format(array("ret"=>8,"code"=>$code));
    		}
    		//根据传入的site_id 与code_id 发送兑换码
    		$result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
    		if(0 != $result["ret"]){
    			$this->json_format($result);
    		}
    		$code=$result["code"];
    		//执行发送操作
    		//$this->export(array($site_id,$code_id,$phone,$code));
    		$send_result=$this->send_message($site_id,$code_id,$phone,$code);
    		if($send_result){
    			$data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
    			$this->Phone->saveData($data);
    			$this->json_format(array("ret"=>0));
    		}else{
    			$this->json_format(array("ret"=>5));
    		}
    	}catch (Exception $e){
    		$this->log("log_error",$e->getMessage());
    		$this->json_format(array("ret"=>7));
    	}
    	 
    }

    /**
     * 生成验证码(图片或者短信)
     */
    public function get_verify_code()
    {
    	$this->layout="";
    	$this->autoRender=false;
    	if($this->request->is("post"))
    	{
    		if(strcasecmp($this->request->data['mode'],'img') == 0)
    		{
	    		$charset='123456780abcdefghijklmnopqrstuvwxyz';
	    		$charnum=intval($this->request->data['charnum']) <= 0 ? 4 : intval($this->request->data['charnum']);
	    		$imagewidth=intval($this->request->data['width']) <= 0 ? 200 : intval($this->request->data['width']);
	    		$imageheight=intval($this->request->data['height']) <= 0 ? 50 : intval($this->request->data['height']);
	    		$image = imagecreatetruecolor($imagewidth, $imageheight);
	    
	    		$bg = imagecolorallocate($image, mt_rand(220, 255), mt_rand(220, 255), mt_rand(220, 255));
	    
	    		imagefilledrectangle($image, 0, 0, $imagewidth - 1, $imageheight - 1, $bg);
	    
	    		for($i = 0; $i < 150; $i++)
	    		{
	    			$color = imagecolorallocate($image, mt_rand(150, 200),  mt_rand(150, 200),  mt_rand(150, 200));
	    			imagesetpixel($image, mt_rand(5, $imagewidth - 10), mt_rand(5, $imageheight - 3), $color);
	    		}
	    
	    		for($i = 0; $i < 10; $i++)
	    		{
	    			$color = imagecolorallocate($image, mt_rand(150, 220), mt_rand(150, 220), mt_rand(150, 220));
	    			imagearc($image, mt_rand(-10, $imagewidth), mt_rand(-10, $imageheight), mt_rand(30, 300), mt_rand(20, 200), 55, 44, $color);
	    		}
	    
	    		$border = imagecolorallocate($image, mt_rand(0, 50), mt_rand(0, 50), mt_rand(0, 50));
	    		imagerectangle($image, 0, 0, $imagewidth - 1, $imageheight - 1, $border);
	    
	    		for($i = 0; $i < $charnum; $i++)
	    		{
	    			$captcha .= $charset{mt_rand(0, strlen($charset) - 1)};
	    		}
	    		$captcha=strtoupper($captcha);
	    
	    		$charWidth=10;
	    		$charSize=20;
	    		for($i = 0; $i < strlen($captcha); $i++)
	    		{
	    			$color = imagecolorallocate($image, 0,0,0);//mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
	    			$x = floor(($imagewidth - 10)/$charnum);
	    			$x = $x*$i + floor(($x-$charWidth)/2) + 5;
	    			$y = mt_rand(32, 16+$imageheight/2);
	    			imagettftext($image, $charSize, 0, $x,$y,$color,getcwd().DS."simhei.ttf",$captcha{$i});
	    			// ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )

	    			//imagechar($image, $font, $x, $y, $captcha{$i}, $color);
	    		}
	    		$this->Session->write('captcha',$captcha);
	    
	    		$sid=session_id().time();
	    		imagepng($image,getcwd().DS.'cache'.DS.$sid.'.png' );
	    		
	    		$encode=base64_encode(FULL_BASE_URL.'/cache/'.$sid.'.png');
	    		$this->export(array("ret"=>0,"url"=>$encode));
    		}
    		else if(strcasecmp($this->request->data['mode'], 'sm') == 0)
    		{
    			// disable the sm verify code
    			$this->json_format(array("ret"=>1));
    			
    			if(empty($this->request->data["phone"])){
    				$this->json_format(array("ret"=>1));
    			}
    			$site_id=$this->site_id;
    			$phone=$this->request->data["phone"];
    			
    			$key='checkcode_'.$phone;
    			if($this->Redis->exists($key))
    			{
    				$this->json_format(array("ret"=>12));
    			}
    			
    			$res=$this->CodeDetail->query("select count(*) as c from code_detail where site_id=".$site_id." and status=0");
    			$leftcodecount=intval($res[0][0]['c']);
    			if($leftcodecount <= 0)
    			{
    				$this->json_format(array("ret"=>4));
    			}
    			
    			$type=intval($this->request->data["type"]);
    			$charnum=intval($this->request->data['charnum']) <= 0 ? 4 : intval($this->request->data['charnum']);
    			$tel_result=preg_match("/1[3,4,5,8]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
    			if($tel_result == 0){
    				$this->json_format(array("ret"=>3));
    			}
    			//每人发送限制
    			$conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"status"=>0));
    			$count=$this->CodeCheck->find("count",$conditions);
    			if($count >= 5){
    				$this->json_format(array("ret"=>9));
    			}
    			$code=rand(pow(10,$charnum-1),pow(10,$charnum)-1);
    			$content="你的校验码是:{$code}";
    			$result=$this->send_phone($content,$phone);
    			if($result){
    				$data=array("site_id"=>$site_id,"phone"=>$phone,"code"=>$code,"type"=>$type);
    				$this->CodeCheck->save($data);
    				$this->Redis->set($key,'1',60);
    				$this->json_format(array("ret"=>0));
    			}else{
    				$this->json_format(array("ret"=>5));
    			}
    		}
    	}
    	else
    	{
    		$this->export(array("ret"=>1));
    	}
     
     
    }
   
    
}
