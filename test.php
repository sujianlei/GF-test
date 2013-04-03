<?php
$string = '"./1647/detail.html:<img src="?attachmentViewer&amp;file=bug.png">
./77/solution.html:<img src="?AttachmentViewer&amp;file=tn77fig1.png" alt="Server Storage Table" height="131" width="399">
./1360/solution.html:<img src="?attachmentViewer&amp;file=SecurityGroup.png">
./1360/solution.html:<img src="?attachmentViewer&amp;file=step2.png">
./1360/solution.html:<img src="?attachmentViewer&amp;file=RequestInstance.png">
./1360/solution.html:<img src="?attachmentViewer&amp;file=step4.png">
./1360/solution.html:<img src="?attachmentViewer&amp;file=step5.png">
./1360/solution.html:<img src="?attachmentViewer&amp;file=step6.png"></li>
./1787/problem.html:<img src="?attachmentViewer&amp;file=NoVT-xFeatures.png" height="427" width="500">
./1127/solution.html:<img src="?AttachmentViewer&amp;file=ClientClasstemp.png" alt="">
./1127/solution.html:<img src="?AttachmentViewer&amp;file=ViewMappingClasstmp.png" alt="">
./1069/solution.html:<li>Click on the "Insert Image" button in the editor menu: <img src="?attachmentViewer&amp;file=insertimage.png">, and select your image from the dropdown menu.
./1158/all.html:<img src="?attachmentViewer&amp;file=revgraphfull.png">
./1158/all.html:<img src="?attachmentViewer&amp;file=revgraphado.png">
./1417/detail.html:<img src="?AttachmentViewer&amp;file=01.png" alt="branch created">
./1417/detail.html:<img src="?AttachmentViewer&amp;file=02.png" alt="branch rebased">
./1417/detail.html:<img src="?AttachmentViewer&amp;file=03.png" alt="branch created and merged">
./1417/detail.html:<img src="?AttachmentViewer&amp;file=04.png" alt="branch and master rebased">
./1112/solution.html:Here is a sample script to automate an install of a custom tool under Windows: <a href="?attachmentViewer&amp;file=parseP4QT.py">parseP4QT.this is & asdf (fasdf)?";';
echo preg_replace("#(<img [^>]*|<a [^>]*)\?attachmentViewer&amp;file=([^>]*>)#i", "$1$2", $string);
