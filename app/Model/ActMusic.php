<?php
App::uses('AppModel', 'Model');
/**
 * 乐舞 主题曲征名活动
 *
 * @author jerry.hua
 */
class ActMusic extends AppModel{
    public $useTable = 'act_music';
    
    // 字段验证
    public $validate = array(
        // 歌曲名
        'name' => array(
            'rule' => array('custom', '/^[\x{4e00}-\x{9fa5}\-0-9a-z A-Z\'《》<>]{1,20}$/u'), // 歌曲名,
            'message' => '歌曲名不能为空'
        ),
        'phone' => array(
            'rule' => array('custom', '/^1[0-9]{2}[0-9]{8}$/'), // 手机号
            'message' => '手机号码格式不正确'
        )
    );
}
