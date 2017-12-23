<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 *
 * Chinese message token translations for the 'admin' sprinkle.
 *
 * @package userfrosting\i18n\zh_CN
 * @author @BruceGui (https://github.com/BruceGui)
 */

return [
    "ACTIVITY" => [
        1 => "活动",
        2 => "活动",

       "LAST" => "最后活动",
       "PAGE" => "用户活动列表",
       "TIME" => "活动时间"
    ],

    "ADMIN" => [
        "PANEL" => "控制台"
    ],

    "CACHE" => [
        "CLEAR"             => "清除缓存",
        "CLEAR_CONFIRM"     => "你确定要清除此网站的缓存?",
        "CLEAR_CONFIRM_YES" => "是的, 清除缓存",
        "CLEARED"           => "缓存成功清除 !"
    ],

    "DASHBOARD"             => "仪表盘",
    "DELETE_MASTER"         => "你不能删除超级账户!",
    "DELETION_SUCCESSFUL"   => "用户 <strong>{{username}}</strong> 删除成功.",
    "DETAILS_UPDATED"       => "用户 <strong>{{username}}</strong> 更新成功",
    "DISABLE_MASTER"        => "你不能禁用超级用户!",
    "DISABLE_SELF"          => "不能禁用你自己的账户!",
    "DISABLE_SUCCESSFUL"    => "用户名<strong>{{username}}</strong> 成功禁用.",

    "ENABLE_SUCCESSFUL" => "用户名 <strong>{{username}}</strong> 启用成功.",

    "GROUP" => [
        1 => "组",
        2 => "组",

        "CREATE"        => "新建组",
        "CREATION_SUCCESSFUL" => "成功创建组 <strong>{{name}}</strong>",
        "DELETE"            => "删除组",
        "DELETE_CONFIRM"    => "确定要删除组 <strong>{{name}}</strong>?",
        "DELETE_DEFAULT"    => "你无法删除组 <strong>{{name}}</strong> 因为这是新注册用户的默认组.",
        "DELETE_YES"        => "是, 删除组",
        "DELETION_SUCCESSFUL" => "成功删除组<strong>{{name}}</strong>",
        "EDIT"          => "编辑组",
        "ICON"          => "组图标",
        "ICON_EXPLAIN"  => "组成员图标",
        "INFO_PAGE"     => "{{name}} 组的信息页",
        "NAME"          => "组名",
        "NAME_EXPLAIN"  => "请为组取一个名字",
        "NOT_EMPTY"     => "你不能这样做，因为还有用户在组 <strong>{{name}}</strong>.",
        "PAGE_DESCRIPTION" => "网站组列表.  请管理编辑和删除组的工具.",
        "SUMMARY"       => "组简介",
        "UPDATE"        => "组<strong>{{name}}</strong>的信息已经更新"
    ],

    "MANUALLY_ACTIVATED"    => "{{username}} 账户已手动激活",
    "MASTER_ACCOUNT_EXISTS" => "超级账户已存在!",
    "MIGRATION" => [
        "REQUIRED"          => "数据库需要更新"
    ],

    "PERMISSION" => [
        1 => "权限",
        2 => "权限",

        "ASSIGN_NEW"        => "分配新权限",
        "HOOK_CONDITION"    => "Hook/条件",
        "ID"                => "权限ID",
        "INFO_PAGE"         => "用户 '{{name}}' 的权限页",
        "MANAGE"            => "管理权限",
        "NOTE_READ_ONLY"    => "<strong>请注意:</strong> 权限是 \"part of the code\" 不能通过界面修改.  如果要添加、删除、编辑权限, 网站维护者需要 <a href=\"https://learn.userfrosting.com/database/extending-the-database\" target=\"about:_blank\">进行数据库迁移.</a>",
        "PAGE_DESCRIPTION"  => "网站的权限列表.  提供编辑和删除权限的工具.",
        "SUMMARY"           => "权限概要",
        "UPDATE"            => "更新权限",
        "VIA_ROLES"         => "权限通过用户了"
    ],

    "ROLE" => [
        1 => "角色",
        2 => "角色",

        "ASSIGN_NEW"    => "分配角色",
        "CREATE"        => "创建角色",
        "CREATION_SUCCESSFUL" => "成功创建角色 <strong>{{name}}</strong>",
        "DELETE"            => "删除角色",
        "DELETE_CONFIRM"    => "你确定要删除角色 <strong>{{name}}</strong>?",
        "DELETE_DEFAULT"    => "你无法删除角色<strong>{{name}}</strong> 因为这是新注册用户的默认角色.",
        "DELETE_YES"        => "是, 删除角色",
        "DELETION_SUCCESSFUL" => "成功删除角色 <strong>{{name}}</strong>",
        "EDIT"          => "编辑角色",
        "HAS_USERS"     => "你不能这样做，因为还有用户拥有角色 <strong>{{name}}</strong>.",
        "INFO_PAGE"     => "{{name}}角色的权限页",
        "MANAGE"        => "管理角色",
        "NAME"          => "名字",
        "NAME_EXPLAIN"  => "请为角色输入名字",
        "NAME_IN_USE"   => "角色名 <strong>{{name}}</strong> 以存在",
        "PAGE_DESCRIPTION"  => "网站的角色列表. 请管理编辑和删除角色的工具.",
        "PERMISSIONS_UPDATED" => "角色 <strong>{{name}}</strong> 的权限更新成功",
        "SUMMARY"       => "角色概要",
        "UPDATED"       => "角色 <strong>{{name}}</strong> 更新成功"
    ],

    "SYSTEM_INFO" => [
        "@TRANSLATION"  => "系统信息",

        "DB_NAME"       => "数据库",
        "DB_VERSION"    => "数据库版本",
        "DIRECTORY"     => "工程目录",
        "PHP_VERSION"   => "PHP 版本",
        "SERVER"        => "网站服务器",
        "SPRINKLES"     => "加载的 sprinkles",
        "UF_VERSION"    => "UserFrosting 版本",
        "URL"           => "网站根目录"
    ],

    "TOGGLE_COLUMNS" => "加载列",

    "USER" => [
        1 => "用户",
        2 => "用户",

        "ADMIN" => [
            "CHANGE_PASSWORD" => "修改用户密码",
            "SEND_PASSWORD_LINK" => "发送允许该用户修改密码的链接",
            "SET_PASSWORD" => "设置用户的密码为"
        ],

        "ACTIVATE"          => "激活用户",
        "CREATE"            => "新建用户",
        "CREATED"           => "用户 <strong>{{username}}</strong> 新建成功",
        "DELETE"            => "删除用户",
        "DELETE_CONFIRM"    => "确定要删除用户 <strong>{{name}}</strong>?",
        "DELETE_YES"        => "是, 删除用户",
        "DISABLE"           => "禁用用户",
        "EDIT"              => "编辑用户",
        "ENABLE"            => "启用用户",
        "INFO_PAGE"         => "用户 {{name}} 的信息页",
        "LATEST"            => "最新用户",
        "PAGE_DESCRIPTION"  => "网站用户列表.  提供编辑用户信息, 手动激活用户, 启用/禁用 用户等工具.",
        "SUMMARY"           => "账户概要",
        "VIEW_ALL"          => "浏览所有用户",
        "WITH_PERMISSION"   => "有此权限的用户"
    ],
    "X_USER" => [
        0 => "没有用户",
        1 => "{{plural}} 用户",
        2 => "{{plural}} 用户"
    ]
];
