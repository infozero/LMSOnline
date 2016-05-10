<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 资源的状态枚举，在某些场合不是所有的状态都需要用上
 * 资源的状态需要位运算组合使用的，如 正常可用且已发布的，用 1 | 8 = 9 表示。
 * @author infozero
 */
final class Resource_Status {

    // 初始状态
    const UNKNOW = 0;
    // 可用
    const AVAILABLE = 1;
    // 停用
    const UNAVAILABLE = 2;
    // 未发布
    const UNPUBLISHED = 4;
    // 已发布
    const PUBLISHED = 8;

}