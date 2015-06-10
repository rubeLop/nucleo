<!DOCTYPE html> 
<html> 
<head> 
{include file="1-default-meta.tpl"}
{include file="2-default-css.tpl"} 
{include file="3-default-js.tpl"}
<title>{$_layoutParams.configs.app_title}</title> 
</head> 
<body role="document">
    {include file="header.tpl"}
    <div class="container theme-showcase" role="main">
      {*}{include file="{$DOC_ROOT}/template/{$pageTpl}.tpl"}{*}
      {include file=$_contenido}
    </div>
    
    <div class="container theme-showcase" role="main">
        <div id="stLoader" class="stHidden"></div>
    </div>
    
    <div class="container theme-showcase" role="main">
      <div id="txtErrMsg"></div>
    </div>
    
    <div id="contenido" class="container theme-showcase" role="main"></div>
    
    {include file=$_layoutParams.route_modal}
    
</body> 
</html>