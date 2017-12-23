<?php

namespace addons\example;

use app\common\library\Menu;
use think\Addons;

/**
 * Example
 */
class Example extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        $menu = [
            [
                'name'    => 'example',
                'title'   => '示例管理',
                'icon'    => 'fa fa-magic',
                'sublist' => [
                    [
                        'name'    => 'example/bootstraptable',
                        'title'   => '表格完整示例',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/bootstraptable/index', 'title' => '查看'],
                            ['name' => 'example/bootstraptable/detail', 'title' => '详情'],
                            ['name' => 'example/bootstraptable/change', 'title' => '变更'],
                            ['name' => 'example/bootstraptable/del', 'title' => '删除'],
                            ['name' => 'example/bootstraptable/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/colorbadge',
                        'title'   => '彩色角标',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/colorbadge/index', 'title' => '查看'],
                            ['name' => 'example/colorbadge/del', 'title' => '删除'],
                            ['name' => 'example/colorbadge/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/controllerjump',
                        'title'   => '控制器间跳转',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/controllerjump/index', 'title' => '查看'],
                            ['name' => 'example/controllerjump/del', 'title' => '删除'],
                            ['name' => 'example/controllerjump/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/cxselect',
                        'title'   => '多级联动',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/cxselect/index', 'title' => '查看'],
                            ['name' => 'example/cxselect/del', 'title' => '删除'],
                            ['name' => 'example/cxselect/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/multitable',
                        'title'   => '多表格示例',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/multitable/index', 'title' => '查看'],
                            ['name' => 'example/multitable/del', 'title' => '删除'],
                            ['name' => 'example/multitable/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/relationmodel',
                        'title'   => '多模型示例',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/relationmodel/index', 'title' => '查看'],
                            ['name' => 'example/relationmodel/del', 'title' => '删除'],
                            ['name' => 'example/relationmodel/multi', 'title' => '批量更新'],
                        ]
                    ],
                    [
                        'name'    => 'example/tabletemplate',
                        'title'   => '表格模板示例',
                        'icon'   => 'fa fa-table',
                        'sublist' => [
                            ['name' => 'example/tabletemplate/index', 'title' => '查看'],
                            ['name' => 'example/tabletemplate/detail', 'title' => '详情'],
                            ['name' => 'example/tabletemplate/del', 'title' => '删除'],
                            ['name' => 'example/tabletemplate/multi', 'title' => '批量更新'],
                        ]
                    ]
                ]
            ]
        ];
        Menu::create($menu);
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        Menu::delete('example');
        return true;
    }

}
