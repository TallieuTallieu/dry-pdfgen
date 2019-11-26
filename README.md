# dry-pdfgen
## Generate pdf's

#### Installation
```ssh
composer require reinvanoyen/dry-pdfgen
```

#### Basic usage

```php
<?php

$pdfGenerator = $container->get(PdfGenerator::class);
$pdfGenerator->fromHtml('<strong>This is an example</strong>');

// Stream the pdf
$pdfGenerator->stream();
// or...
// ...use the pdf file contents
$contents = $pdfGenerator->output();
```
