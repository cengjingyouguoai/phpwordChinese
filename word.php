<?php
header('content-type:text/html;charset=utf-8;');

require_once 'PHPWord/PHPWord.php';
// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();
$st = '测试中文是否支持';
$section->addText(iconv('utf-8','GB2312//IGNORE',$st));
// Add text elements
// Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('Text.docx');
