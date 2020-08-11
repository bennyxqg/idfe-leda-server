<?php
App::uses('AppModel', 'Model');
/**
 * 圣斗士活动
 *
 * @author jerry.hua
 */
class ActSds extends AppModel{
    public $useTable = 'act_sds';
    
//     // 字段验证
//     public $validate = array(
//         // 歌曲名
//         'name' => array(
//             'required' => true,
//             'message' => '名称不能为空'
//         ),
//         'phone' => array(
//             'rule' => array('custom', '/^1[0-9]{2}[0-9]{8}$/'), // 手机号
//             'message' => '手机号码格式不正确'
//         )
//     );
}
