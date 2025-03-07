<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!-- 关闭百度转码 -->
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
	<?php //设置 favicon
    if($this->options->favicon){ ?>
    <link rel="icon" type="image/x-icon" href="<?php $this->options->favicon(); ?>">
    <?php } 
    //输出网站标题、css 引用和其他 head 内容 ?>
    <title><?php Matcha::title($this); ?> - 眩しさだけは、忘れなかった。</title>
    <?php Matcha::head(); $this->header(); ?>

    <style>
        :root {
            --theme-color: <?php echo Matcha::getThemeColor(); ?>;
        }
    </style>
</head>