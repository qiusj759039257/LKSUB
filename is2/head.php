<?php

$src = file_get_contents($argv[1]);
$content = strstr($src, "[Events]");

$header = <<<HEADER
[Script Info]
Title: Default Aegisub file
ScriptType: v4.00+
WrapStyle: 0
ScaledBorderAndShadow: no
PlayResX: 640
PlayResY: 360

[V4+ Styles]
Format: Name, Fontname, Fontsize, PrimaryColour, SecondaryColour, OutlineColour, BackColour, Bold, Italic, Underline, StrikeOut, ScaleX, ScaleY, Spacing, Angle, BorderStyle, Outline, Shadow, Alignment, MarginL, MarginR, MarginV, Encoding
Style: Default,方正准圆_GBK,24,&H00FFFFFF,&H000000FF,&H00464646,&H00000000,0,0,0,0,100,100,0,0,1,2,0,2,10,10,10,1
Style: OPCN,方正准圆_GBK,22,&H00FFFFFF,&H000000FF,&H00464646,&H00000000,0,0,0,0,100,100,0,0,1,2,0,3,10,10,10,1
Style: OPJP,DFGMaruGothic-Bd,18,&H00FFFFFF,&H000000FF,&H00464646,&H00000000,0,0,0,0,100,100,0,0,1,2,0,7,10,10,10,1
Style: Staff,方正黑体_GBK,20,&H00FFFFFF,&H000000FF,&H00000000,&H00000000,-1,0,0,0,100,100,0,0,1,2,0,2,10,10,10,1


HEADER;

file_put_contents($argv[1] . "mod", $header.$content);