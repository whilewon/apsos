<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-12
 * Time: 上午5:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="tab border-main tab-small">
    <div class="tab-head">
        <strong>产品分类</strong>
        <!--span class="tab-more"><a href="#">更多</a> </span>-->

        <ul class="tab-nav">
            <?php foreach ($category1 as $item): ?>
                <li class="" id="tab-nav-id">
                    <a href="#tab-<?php echo $item['Id'];?>"><?php echo iconv("GB2312","UTF-8",$item['Name']);?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="tab-body tab-body-bordered hidden" id="tab-body-id">
        <?php foreach ($category1 as $item): ?>
            <div class="tab-panel" id="tab-<?php echo $item['Id'];?>">
                <ul class="nav nav-sitemap">
                    <?php for($i=0;$i<6;$i++):?>
                        <li>
                            <a href="#">车镜</a>
                            <ul>
                                <li>
                                    <a href="#" name="apsos_category1">后视镜</a>
                                </li>
                                <li>
                                    <a href="#" name="apsos_category1">遮阳板</a>
                                </li>
                            </ul>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>
