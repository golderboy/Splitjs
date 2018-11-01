<?php
use yii\helpers\Html;

$this->registerJsFile('@web/../modules_pm/eform/assets/split.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerCss("
.split {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
            overflow-y: auto;
            overflow-x: hidden;
  }

.gutter {
    background-color: #eee;

    background-repeat: no-repeat;
    background-position: 50%;
}

.split, .gutter.gutter-horizontal {
    float: left;
}
.gutter.gutter-horizontal {
    cursor: ew-resize;
}
.flex {
    display: flex;
    flex-direction: row;
}
.gutter.gutter-horizontal {
    cursor: ew-resize;
}

.tab-content{
    margin:5px; 
    padding:5px;
}
");

///////////////
$this->registerJs("
Split(['#main', '#custom'], {
    sizes: [80,20],
    minSize: [300,0],
    expanedToMin: true,
},


)
");
?>

<div class="flex">
    <div class="split" id="main">
      ...
      ...
      ...
    </div>
    <div class="split" id="custom">
       ...
      ...
      ... 
    </div>
 
</div>
