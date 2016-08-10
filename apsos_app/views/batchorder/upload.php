<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
$this->load->helper('download');
$curr_error = array('0001' => '上传的excel文件未发现正确的数据');
?>
<div class="container">
    <div>

        <hr class="space">
        <hr class="space">

        <div class="step">
            <div class="step-bar active" style="width: 33.3%;">
                <span class="step-point">1</span><span class="step-text">第一步：上传excel</span></span>

            </div>
            <div class="step-bar" style="width: 33.3%;">
                <span class="step-point">2</span><span class="step-text">第二步：核对所购产品</span>
            </div>
            <div class="step-bar" style="width: 33.3%;">
                <span class="step-point">3</span><span class="step-text">第三步：完成下单</span>
            </div>
        </div>

        <?php

        if (!empty($ret_error)) :?>

            <div class="alert alert-red">
                <span class="close rotate-hover"></span><strong> <?php echo $ret_error; ?></strong>
            </div>
        <?php endif; ?>

        <div>
            <p>1、如果没有模板，请下载自助下单模板文件：<a class="text-main icon-download" href="<?php echo DOMAIN_BASE_URL; ?>批量下单模板.xls">批量下单模板.xls</a>

            </p>

            <p>2、请选择上传的excel
                <?php echo form_open_multipart('batchorder/doUpload'); ?>
                <input size="100" type="file" name="product_list_file"/>
                <button class="button bg-main button-small icon-upload"> 上传</button>
                </form>
            </p>
        </div>
    </div>
</div>